<?php

#[ORM\Entity]
#[ORM\Table(name: 'example')]
class ExampleEntity {
    #[ORM\Column(type: 'integer')]
    private $id;
}
