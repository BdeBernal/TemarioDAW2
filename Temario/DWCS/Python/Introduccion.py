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

class Dog:
    def bark(self) :
        print("bark")

myDog = Dog()

myDog.bark()
myDog.name = "Name"
print(myDog.name)