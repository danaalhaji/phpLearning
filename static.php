<!-- 
    The PHP static keyword defines static properties and static methods.
A static property/method of a class can be accessed without 
creating an object of that class.

A static property or method is
 accessed by using the scope resolution operator :: between the class name and the property/method name.
 -->

 <?php
class myClass {
    static $myProperty = 42;
    static function myMethod() {
        echo self::$myProperty;
    }
}

myClass::myMethod();
?>