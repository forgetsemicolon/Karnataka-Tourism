
<!DOCTYPE html>
<html lang="en">
    <head>
        <link rel="stylesheet" type="text/css" href="styleguide.css">
        <title>Guide</title>
        <style>
table {
    font-family: arial, sans-serif;
    border-collapse: collapse;
    width: 100%;
    column-width: 100px;
}

td, th {
    border: 2px solid #dddddd;
    text-align: left;
    padding: 4px;
}

tr:nth-child(even) {
    background-color: #dddddd;
}
</style>
    </head>
    <body>
        <div class="guide-section">
        <h1><center>Guide</center></h1>
        </div>
        <?php 
            $db = mysqli_connect("localhost","root","","project");
            $con = "SELECT * FROM guide WHERE status='Available' ";
            $response1=mysqli_query($db,$con);
            while($row_cats = mysqli_fetch_array($response1))
	{       
		$cid=$row_cats['cid'];
                $gid=$row_cats['gid'];
                $gname=$row_cats['gname'];
		$status=$row_cats['status'];
		        
        echo "            
        <form name = \"ss\" action = \"guide.php\" method=\"post\">
            <input type=\"hidden\" name=\"ss\" value=\"$gid\"/>
            <button name=\"$gname\" value=\"$gname\" type = \"submit\" >$gname</button><br>
        </form>
        ";
        }
                ?>

        </body>
</html>


<?php
          
               if(isset($_POST['ss']))
                {  //$db = mysqli_connect("localhost","root","root123","pratibha");
                    $gid=$_POST['ss'];
                    $con = "SELECT * FROM guide WHERE gid=$gid";
                    $data=mysqli_query($db,$con);
                    $row_cats = mysqli_fetch_array($data);
                    $cid=$row_cats['cid'];
                    $gid=$row_cats['gid'];
                    $gname=$row_cats['gname'];
                    $status=$row_cats['status'];
                    $bangramQuery = "UPDATE guide SET cid=$cid,gid=$gid,gname='".$gname."',status='appointed' WHERE gid=$gid";
                    $response1=mysqli_query($db,$bangramQuery);
                    $rameshQuery = "SELECT * FROM appointed WHERE gid=$gid";
                    $response=mysqli_query($db,$rameshQuery);
                    while ($row = mysqli_fetch_assoc($response))
                    {
                        $gname = $row["gname"];
                        $status = $row["status"];
                        $appoint_dat = $row['appoint_dat'];
echo "
<table>
<tr>
<th>Fields</th>
<th>Values</th>

</tr>
<tr>
<td>Guide Name</td>
<td>".$gname."</td>

</tr>
<tr>
<td>Status</td>
<td>".$status."</td>

</tr>
<tr>
<td>Appoint Date and Time</td>
<td>".$appoint_dat."</td>

</tr>
</table>
<br>
";  

                    }
               }

/*
if(isset($_GET['tarun']))
               {
                    $db = mysqli_connect("localhost","root","root123","pratibha");
                    $bangramQuery = "UPDATE guide SET status='appointed' WHERE gid=2";
                    $response1=mysqli_query($db,$bangramQuery);
                    $tarunQuery = "SELECT * FROM appointed WHERE gid=2";
                    $response=mysqli_query($db,$tarunQuery);
                    while ($row = mysqli_fetch_assoc($response))
                    {
                        $gname = $row["gname"];
                        $status = $row["status"];
                        $appoint_dat = $row['appoint_dat'];
echo "
<table>
<tr>
<th>Fields</th>
<th>Values</th>

</tr>
<tr>
<td>Guide Name</td>
<td>".$gname."</td>

</tr>
<tr>
<td>Status</td>
<td>".$status."</td>

</tr>
<tr>
<td>Appoint Date and Time</td>
<td>".$appoint_dat."</td>

</tr>
</table>
<br>
";                  

                    }
               }


if(isset($_GET['mahesh']))
               {
                    $db = mysqli_connect("localhost","root","root123","pratibha");
                    $bangmahQuery = "UPDATE guide SET status='appointed' WHERE gid=3";
                    $response1=mysqli_query($db,$bangmahQuery);
                    $maheshQuery = "SELECT * FROM appointed WHERE gid=3";
                    $response=mysqli_query($db,$rameshQuery);
                    while ($row = mysqli_fetch_assoc($response))
                    {
                        $gname = $row["gname"];
                        $status = $row["status"];
                        $appoint_dat = $row['appoint_dat'];
echo "
<table>
<tr>
<th>Fields</th>
<th>Values</th>

</tr>
<tr>
<td>Guide Name</td>
<td>".$gname."</td>

</tr>
<tr>
<td>Status</td>
<td>".$status."</td>

</tr>
<tr>
<td>Appoint Date and Time</td>
<td>".$appoint_dat."</td>

</tr>
</table>
<br>
";                  

                    }
               }


if(isset($_GET['shreyas']))
               {
                    $db = mysqli_connect("localhost","root","root123","pratibha");
                    $bangshrQuery = "UPDATE guide SET status='appointed' WHERE gid=4";
                    $response1=mysqli_query($db,$bangshrQuery);
                    $shreyasQuery = "SELECT * FROM appointed WHERE gid=4";
                    $response=mysqli_query($db,$shreyasQuery);
                    while ($row = mysqli_fetch_assoc($response))
                    {
                        $gname = $row["gname"];
                        $status = $row["status"];
                        $appoint_dat = $row['appoint_dat'];
echo "
<table>
<tr>
<th>Fields</th>
<th>Values</th>

</tr>
<tr>
<td>Guide Name</td>
<td>".$gname."</td>

</tr>
<tr>
<td>Status</td>
<td>".$status."</td>

</tr>
<tr>
<td>Appoint Date and Time</td>
<td>".$appoint_dat."</td>

</tr>
</table>
<br>
";                  

                    }
               }


if(isset($_GET['amit']))
               {
                    $db = mysqli_connect("localhost","root","root123","pratibha");
                    $bangamiQuery = "UPDATE guide SET status='appointed' WHERE gid=5";
                    $response1=mysqli_query($db,$bangramQuery);
                    $amitQuery = "SELECT * FROM appointed WHERE gid=5";
                    $response=mysqli_query($db,$amitQuery);
                    while ($row = mysqli_fetch_assoc($response))
                    {
                        $gname = $row["gname"];
                        $status = $row["status"];
                        $appoint_dat = $row['appoint_dat'];
echo "
<table>
<tr>
<th>Fields</th>
<th>Values</th>

</tr>
<tr>
<td>Guide Name</td>
<td>".$gname."</td>

</tr>
<tr>
<td>Status</td>
<td>".$status."</td>

</tr>
<tr>
<td>Appoint Date and Time</td>
<td>".$appoint_dat."</td>

</tr>
</table>
<br>
";                  

                    }
               }


if(isset($_GET['rishi']))
               {
                    $db = mysqli_connect("localhost","root","root123","pratibha");
                    $bangrisQuery = "UPDATE guide SET status='appointed' WHERE gid=6";
                    $response1=mysqli_query($db,$bangrisQuery);
                    $rishiQuery = "SELECT * FROM appointed WHERE gid=6";
                    $response=mysqli_query($db,$rishiQuery);
                    while ($row = mysqli_fetch_assoc($response))
                    {
                        $gname = $row["gname"];
                        $status = $row["status"];
                        $appoint_dat = $row['appoint_dat'];
echo "
<table>
<tr>
<th>Fields</th>
<th>Values</th>

</tr>
<tr>
<td>Guide Name</td>
<td>".$gname."</td>

</tr>
<tr>
<td>Status</td>
<td>".$status."</td>

</tr>
<tr>
<td>Appoint Date and Time</td>
<td>".$appoint_dat."</td>

</tr>
</table>
<br>
";                  

                    }
               }


if(isset($_GET['aravind']))
               {
                    $db = mysqli_connect("localhost","root","root123","pratibha");
                    $bangaraQuery = "UPDATE guide SET status='appointed' WHERE gid=7";
                    $response1=mysqli_query($db,$bangaraQuery);
                    $aravindQuery = "SELECT * FROM appointed WHERE gid=7";
                    $response=mysqli_query($db,$aravindhQuery);
                    while ($row = mysqli_fetch_assoc($response))
                    {
                        $gname = $row["gname"];
                        $status = $row["status"];
                        $appoint_dat = $row['appoint_dat'];
echo "
<table>
<tr>
<th>Fields</th>
<th>Values</th>

</tr>
<tr>
<td>Guide Name</td>
<td>".$gname."</td>

</tr>
<tr>
<td>Status</td>
<td>".$status."</td>

</tr>
<tr>
<td>Appoint Date and Time</td>
<td>".$appoint_dat."</td>

</tr>
</table>
<br>
";                  

                    }
               }



if(isset($_GET['suresh']))
               {
                    $db = mysqli_connect("localhost","root","root123","pratibha");
                    $bangsurQuery = "UPDATE guide SET status='appointed' WHERE gid=8";
                    $response1=mysqli_query($db,$bangsurQuery);
                    $sureshQuery = "SELECT * FROM appointed WHERE gid=8";
                    $response=mysqli_query($db,$sureshhQuery);
                    while ($row = mysqli_fetch_assoc($response))
                    {
                        $gname = $row["gname"];
                        $status = $row["status"];
                        $appoint_dat = $row['appoint_dat'];
echo "
<table>
<tr>
<th>Fields</th>
<th>Values</th>

</tr>
<tr>
<td>Guide Name</td>
<td>".$gname."</td>

</tr>
<tr>
<td>Status</td>
<td>".$status."</td>

</tr>
<tr>
<td>Appoint Date and Time</td>
<td>".$appoint_dat."</td>

</tr>
</table>
<br>
";                  

                    }
               }


if(isset($_GET['rohan']))
               {
                    $db = mysqli_connect("localhost","root","root123","pratibha");
                    $bangrohQuery = "UPDATE guide SET status='appointed' WHERE gid=9";
                    $response1=mysqli_query($db,$bangrohQuery);
                    $rohanQuery = "SELECT * FROM appointed WHERE gid=9";
                    $response=mysqli_query($db,$rohanQuery);
                    while ($row = mysqli_fetch_assoc($response))
                    {
                        $gname = $row["gname"];
                        $status = $row["status"];
                        $appoint_dat = $row['appoint_dat'];
echo "
<table>
<tr>
<th>Fields</th>
<th>Values</th>

</tr>
<tr>
<td>Guide Name</td>
<td>".$gname."</td>

</tr>
<tr>
<td>Status</td>
<td>".$status."</td>

</tr>
<tr>
<td>Appoint Date and Time</td>
<td>".$appoint_dat."</td>

</tr>
</table>
<br>
";                  

                    }
               }



if(isset($_GET['biswa']))
               {
                    $db = mysqli_connect("localhost","root","root123","pratibha");
                    $bangbisQuery = "UPDATE guide SET status='appointed' WHERE gid=10";
                    $response1=mysqli_query($db,$bangbisQuery);
                    $biswaQuery = "SELECT * FROM appointed WHERE gid=10";
                    $response=mysqli_query($db,$biswaQuery);
                    while ($row = mysqli_fetch_assoc($response))
                    {
                        $gname = $row["gname"];
                        $status = $row["status"];
                        $appoint_dat = $row['appoint_dat'];
echo "
<table>
<tr>
<th>Fields</th>
<th>Values</th>

</tr>
<tr>
<td>Guide Name</td>
<td>".$gname."</td>

</tr>
<tr>
<td>Status</td>
<td>".$status."</td>

</tr>
<tr>
<td>Appoint Date and Time</td>
<td>".$appoint_dat."</td>

</tr>
</table>
<br>
";                  

                    }
               }


if(isset($_GET['varun']))
               {
                    $db = mysqli_connect("localhost","root","root123","pratibha");
                    $bangvarQuery = "UPDATE guide SET status='appointed' WHERE gid=11";
                    $response1=mysqli_query($db,$bangvarQuery);
                    $varunQuery = "SELECT * FROM appointed WHERE gid=11";
                    $response=mysqli_query($db,$varunQuery);
                    while ($row = mysqli_fetch_assoc($response))
                    {
                        $gname = $row["gname"];
                        $status = $row["status"];
                        $appoint_dat = $row['appoint_dat'];
echo "
<table>
<tr>
<th>Fields</th>
<th>Values</th>

</tr>
<tr>
<td>Guide Name</td>
<td>".$gname."</td>

</tr>
<tr>
<td>Status</td>
<td>".$status."</td>

</tr>
<tr>
<td>Appoint Date and Time</td>
<td>".$appoint_dat."</td>

</tr>
</table>
<br>
";                  

                    }
               }



if(isset($_GET['ram']))
               {
                    $db = mysqli_connect("localhost","root","root123","pratibha");
                    $bangramQuery = "UPDATE guide SET status='appointed' WHERE gid=12";
                    $response1=mysqli_query($db,$bangramQuery);
                    $ramQuery = "SELECT * FROM appointed WHERE gid=12";
                    $response=mysqli_query($db,$ramQuery);
                    while ($row = mysqli_fetch_assoc($response))
                    {
                        $gname = $row["gname"];
                        $status = $row["status"];
                        $appoint_dat = $row['appoint_dat'];
echo "
<table>
<tr>
<th>Fields</th>
<th>Values</th>

</tr>
<tr>
<td>Guide Name</td>
<td>".$gname."</td>

</tr>
<tr>
<td>Status</td>
<td>".$status."</td>

</tr>
<tr>
<td>Appoint Date and Time</td>
<td>".$appoint_dat."</td>

</tr>
</table>
<br>
";                  

                    }
               }

*/


?>













































































































































































































































































































































































































































































































































































































































































































































































































































































































































    