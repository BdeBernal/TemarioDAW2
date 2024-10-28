class Calculator:
    numberOfObjects = 0

    def __init__(self, num1, num2):
        if not isinstance(num1, int) or not isinstance(num2, int):
            raise ValueError("Los valores deben ser enteros")
        else:
            self.num1 = num1
            self.num2 = num2
            self.numberOfObjects += 1

    def suma(self):
        return self.num1 + self.num2
    
    def __str__(self):
        return f"Num1 = {self.num1}, Num2 = {self.num2})"

firstCalcule = Calculator(0, 0)
firstCalcule.num1 = 5
firstCalcule.num2 = 15
print(f"First value = {firstCalcule.num1}, Second value = {firstCalcule.num2}")

secondCalcule = Calculator(12, 6)
print(f"{secondCalcule}")
print(f"Suma = {secondCalcule.suma()}")