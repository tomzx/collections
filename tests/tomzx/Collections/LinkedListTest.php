<?php

namespace tomzx\Collections\Test;

use tomzx\Collections\LinkedList;

class LinkedListTest extends \PHPUnit_Framework_TestCase
{
	public function testItIsInstantiable()
	{
		$this->assertInstanceOf('\tomzx\Collections\LinkedList', new LinkedList());
	}
}
