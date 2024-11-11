from django.shortcuts import render
from django.http import HttpResponse
# Create your views here.

def home(request):
    return render(request, 'formGenerator/home.html')

def result(request):

    if request.GET.get('name'):
        name = request.GET.get('name')
    else:
        name = 'No name introduced'
    if request.GET.get('password'):
        password = request.GET.get('password')
    else:
        password = 'No password introduced'
    if request.GET.get('City'):
        city = request.GET.get('City')
    else:
        city = 'No city introduced'
    if request.GET.get('webserver'):
        webserver = request.GET.get('webserver')
    if request.GET.get('role'):
        role = request.GET.get('role')
    else:
        role = 'No role selected'
    if request.GET.get('sign-on'):
        signOn = request.GET.get('sign-on')
    else:
        signOn = 'No sign-on selected'

    return render(request, 'formGenerator/result.html', {'name': name, 'password': password, 'City': city, 'webserver': webserver, 'role': role, 'signOn': signOn})