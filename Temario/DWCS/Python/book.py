class Book:

    def __str__(self):
        return "{self.title} by {self.author} is {self.status}"
    
    def __init__(self, title, author, status):
        self.title = title
        self.author = author
        self.status = status

class Library:

    def __init__(self, listaLibros):
        self.listaLibros = listaLibros

    def borrowBook(title):
        pass
    
    def returnBook(title):
        pass    
    
class BookNotAvailableError(Exception):
    def __init__(self, message):
        super().__init__(message)

class BooknotFoundException(Exception):
    def __init__(self, message):
        super().__init__(message)

