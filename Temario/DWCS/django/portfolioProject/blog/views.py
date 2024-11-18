from django.shortcuts import render, get_object_or_404
from django.http import HttpResponse
from .models import Entrance
# Create your views here.

def all_blogs(request):
    entrances = Entrance.objects.order_by('-date')#[:3] # Only to show the latest 3
    return render(request, 'entradas/all_blogs.html', {'entrances': entrances})

def details(request, blog_id):
    entrance = get_object_or_404(Entrance, pk=blog_id)
    return render(request, 'entradas/details.html', {'entrance': entrance})