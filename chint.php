<?php





$connection = new mysqli("localhost","root","","eligibility"); //communication with database
$q = "select email from slogin";
$result = $connection->query($q);

 $a=array();
 $q = $_REQUEST["q"];

$hint = "";

while($r = $result->fetch_assoc()) //display table
{
$a[]=$r["email"];
}
echo $r;
// lookup all hints from array if $q is different from ""
if ($q !== "") {
    $q = strtolower($q);
    $len=strlen($q);
    foreach($a as $name) {
        if (stristr($q, substr($name, 0, $len))) {
            if ($hint === "") {
                $hint = $name;
            } else {
                $hint .= ", $name";
            }
        }
    }
}

// Output "no suggestion" if no hint was found or output correct values
echo $hint === "" ? "no suggestion" : $hint;
?>
