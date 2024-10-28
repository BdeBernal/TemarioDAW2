class Car:

    description = "Class attribute" # Atributo de clase

    def __init__(self, color, power) :
        self.color = color
        self.power = power

    def __str__(self):
        return f"{self.color} -> {self.power}"

firstCar = Car ("red", 500)

firstCar.color = "Black"
firstCar.brand = "bmw" # Crear nuevos atributos pero no dentro del toString

print(firstCar) # Mostrar atributos dentro del toString

print(firstCar.brand) # Mostrar atributo creado

del firstCar.color # Borrar atributo
del firstCar # Borrar objeto
