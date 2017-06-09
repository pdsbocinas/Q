var gulp = require('gulp');
var merge = require('merge-stream');
var sass = require('gulp-sass');
var sourcemaps = require('gulp-sourcemaps');
var cssnano = require('gulp-cssnano');
var rename = require('gulp-rename');
var clone = require('gulp-clone');
var gutil = require('gulp-util');
var gulpSequence = require('gulp-sequence');
var concat = require('gulp-concat');
var uglify = require('gulp-uglify');
var urlAdjuster = require('gulp-css-url-adjuster');
var parameters = require('read-yaml').sync('./app/config/parameters.yml').parameters.gulp;

// Variables de directorios
var bootstrapSrcDir = 'node_modules/bootstrap-sass/assets/stylesheets/bootstrap';
var fontAwesomeDir = 'node_modules/font-awesome';
var slickCarouselDir = 'node_modules/slick-carousel/slick';
var compileScssdestinationDir = 'web/css';

//var baseCdnUrl = '///st.qubit.tv/assets/public/qubit';
var baseCdnUrl = parameters.cdn_url;

gulp.task('copy-css', function() {
    // Toma todos los archivos .css recursivamente de las dependencias
    // que traemos con npm
    return gulp.src('./node_modules/**/*.css')
        // Copia todos esos archivos en esta ruta
        .pipe(gulp.dest('./web/css/vendor'));
});

gulp.task('copy-js', function() {
    var jsFilesDir = '';
    var jsBundleFile = '';
    var vendorDir = '';
    if ('qubit' === parameters.owner) {
        jsFilesDir = './src/VOD/Qubit'+capitalizeFirstLetter(parameters.operator)+'Bundle/Resources/assets/**/*.js';
        jsBundleFile = 'Qubit'+capitalizeFirstLetter(parameters.operator)+'Bundle.min.js';
    } else if ('personal' === parameters.owner || 'other' === parameters.owner) {
        jsFilesDir = './src/VOD/'+capitalizeFirstLetter(parameters.operator)+'Bundle/Resources/assets/**/*.js';
        jsBundleFile = capitalizeFirstLetter(parameters.operator)+'Bundle.min.js';
    } 

    if (parameters.type === 'base') {
        vendorDir = 'src/VOD/BaseBundle/Resources/assets';
    } else if(parameters.type === 'operator') {
        vendorDir = 'vendor/vod/base-bundle/Resources/assets';
    }

    if ('' == jsFilesDir || '' == jsBundleFile || '' == vendorDir) {
        console.log('Error en los directorios para los archivos JS verificar');
        return;
    }

    // toma todos los archivos .js que estan en el directorio
    var appJs = gulp.src([vendorDir + '/js/app/**/*.js', jsFilesDir])
        // Los mete en este archivo
        .pipe(concat('app.min.js'))
        // Si está en producción lo uglifica 
        .pipe(parameters.env === 'prod' ? uglify() : gutil.noop());

    var appMobileJs = gulp.src([
            vendorDir + '/js/mobile/**/*.js',
            jsFilesDir,
            vendorDir + '/js/app/jquery-plugins/payment/**/*.js',
        ])
        .pipe(concat('app-mobile.min.js'))
        .pipe(parameters.env === 'prod' ? uglify() : gutil.noop());

    // Integración shaka player
    var shakaPlayerJs = gulp.src([vendorDir + '/js/shaka-player/shaka.js'])
        .pipe(concat('shaka-player.min.js'))
        .pipe(parameters.env === 'prod' ? uglify() : gutil.noop());
    var viblastPlayer = gulp.src(['' +
        './node_modules/qubit-viblast-videojs/lib/videojs.ga.js',
            './node_modules/qubit-viblast-videojs/lib/videojs-timer-event.js',
            './node_modules/qubit-viblast-videojs/lib/viblast.js'])
        .pipe(concat('viblast-vod-player.js'))
        .pipe(parameters.env === 'prod' ? uglify() : gutil.noop());
    var hlsPlayer = gulp.src([vendorDir + '/js/hls-player/hls.js'])
        .pipe(concat('hls-player.min.js'))
        .pipe(parameters.env === 'prod' ? uglify() : gutil.noop());

    var vodPlayerJs = gulp.src([vendorDir + '/js/vod-player/player.js'])
        .pipe(concat('player.min.js'))
        .pipe(parameters.env === 'prod' ? uglify() : gutil.noop());

    var vodFfPlayerJs = gulp.src([vendorDir + '/js/vod-player/ff-player.js'])
        .pipe(concat('ff-player.min.js'))
        .pipe(parameters.env === 'prod' ? uglify() : gutil.noop());

    var youboraJs = gulp.src([vendorDir + '/js/lib/youbora.js'])
        .pipe(concat('youbora.min.js'))
        .pipe(parameters.env === 'prod' ? uglify() : gutil.noop());

    var libs = gulp.src([
        vendorDir + '/js/lib/jquery.mask.min.js'
    ]).pipe(gulp.dest('./web/js'));

    var globalCollect = gulp.src([
            './node_modules/connect-sdk-client-js/dist/gcsdk.min.js',
            './node_modules/connect-sdk-client-js/dist/example-app/global/js/vendor/jquery.formatter.min.js',
            vendorDir + '/js/global-collect/GlobalCollectPayments.js',
        ])
        .pipe(parameters.env === 'prod' ? uglify() : gutil.noop())
        .pipe(gulp.dest('./web/js/global-collect'));

    var vendorJs = gulp.src([
            './node_modules/index.js',
            './node_modules/bootstrap/dist/js/bootstrap.js',
            './node_modules/**/classie.js',
            './node_modules/**/slick.js',
            './node_modules/**/jquery.webui-popover.js',
            './node_modules/**/jquery.validate.js',
            './node_modules/**/additional-methods.js',
            './node_modules/kizzy/kizzy.js',
            './node_modules/paginationjs/dist/pagination.min.js'
        ])
        .pipe(concat('vendor.min.js'))
        .pipe(parameters.env === 'prod' ? uglify() : gutil.noop());

    var operatorJs = gulp.src([]);
    if(parameters.type === 'operator') {
        operatorJs = gulp.src([jsFilesDir])
            .pipe(concat(jsBundleFile))
            .pipe(parameters.env === 'prod' ? uglify() : gutil.noop());
    }

    return merge(appJs, appMobileJs, vendorJs, operatorJs, shakaPlayerJs, viblastPlayer, hlsPlayer, vodPlayerJs, vodFfPlayerJs, youboraJs)
        .pipe(gulp.dest('./web/js'));
});

/**
 * Copia los archivos vendor necesarios
 * @returns {*}
 */
gulp.task('copy-vendor', function() {
    if (parameters.type === 'base') {
        var vendorDir = 'src/VOD/BaseBundle/Resources/assets/vod-base-styles/vendor';
    } else if(parameters.type === 'operator') {
        var vendorDir = 'vendor/vod/base-bundle/Resources/assets/vod-base-styles/vendor';
    }

    var bootstrap = gulp.src(bootstrapSrcDir + '/**/*.scss')
        .pipe(gulp.dest(vendorDir + '/bootstrap'));

    var fontAwesome = gulp.src(fontAwesomeDir + '/scss/*.scss')
        .pipe(gulp.dest(vendorDir + '/font-awesome/scss'));

    var fontAwesomeFonts = gulp.src(fontAwesomeDir + '/fonts/**/*.*')
        .pipe(gulp.dest(vendorDir + '/font-awesome/fonts'));

    var slickCarousel = gulp.src([slickCarouselDir + '/slick.scss', slickCarouselDir + '/slick-theme.scss'])
        .pipe(gulp.dest(vendorDir + '/slick-carousel'));

    return merge(bootstrap, fontAwesome, fontAwesomeFonts, slickCarousel);
}); 

/**
 * Compila scss definidos en las variables y los copia en la carpeta de destino.
 * Opcional: Crea sourcemaps y lo minifica
 * @returns {*}
 */
gulp.task('compile-scss', function() {
    var scssSourceFile = '';
    if ('qubit' === parameters.owner) {
        scssSourceFile = './src/VOD/Qubit'+capitalizeFirstLetter(parameters.operator)+'Bundle/Resources/scss/qubit-'+parameters.operator+'.scss';
    } else if ('personal' === parameters.owner) {
        scssSourceFile = './src/VOD/'+capitalizeFirstLetter(parameters.operator)+'Bundle/Resources/scss/personal-'+parameters.operator+'.scss';
    } else if ('other' === parameters.owner) {
        scssSourceFile = './src/VOD/'+capitalizeFirstLetter(parameters.operator)+'Bundle/Resources/scss/'+parameters.operator+'.scss';
    }

    if (parameters.type === 'base') {
        var cdnUrl = baseCdnUrl;

        // Si tiene itv hace lo mismo pero con itv
        if (parameters.itv) {
            var itv = gulp
                .src('./src/VOD/BaseBundle/Resources/assets/vod-base-styles/vod_itv.scss')
                .pipe(sourcemaps.init())
                // Ccompila sass
                .pipe(sass())
                .pipe(rename('itv.css'))
                .pipe(urlAdjuster({ replace:  ['application.cdn_url', cdnUrl], }))
                .pipe(sourcemaps.write('.'))
                .pipe(gulp.dest(compileScssdestinationDir));
        }

        return gulp
            .src('./src/VOD/BaseBundle/Resources/assets/vod-base-styles/vod_app.scss')
            .pipe(sourcemaps.init())
            .pipe(sass())
            .pipe(rename('app.css'))
            .pipe(urlAdjuster({ replace:  ['application.cdn_url', cdnUrl], }))
            .pipe(sourcemaps.write('.'))
            .pipe(gulp.dest(compileScssdestinationDir));

    } else if(parameters.type === 'operator') {
        var cdnUrl = baseCdnUrl;
        if (parameters.itv) {
            var itv = gulp
                .src('./vendor/vod/itv-base-bundle/Resources/assets/vod-base-styles/vod_itv.scss')
                .pipe(sourcemaps.init())
                .pipe(sass())
                .pipe(rename('itv.css'))
                .pipe(urlAdjuster({replace: ['application.cdn_url', cdnUrl],}))
                .pipe(sourcemaps.write('.'))
                .pipe(gulp.dest(compileScssdestinationDir));
        }

        return gulp
            .src(scssSourceFile)
            .pipe(sourcemaps.init())
            .pipe(sass({
                includePaths: [ // Esto es muy importante para poder sobreescribir estílos
                    './vendor/vod/base-bundle/Resources/assets/vod-base-styles/'
                ]
            }))
            .pipe(urlAdjuster({ replace:  ['application.cdn_url', cdnUrl] }))
            .pipe(sourcemaps.write('.'))
            .pipe(gulp.dest('./web/css'));
    }
});

// Compilo los estilos del player
gulp.task('compile-scss-player', function(){
    var cdnUrl = baseCdnUrl;
    var scssFiles = '';

    if (parameters.type === 'base') {
        scssFiles = './src/VOD/BaseBundle/Resources/assets/vod-base-styles/player/vod_player.scss';
    } else if (parameters.type === 'operator') {
        scssFiles = './vendor/vod/base-bundle/Resources/assets/vod-base-styles/player/vod_player.scss';
    }


    gulp.src(scssFiles)
        .pipe(sourcemaps.init())
        // Ccompila sass
        .pipe(sass())
        .pipe(rename('player.css'))
        .pipe(urlAdjuster({ replace:  ['application.cdn_url', cdnUrl], }))
        .pipe(sourcemaps.write('.'))
        .pipe(gulp.dest(compileScssdestinationDir));
});

function capitalizeFirstLetter(string) {
    return string.charAt(0).toUpperCase() + string.slice(1);
}

gulp.task('watch-files', function(){
    if (parameters.type === 'base') {
        gulp.watch('./src/VOD/BaseBundle/Resources/assets/vod-base-styles/**/*.scss', ['compile-scss'])
    } else if(parameters.type === 'operator') {
        gulp.watch('./src/VOD/Qubit'+capitalizeFirstLetter(parameters.operator)+'Bundle/Resources/scss/**/*.scss', ['compile-scss']);
    } 
});

gulp.task('watch', gulpSequence('copy-vendor', 'compile-scss', 'compile-scss-player', 'copy-css', 'copy-js', 'watch-files'));
gulp.task('default', gulpSequence('copy-vendor', 'compile-scss', 'compile-scss-player', 'copy-css', 'copy-js'));