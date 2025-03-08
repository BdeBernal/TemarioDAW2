from django.contrib import admin
from .models import Student, Degree
# Register your models here.
class StudentAdmin(admin.ModelAdmin):
    prepopulated_fields = {"slug": ("surname", ) }
    list_display = ("name", "surname", "degree")
    list_filter = ("name", "surname")

admin.site.register(Student,StudentAdmin)
admin.site.register(Degree)
