# 4 characteristics of OOP

1. Encapsulation : means that the properties and methods of a class are bundled together, and access to them can be controlled using visibility keywords (public, private, protected).

- public: accessible from anywhere
- private: accessible only within the class itself
- protected: accessible within the class and its subclasses

2. Inheritance: means that a class can inherit properties and methods from another class, allowing for code reuse and the creation of a hierarchy of classes. In PHP, this is done using the `extends` keyword.

- parent class: the class being inherited from
- child class: the class that inherits from the parent class

3. Polymorphism: means that objects of different classes can be treated as objects of a common superclass. In PHP, this can be achieved through method overriding and interfaces.

- method overriding: a child class can provide a specific implementation of a method that is already defined in its parent class.
- interface: allows different classes to implement the same set of methods, enabling polymorphic behavior.

4. Abstraction: means hiding the complex implementation details and showing only the essential features of an object. In PHP, this can be achieved using abstract classes and interfaces.

- abstract class: a class that cannot be instantiated and may contain abstract methods (methods without implementation) that must be implemented by subclasses.
- interface: a contract that defines methods that must be implemented by any class that implements the interface.
