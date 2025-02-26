from django.contrib import admin
from .models import BoardGame, Brand

### REGISTER ########################################

class BoardGameAdmin(admin.ModelAdmin):
    list_display = ('title', 'players', 'duration', 'age')
    list_filter = ('duration', 'age')

# Filter by players and age and country
# Display title, players, duration, age and name, language

class BrandAdmin(admin.ModelAdmin):
    list_display = ('name', 'language') 
    list_filter = ('country',)

admin.site.register(BoardGame, BoardGameAdmin)
admin.site.register(Brand, BrandAdmin)
