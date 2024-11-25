from django.shortcuts import render
from django.http import HttpResponse
from .models import Productos

# Create your views here.

def shop(request):
    productos = Productos.objects.all()
    return render(request, 'product/visual.html', {"productos": productos})

def details(request, productos_id):
    producto = Productos.objects.get(pk=productos_id)
    return render(request, 'product/details.html', {"producto": producto})