from django.shortcuts import render
from django.http import HttpResponse
from django.views.generic.edit import CreateView, UpdateView, DeleteView
from django.views.generic import ListView, DetailView
from .models import BoardGame, Brand
from django.urls import reverse_lazy
from .forms import BoardGameForm, BrandForm
# Create your views here.

def index(request):
    return render(request, 'index.html')

class BoardGameView(CreateView):
    model = BoardGame
    form_class = BoardGameForm
    template_name = 'boardGame.html'
    success_url = reverse_lazy("index")
    
class BrandView(CreateView):
    model = Brand
    form_class = BrandForm
    template_name = 'brand.html'
    success_url = reverse_lazy("index")

class ListBoardGamesViews(ListView):
    model = Brand
    template_name = 'allBoardGames.html'
    context_object_name = 'boardGames'

class SingleBoardGameView(DetailView):
    template_name = "singleGameBoard.html"
    model = BoardGame

class SingleBoardGame(DetailView):
    template_name = "singleGameBoardBrand.html"
    model = Brand