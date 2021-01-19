<?php
require "vendor/autoload.php";
require "IPLSocial.php";
use PHPUnit\Framework\TestCase;

class IPLSocialTest extends TestCase
{
   public function test_simple_email_form_shouldReturnTrue(){
        $IPLSocial = new IPLSocial();
        $actual = $IPLSocial->validateEmail("decoster.corentin@gmail.com");

        $this->assertEquals(true,$actual,"test with a correct mail");
    }
}
