from django.shortcuts import render
from django.http import HttpResponse
# Create your views here.

def all_blogs(request):
    return render(request, 'entradas/all_blogs.html')