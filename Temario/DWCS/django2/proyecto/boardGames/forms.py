from django import forms
from .models import BoardGame, Brand

class BoardGameForm(forms.ModelForm):
    class Meta:
        model = BoardGame
        fields = '__all__'
        labels = {
            'title': 'Title',
            'year': 'Year',
            'players': 'Players',
            'duration': 'Duration',
            'age': 'Age',
            'image': 'Image'
        }
        error_messages = {
            'title': {
                'required': 'The title is required',
                'max_length': 'The title cannot exceed 100 characters'
            },
            'year': {
                'required': 'The year is required',
                'max_value': 'The year cannot be greater than 2025'
            },
            'players': {
                'required': 'The number of players is required',
                'max_length': 'The number of players cannot exceed 20 characters'
            },
            'duration': {
                'required': 'The duration is required',
                'max_length': 'The duration cannot exceed 20 characters'
            },
            'age': {
                'required': 'The age is required',
                'max_length': 'The age cannot exceed 20 characters'
            }
        }

class BrandForm(forms.ModelForm):
    class Meta: 
        model = Brand
        fields = '__all__'
        labels = {
            'name': 'Name',
            'country': 'Country',
            'language': 'Language',
            'game': 'Game'
        }
        error_messages = {
            'name': {
                'required': 'The name is required',
                'max_length': 'The name cannot exceed 50 characters'
            },
            'country': {
                'required': 'The country is required',
                'max_length': 'The country cannot exceed 50 characters'
            },
            'language': {
                'required': 'The language is required',
                'max_length': 'The language cannot exceed 50 characters'
            }
        }