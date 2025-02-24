from django.shortcuts import render
from django.http import HttpResponse
from django.views.generic.edit import CreateView, UpdateView, DeleteView
from django.views.generic import ListView, DetailView
from .models import BoardGame, Brand
from django.urls import reverse_lazy
from .forms import BoardGameForm, BrandForm
from django.http import HttpResponseRedirect
from django.views import View
# Create your views here.

def index(request):
    return render(request, 'index.html')
    
### BRAND ############################################

class BrandView(CreateView):
    model = Brand
    form_class = BrandForm
    template_name = 'Brands/brand.html'
    success_url = reverse_lazy("index")

class ListBoardGamesViews(ListView):
    model = Brand
    template_name = 'Brands/allBoardGamesBrands.html'
    context_object_name = 'boardGamesBrands'

class SingleBoardGameView(DetailView):
    template_name = "Brands/singleGameBoard.html"
    model = Brand
    context_object_name = 'boardGameBrand'

class UpdateBrandView(UpdateView):
    model = Brand
    form_class = BrandForm
    template_name = "Brands/updateBrand.html"
    success_url = reverse_lazy("index")

class DeleteBrandView(DeleteView):
    model = Brand
    template_name = "Brands/deleteBrand.html"
    success_url = reverse_lazy("index")

### BOARD GAME #######################################

class BoardGameView(CreateView):
    model = BoardGame
    form_class = BoardGameForm
    template_name = 'BoardGames/boardGame.html'
    success_url = reverse_lazy("index")

class ListBoardGames(ListView):
    model = BoardGame
    template_name = 'BoardGames/allBoardGames.html'
    context_object_name = 'boardGames'

class SingleGameView(DetailView):
    template_name = "BoardGames/singleGame.html"
    model = BoardGame
    context_object_name = 'boardGame'

    def get_context_data(self, **kwargs):
        context = super().get_context_data(**kwargs)
        loaded_review = self.object
        request = self.request

        favorite_id = request.session.get("favoriteBoardGame")
        context["is_favorite"] = favorite_id == str(loaded_review.id)
        return context

class UpdateBoardGameView(UpdateView):
    model = BoardGame
    form_class = BoardGameForm
    template_name = "BoardGames/updateBoardGame.html"
    success_url = reverse_lazy("index")

class DeleteBoardGameView(DeleteView):
    model = BoardGame
    template_name = "BoardGames/deleteBoardGame.html"
    success_url = reverse_lazy("index")

class AddFavoriteView(View):
    def post(self, request):
        boardGameId = request.POST["boardGameId"]
        request.session["favoriteBoardGame"] = boardGameId
        return HttpResponseRedirect("/allGames/" + boardGameId)
