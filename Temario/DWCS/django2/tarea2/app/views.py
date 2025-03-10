from django.shortcuts import render
from django.views import View
from django.views.generic import ListView
from django.views.generic import CreateView, DeleteView, UpdateView
from .models import Product, Category
from .forms import ProductForm, CategoryForm
from django.urls import reverse_lazy

# Create your views here.
class IndexView(View):
    def get(self, request):
        return render(request, 'index.html')

class ProductsListView(ListView):
    template_name = "ProductsList.html"
    model = Product
    context_object_name = "products"

    def get_queryset(self):
        queryset = super().get_queryset()
        query = self.request.GET.get("q")
        if query:
            queryset = queryset.filter(name__icontains=query)  # Filtra por nombre
        return queryset

class ProductCreateView(CreateView):
    model = Product
    form_class = ProductForm
    template_name = "ProductCreate.html"
    success_url = reverse_lazy("index")

class ProductUpdateView(UpdateView):
    model = Product
    form_class = ProductForm
    template_name = "ProductUpdate.html"
    success_url = reverse_lazy("index")

class ProductDeleteView(DeleteView):
    model = Product
    template_name = "ProductDelete.html"
    success_url = reverse_lazy("index")


# Categoría

class CategoriesListView(ListView):
    template_name = "CategoriesList.html"
    model = Category
    context_object_name = "categories"

class CategoryCreateView(CreateView):
    model = Category
    form_class = CategoryForm
    template_name = "CategoryCreate.html"
    success_url = reverse_lazy("index")

class CategoryUpdateView(UpdateView):
    model = Category
    form_class = CategoryForm
    template_name = "CategoryUpdate.html"
    success_url = reverse_lazy("index")

class CategoryDeleteView(DeleteView):
    model = Category
    template_name = "CategoryDelete.html"
    success_url = reverse_lazy("index")