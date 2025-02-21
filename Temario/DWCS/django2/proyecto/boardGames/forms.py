from django import forms
from .models import BoardGame, Brand

class BoardGameForm(forms.ModelForm):
    class Meta:
        model = BoardGame
        fields = '__all__'
        labels = {
            'title': 'Título',
            'year': 'Año',
            'players': 'Jugadores',
            'duration': 'Duración',
            'age': 'Edad',
            'image': 'Imagen'
        }
        error_messages = {
            'title': {
                'required': 'El título es obligatorio',
                'max_length': 'El título no puede superar los 100 caracteres'
            },
            'year': {
                'required': 'El año es obligatorio',
                'max_value': 'El año no puede ser mayor a 2025'
            },
            'players': {
                'required': 'El número de jugadores es obligatorio',
                'max_length': 'El número de jugadores no puede superar los 20 caracteres'
            },
            'duration': {
                'required': 'La duración es obligatoria',
                'max_length': 'La duración no puede superar los 20 caracteres'
            },
            'age': {
                'required': 'La edad es obligatoria',
                'max_length': 'La edad no puede superar los 20 caracteres'
            }
        }

class BrandForm(forms.ModelForm):
    class Meta: 
        model = Brand
        fields = '__all__'
        labels = {
            'name': 'Nombre',
            'country': 'País',
            'language': 'Idioma',
            'game': 'Juego'
        }
        error_messages = {
            'name': {
                'required': 'El nombre es obligatorio',
                'max_length': 'El nombre no puede superar los 50 caracteres'
            },
            'country': {
                'required': 'El país es obligatorio',
                'max_length': 'El país no puede superar los 50 caracteres'
            },
            'language': {
                'required': 'El idioma es obligatorio',
                'max_length': 'El idioma no puede superar los 50 caracteres'
            }
        }