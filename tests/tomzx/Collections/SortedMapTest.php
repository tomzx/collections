<?php

namespace tomzx\Collections\Test;

use tomzx\Collections\SortedMap;

class SortedMapTest extends \PHPUnit_Framework_TestCase
{
	public function testItIsInstantiable()
	{
		$this->assertInstanceOf('\tomzx\Collections\SortedMap', new SortedMap());
	}
}
