<?php

namespace tomzx\Collections\Test;

use tomzx\Collections\ArrayList;

class ArrayListTest extends \PHPUnit_Framework_TestCase
{
	public function testItIsInstantiable()
	{
		$this->assertInstanceOf('\tomzx\Collections\ArrayList', new ArrayList());
	}
}
