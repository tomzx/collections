<?php

namespace tomzx\Collections;

interface QueueInterface extends CollectionInterface
{
	public function offer($element);

	public function poll();

	public function peek();

	public function element();

	public function removeFirst();
}
