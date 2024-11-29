def divide_numbers(num, dem):
    if dem == 0:
        raise ZeroDivisionError("Cannot divide by zero")
    return num / dem

try:
    print(divide_numbers(2, 2))
    print(divide_numbers(2, 0))
except ZeroDivisionError as err:
    print(f"{err}")
