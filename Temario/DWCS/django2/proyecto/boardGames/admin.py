from django.contrib import admin
from .models import BoardGame, Brand
# Register your models here.

class BoardGameAdmin(admin.ModelAdmin):
    list_display = ('title', 'players', 'duration', 'age')

class BrandAdmin(admin.ModelAdmin):
    list_display = ('name', 'language') 

admin.site.register(BoardGame, BoardGameAdmin)
admin.site.register(Brand, BrandAdmin)
