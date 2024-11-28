productos = {0: 'potatoes', 1: 'tomatoes', 3: 'onions', 4: 'garlic'}
masProductos = {5: 'carrots', 6: 'popcorn'}

def showDictionary(array):
    for key, value in array.items():
        print(f"Clave = {key}, Valor = {value}")

# Muestra el diccionario completo
showDictionary(productos)

def findValue(array, key):
    for clave, valor in array.items():
        if (clave == key):
            print(f"El valor de {key} es {valor}")

# Busca a través de la clave dada
findValue(productos, 3)

def mergeDictionaries(array1, array2):
    for clave, valor in array2.items():
        array1.update({clave: valor})

# Junto dos diccionarios
mergeDictionaries(productos, masProductos)

showDictionary(productos)