from django.urls import path

from . import views

urlpatterns = [
    # Views de Review
     path("", views.ReviewView.as_view()),
     path("reviews", views.ReviewListView.as_view()),
     path("reviews/<id>", views.SingleReviewView.as_view()),

     # Views de Student
     path("student", views.StudentView.as_view()),
     path("students", views.StudentListView.as_view()),
     path("update-students/", views.UpdateStudentsView.as_view(), name="update_students"),

     # Página de confirmación de formularios
     path("thank-you", views.ThankYouView.as_view()),

]
