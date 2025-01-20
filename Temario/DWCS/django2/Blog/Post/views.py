from django.shortcuts import render, get_object_or_404
from django.http import HttpResponse
from .models import Book
from django.db.models import Avg

# Create your views here.
def index(request):
    Books = Book.objects.all().order_by('-rating')
    nBooks = Books.count()
    avgRating = Books.aggregate(Avg('rating'))
    return render(request, 'index.html', {'Books': Books, 'nBooks': nBooks, 'avgRating': avgRating})

def detail(request, slug):
    book = get_object_or_404(Book, slug=slug)
    return render(request, 'detail.html', {'book': book})

# Create your views here.
