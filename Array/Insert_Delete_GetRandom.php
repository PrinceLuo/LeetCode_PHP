<?php
class RandomizedSet{
	
	private $_num;
	public function __construct(){
		$this->_num = array();
		echo "Successfully!<br />";
	}
	
	
	public function insert($num){
		echo "Using insert......<br />";
		if(array_search($num, $this->_num)){
			return false;
		}else{
			echo $num, "<br />";
			$this->_num[] = $num;
		}
	}
	
	public function remove($num){
		if($key = array_search($num, $this->_num)){
			unset($this->_num[$key]);
		}else{
			return false;
		}
	}
	
	public function getRandom(){
		$max = count($this->_num)-1;
		$index = rand(0,$max);
		//echo '$index=',$index;
		return $this->_num[$index];
	}
	
	public function check(){
		print_r($this->_num);
		echo "<br />";
	}
}

// test

// Init an empty set.
$randomSet = new RandomizedSet();

// Inserts 1 to the set. Returns true as 1 was inserted successfully.
echo "inserting...<br />";
$randomSet->insert(1);
$randomSet->check();

echo "<br />";

// Returns false as 2 does not exist in the set.
echo "Removing...<br />";
if($randomSet->remove(2)==false) echo "2 not exist.<br />";
echo "<br />";

// Inserts 2 to the set, returns true. Set now contains [1,2].
echo "inserting...<br />";
$randomSet->insert(2);
$randomSet->check();

echo "<br />";

// getRandom should return either 1 or 2 randomly.
echo "Random...<br />";
echo $randomSet->getRandom();
echo "<br />";
// Removes 1 from the set, returns true. Set now contains [2].
echo "removing...<br />";
$randomSet->remove(1);
$randomSet->check();

echo "<br />";

// 2 was already in the set, so return false.
echo "inserting...<br />";
if($randomSet->insert(2)==false) echo "2 exist!<br />";
echo "<br />";

// Since 2 is the only number in the set, getRandom always return 2.
echo "Random...<br />";
echo $randomSet->getRandom();
