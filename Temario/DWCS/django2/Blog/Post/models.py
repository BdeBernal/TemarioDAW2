from django.db import models

# Create your models here.

class Tag(models.Model):
    caption = models.CharField(max_length=50)

    def __str__(self):
        return f"{self.caption}"
    
class Author(models.Model):
    firstName = models.CharField(max_length=100)
    lastName = models.CharField(max_length=100)
    email = models.EmailField()
    fkTag = models.ManyToManyField(Tag, null=True, on_delete=models.CASCADE)

    def __str__(self):
        return f"{self.firstName} {self.lastName}"
    

class Post(models.Model):
    title = models.CharField(max_length=200)
    excerpt = models.TextField()
    imageName = models.CharField(max_length=100)
    slug = models.SlugField(default='', null=False, db_index=True, blank=True)
    author = models.ForeignKey(Author, on_delete=models.CASCADE, null=True)

    def __str__(self):
        return self.title
