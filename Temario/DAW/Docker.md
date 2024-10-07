## Docker

Sacar las imágenes de docker hub

```
docker ps -a -> Información de contenedores
docker images -> Imágenes disponibles
docker compose up -d -> Levantar contenedor
docker compose down  -> Borrar contenedor
docker stop "ID" -> Cerrar contenedor por ID
```

Levantar un contenedor con puerto asignado y volumenes

```
docker run --name "nombre" -v rutaEquipo:rutaContenedor -p 80:80 httpd
```

Acceder a la terminal del contenedor levantado

```
docker exec -it nombre bash
```

## Hacer en casa

Crear archivo compose.yml

```
service:
    nombre:
        image: httpd
        ports:
            - 80:80
        volumes:
            - rutaEquipo:/rutaContenedor
```
