<?php

namespace App\Tests;

use App\Entity\User;
use PHPUnit\Framework\TestCase;

class UserUnitTest extends TestCase
{
    public function testIsTrue(): void
    {
        $user = new User();

        $user->setEmail('toto@gmail.com')
             ->setPassword('toto')
             ->setPrenom('toto')
             ->setNom('tata')
             ->setTelephone('0123456789');
    
        $this->assertTrue($user->getEmail() === 'toto@gmail.com');
        $this->assertTrue($user->getPassword() === 'toto');
        $this->assertTrue($user->getPrenom() === 'toto');
        $this->assertTrue($user->getNom() === 'tata');
        $this->assertTrue($user->getTelephone() === '0123456789'); 
    }

    public function testIsFalse(): void
    {
        $user = new User();

        $user->setEmail('toto@gmail.com')
             ->setPassword('toto')
             ->setPrenom('toto')
             ->setNom('tata')
             ->setTelephone('0123456789');
    
        $this->assertFalse($user->getEmail() === 'faux@faux.com');
        $this->assertFalse($user->getPassword() === 'faux');
        $this->assertFalse($user->getPrenom() === 'faux');
        $this->assertFalse($user->getNom() === 'faux');
        $this->assertFalse($user->getTelephone() === 'faux'); 
    }
}
