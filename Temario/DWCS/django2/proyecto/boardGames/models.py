from django.db import models

### BRAND #########################

class Brand(models.Model):
    name = models.CharField(max_length=50)
    country = models.CharField(max_length=50)
    language = models.CharField(max_length=50)

    def __str__(self):
        return self.name
    
### BOARD GAME ####################

class BoardGame(models.Model):
    title = models.CharField(max_length=100)
    year = models.IntegerField()
    players = models.CharField(max_length=20)
    duration = models.CharField(max_length=20)
    age = models.CharField(max_length=20)
    image = models.ImageField(upload_to='images', null=True)
    brand = models.ForeignKey(Brand, on_delete=models.CASCADE, null=True, blank=True)

    def __str__(self):
        return self.title