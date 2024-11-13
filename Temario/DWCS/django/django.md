## Crear proyecto de Django

### 1- Crear carpeta de proyecto

### 2- Copiar archivos mestre:

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

### 3- Meterse en la carpeta recién creada y crear/copiar ahí los archivos

```
docker compose run web django-admin startproject nombre .
```

### 4- Meterte dentro de la carpeta nombre recién creada

```
docker compose run web python manage.py startapp otroNombre
```

### 5- Preparación entorno

Uso de archivos básicos:
urls.py => poner enlaces de las paginas que queremos introducir

```from django.urls import path
from form import views

urlpatterns = [
    path('', views.home, name='home'),
    path('result/', views.result, name='result'),
]
```

views.py => crear funciones para dirigir los anteriores enlaces a las páginas correspondientes

```
from django.shortcuts import render
from django.http import HttpResponse
# Create your views here.

def home(request):
    return render(request, 'formGenerator/home.html')
```

settings.py => añadir los proyectos creados para que django los tenga en cuenta

```
INSTALLED_APPS = [
    'django.contrib.admin',
    'django.contrib.auth',
    'django.contrib.contenttypes',
    'django.contrib.sessions',
    'django.contrib.messages',
    'django.contrib.staticfiles',
    'form',
]
```

carpeta de proyecto creada => crear carpeta templates y dentro otra carpeta con los archivos para ver, para crear un enlace o form es de la forma:

```
'% url 'enlace' %'
```

Si queremos instalar más librerías habría que introducirlas en requirements.txt
