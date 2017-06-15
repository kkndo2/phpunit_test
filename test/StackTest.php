<?php
/**
 * Created by PhpStorm.
 * User: kkndo2
 * Date: 2017-06-15
 * Time: 오후 6:39
 */

use PHPUnit\Framework\TestCase;
use Kkndo2\Apple;
class StackTest extends TestCase
{
    public function testPushAndPop()
    {
        $stack = [];
        $this->assertEquals(0, count($stack));

        array_push($stack, 'foo');
        $this->assertEquals('foo', $stack[count($stack)-1]);
        $this->assertEquals(1, count($stack));

        $this->assertEquals('foo', array_pop($stack));
        $this->assertEquals(0, count($stack));

        $apple = new Apple();
    }
}
