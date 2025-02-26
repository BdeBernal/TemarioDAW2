from django.shortcuts import render
from django.views.generic.edit import CreateView, UpdateView, DeleteView
from django.views.generic import ListView, DetailView
from .models import BoardGame, Brand
from django.urls import reverse_lazy
from .forms import BoardGameForm, BrandForm
from django.http import HttpResponseRedirect
from django.views import View

def index(request):
    return render(request, 'index.html')
    
### BRAND ############################################

class BrandView(CreateView): # Crear marca
    model = Brand
    form_class = BrandForm
    template_name = 'Brands/brand.html'
    success_url = reverse_lazy("index")

class ListBoardGamesViews(ListView): # Listar marcas
    model = Brand
    template_name = 'Brands/allBoardGamesBrands.html'
    context_object_name = 'boardGamesBrands'

class SingleBoardGameView(DetailView): # Ver una marca
    template_name = "Brands/singleGameBoard.html"
    model = Brand
    context_object_name = 'boardGameBrand'

class UpdateBrandView(UpdateView): # Actualizar marca
    model = Brand
    form_class = BrandForm
    template_name = "Brands/updateBrand.html"
    success_url = reverse_lazy("index")

class DeleteBrandView(DeleteView): # Borrar marca
    model = Brand
    template_name = "Brands/deleteBrand.html"
    success_url = reverse_lazy("index")

### BOARD GAME #######################################

class BoardGameView(CreateView): # Crear juego
    model = BoardGame
    form_class = BoardGameForm
    template_name = 'BoardGames/boardGame.html'
    success_url = reverse_lazy("index")

class ListBoardGames(ListView): # Listar juegos
    model = BoardGame
    template_name = 'BoardGames/allBoardGames.html'
    context_object_name = 'boardGames'

class SingleGameView(DetailView): # Ver un juego
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

class UpdateBoardGameView(UpdateView): # Actualizar juego
    model = BoardGame
    form_class = BoardGameForm
    template_name = "BoardGames/updateBoardGame.html"
    success_url = reverse_lazy("index")

class DeleteBoardGameView(DeleteView): # Borrar juego
    model = BoardGame
    template_name = "BoardGames/deleteBoardGame.html"
    success_url = reverse_lazy("index")

### FAVORITE ##########################################

class AddFavoriteView(View): # Añadir a favoritos
    def post(self, request):
        boardGameId = request.POST["boardGameId"]
        request.session["favoriteBoardGame"] = boardGameId
        return HttpResponseRedirect("/allGames/" + boardGameId)
