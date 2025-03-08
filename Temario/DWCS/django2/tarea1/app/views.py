from django.shortcuts import render, get_object_or_404
from .models import Student, Degree
from django.urls import reverse

# Create your views here.
def index(request):
    students = Student.objects.all()
    return render(request, "index.html", {"students": students})

def appDetail(request, slug):
    student = get_object_or_404(Student, slug=slug)
    return render('detail.html', {"student": student})