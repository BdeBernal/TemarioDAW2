from django.db import models

# Create your models here.
class Courses(models.Model):
    name = models.CharField(max_length=20)
    longDescription = models.TextField()
    img = models.ImageField(upload_to= 'imgs/')

    def __str__(self):
        return self.name