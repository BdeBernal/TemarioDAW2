from django.db import models
from django.utils.text import slugify
from django.urls import reverse
from django.core.validators import MinValueValidator, MaxValueValidator
# Create your models here.

class Degree(models.Model):
    name = models.CharField(max_length=50)
    description = models.CharField(max_length=200)
    years = models.IntegerField(validators=[
        MinValueValidator(0),
        MaxValueValidator(4),
    ])

    def __str__(self):
        return f"{self.name}"
    
class Student(models.Model):
    name = models.CharField(max_length=50)
    surname = models.CharField(max_length=50)
    picture = models.ImageField(upload_to="images/")
    age = models.IntegerField(validators=[
        MinValueValidator(1970),
        MaxValueValidator(2010),
    ])
    slug = models.SlugField(null=False, db_index=True, unique=True)
    finished_degree = models.BooleanField(default=False)
    degree = models.ForeignKey(Degree, on_delete=models.CASCADE, null=True, related_name="fkdegree")

    def __str__(self):
        return f"{self.name}"
    
    def save(self, *args, **kwargs):
        self.slug = slugify(self.surname)
        super().save(*args, **kwargs)

    def get_absolute_url(self):
        return reverse('appDetail', args=[self.slug])