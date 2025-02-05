from django.urls import path

from . import views

urlpatterns = [
     path("", views.ReviewView.as_view()),
     path("thank-you", views.ThankYouView.as_view()),
     path("reviews", views.ReviewListView.as_view()),
     path("reviews/<id>", views.SingleReviewView.as_view()),
     path("student", views.StudentView.as_view()),
     path("studentList", views.StudentListView.as_view()),
]
