"""
URL configuration for administracion project.

The `urlpatterns` list routes URLs to views. For more information please see:
    https://docs.djangoproject.com/en/4.2/topics/http/urls/
Examples:
Function views
    1. Add an import:  from my_app import views
    2. Add a URL to urlpatterns:  path('', views.home, name='home')
Class-based views
    1. Add an import:  from other_app.views import Home
    2. Add a URL to urlpatterns:  path('', Home.as_view(), name='home')
Including another URLconf
    1. Import the include() function: from django.urls import include, path
    2. Add a URL to urlpatterns:  path('blog/', include('blog.urls'))
"""
from django.contrib import admin
from django.urls import path
from boardGames import views
from django.conf.urls.static import static
from django.conf import settings

urlpatterns = [
    path('admin/', admin.site.urls),
    path('', views.index, name='index'),
    path('createBoardGame/', views.BoardGameView.as_view(), name='createBoardGame'),
    path('createBrand/', views.BrandView.as_view(), name='createBrand'),
    path('listBoardGames/', views.ListBoardGamesViews.as_view(), name='listBoardGames'),
    path('listBoardGames/<int:pk>/', views.SingleBoardGameView.as_view(), name='singleBoardGame'),
    path('allGames/', views.ListBoardGames.as_view(), name='allGames'),
    path('allGames/<int:pk>/', views.SingleGameView.as_view(), name='singleGame'),
    path('listBoardGames/<int:pk>/edit/', views.UpdateBoardGameView.as_view(), name='editBoardGame'),
    path('listBoardGames/<int:pk>/delete/', views.DeleteBoardGameView.as_view(), name='deleteBoardGame'),
    path('brands/<int:pk>/edit/', views.UpdateBrandView.as_view(), name='editBrand'),
    path('brands/<int:pk>/delete/', views.DeleteBrandView.as_view(), name='deleteBrand'),

]

urlpatterns += static(settings.MEDIA_URL, document_root=settings.MEDIA_ROOT)