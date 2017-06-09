<?php
namespace Deployer;

require 'recipe/symfony.php';

// Configuración y variables
set('repository', 'git@git.qubit.tv:web/qubit-argentina.git');
set('writable_use_sudo', true);
set('writable_mode', 'chmod');
set('branch', 'develop');
set('current_symlink_path', '{{release_path}}/web'); // A dónde vamos a apuntar el symlink current final
set('composer_options', '{{composer_action}} --verbose --prefer-dist --no-progress --no-interaction --optimize-autoloader'); // Quitamos el --no-dev sino no podemos usar la consola :/
// Add, NO sobreescribe, agrega a lo que ya está definido
add('shared_files', []);
add('shared_dirs', []);
add('writable_dirs', []);

// Servidores
server('staging-front', '192.168.10.36')
    ->user('www-data')
    ->password('Jagyoidays2')
    ->set('deploy_path', '/var/www/qubit-argentina')
    ->set('env_vars', 'SYMFONY_ENV={{env}} ASSETS_VERSION={{release_name}} DATABASE_HOST=192.168.10.32 DATABASE_USER=qubit HTTP_SITE_PROTOCOL=http \
    API_URL=http://servicesv5.qbst.com.ar/index.php/v2/json \
    CDN_URL=https://stcloudfront.qubit.tv/assets/public/qubit/qubit-ar/staging FACEBOOK_APP_ID=894540993974435 \
    GOOGLE_TAG_MANAGER=GTM-PW9GM9 SHAKA_JS_URL=//players-stage.qubit.tv/all/1.8.0/dist/shaka.vod.bundle.js \
    HLS_JS_URL=//players-stage.qubit.tv/all/1.8.0/dist/hls.vod.bundle.js PLAYER_CSS_URL=//players-stage.qubit.tv/all/1.8.0/styles/video-js.css \
    QUBIT_CSS_URL=//players-stage.qubit.tv/all/1.8.0/styles/videojs-qubit.css THUMBNAILS_CSS_URL=//players-stage.qubit.tv/all/1.8.0/styles/videojs-thumbnails.css \
    HLS_JS_IE=//players-stage.qubit.tv/all/1.6.2-ie/dist/hls.vod.bundle.js \
    MEMCACHE_DEFAULT_POOL_HOST=localhost MEMCACHE_DEFAULT_POOL_PORT=11211 \
    MEMCACHE_SESSION_POOL_HOST=localhost MEMCACHE_SESSION_POOL_PORT=11212 LOGGLY_TOKEN=63756d0d-1ca9-4738-8d5e-791891e087c0 \
    YOUBORA_ACCOUNT_ID=qubitdev GLOBAL_COLLECT_API_KEY=0943349cb12d0606 GLOBAL_COLLECT_SECRET_API_KEY=gEqeIu23vHFHfsW75fxU/aQGI3nWluvXzTMzb+br9Lk= \
    GLOBAL_COLLECT_BASE_URL=https://api-preprod.globalcollect.com GLOBAL_COLLECT_ENVIRONMENT=PREPROD')
    ->set('env', 'prod');

server('preprod-front', '192.168.10.37')
    ->user('www-data')
    ->password('Jagyoidays2')
    ->set('deploy_path', '/var/www/qubit-argentina')
    ->set('env_vars', 'SYMFONY_ENV={{env}} ASSETS_VERSION={{release_name}} DATABASE_HOST=192.168.10.31 DATABASE_USER=qubit HTTP_SITE_PROTOCOL=http \
    API_URL=http://servicesv5.preprod.qubit.tv/index.php/v2/json \
    CDN_URL=https://stcloudfront.qubit.tv/assets/public/qubit/qubit-ar/preprod FACEBOOK_APP_ID=1673245649618806 \
    GOOGLE_TAG_MANAGER=GTM-PW9GM9 SHAKA_JS_URL=//players-preprod.qubit.tv/all/1.8.0/dist/shaka.vod.bundle.js \
    HLS_JS_URL=//players-preprod.qubit.tv/all/1.8.0/dist/hls.vod.bundle.js PLAYER_CSS_URL=//players-preprod.qubit.tv/all/1.8.0/styles/video-js.css \
    QUBIT_CSS_URL=//players-preprod.qubit.tv/all/1.8.0/styles/videojs-qubit.css THUMBNAILS_CSS_URL=//players-preprod.qubit.tv/all/1.8.0/styles/videojs-thumbnails.css \
    HLS_JS_IE=//players-preprod.qubit.tv/all/1.6.2-ie/dist/hls.vod.bundle.js \
    MEMCACHE_DEFAULT_POOL_HOST=localhost MEMCACHE_DEFAULT_POOL_PORT=11211 \
    MEMCACHE_SESSION_POOL_HOST=localhost MEMCACHE_SESSION_POOL_PORT=11212 LOGGLY_TOKEN=63756d0d-1ca9-4738-8d5e-791891e087c0 \
    YOUBORA_ACCOUNT_ID=qubitdev GLOBAL_COLLECT_API_KEY=0943349cb12d0606 GLOBAL_COLLECT_SECRET_API_KEY=gEqeIu23vHFHfsW75fxU/aQGI3nWluvXzTMzb+br9Lk= \
    GLOBAL_COLLECT_BASE_URL=https://api-preprod.globalcollect.com GLOBAL_COLLECT_ENVIRONMENT=PREPROD')
    ->set('env', 'prod');

// Tareas
desc('vod:copy if files doesn\' exists');
task('deploy:vod_copy', function () {
    // Chequeamos que existan los archivos npm y gulpfile
    $result = run('if \[ -f {{release_path}}/gulpfile.js ] && [ -f {{release_path}}/package.json]; then echo true; fi')->toBool();
    if (!$result) { // Sino existen
        run('cd {{release_path}} && {{env_vars}} {{bin/php}} {{bin/console}} vod:copy {{console_options}}');
    }
});

desc('NPM install');
task('deploy:npm_install', function () {
    // Chequeamos que exista el directorio node_modules
    $result = run('if \[ -d {{release_path}}/node_modules ]; then echo true; fi')->toBool();
    if (!$result) { // Sino existe
        run('cd {{release_path}} && npm install');
    }
});

desc('Gulp this');
task('deploy:gulp', function() {
    run('cd {{release_path}} && gulp');
});

task('vod:post_deploy', [
    'deploy:vod_copy',
    'deploy:npm_install',
    'deploy:gulp'
]);

after('deploy', 'vod:post_deploy');