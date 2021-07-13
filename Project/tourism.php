<?php
$db = mysqli.connect("localhost","root","root123","pratibha");
if($db) echo "hello";


function showBangalore()
{
    $bangaloreQuery = "SELECT * FROM accomodation WHERE cid = 1";
    $result = mysqli_query($db,$bangaloreQuery);
    $entry = mysqli_fetch_assoc($result);
    $locations = $entry['location'];
    
    echo $locations;
}
?>