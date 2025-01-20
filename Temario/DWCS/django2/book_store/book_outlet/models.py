from django.db import models
from django.core.validators import MaxValueValidator, MinValueValidator
from django.db.models import Q
from django.urls import reverse
from django.utils.text import slugify

# Create your models here.

class Country(models.Model): 
    name = models.CharField(max_length=50)
    code = models.CharField(max_length=10)

    def __str__(self):
        return f"{self.name}, {self.code}"
    
    class Meta:
        verbose_name_plural = "Countries"

class Address(models.Model):
    street = models.CharField(max_length=100)
    postalCode = models.CharField(max_length=10)
    city = models.CharField(max_length=100)

    def __str__(self):
        return f"{self.city}, {self.street}, {self.postalCode}"
    
    class Meta:
        verbose_name_plural = "Addresses"

class Author(models.Model):
    firstName = models.CharField(max_length=100)
    lastName = models.CharField(max_length=100) 
    address = models.OneToOneField(Address, on_delete=models.CASCADE, null=True)

    def __str__(self):
        return f"{self.firstName}, {self.lastName}"

class Book(models.Model):
    title = models.CharField(max_length=50)
    rating = models.IntegerField(
        validators = [MinValueValidator(0), MaxValueValidator(10)]
        )
    author = models.ForeignKey(Author, on_delete=models.CASCADE, null=True, related_name="books")
    bestSelling = models.BooleanField(default=False)
    slug = models.SlugField(default='', null=False, db_index=True, blank=True)
    publishedCountries = models.ManyToManyField(Country)

    def get_absolute_url(self):
        return reverse('detail', args=[self.slug])

    def __str__(self):
        countries = ", ".join([country.name for country in self.publishedCountries.all()])
        return f"{self.title}, {self.author.firstName} {self.author.lastName}, {self.rating}, {'Best Seller' if self.bestSelling else 'Not Best Seller'}, {self.slug}, Published in: {countries}"