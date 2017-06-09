1. Clonar el repo de Argentina dentro del directorio deseado```
git clone git@git.qubit.tv:web/qubit-argentina.git .```
2. Iniciamos git flow y dejamos seteado todo por default:```
git flow init```
3. De ser necesario, nos traemos el contendio del branch develop```
git pull origin develop```
4. Configurar composer: vod/base-bundle: 'dev-develop'
5. Actualizar composer:```
composer update```
6. Verificar en `app/config/parameters.yml`, las siguientes configuraciones:```
http_site_protocol: http
memcache.default_pool.host: localhost
memcache.default_pool.port: 11211
memcache.default_pool.host: localhost
memcache.default_pool.port: 11211```
7. Copiamos los assets correspondientes:```
php app/console vod:copy-assets-files```
8. Instalamos los assets vía npm:```
npm install```
9. Corremos Gulp: ```gulp```
9. a. Si necesitamos watchear, simplemente corremos  ```gulp watch```
