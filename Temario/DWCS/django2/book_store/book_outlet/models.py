from django.db import models
from django.core.validators import MaxValueValidator, MinValueValidator
from django.db.models import Q

# Create your models here.
class Book(models.Model):
    title = models.CharField(max_length=50)
    rating = models.IntegerField(
        validators = [MinValueValidator(0), MaxValueValidator(10)]
        )
    author = models.CharField(null=True, max_length=100)
    bestSelling = models.BooleanField(default=False)

    def __str__(self):
        return self.title