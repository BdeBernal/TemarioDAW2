from django.shortcuts import render
from django.http import HttpResponse
from .models import Post

def index(request):
    posts = Post.objects.all().order_by('-date')[:3]
    return render(request, 'index.html', {'posts': posts})

def detail(request, slug):
    post = Post.objects.get(slug=slug)
    return render(request, 'detail.html', {'post': post})

def posts(request):
    posts = Post.objects.all().order_by('-date')
    return render(request, 'allPosts.html', {'posts': posts})