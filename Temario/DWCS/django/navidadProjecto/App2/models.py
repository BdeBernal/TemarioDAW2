from django.db import models

# Create your models here.
class Productos(models.Model):
    nombre = models.CharField(max_length=20)
    descripcion = models.TextField()
    precio = models.FloatField()
    imagen = models.ImageField(upload_to='resources/media')