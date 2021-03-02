from django.db import models


# Create your models here.
class Modelo_Inicio(models.Model):
    quien = models.CharField(max_length=1000)
    mision = models.CharField(max_length=1000)
    vision = models.CharField(max_length=1000)
    foto1 = models.ImageField(upload_to='img/inicio')
    foto2 = models.ImageField(upload_to='img/inicio')



class Modelo_Productos(models.Model):
    
    imagen = models.ImageField(upload_to='img/productos')
    nombre = models.CharField(max_length=500)
    descripsión = models.CharField(max_length=1000)
    presió = models.IntegerField()