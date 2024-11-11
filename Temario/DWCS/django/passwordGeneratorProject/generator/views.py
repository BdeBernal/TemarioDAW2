import random
from django.shortcuts import render
from django.http import HttpResponse

# Create your views here.
def home(request):
    return render(request, "generatorApp/home.html")

def about(request):
    return render(request, "generatorApp/about.html")

def password(request):

    characters = list('abcdefghijklmnopqrstuvwxyz') # lowercase letters

    if request.GET.get('uppercase'): # if uppercase is checked on home.html
        characters.extend(list('ABCDEFGHIJKLMNOPQRSTUVWXYZ'))
    if request.GET.get('special'): # if special is checked on home.html
        characters.extend(list('!@#$%^&*()'))
    if request.GET.get('numbers'): # if numbers is checked on home.html
        characters.extend(list('0123456789'))

    length = int(request.GET.get('length', 12)) # default length is 12
    password = '' # initialize password to empty string

    for i in range(length):
        password += random.choice(characters)

    return render(request, "generatorApp/password.html", {'password': password})