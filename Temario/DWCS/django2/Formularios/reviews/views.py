from django.shortcuts import render
from django.http import HttpResponse, HttpResponseRedirect
from .forms import ReviewForm
from .models import Review

# Create your views here.
def review(request):
    if request.method == 'POST':
        form = ReviewForm(request.POST)

        if form.is_valid():
            review = Review(
                username=form.cleaned_data['username'], 
                password=form.cleaned_data['password'],
                city=form.cleaned_data['city'],
                webserver=form.cleaned_data['webserver'],
                role=form.cleaned_data['role']
            )
            review.save()
            return HttpResponseRedirect('/thank-you', {'review': review})
    else:
        form = ReviewForm()   

    return render(request, 'review.html', {'form': form})

def thank_you(request):
    return render(request, 'thank_you.html')