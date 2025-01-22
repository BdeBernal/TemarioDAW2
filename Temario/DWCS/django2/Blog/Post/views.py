from django.shortcuts import render
from django.http import HttpResponse
from .models import Post

def index(request):
    posts = Post.objects.all().order_by('-date')
    return render(request, 'index.html', {'posts': posts})

def detail(request, slug):
    post = Post.objects.get(slug=slug)
    return render(request, 'detail.html', {'post': post})

def all(request):
    posts = Post.objects.all().order_by('-date')
    return render(request, 'all.html', {'posts': posts})