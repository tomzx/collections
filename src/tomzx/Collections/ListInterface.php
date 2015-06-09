<?php

namespace tomzx\Collections;

interface ListInterface extends CollectionInterface
{
	public function addAtIndex($index, $element);

	public function addAllAtIndex($index, CollectionInterface $elements);

	public function get($index);

	public function indexOf($element);

	public function lastIndexOf($element);

	public function remove($index);

	public function set($index, $element);

	public function subList($indexFrom, $indexTo);
}
