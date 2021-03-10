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

class Modelo_Proyecto(models.Model):
    titulo = models.CharField(max_length=1000)
    informacion = models.CharField(max_length=1000)
    etapa_titulo_1 = models.CharField(max_length=1000, blank=True, null=True)
    etapa_texto_1 = models.CharField(max_length=1000, blank=True, null=True)
    etapa_titulo_2 = models.CharField(max_length=1000, blank=True, null=True)
    etapa_texto_2 = models.CharField(max_length=1000, blank=True, null=True)
    etapa_titulo_3 = models.CharField(max_length=1000, blank=True, null=True)
    etapa_texto_3 = models.CharField(max_length=1000, blank=True, null=True)
    titulo_imagen = models.CharField(max_length=1000)
    imagen_1 = models.ImageField(upload_to='img/proyecto')
    imagen_2 = models.ImageField(upload_to='img/proyecto')
    imagen_suptitulo_1 = models.CharField(max_length=1000)
    imagen_suptitulo_2 = models.CharField(max_length=1000)