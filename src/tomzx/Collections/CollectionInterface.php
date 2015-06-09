<?php

namespace tomzx\Collections;

interface CollectionInterface extends IterableInterface
{
	public function add($element);

	public function addAll(CollectionInterface $elements);

	public function clear();

	public function contains($element);

	public function containsAll(CollectionInterface $elements);

	public function equals($other);

	public function hashCode();

	public function isEmpty();

	public function remove($element);

	public function removeAll(CollectionInterface $elements);

	public function size();

	public function toArray();
}
