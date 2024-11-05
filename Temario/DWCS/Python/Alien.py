class Alien:

    name = ""
    numberOfObjects = 0

    def __init__(self, name) -> None:
        self.name = name
        Alien.numberOfObjects += 1

    def getNumberOfAliens():
        return Alien.numberOfObjects
    
    def __str__(self):
        return f"{self.name}"

Paco = Alien("Paco")
print(f"Number of Objects created = {Alien.getNumberOfAliens()} -> {Paco}")

Kike = Alien("Kike")
Jose = Alien("Jose")
print(f"Number of Alines created = {Alien.getNumberOfAliens()}")