from django.db import models
from django.core.validators import MinLengthValidator
from django.utils.text import slugify
from django.urls import reverse

# Create your models here.

class Tag(models.Model):
    caption = models.CharField(max_length=50)

    def __str__(self):
        return f"{self.caption}"
    
class Author(models.Model):
    firstName = models.CharField(max_length=100)
    lastName = models.CharField(max_length=100)
    email = models.EmailField()

    def __str__(self):
        return f"{self.firstName} {self.lastName}, {self.email}"
    

class Post(models.Model):
    title = models.CharField(max_length=200)
    excerpt = models.CharField(max_length=200)
    imageName = models.CharField(max_length=100)
    date = models.DateField(auto_now=True)
    content = models.TextField(validators=[MinLengthValidator(10)])
    slug = models.SlugField(unique=True, null=False, db_index=True, blank=True)
    author = models.ForeignKey(Author, on_delete=models.SET_NULL, null=True, related_name='fkPost')
    tag = models.ManyToManyField(Tag)

    def get_absolute_url(self):
        return reverse('detail', args=[self.slug])

    def __str__(self):
        return f"{self.title}, {self.slug}, {self.author}, {self.tag}"
