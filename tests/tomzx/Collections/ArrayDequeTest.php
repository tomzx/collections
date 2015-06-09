<?php

namespace tomzx\Collections\Test;

use tomzx\Collections\ArrayDeque;

class ArrayDequeTest extends \PHPUnit_Framework_TestCase
{
	public function testItIsInstantiable()
	{
		$this->assertInstanceOf('\tomzx\Collections\ArrayDeque', new ArrayDeque());
	}
}
