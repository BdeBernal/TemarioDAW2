from django import forms

from .models import Review, Student

class ReviewForm(forms.ModelForm):
    class Meta:
        model = Review
        fields = "__all__"
        labels = {
            "user_name": "Your Name",
            "review_text": "Your Feedback",
            "rating": "Your Rating"
        }
        error_messages = {
            "user_name": {
              "required": "Your name must not be empty!",
              "max_length": "Please enter a shorter name!"
            }
        }

class StudentForm(forms.ModelForm):
    class Meta:
        model = Student
        fields = "__all__"
        labels = {
            "name": "Your Name",
            "degree": "Your Degree"
        }
        error_messages = {
            "name": {
              "required": "Your name must not be empty!",
              "max_length": "Please enter a shorter name!"
            }
        }
