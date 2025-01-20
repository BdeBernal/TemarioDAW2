from django.urls import path
from Blog import views

urlpatterns = [
    path('', views.index, name='index'),
    path('<slug:slug>', views.detail, name='detail'),
]