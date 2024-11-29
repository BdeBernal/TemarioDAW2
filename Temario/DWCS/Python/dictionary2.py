import json

file_path = "/media/MV-Linux/MaquinasVirtuais/a23bernalrc/Repositorios/TemarioDAW2/Temario/DWCS/Python/catalog.json"

with open(file_path, "r") as archivo:
    catalogo = json.load(archivo)

print("Dictionary")
for libro in catalogo["catalog"]["book"]:
    for clave, valor in libro.items():
        print(f"{clave} -> {valor}")
    print("="*20)

print("Titulos")
for libro in catalogo["catalog"]["book"]:
    print(libro["title"])
    print("="*20)

def findValue(dictionary, book):
    for libro in dictionary["catalog"]["book"]:
        if libro["title"] == book:
            return libro
    return None

print("Busqueda")
book = findValue(catalogo, "XML Developer's Guide")
print(book)