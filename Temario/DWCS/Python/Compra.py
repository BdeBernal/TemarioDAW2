class Person:
    
    def __str__(self):
        return f"[Nombre = {self.name}, email = {self.email}, teléfono = {self.telephone}]"

    def __init__(self, name, email, telephone):
        self.name = name
        self.email = email
        self.telephone = telephone
    
class Product:
    
    def __str__(self):
        return f"[Nombre = {self.name}, descripción = {self.description}, precio = {self.price}, imagen = {self.image}]"

    def __init__(self, name, description, price, image):
        self.name = name
        self.description = description
        self.price = price
        self.image = image

class Order:

    def __str__(self):
        productos_str = ', '.join(str(producto) for producto in self.listaProductos)
        return f"{self.cliente}, Productos = [{productos_str}], fecha = {self.date}"

    def __init__(self, date, listaProductos, cliente):
        self.date = date
        self.listaProductos = listaProductos
        self.cliente = cliente

Persona1 = Person("Paco", "pacotron1234@gmail.com", 666777888)
listaProductos = [Product("Agua", "Mineralización muy débil", 4.99, "imagen1.png"), Product("Hamburguesa", "Muy rica con queso", 8.99, "imagen2.jpg")]
Pedido = Order("12/12/2025", listaProductos, Persona1)

print(f"{Pedido}")