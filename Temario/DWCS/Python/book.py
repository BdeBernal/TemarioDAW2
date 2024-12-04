class Book:
    def __init__(self, title, author, status=True):
        self.title = title
        self.author = author
        self.status = status

    def __str__(self):
        return f"{self.title} by {self.author} is {'available' if self.status else 'not available'}"

class Library:
    def __init__(self):
        self.listaLibros = []

    def addBook(self, book):
        self.listaLibros.append(book)

    def listAvailableBooks(self):
        return [book for book in self.listaLibros if book.status]

    def borrowBook(self, title):
        for book in self.listaLibros:
            if book.title == title:
                if book.status:
                    book.status = False
                    return book
                else:
                    raise BookNotAvailableError(f"The book '{title}' is not available.")
        raise BookNotFoundException(f"The book '{title}' was not found in the library.")

    def returnBook(self, title):
        for book in self.listaLibros:
            if book.title == title:
                if not book.status:
                    book.status = True
                    return book
                else:
                    raise BookNotAvailableError(f"The book '{title}' was not borrowed.")
        raise BookNotFoundException(f"The book '{title}' was not found in the library.")

class BookNotAvailableError(Exception):
    def __init__(self, message):
        super().__init__(message)

class BookNotFoundException(Exception):
    def __init__(self, message):
        super().__init__(message)

# Example usage:
library = Library()
book1 = Book("1984", "George Orwell")
book2 = Book("To Kill a Mockingbird", "Harper Lee")
library.addBook(book1)
library.addBook(book2)

print("Available books:")
for book in library.listAvailableBooks():
    print(book)

try:
    library.borrowBook("1984")
    print("\nAfter borrowing '1984':")
    for book in library.listAvailableBooks():
        print(book)
except (BookNotAvailableError, BookNotFoundException) as e:
    print(e)

try:
    library.returnBook("1984")
    print("\nAfter returning '1984':")
    for book in library.listAvailableBooks():
        print(book)
except (BookNotAvailableError, BookNotFoundException) as e:
    print(e)