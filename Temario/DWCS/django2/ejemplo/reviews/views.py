from reviews.models import Review, Student
from django.http import HttpResponseRedirect
from django.shortcuts import render, redirect, get_object_or_404
from django.views import View
from django.views.generic.base import TemplateView
from django.views.generic.edit import FormView, CreateView, DeleteView

from .forms import ReviewForm, StudentForm

### Acciones de Student
    
    # Modificar/Borrar 1 student
class UpdateStudentsView(View):
    def post(self, request):
        student_ids = request.POST.getlist("student_id")

        for student_id in student_ids:
            student = Student.objects.get(id=student_id)
            if request.POST.get(f"delete_{student_id}"):
                student.delete()
            else:
                student.name = request.POST.get(f"name_{student_id}", student.name)
                student.degree = request.POST.get(f"degree_{student_id}", student.degree)
                student.save()

        return redirect("/students")

    # Mostrar todos los students
class StudentListView(TemplateView):
    template_name = "reviews/student_list.html"

    def get_context_data(self, **kwargs):
        context = super().get_context_data(**kwargs)
        context["students"] = Student.objects.all()
        return context

    # Crear 1 student
class StudentView(CreateView):
    form_class = StudentForm
    template_name = "reviews/student.html"
    success_url = "/thank-you"

    def form_valid(self, form):
        form.save()
        return super().form_valid(form)

### Acciones de Review

    # Crear 1 review
class ReviewView(CreateView):
    form_class = ReviewForm
    template_name = "reviews/review.html"
    success_url = "/thank-you"

    def form_valid(self, form):
        form.save()
        return super().form_valid(form)
    
    # Mostrar todas las reviews
class ReviewListView(TemplateView):
    template_name = "reviews/review_list.html"

    def get_context_data(self, **kwargs):
        context = super().get_context_data(**kwargs)
        context["reviews"] = Review.objects.all()
        return context

    # Buscar por id una review
class SingleReviewView(TemplateView):
    template_name = "reviews/single_review.html"

    def get_context_data(self, **kwargs):
        review_id = kwargs["id"]
        context = super().get_context_data(**kwargs)
        context["review"] = Review.objects.get(pk=review_id)
        return context
    

### Página para cada vez que se completa un formulario
class ThankYouView(TemplateView):
    template_name = "reviews/thank_you.html"

    def get_context_data(self, **kwargs):
        context = super().get_context_data(**kwargs)
        context["message"] = "This works!"
        return context
