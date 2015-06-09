<?php

namespace tomzx\Collections\Test;

use tomzx\Collections\Vector;

class VectorTest extends \PHPUnit_Framework_TestCase
{
	public function testItIsInstantiable()
	{
		$this->assertInstanceOf('\tomzx\Collections\Vector', new Vector());
	}
}
