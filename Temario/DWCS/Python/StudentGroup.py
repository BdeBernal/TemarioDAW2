class Person:
    def __init__(self, id, name, age):
        self.id = id
        self.name = name
        self.age = age

    def __str__(self):
        return f'[Name={self.name}, age={self.age}]'


class Student:
    def __init__(self, id, person, degree):
        self.id = id
        self.person = person
        self.degree = degree

    def __str__(self):
        return f'Person={self.person}'


class StudentGroup:
    def __init__(self, id, groupName, students=None):
        self.id = id
        self.groupName = groupName
        self.students = students if students is not None else []

    def __str__(self):
        students_str = ', '.join(str(student) for student in self.students)
        return f'StudentGroup(id={self.id}, groupName={self.groupName}, students=[{students_str}])'
    
# Create three different students
person1 = Person(1, "Alice", 20)
person2 = Person(2, "Bob", 21)
person3 = Person(3, "Charlie", 22)

student1 = Student(1, person1, "Computer Science")
student2 = Student(2, person2, "Mathematics")
student3 = Student(3, person3, "Physics")

# Show the value of the attributes on the screen
print(student1)
print(student2)
print(student3)

# Create a student group that contains the previously created students
student_group = StudentGroup(1, "Group A", [student1, student2, student3])

# Show all the information of the students in this group
print(student_group)

# Remove a student from this group
student_group.students.remove(student2)

# Show the information of the group on the screen
print(student_group)

# Add a new student to this group
person4 = Person(4, "Diana", 23)
student4 = Student(4, person4, "Biology")
student_group.students.append(student4)

# Show the information of the group on the screen
print(student_group)