from django.db import models
from django.core.validators import MaxValueValidator, MinValueValidator
from django.db.models import Q
from django.urls import reverse
from django.utils.text import slugify

# Create your models here.

class Author(models.Model):
    firstName = models.CharField(max_length=100)
    lastName = models.CharField(max_length=100) 

class Book(models.Model):
    title = models.CharField(max_length=50)
    rating = models.IntegerField(
        validators = [MinValueValidator(0), MaxValueValidator(10)]
        )
    author = models.ForeignKey(Author, on_delete=models.CASCADE, null=True)
    bestSelling = models.BooleanField(default=False)
    slug = models.SlugField(default='', null=False, db_index=True, blank=True)

    def get_absolute_url(self):
        return reverse('detail', args=[self.slug])

    def __str__(self):
        return f"{self.title}, {self.author}, {self.rating}, {self.bestSelling}, {self.slug}"