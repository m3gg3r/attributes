<?php
class Service
{
    private $dependency;

    public function __construct(Dependency $dependency)
    {
        $this->dependency = $dependency;
    }
}

// Registrierung im Container:
$container->register(Service::class)
    ->addArgument(new Reference(Dependency::class));
