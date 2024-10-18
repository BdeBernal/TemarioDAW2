year = 2000
name = "Nick"
print(f"My name is {name}")

# One Line Comment
""" Multiple Lines Comment """

def OddEven(numero = 0): # Valor por defecto
    if numero % 2 == 0 : # No hay {} ni ; en lugar :
        return True
    else :
        return False

print(OddEven(5))