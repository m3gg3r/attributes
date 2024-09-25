<?php
namespace App\Entity;

use Symfony\Component\Validator\Constraints as Assert;

class User
{
    #[Assert\NotBlank]
    #[Assert\Email]
    private $email;

    // Getter und Setter
}
