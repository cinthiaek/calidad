<?php

namespace Tests;

use App\Dummy;

class ConsumerTest extends \PHPUnit_Framework_TestCase
{
    /**
    * Probar nombre completo
    */
    public function testNombreCompleto()
    {
        $consumer = new Dummy();
$consumer->setNombre('Cinthia');
$consumer->setApellido('Ek');
$result = $consumer->nombreCompleto();
$this->assertEquals('Cinthia Ek', $result);

    }

}
