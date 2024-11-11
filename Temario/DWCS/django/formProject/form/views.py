from django.shortcuts import render
from django.http import HttpResponse
# Create your views here.

def home(request):
    return render(request, 'formGenerator/home.html')

def result(request):

    ## NAME input
    if request.GET.get('name'):
        name = request.GET.get('name')
    else:
        name = 'No name introduced'

    ## PASSWORD input
    if request.GET.get('password'):
        password = request.GET.get('password')
    else:
        password = 'No password introduced'

    ## CITY input
    if request.GET.get('City'):
        city = request.GET.get('City')
    else:
        city = 'No city introduced'

    ## WEB SERVER input
    if request.GET.get('webserver'):
        webserver = request.GET.get('webserver')

    ## ROLE input
    if request.GET.get('role'):
        role = request.GET.get('role')
    else:
        role = 'No role selected'

    ## SIGN ON input
    signOn = ''
    if request.GET.get('mail'):
        signOn += request.GET.get('mail') + " "
    if request.GET.get('payroll'):
        signOn += request.GET.get('payroll') + " "
    if request.GET.get('selfservice'):
        signOn += request.GET.get('selfservice') + " "

    return render(request, 'formGenerator/result.html', {'name': name, 'password': password, 'City': city, 'webserver': webserver, 'role': role, 'signOn': signOn})