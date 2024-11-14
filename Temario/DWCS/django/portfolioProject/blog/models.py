from django.db import models

# Create your models here.
class Entrance(models.Model):
    title = models.CharField(max_length=200)
    description = models.TextField()
    date = models.DateField()