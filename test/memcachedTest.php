<?php

include "../application/libraries/tk_memcached.php";

class memcachedTest extends PHPUnit_Framework_TestCase {
    /**
     * @dataProvider getProvider
     * @test
     * @param $key key
     * @param $exp expected_value
     */
    public function testGet($key,$exp){
        $this->assertEquals($exp,$key);
    }
    public function getProvider(){
        $mem = new TK_Memcached();

        return array(
            array('ok',$mem->get('ok')),
            array('nmb',$mem->get('nmb')),
            array('fff',$mem->get('fff'))
        );
    }
}
