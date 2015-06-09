<?php

namespace tomzx\Collections\Test;

use tomzx\Collections\PriorityQueue;

class PriorityQueueTest extends \PHPUnit_Framework_TestCase
{
	public function testItIsInstantiable()
	{
		$this->assertInstanceOf('\tomzx\Collections\PriorityQueue', new PriorityQueue());
	}
}
