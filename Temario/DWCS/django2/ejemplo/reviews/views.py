from reviews.models import Review, Student
from django.http import HttpResponseRedirect
from django.shortcuts import render
from django.views import View
from django.views.generic.base import TemplateView
from django.views.generic.edit import FormView, CreateView

from .forms import ReviewForm, StudentForm

# Create your views here.
class StudentListView(TemplateView):
    template_name = "reviews/student_list.html"
    #model = Student
    #context_object_name = "students"

    def get_context_data(self, **kwargs):
        context = super().get_context_data(**kwargs)
        context["students"] = Student.objects.all()
        return context

class StudentView(FormView):
    form_class = StudentForm
    template_name = "reviews/student.html"
    success_url = "/thank-you"

    def form_valid(self, form):
        form.save()
        return super().form_valid(form)


class ReviewView(CreateView):
    model = Review
    form_class = ReviewForm
    template_name = "reviews/review.html"
    success_url = "/thank-you"


class ReviewView(FormView):
    form_class = ReviewForm
    template_name = "reviews/review.html"
    success_url = "/thank-you"

    def form_valid(self, form):
        form.save()
        return super().form_valid(form)

class ThankYouView(TemplateView):
    template_name = "reviews/thank_you.html"

    def get_context_data(self, **kwargs):
        context = super().get_context_data(**kwargs)
        context["message"] = "This works!"
        return context
    
class ReviewListView(TemplateView):
    template_name = "reviews/review_list.html"
    #model = Review
    #context_object_name = "reviews"

    def get_context_data(self, **kwargs):
        context = super().get_context_data(**kwargs)
        context["reviews"] = Review.objects.all()
        return context

class SingleReviewView(TemplateView):
    template_name = "reviews/single_review.html"
    #model = Review

    def get_context_data(self, **kwargs):
        review_id = kwargs["id"]
        context = super().get_context_data(**kwargs)
        context["review"] = Review.objects.get(pk=review_id)
        return context
