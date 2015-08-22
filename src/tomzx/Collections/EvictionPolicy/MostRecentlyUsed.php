<?php

namespace tomzx\Collections\EvictionPolicy;

class MostRecentlyUsed implements Policy {
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
		end($this->data);
		$key = key($this->data);
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
		if (array_key_exists($index, $this->data)) {
			unset($this->data[$index]);
		}

		$this->data[$index] = true;
	}
}
