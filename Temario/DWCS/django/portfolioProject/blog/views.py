from django.shortcuts import render
from django.http import HttpResponse
from .models import Entrance
# Create your views here.

def all_blogs(request):
    entrances = Entrance.objects.all()
    return render(request, 'entradas/all_blogs.html', {'entrances': entrances})