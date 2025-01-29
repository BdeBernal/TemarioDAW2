from django import forms

class ReviewForm(forms.Form):
    username = forms.CharField(label='Name', max_length=100, error_messages={'required': 'Please enter your name'})
    password = forms.CharField(label='Password', widget=forms.PasswordInput())
    city = forms.CharField(label='City of employment', max_length=100)
    webserver = forms.ChoiceField(
        label='Web server',
        choices=[
            ('apache', 'Apache'),
            ('nginx', 'Nginx'),
            ('iis', 'IIS')
        ]
    )
    role = forms.ChoiceField(
        label='Role',
        choices=[
            ('admin', 'Admin'),
            ('engineer', 'Engineer'),
            ('manager', 'Manager'),
            ('guest', 'Guest')
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