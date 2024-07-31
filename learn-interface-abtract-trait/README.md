# PHP Traits, Interfaces, and Abstract Classes Example

This project demonstrates the use of traits, interfaces, and abstract classes in PHP through a simple geometry-themed example.

## Concepts Covered

1. **Traits**: Traits are a mechanism for code reuse in single inheritance languages like PHP. They allow you to reuse sets of methods freely in several independent classes living in different class hierarchies.
2. **Interfaces**: Interfaces define a contract for classes that implement them. They specify what methods a class must implement, but don't provide the implementation.
3. **Abstract Classes and Methods**: Classes that cannot be instantiated and may contain abstract methods. Abstract methods are declared, but not implemented in the abstract class. Classes that extend an abstract class must implement all its abstract methods.



## Project Structure

The project consists of a single PHP file containing the following components:

- `Loggable` trait
- `Printable` interface
- `Shape` abstract class
- `Circle` concrete class

## Code Example

```php
// Trait definition
trait Loggable {
    public function log($message) {
        echo "Logging: $message\n";
    }
}

// Interface definition
interface Printable {
    public function print();
}

// Abstract class definition
abstract class Shape {
    // ... (abstract and concrete methods)
}

// Concrete class implementation
class Circle extends Shape implements Printable {
    use Loggable;
    // ... (constructor and method implementations)
}