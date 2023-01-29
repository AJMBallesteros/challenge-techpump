
# Prueba técnica Techpump




## Author

- [@AJMBallesteros](https://github.com/AJMBallesteros)


## Configurando la prueba

Para ver el resultado de la prueba

Step 1: Modificar en el .env las siguientes variables

```code
DB_CONNECTION=pgsql
DB_HOST=postgres
DB_PORT=5432
DB_DATABASE=techpumpdb
DB_USERNAME=techpump
DB_PASSWORD=techpump
```

Step 2: Añadir la variable de entorno al fichero .env

```code
CODIGO_TRACKING=techpump_tracking_code
```

Step 3: Añadir al fichero hosts de nuestro sistema operativo los siguientes dominios para resolverlos contra el contenedor de Docker.
```code
0.0.0.0 conejox.com
0.0.0.0	babosas.com
0.0.0.0	cerdas.com
```

## Iniciando el servidor

Step 1: En una terminal, a través del makefile tenemos un comando que 
permite hacer un build de los contenedores necesarios.
```code
make build
```
Step 2: Podemos arrancar los contenedores a través del comando:
```code
make up
```

Step 3: Para realizar las migraciones necesarias podemos usar:
```code
make db-regenerate
```

(*) Esto realizará las migraciones y ejecutará los seeders con los datos predefinidos.

## Acceso a la prueba

Como previamente hemos configurado el fichero de host, el servidor será accesible desde la url: http://0.0.0.0, pero también desde los dominios http://cerdas.com, http://conejox.com y http://cerdas.com.

Veremos como el CSS va cambiando en función del dominio utilizado.

(*) Es posible que aparezcan errores relacionados con los permisos en el fichero /storage/logs/laravel.log. Para solucionarlo es necesario darle los permisos adecuados en función del usuario que ejecuta los contenedores. 

Como posible solución en sistemas Linux podemos usar en la raiz del proyecto:
```code
sudo chown -R :$USER storage
```


## Ejecutando los tests

Para iniciar todos los tests basta con ejecutar en una terminal el comando:
```code
make tests
```

## Finalizando la prueba:

Se pueden detener las máquinas desde el comando:
```code
make down
```





