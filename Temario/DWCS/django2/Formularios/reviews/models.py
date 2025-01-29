from django.db import models

# Create your models here.
class Review(models.Model):
    username = models.CharField(max_length=100)
    password = models.CharField(max_length=100, null=True)
    city = models.CharField(max_length=100, null=True)
    webserver = models.CharField(max_length=100, null=True)
    role = models.CharField(max_length=100, null=True)
    signon = models.CharField(max_length=100, null=True)

    def __str__(self):
        return self.username