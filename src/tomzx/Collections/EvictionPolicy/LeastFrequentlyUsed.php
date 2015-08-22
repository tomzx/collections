<?php

namespace tomzx\Collections\EvictionPolicy;

// TODO: Determine at what point should the counters be reset as it is possible for them to overflow
class LeastFrequentlyUsed implements Policy {
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
		asort($this->data);
		reset($this->data);
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
		// TODO: Use a heap so that touching is log(n) and removing is log(n) instead of nlog(n)
		if ( ! array_key_exists($index, $this->data)) {
			$this->data[$index] = 0;
		}

		++$this->data[$index];
	}
}
