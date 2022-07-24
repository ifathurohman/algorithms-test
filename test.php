<?php

// Compare the Triplets 

$handle = fopen ("php://stdin", "r");
function compare_triplets($a0, $a1, $a2, $b0, $b1, $b2){

    $aScore = 0;
    $bScore = 0;

    $aScore += ($a0 > $b0? 1:0) + ($a1 > $b1? 1:0) + ($a2 > $b2? 1:0);
    $bScore += ($b0 > $a0? 1:0) + ($b1 > $a1? 1:0) + ($b2 > $a2? 1:0);
    
    $score = [];
    array_push($score,$aScore,$bScore);
    return $score;   
}

fscanf($handle, "%d %d %d", $a0, $a1, $a2);
fscanf($handle, "%d %d %d", $b0, $b1, $b2);
$result = compare_triplets(5, 6, 7, 3, 6, 10);
echo implode(" ", $result)."\n <br><br>";

// Compare the Triplets 

// Check Prime

function verify_number($num)
{
   if ($num == 1)
   return 0;
   for ($i = 2; $i <= $num/2; $i++)
   {
      if ($num % $i == 0)
      return 0;
   }
   return 1;
}
$num1 = 127;
$num2 = 237;

$check1 = verify_number($num1);
if ($check1 == 1):
    echo "true"."<br>";
else:
    echo "false"."<br>";
endif;

$check2 = verify_number($num2);
if ($check2 == 1):
   echo "true"."<br>";
else:
   echo "false"."<br><br>";
endif;

// Check Prime


// Remove Duplicate

$arrDuplicate = array (1,3,3,3,1,5,6,7,8,1);

foreach (array_unique($arrDuplicate) as $v){
  if($v != "") { $arrRemoved[] = $v; }
}
print_r (implode(", ", $arrRemoved)."<br><br>");

// Remove Duplicate

// Reverse in Place

$string = 'what is your name';

$newString = '';
$temp = '';
$i = 0;
while(@$string[$i] != '')
{
  if($string[$i] == ' ') {
     $newString .= $temp . ' ';
     $temp = '';
  }
  else {
   $temp = $string[$i] . $temp;
  }
  $i++;
}
$newString .= $temp . ' ';
print $newString. "<br><br>";

// Reverse in Place

// First non repeating char

$character = "the quick brown fox jumps then quickly blow air";
$check = [];
for($i=0; $i<strlen($character); $i++)
{
    if(!array_key_exists($character[$i], $check))
    {
        $check[$character[$i]] = 1;
    }
    else
    {
        $check[$character[$i]] += 1;
    }
}

print array_search(1, $check);
// First non repeating char
?>