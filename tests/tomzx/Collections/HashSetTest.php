<?php

namespace tomzx\Collections\Test;

use tomzx\Collections\HashSet;

class HashSetTest extends \PHPUnit_Framework_TestCase
{
	public function testItIsInstantiable()
	{
		$this->assertInstanceOf('\tomzx\Collections\HashSet', new HashSet());
	}
}
