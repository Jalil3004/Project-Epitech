from django.shortcuts import render, redirect, get_object_or_404
from .forms import SignUpForm, LoginForm
from django.contrib.auth import authenticate, login
# Create your views here.
from .decorators import student_required, secretary_required, instructor_required
from .models import Student, Appointment
from .forms import AppointmentForm
from .models import User



def index(request):
    return render(request, 'polls/index.html')


def inscription(request):
    msg = None
    if request.method == 'POST':
        form = SignUpForm(request.POST)
        if form.is_valid():
            user = form.save()
            if user.is_student:
                Student.objects.create(user=user)  # Créer un enregistrement Student associé
            msg = 'User created'
            return redirect('/connexion')
        else:
            msg = 'Form is not valid'
    else:
        form = SignUpForm()
    return render(request, 'polls/inscription.html', {'form': form, 'msg': msg})

def connexion(request):
    form = LoginForm(request.POST or None)
    msg = None
    if request.method == 'POST':
        if form.is_valid():
            username = form.cleaned_data.get('username')
            password = form.cleaned_data.get('password')
            user = authenticate(username=username, password=password)
            if user is not None:
                login(request, user)
                if user.is_student:
                    return redirect('student')
                elif user.is_secretary:
                    return redirect('secretary')
                elif user.is_instructor:
                    return redirect('instructor')
                elif user.is_admin:
                    return redirect('admin')
            else:
                msg = 'Invalid credentials'
        else:
            msg = 'Error validating form'
    return render(request, 'polls/connexion.html', {'form': form, 'msg': msg})

@student_required
def student(request):
    student = get_object_or_404(Student, user=request.user)
    appointments = Appointment.objects.filter(student=student)
    return render(request, 'polls/student.html', {
        'student': student,
        'appointments': appointments
    })

@secretary_required
def secretary(request):
    return render(request, 'polls/secretary.html')

@instructor_required
def instructor(request):
    instructor_appointments = Appointment.objects.filter(instructor=request.user)

    if request.method == 'POST':
        form = AppointmentForm(request.POST)
        if form.is_valid():
            appointment = form.save(commit=False)
            appointment.instructor = request.user  # Associez l'instructeur connecté au rendez-vous
            appointment.save()
            return redirect('instructor')  # Redirigez après la création du rendez-vous
    else:
        form = AppointmentForm()

    context = {
        'appointments': instructor_appointments,
        'form': form,
    }
    return render(request, 'polls/instructor.html', context)
