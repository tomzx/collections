<?php

namespace tomzx\Collections\EvictionPolicy;

class Random implements Policy {
	/**
	 * @var array
	 */
	protected $data = [];

	/**
	 * Returns the index of the entry that should be evicted.
	 *
	 * @return int|null
	 */
	public function remove()
	{
		if (empty($this->data)) {
			return null;
		}

		$keys = array_keys($this->data);
		$index = array_rand($keys, 1);
		$key = $keys[$index];
		unset($this->data[$key]);
		return $key;
	}

	/**
	 * Indicate to the eviction policy that a specific index was accessed.
	 * This is useful for algorithms that are based on usage (LRU, LFU, MRU, MFU).
	 *
	 * @param int $index
	 * @return void
	 */
	public function touch($index)
	{
		$this->data[$index] = true;
	}
}
