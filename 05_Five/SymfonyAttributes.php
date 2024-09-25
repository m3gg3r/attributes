<?php

// Routing
#[Route('/path', name: 'example_route')]
public function exampleAction() {}

// Validierung
#[Assert\NotBlank]
private $property;
