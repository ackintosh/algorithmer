<?php
require_once 'Cryptography.php';

class CryptographyTest extends PHPUnit_Framework_TestCase
{

    public function testEncrypt()
    {
        $crypt = new Cryptography();
        $expect = 12;
        $this->assertEquals($expect, $crypt->encrypt(array(1,2,3)));
    }

    public function testEncrypt_2()
    {
        $crypt = new Cryptography();
        $expect = 36;
        $this->assertEquals($expect, $crypt->encrypt(array(1,3,2,1,1,3)));
    }

    public function testEncrypt_3()
    {
        $crypt = new Cryptography();
        $expect = 986074810223904000;
        $this->assertEquals($expect, $crypt->encrypt(array(1000,999,998,997,996,995)));
    }
}
