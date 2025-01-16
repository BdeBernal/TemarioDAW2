from django.urls import path
from book_outlet import views

urlpatterns = [
    path('', views.index, name='index'),
    path('<slug:slug>', views.detail, name='detail'),
]