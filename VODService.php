<?php

class VODService{
    private string $name;
    private string $price;
    /**
     * return the name VOD
     */
	public function getName(): string { 
 		return $this->name; 
	} 
    /**
     * modify a name VOD
     */
	public function setName($name) {  
		$this->name = $name; 
        return $this;
	} 
    /**
     * return the price VOD
     */
	public function getPrice(): float { 
 		return $this->price; 
	} 
    /**
     * modify a price VOD
     */
	public function setPrice($price) {  
		$this->price = $price; 
        return $this;
	} 
}