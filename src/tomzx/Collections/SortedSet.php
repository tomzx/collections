<?php

namespace tomzx\Collections;

interface SortedSetInterface extends SetInterface
{
	public function comparator();

	public function headSet($elementFrom);

	public function subSet($elementFrom, $elementTo);

	public function tailSet($elementTo);
}
