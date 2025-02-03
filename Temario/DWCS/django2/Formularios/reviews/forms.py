from django import forms
from .models import Review

class ReviewForm(forms.Form): # views
    username = forms.CharField(label='Name', max_length=100, error_messages={'required': 'Please enter your name'})
    password = forms.CharField(label='Password', widget=forms.PasswordInput())
    city = forms.CharField(label='City of employment', max_length=100, error_messages={'required': 'Please enter the city'})
    webserver = forms.ChoiceField(
        label='Web server',
        choices=[
            ('Apache', 'Apache'),
            ('Nginx', 'Nginx'),
            ('IIS', 'IIS')
        ]
    )
    role = forms.ChoiceField(
        label='Role',
        choices=[
            ('Admin', 'Admin'),
            ('Engineer', 'Engineer'),
            ('Manager', 'Manager'),
            ('Guest', 'Guest')
        ],
        widget=forms.RadioSelect()
    )
    signon = forms.MultipleChoiceField(
        label='Sign on',
        choices=[
            ('Mail', 'Mail'),
            ('Payroll', 'Payroll'),
            ('Self-service', 'Self-service')
        ],
        widget=forms.CheckboxSelectMultiple()
    )
# class ReviewForm(forms.ModelForm):
#     class Meta:
#         model = Review
#         fields = ['username', 'password', 'city', 'webserver', 'role', 'signon']
#         labels = {
#             'username': 'Name',
#             'password': 'Password',
#             'city': 'City of employment',
#             'webserver': 'Web server',
#             'role': 'Role',
#             'signon': 'Sign on'
#         }
#         widgets = {
#             'password': forms.PasswordInput(),
#             'webserver': forms.Select(),
#             'role': forms.RadioSelect(),
#             'signon': forms.RadioSelect()
#         }
#         error_messages = {
#             'username': {
#                 'required': 'Please enter your name'
#             },
#             'city': {
#                 'required': 'Please enter the city'
#             }
#         }