<?php

namespace tomzx\Collections;

interface DequeInterface extends QueueInterface
{
	public function addFirst($element);

	public function addLast($element);

	public function removeFirst();

	public function removeLast();

	public function getFirst();

	public function getLast();

	public function offerFirst($element);

	public function offerLast($element);

	public function peekFirst();

	public function peekLast();

	public function pollFirst();

	public function pollLast();

	public function removeFirstOccurrence($element);

	public function removeLastOccurrence($element);
}
