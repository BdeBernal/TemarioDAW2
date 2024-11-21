from django.shortcuts import render
from django.http import HttpResponse
from .models import Actividades

# Create your views here.
def index(request):
    actividades = Actividades.objects.all()
    return render(request, 'webpage/index.html', {"actividades": actividades})