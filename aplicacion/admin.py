from django.contrib import admin
from django.utils.html import format_html
from aplicacion import models

# Register your models here.
@admin.register(models.Modelo_Inicio)
class AdminInicio(admin.ModelAdmin):
    list_display = ('quien', 'mision', 'vision', 'foto1', 'foto2')



@admin.register(models.Modelo_Productos)
class AdminProductos(admin.ModelAdmin):
    list_display = ( 'imagen', 'nombre', 'descripsión', 'presió')


@admin.register(models.Modelo_Proyecto)
class AdminProyecto(admin.ModelAdmin):
    list_display = ( 'titulo')
    

