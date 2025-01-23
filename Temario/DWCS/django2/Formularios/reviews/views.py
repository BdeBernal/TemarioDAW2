from django.shortcuts import render
from django.http import HttpResponse, HttpResponseRedirect


# Create your views here.
def review(request):
    if request.method == 'POST':
        username = request.POST['username']
        return HttpResponseRedirect('/thank-you')
    return render(request, 'review.html')

def thank_you(request):
    return render(request, 'thank_you.html')