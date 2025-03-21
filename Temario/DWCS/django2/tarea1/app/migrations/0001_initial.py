# Generated by Django 4.2.19 on 2025-03-06 12:43

import django.core.validators
from django.db import migrations, models
import django.db.models.deletion


class Migration(migrations.Migration):

    initial = True

    dependencies = [
    ]

    operations = [
        migrations.CreateModel(
            name='Degree',
            fields=[
                ('id', models.BigAutoField(auto_created=True, primary_key=True, serialize=False, verbose_name='ID')),
                ('name', models.CharField(max_length=50)),
                ('description', models.CharField(max_length=200)),
                ('years', models.IntegerField(validators=[django.core.validators.MinValueValidator(0), django.core.validators.MaxValueValidator(4)])),
            ],
        ),
        migrations.CreateModel(
            name='Student',
            fields=[
                ('id', models.BigAutoField(auto_created=True, primary_key=True, serialize=False, verbose_name='ID')),
                ('name', models.CharField(max_length=50)),
                ('surname', models.CharField(max_length=50)),
                ('picture', models.ImageField(upload_to='images/')),
                ('age', models.IntegerField(validators=[django.core.validators.MinValueValidator(1970), django.core.validators.MaxValueValidator(2010)])),
                ('slug', models.SlugField(default='', unique=True)),
                ('finished_degree', models.BooleanField(default=False)),
                ('degree', models.ForeignKey(null=True, on_delete=django.db.models.deletion.CASCADE, related_name='fkdegree', to='app.degree')),
            ],
        ),
    ]
