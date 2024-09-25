<?php
#[Attribute]
class Inject
{
    public function __construct(public string $dependency) {}
}

class Service
{
    #[Inject(Dependency::class)]
    private $dependency;

    // Code hier
}
