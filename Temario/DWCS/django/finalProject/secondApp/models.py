from django.db import models
from firstApp.models import Product
# Create your models here.
class Description(models.Model):
    productId = models.ForeignKey(Product)
    description = models.CharField(max_length=100)
    image = models.ImageField(upload_to='images/')