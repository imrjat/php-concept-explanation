# PHP Traits, Interfaces, and Abstract Classes Example

This project demonstrates the use of traits, interfaces, and abstract classes in PHP through a simple geometry-themed example.

## Concepts Covered

1. **Traits**: Traits are a mechanism for code reuse in single inheritance languages like PHP. They allow you to reuse sets of methods freely in several independent classes living in different class hierarchies.
2. **Interfaces**: Interfaces define a contract for classes that implement them. They specify what methods a class must implement, but don't provide the implementation.
3. **Abstract Classes and Methods**: Classes that cannot be instantiated and may contain abstract methods. Abstract methods are declared, but not implemented in the abstract class. Classes that extend an abstract class must implement all its abstract methods.



## Project Structure

The project consists of a single PHP file containing the following components:

learn-interface-abtract-trait-concept/
├── AbstractClasses
│ └── Product.php
├── Classes
│ ├── ElectronicProduct.php
│ └── Order.php
├── Interfaces
│ └── Discountable.php
├── Traits
│ └── Loggable.php
├── index.php
└── README.md


## Concepts

## Abstract Classes

- **Product.php**: This file contains the abstract class `Product` which defines the blueprint for different types of products.

## Classes

- **ElectronicProduct.php**: This file contains the class `ElectronicProduct` which extends the `Product` abstract class.
- **Order.php**: This file contains the class `Order` which manages product orders.

## Interfaces

- **Discountable.php**: This file contains the `Discountable` interface which defines the method for applying discounts.

## Traits

- **Loggable.php**: This file contains the `Loggable` trait which provides logging functionality to classes that use it.

## Index

- **index.php**: The entry point of the application demonstrating how to use the classes, interfaces, and traits.