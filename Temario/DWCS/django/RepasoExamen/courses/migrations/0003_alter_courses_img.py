# Generated by Django 4.2.17 on 2024-12-05 13:00

from django.db import migrations, models


class Migration(migrations.Migration):

    dependencies = [
        ('courses', '0002_alter_courses_img'),
    ]

    operations = [
        migrations.AlterField(
            model_name='courses',
            name='img',
            field=models.ImageField(upload_to='imgs/'),
        ),
    ]
