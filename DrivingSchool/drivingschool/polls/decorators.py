from django.shortcuts import redirect
from functools import wraps

def student_required(view_func):
    @wraps(view_func)
    def _wrapped_view(request, *args, **kwargs):
        if request.user.is_authenticated and request.user.is_student:
            return view_func(request, *args, **kwargs)
        return redirect('connexion')
    return _wrapped_view

def secretary_required(view_func):
    @wraps(view_func)
    def _wrapped_view(request, *args, **kwargs):
        if request.user.is_authenticated and request.user.is_secretary:
            return view_func(request, *args, **kwargs)
        return redirect('connexion')
    return _wrapped_view

def instructor_required(view_func):
    @wraps(view_func)
    def _wrapped_view(request, *args, **kwargs):
        if request.user.is_authenticated and request.user.is_instructor:
            return view_func(request, *args, **kwargs)
        return redirect('connexion')
    return _wrapped_view
