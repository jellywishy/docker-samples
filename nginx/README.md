# Nginx
    docker run --rm --name nginx -p 80:80 -v .\index.html:/app/index.html -v .\favicon.ico:/app/favicon.ico -v .\config.conf:/etc/nginx/conf.d/default.conf nginx:1.28.0-alpine3.21-slim
Nginx listens on [***localhost:80***](http://localhost:80)