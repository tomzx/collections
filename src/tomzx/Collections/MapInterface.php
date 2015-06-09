<?php

namespace tomzx\Collections;

interface MapInterface
{
	public function clear();

	public function containsKey($key);

	public function containsValue($value);

	public function entrySet();

	public function equals($other);

	public function get($key);

	public function hashCode();

	public function isEmpty();

	public function keySet();

	public function put($key, $value);

	public function putAll(MapInterface $map);

	public function remove($key);

	public function size();

	public function values();
}
