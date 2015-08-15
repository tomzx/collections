<?php

namespace tomzx\Collections;

class RingBuffer {
	/**
	 * @var array
	 */
	protected $data = [];
	/**
	 * @var int
	 */
	protected $size;
	/**
	 * @var int
	 */
	protected $index = 0;

	/**
	 * @param int $size
	 */
	public function __construct($size)
	{
		assert($size > 0, 'Size must be superior to 0.');
		$this->size = $size;
	}

	/**
	 * @return int
	 */
	public function size()
	{
		return count($this->data);
	}

	/**
	 * @return bool
	 */
	public function isEmpty()
	{
		return empty($this->data);
	}

	/**
	 * @return mixed
	 */
	public function top()
	{
		if ($this->isEmpty()) {
			return null;
		}

		return $this->data[$this->index];
	}

	/**
	 * @return mixed
	 */
	public function pop()
	{
		if ($this->isEmpty()) {
			return null;
		}

		$value = $this->data[$this->index];
		unset($this->data[$this->index]);
		$this->incrementIndex(-1);
		return $value;
	}

	/**
	 * @param mixed $element
	 * @return $this
	 */
	public function push($element)
	{
		$this->data[$this->incrementIndex(1)] = $element;

		return $this;
	}

	/**
	 * @param int $count
	 * @return int
	 */
	private function incrementIndex($count)
	{
		$this->index += $count;
		$this->index %= $this->size;
		return $this->index;
	}
}
