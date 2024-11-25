from django.urls import path
from . import views

app_name = 'productos'

urlpatterns = [
    path('', views.shop, name='shop'),
    path('<int:productos_id>/', views.details, name='details')
]