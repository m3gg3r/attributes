<?php
#[Attribute]
class RequiresPermission
{
    public function __construct(public string $permission) {}
}

class Controller
{
    #[RequiresPermission('admin')]
    public function index()
    {
        // Code hier
    }
}

// Überprüfung mit Reflection API:
$reflection = new ReflectionMethod(Controller::class, 'index');
$attributes = $reflection->getAttributes(RequiresPermission::class);
foreach ($attributes as $attribute) {
    $instance = $attribute->newInstance();
    echo $instance->permission; // Ausgabe: admin
}
