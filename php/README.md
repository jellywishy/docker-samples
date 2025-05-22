# PHP (Built-in web server)
    docker run --rm --name php -p 8000:8000 -v .\index.php:/app/index.php -v .\favicon.ico:/app/favicon.ico php:8.4.7-alpine3.21 php -S 0.0.0.0:8000 -t /app/

## CAUTION!
Although the console will report that the server is running on ***0.0.0.0:8000***, it will actually be running on ***127.0.0.1:8000*** (also known as ***localhost:8000***).  
To find out why this is happening, [check this out](https://docs.docker.com/reference/cli/docker/container/run/#publish).