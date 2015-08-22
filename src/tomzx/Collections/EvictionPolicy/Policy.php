<?php

namespace tomzx\Collections\EvictionPolicy;

interface Policy {
	/**
	 * Returns the index of the next entry (where data should be inserted).
	 * This index may already be in use and should be overwritten with new
	 * data if it is the case.
	 *
	 * @return int
	 */
	//public function insert();

	/**
	 * Returns the index of the entry that should be evicted.
	 *
	 * @return int|null
	 */
	public function remove();

//	public function evict();

	/**
	 * Indicate to the eviction policy that a specific index was accessed.
	 * This is useful for algorithms that are based on usage (LRU, LFU, MRU, MFU).
	 *
	 * @param int $index
	 * @return void
	 */
	public function touch($index);
}
