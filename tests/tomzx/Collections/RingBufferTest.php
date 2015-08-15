<?php

namespace tomzx\Collections\Test;

use tomzx\Collections\RingBuffer;

class RingBufferTest extends \PHPUnit_Framework_TestCase {
	public function testItIsInstantiable()
	{
		$this->assertInstanceOf('\tomzx\Collections\RingBuffer', new RingBuffer(1));
	}

	public function testSize()
	{
		$ringBuffer = new RingBuffer(2);

		$this->assertSame(0, $ringBuffer->size());

		$ringBuffer->push(1);

		$this->assertSame(1, $ringBuffer->size());

		$ringBuffer->push(1);

		$this->assertSame(2, $ringBuffer->size());

		$ringBuffer->push(1);

		$this->assertSame(2, $ringBuffer->size());

		$ringBuffer->pop();

		$this->assertSame(1, $ringBuffer->size());
	}

	public function testEmpty()
	{
		$ringBuffer = new RingBuffer(2);

		$this->assertTrue($ringBuffer->isEmpty());

		$ringBuffer->push(1);

		$this->assertFalse($ringBuffer->isEmpty());

		$ringBuffer->pop();

		$this->assertTrue($ringBuffer->isEmpty());
	}

	public function testTop()
	{
		$ringBuffer = new RingBuffer(2);

		$this->assertSame(null, $ringBuffer->top());

		$ringBuffer->push(1);

		$this->assertSame(1, $ringBuffer->top());

		$ringBuffer->push(2);

		$this->assertSame(2, $ringBuffer->top());

		$ringBuffer->push(3);

		$this->assertSame(3, $ringBuffer->top());

		$ringBuffer->pop();

		$this->assertSame(2, $ringBuffer->top());

		$ringBuffer->pop();

		$this->assertSame(null, $ringBuffer->top());
	}

	public function testPop()
	{
		$ringBuffer = new RingBuffer(2);

		$this->assertSame(null, $ringBuffer->pop());

		$ringBuffer->push(1);

		$this->assertSame(1, $ringBuffer->pop());
		$this->assertSame(true, $ringBuffer->isEmpty());
		$this->assertSame(0, $ringBuffer->size());
	}

	public function testPush()
	{
		$ringBuffer = new RingBuffer(2);

		$ringBuffer->push(1);

		$this->assertSame(false, $ringBuffer->isEmpty());
		$this->assertSame(1, $ringBuffer->size());
		$this->assertSame(1, $ringBuffer->top());

		$ringBuffer->push(2);

		$this->assertSame(false, $ringBuffer->isEmpty());
		$this->assertSame(2, $ringBuffer->size());
		$this->assertSame(2, $ringBuffer->top());

		$ringBuffer->push(3);

		$this->assertSame(false, $ringBuffer->isEmpty());
		$this->assertSame(2, $ringBuffer->size());
		$this->assertSame(3, $ringBuffer->top());
	}
}
