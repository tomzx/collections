<?php

namespace tomzx\Collections\Test\EvictionPolicy;

use tomzx\Collections\EvictionPolicy\Random;

class RandomTest extends \PHPUnit_Framework_TestCase {
	/**
	 * @var \tomzx\Collections\EvictionPolicy\Random
	 */
	protected $evictionPolicy;

	public function setUp()
	{
		parent::setUp();

		$this->evictionPolicy = new Random();
	}

	/**
	 * @dataProvider removeProvider
	 */
	public function testRemove($inputs, $outputs)
	{
		foreach ($inputs as $input) {
			$this->evictionPolicy->touch($input);
		}

		$outputs = array_flip($outputs);
		while ( ! empty($outputs)) {
			$key = $this->evictionPolicy->remove();
			$this->assertArrayHasKey($key, $outputs);
			unset($outputs[$key]);
		}
		$this->assertSame(null, $this->evictionPolicy->remove());
	}

	public function removeProvider()
	{
		return [
			[[0], [0]],
			[[0, 1], [1, 0]],
			[[1, 0], [0, 1]],
			[[1, 2, 3, 4, 5], [5, 4, 3, 2, 1]],
		];
	}

	public function testTouch()
	{
		$this->evictionPolicy->touch(0);
	}
}
