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

array = ["Paco", "Kiko"]
print(array[1])

array.insert(0, "Matungo")
print(array)

del(array[0])
print(array)

print("Size of the array " + str(len(array)))

cadena = " "
for numero in range(1, 10) :
    cadena = cadena + str(numero) + ", "
print (cadena)

while year < 2010 : 
    print(year)
    year += 1

words = ["a", "b", "c"]
definitions = ["yes", "no", "maybe"]
dictionary = {}

for word in words :
    for definition in definitions :
        dictionary.setdefault(word, definition)
    
print(dictionary)

def datosPersonales(age, name, surname = "Apellido"):
    if name == None :
        name = ""
        print(f"{name}{surname} is {age} years old")
    else :
        print(f"{name} {surname} is {age} years old")

datosPersonales(21, None)

def potencia(int1, int2) :
    if not isinstance(int1, int) or type(int2) != int : # Verifica tipo de dato de entrada
        raise Exception("No son números") # Lanza excepción
    else :
        result = 1
        for _ in range(int2):
            result *= int1
        return result
try:
    print(f"{potencia(2, 3)}")
    print(f"{potencia(2, 'jac')}") # Recoge la excepción
except Exception as e:
    print(e)

def factorial(number) : 
    if number <= 0 :
        raise Exception("Tiene que ser mayor a 0")
    elif type(number) != int:   
        raise Exception("Tiene que ser un número")
    else :
        for i in range(1, number):
            number *= i
        return number
    
try :
    print(f"Factorial de 5 es {factorial(5)}")
    print(f"Factorial de -1 es {factorial(-1)}")
except Exception as e :
    print(e)

def tripleCheck(list):
    for i in range(len(list) - 2):
        if list[i] == list[i + 1] == list[i + 2]:
            return True
    return False

print(tripleCheck([1, 1, 1, 2, 3]))
print(tripleCheck([1, 2, 3, 4, 5, 5,]))

countries = {
    "Italy": "Rome",
    "Luxembourg": "Luxembourg",
    "Belgium": "Brussels",
    "Denmark": "Copenhagen",
    "Finland": "Helsinki",
    "France": "Paris",
    "Slovakia": "Bratislava",
    "Slovenia": "Ljubljana",
    "Germany": "Berlin",
    "Greece": "Athens",
    "Ireland": "Dublin",
    "Netherlands": "Amsterdam",
    "Portugal": "Lisbon",
    "Spain": "Madrid",
    "Sweden": "Stockholm",
    "United Kingdom": "London",
    "Cyprus": "Nicosia",
    "Lithuania": "Vilnius",
    "Czech Republic": "Prague",
    "Estonia": "Tallin",
    "Hungary": "Budapest",
    "Latvia": "Riga",
    "Malta": "Valetta",
    "Austria": "Vienna",
    "Poland": "Warsaw"
}

for country, capital in countries.items():
    print(f"The capital of {country} is {capital}")

