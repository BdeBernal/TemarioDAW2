from .models import Product, Category
from django import forms

# Form Product
class CategoryForm(forms.ModelForm):
    class Meta:
        model = Category
        fields = "__all__"
        labels = {
            "name": "Your name"
        }
        error_messages = {
            "name": {
                "required": "Your name must not be empty!",
                "max_length": "Please enter a shorter name!"
            }
        }

# Form Category
class ProductForm(forms.ModelForm):
    class Meta:
        model = Product
        exclude = ["slug"]
        labels = {
            "name": "Your name",
            "description": "Your description",
            "price": "Your price",
            "picture": "Your picture",
            "catFk": "Your category"
        }