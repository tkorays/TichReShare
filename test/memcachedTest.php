<?php

include "../application/libraries/memcached.php";

class memcachedTest extends PHPUnit_Framework_TestCase {

    public function testGet(){
        $mem = new Memcached();
        $this->assertEquals('value',$mem->get('value'));
    }
}
