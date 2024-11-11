## Crear proyecto de Django

### Crear carpeta de proyecto

### Copiar archivos mestre:

#### docker-compose.yml

```
services:
  web:
    build: .
    command: python manage.py runserver 0.0.0.0:8000
    volumes:
      - .:/code
    ports:
      - "8000:8000"
```

#### Dockerfile

```
# Usa una imagen base oficial de Python
FROM python:3.11

# Establece el directorio de trabajo dentro del contenedor
WORKDIR /code

# Copia el archivo de requisitos al contenedor
COPY requirements.txt .

# Instala las dependencias del proyecto
RUN pip install --no-cache-dir -r requirements.txt

# Copia el código del proyecto al directorio de trabajo en el contenedor
COPY . /code/

# Ejecuta el comando para crear un nuevo proyecto Django
# RUN django-admin startproject password_generator .

# Expone el puerto que Django usa por defecto
# EXPOSE 8000

# Comando por defecto para ejecutar cuando se inicie el contenedor
#CMD ["python", "manage.py", "runserver", "0.0.0.0:8000"]
```

#### requirements.txt

```
Django>=4.0,<5.0
Pillow>=8.0,<10.0
```

### Meterse en la carpeta recién creada y crear/copiar ahí los archivos

```
docker compose run web django-admin startproject nombre .
```

### Meterte dentro de la carpeta nombre recién creada

```
docker compsoe run web python manage.py startapp otroNombre
```

### Preparación entorno

Una vez creado todo esto en urls.py manejamos la peticion de enlaces de nuestras páginas, en settings tenemos que añadir la carpeta otroNombre creada para que la tenga en cuenta y en views creamos funciones http para interactuar con las páginas que creemos
