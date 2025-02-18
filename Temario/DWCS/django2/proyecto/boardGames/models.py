from django.db import models

# Create your models here.

class BoardGame(models.Model):
    title = models.CharField(max_length=100)
    year = models.IntegerField()
    players = models.CharField(max_length=20)
    duration = models.CharField(max_length=20)
    age = models.CharField(max_length=20)
    image = models.ImageField(upload_to='boardGames', null=True, blank=True)

    def __str__(self):
        return self.title

#############################

class Brand(models.Model):
    name = models.CharField(max_length=50)
    country = models.CharField(max_length=50)
    language = models.CharField(max_length=50)
    game = models.ForeignKey(BoardGame, on_delete=models.CASCADE)

    def __str__(self):
        return self.name