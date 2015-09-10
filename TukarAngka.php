<?php
class TukarAngka {
	var $a;
	var $b;
	
	function Tukar(){
		$a=$this->x;
		$b=$this->y;
		$tmp = $a;
		$a = $b;
		$b = $tmp; 
		echo '<br/>After :<br/>';
		echo '$a='.$a.'<br/>';
		echo '$b='.$b;
	}
	
}


$tukar=new TukarAngka();

$tukar->x='5';
$tukar->y='9';
echo 'Before :<br/>';
echo '$a ='.$tukar->x.'<br/>';
echo '$b ='.$tukar->y;

$tukar->Tukar();

			
?>
