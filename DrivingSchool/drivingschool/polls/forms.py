from django import forms
from django.contrib.auth.forms import UserCreationForm
from .models import User, Appointment, Student

class LoginForm(forms.Form):
    username = forms.CharField(
        widget=forms.TextInput(attrs={"class": "form-control"})
    )
    password = forms.CharField(
        widget=forms.PasswordInput(attrs={"class": "form-control"})
    )





class AppointmentForm(forms.ModelForm):
    student = forms.ModelChoiceField(queryset=Student.objects.all(), required=True, to_field_name="user")

    date = forms.DateTimeField(
        widget=forms.DateTimeInput(attrs={'type': 'datetime-local'}),
        input_formats=['%Y-%m-%dT%H:%M'],
    )

    class Meta:
        model = Appointment
        fields = ['date', 'location', 'student']



class SignUpForm(UserCreationForm):
    username = forms.CharField(
        widget=forms.TextInput(attrs={"class": "form-control"})
    )
    password1 = forms.CharField(
        widget=forms.PasswordInput(attrs={"class": "form-control"})
    )
    password2 = forms.CharField(
        widget=forms.PasswordInput(attrs={"class": "form-control"})
    )
    email = forms.EmailField(
        widget=forms.EmailInput(attrs={"class": "form-control"})
    )

    class Meta:
        model = User
        fields = ('username', 'email', 'password1', 'password2', 'is_secretary', 'is_instructor', 'is_student')
