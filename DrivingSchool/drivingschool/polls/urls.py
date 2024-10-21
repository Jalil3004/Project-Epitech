from django.urls import path
from . import views
# app_name = "polls"
urlpatterns = [

    path("", views.index, name="index"),
    path("inscription/", views.inscription, name="inscription"),
    path("connexion/", views.connexion, name="connexion"),
    path('instructor/', views.instructor, name='instructor'),
    path('secretary/', views.secretary, name='secretary'),
    path('student/', views.student, name='student'),
]
