<?php
$date =  date('Y-m-d', time());
echo "The value of \$date: ".$date."<br>";

$tar = "2017/05/24";
echo "The value of \$tar: ".$tar."<br>";

$year = array("2012", "396", "300","2000", "1100", "1089");
echo "The value of \$year: ";
print_r($year)

$str="BIKALPA";
$replace=str_replace("-","/",$date);
class main{
	public function replace($date){
		echo "<b>2.</b>";
		echo "   ".str_replace("-","/",$date);
		echo "<hr> <br>";
		}
	public function compare($date,$tar){
		echo "<b>3.</b>";
		$diff=strcmp(str_replace("-","/",$date),$tar);
		if($diff>0){
			echo "The Future <br>";
		}
		elseif($diff<0){
			echo "The Past <br>";
		}
		else{
			echo"Oops <br>";
		}
		echo "<hr>";
	}
	public function search($replace){
		echo "<b>4. </b>Search and Print Positions:       ";
		$repi=str_split($replace);
		for($i=0;$i< sizeof($repi);$i++){
			if ($repi[$i]=='/'){
				echo   $i .  "   ";
			}
		}
	}
	
	public function words($date){
		echo "<b>5. </b>";
		echo str_word_count($date);
		echo "<br> <hr>";
	}
	public function stlength($str){
		echo "<b>6.</b>";
		echo "The length of string is :- " .strlen($str);
		echo "<br><hr>";
	}
	
	public function ascii($str){
		echo "<b>7.</b>";
		echo " The ASCII value is : " .ord($str);
		echo"<br> <hr>";
	}
	public function substring($date){
		echo "<b>8. </b>";
		echo " The last two characters is " .substr($date,-2);
		echo "<br> <hr>";
		
	}
	public function arraybreak($replace){
		echo "<b>9.</b> The string is <u>$replace</u> <br>";
		$expo=explode("/",$replace);
		foreach($expo as $save){
			
		echo  $save;
		echo "  ";
		}
		echo"<hr>";
	}
}
$obj=new main();
$obj->replace($date);
$obj->compare($date,$tar);
$obj->search($replace);
$obj->words($date);
$obj->stlength($str);
$obj->ascii($str);
$obj->substring($date);
$obj->arraybreak($replace);
?>