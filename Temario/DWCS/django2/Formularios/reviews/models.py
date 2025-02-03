from django.db import models

class Review(models.Model): # Esto solo para Model forms
    username = models.CharField(max_length=100)
    password = models.CharField(max_length=100)
    city = models.CharField(max_length=100)
    webserver = models.CharField(max_length=20)
    signon = models.CharField(max_length=20) 
    role = models.CharField(max_length=10)

    def __str__(self):
        return self.username
