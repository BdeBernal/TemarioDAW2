# Generated by Django 4.2.18 on 2025-01-29 10:03

from django.db import migrations, models


class Migration(migrations.Migration):

    dependencies = [
        ('reviews', '0001_initial'),
    ]

    operations = [
        migrations.RemoveField(
            model_name='review',
            name='rating',
        ),
        migrations.RemoveField(
            model_name='review',
            name='review',
        ),
        migrations.AddField(
            model_name='review',
            name='city',
            field=models.CharField(max_length=100, null=True),
        ),
        migrations.AddField(
            model_name='review',
            name='password',
            field=models.CharField(max_length=100, null=True),
        ),
        migrations.AddField(
            model_name='review',
            name='role',
            field=models.CharField(max_length=100, null=True),
        ),
        migrations.AddField(
            model_name='review',
            name='signon',
            field=models.CharField(max_length=100, null=True),
        ),
        migrations.AddField(
            model_name='review',
            name='webserver',
            field=models.CharField(max_length=100, null=True),
        ),
    ]
