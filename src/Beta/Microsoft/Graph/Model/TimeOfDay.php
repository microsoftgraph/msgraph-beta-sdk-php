<?php
namespace Beta\Microsoft\Graph\Model;

class TimeOfDay implements \JsonSerialize{

	private string $time;
	public function __construct(string $time){
		$this->time = $time;
	}

	public function jsonSerialize(): string{
		return $this->time;
	}
}