<?php

namespace tomzx\Collections\Test;

use tomzx\Collections\Stack;

class StackTest extends \PHPUnit_Framework_TestCase
{
	public function testItIsInstantiable()
	{
		$this->assertInstanceOf('\tomzx\Collections\Stack', new Stack());
	}
}
