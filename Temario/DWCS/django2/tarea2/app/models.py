from django.db import models
from django.utils.text import slugify

# Category
class Category(models.Model):
    name = models.CharField(max_length=50)

    def __str__(self):
        return self.name

# Product
class Product(models.Model):
    name = models.CharField(max_length=50)
    description = models.TextField()
    price = models.IntegerField()
    picture = models.ImageField(upload_to='media/')
    slug = models.SlugField(null=False, db_index=True, unique=True)
    catFk = models.ForeignKey(Category, on_delete=models.CASCADE, null=True, related_name="catFk")

    def __str__(self):
        return f"{self.name}"
    
    def save(self, *args, **kwargs):
        self.slug = slugify(self.name)
        super().save(*args, **kwargs)
