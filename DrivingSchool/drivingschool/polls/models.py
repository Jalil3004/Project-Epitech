from django.db import models
from django.contrib.auth.models import AbstractUser
class User(AbstractUser):
    is_secretary = models.BooleanField('Is Secretary', default=False)
    is_instructor = models.BooleanField('Is Instructor', default=False)
    is_student = models.BooleanField('Is Student', default=False)

class Student(models.Model):
    user = models.OneToOneField(User, on_delete=models.CASCADE, primary_key=True)
    hours_paid = models.PositiveIntegerField(default=0)
    hours_taken = models.PositiveIntegerField(default=0)

    def __str__(self):
        return self.user.username
        
class Appointment(models.Model):
    student = models.ForeignKey(Student, on_delete=models.CASCADE)
    instructor = models.ForeignKey(User, limit_choices_to={'is_instructor': True}, on_delete=models.CASCADE)
    date = models.DateTimeField()
    location = models.CharField(max_length=255)

    def __str__(self):
        return f"{self.date} - {self.instructor.username} - {self.location}"