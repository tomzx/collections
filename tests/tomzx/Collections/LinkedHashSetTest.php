<?php

namespace tomzx\Collections\Test;

use tomzx\Collections\LinkedHashSet;

class LinkedHashSetTest extends \PHPUnit_Framework_TestCase
{
	public function testItIsInstantiable()
	{
		$this->assertInstanceOf('\tomzx\Collections\LinkedHashSet', new LinkedHashSet());
	}
}
