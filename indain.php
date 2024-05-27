<?php
$Server = "localhost";
$userName ="root";
$password = '';
$dbname = "asif.php";


$conn = new mysqli ($Server, $userName, $password, $dbname );
echo "<pre>";
print_r($conn);
echo "</pre>";
if($conn->connect_errno >0){
    echo "connetiom sucfulley";
}else{
    echo "connetiom sucfulley";
}

?>