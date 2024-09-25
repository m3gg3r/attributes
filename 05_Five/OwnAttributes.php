<?php
#[Attribute (Attribute::TARGET_CLASS)]
class MyClassAttribute {}

#[Attribute(Attribute::TARGET_METHOD)]
class MyMethodAttribute {}

#[Attribute(Attribute::TARGET_PROPERTY)]
class MyPropertyAttribute {}

#[Attribute(Attribute::TARGET_PARAMETER)]
class MyParameterAttribute {}

#[Attribute(Attribute::TARGET_FUNCTION)]
class MyFunctionAttribute {}

#[Attribute(Attribute::TARGET_CLASS_CONSTANT)]
class MyConstantAttribute {}

#[Attribute(Attribute::TARGET_ALL)]
class MyUniversalAttribute {}

#[Attribute(Attribute::TARGET_CLASS | Attribute::TARGET_METHOD)]
class MySpecificAttribute {}

#[Attribute(Attribute::TARGET_METHOD | Attribute::IS_REPEATABLE)]
class MyRepeatableAttribute {}

#[MyClassAttribute]
class ExampleClass {

    #[MyConstantAttribute]
    const MY_CONSTANT = 'value';

    #[MyPropertyAttribute]
    private $property;

    #[MyMethodAttribute]
    #[MyRepeatableAttribute]
    #[MyRepeatableAttribute]
    public function exampleMethod() {}
}

#[MyFunctionAttribute]
function exampleFunction(#[MyParameterAttribute] $parameter) {}
