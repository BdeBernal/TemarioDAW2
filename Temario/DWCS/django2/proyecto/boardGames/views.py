from django.shortcuts import render
from django.http import HttpResponse
from django.views.generic.edit import CreateView
from .models import BoardGame, Brand
from .forms import BoardGameForm, BrandForm
# Create your views here.

def index(request):
    return render(request, 'index.html')

class BoardGameView(CreateView):
    model = BoardGame, Brand
    form_class = BoardGameForm, BrandForm