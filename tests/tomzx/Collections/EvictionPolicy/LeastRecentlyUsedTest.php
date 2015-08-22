<?php

namespace tomzx\Collections\Test\EvictionPolicy;

use tomzx\Collections\EvictionPolicy\LeastRecentlyUsed;

class LeastRecentlyUsedTest extends \PHPUnit_Framework_TestCase {
	/**
	 * @var \tomzx\Collections\EvictionPolicy\LeastRecentlyUsed
	 */
	protected $evictionPolicy;

	public function setUp()
	{
		parent::setUp();

		$this->evictionPolicy = new LeastRecentlyUsed();
	}

	/**
	 * @dataProvider removeProvider
	 */
	public function testRemove($inputs, $outputs)
	{
		foreach ($inputs as $input) {
			$this->evictionPolicy->touch($input);
		}

		foreach ($outputs as $output) {
			$this->assertSame($output, $this->evictionPolicy->remove());
		}
		$this->assertSame(null, $this->evictionPolicy->remove());
	}

	public function removeProvider()
	{
		return [
			[[0], [0]],
			[[0, 1], [0, 1]],
			[[1, 0], [1, 0]],
			[[1, 2, 3, 4, 5], [1, 2, 3, 4, 5]],
		];
	}

	public function testTouch()
	{
		$this->evictionPolicy->touch(0);
	}
}
