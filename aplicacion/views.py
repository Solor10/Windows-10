from django.shortcuts import render
from aplicacion.models import Modelo_Inicio, Modelo_Productos, Modelo_Proyecto


def view_inicio(request):

    viusalizar = Modelo_Inicio.objects.all()
    
    visual = {'ver': viusalizar}

    return render(request, 'aplicacion/inicio.html', visual)

def view_privacidad(request):

    return render(request, 'aplicacion/privacy.html')

def view_contacto(request):
    
    return render(request, 'aplicacion/contactos.html')

def view_productos(request):
    produc = Modelo_Productos.objects.all()
    datos = {'products': produc}
    return render(request, 'aplicacion/productos.html', datos)

def view_proyectos(request):
    proyec = Modelo_Proyecto.objects.all()
    datos = {'pro': proyec}
    return render(request, 'aplicacion/proyectos.html', datos)



# Create your views here.
