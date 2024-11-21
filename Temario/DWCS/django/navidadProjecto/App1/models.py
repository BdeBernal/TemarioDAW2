from django.db import models

# Create your models here.
class Actividades(models.Model):
    titulo = models.CharField(max_length=50)
    descripcion = models.TextField()
    imagen = models.ImageField(upload_to='resources')
    personas = models.CharField(max_length=10)