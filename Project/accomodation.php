<!DOCTYPE html>
<html lang="en">
    <head>
        <link rel="stylesheet" type="text/css" href="styleaccomodation.css">
        <title>Accomodation</title>
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
        <div class="accomodation-section">
        <h1><center>Accomodation</center></h1>
        </div>
        <form name = "ss" action = "accomodation.php">
            <button name="bangalore" value="bangalore" type = "submit" >Bangalore</button>
            <button name="belgaum" value="belgaum" type = "submit" >Belgaum</button>
            <button name="bellary" value="bellary" type = "submit" >Bellary</button>
            <button name="hubli" value="hubli" type = "submit" >Hubli</button>
            <button name="mangalore" value="mangalore" type = "submit" >Mangalore</button>
            <button name="mysore" value="mysore" type = "submit" >Mysore</button>
        </form>


        </body>
</html>
         

    
<?php
          
               if(isset($_GET['bangalore']))
               {
                    $db = mysqli_connect("localhost","root","","pratibha");
                    $bangaloreQuery = "SELECT * FROM accomodation WHERE cid = 1";
                    $response=mysqli_query($db,$bangaloreQuery);
                    while ($row = mysqli_fetch_assoc($response))
                    {
                        $hname = $row["hname"];
                        $location = $row["location"];
                        $fare = $row['fare'];
                        $check_in=$row['check_in'];
                        $check_out=$row['check_out'];

echo "
<table>
<tr>
<th>Fields</th>
<th>Values</th>

</tr>
<tr>
<td>Hotel Name</td>
<td>".$hname."</td>

</tr>
<tr>
<td>Location</td>
<td>".$location."</td>

</tr>
<tr>
<td>Fare</td>
<td>".$fare."</td>

</tr>
<tr>
<td>Check_in time</td>
<td>".$check_in."</td>

</tr>
<tr>
<td>Check_out time</td>
<td>".$check_out."</td>

</tr>


</table>
<br>
";                  

                   }    
            }
            


            else if(isset($_GET['belgaum']))
           {    
                $db = mysqli_connect("localhost","root","root123","pratibha");
                $belgaumQuery = "SELECT * FROM accomodation WHERE cid = 2";
                $response=mysqli_query($db,$belgaumQuery);
                while ($row = mysqli_fetch_assoc($response))
                {
                        $hname = $row["hname"];
                        $location = $row["location"];
                        $fare = $row['fare'];
                        $check_in=$row['check_in'];
                        $check_out=$row['check_out'];

echo "
<table>
<tr>
<th>Fields</th>
<th>Values</th>

</tr>
<tr>
<td>Hotel Name</td>
<td>".$hname."</td>

</tr>
<tr>
<td>Location</td>
<td>".$location."</td>

</tr>
<tr>
<td>Fare</td>
<td>".$fare."</td>

</tr>
<tr>
<td>Fare</td>
<td>".$check_in."</td>

</tr>
<tr>
<td>Fare</td>
<td>".$check_out."</td>

</tr>


</table>
<br>
";                   
                    }
           }
            


            else if(isset($_GET['bellary']))
           {    
                $db = mysqli_connect("localhost","root","root123","pratibha");
                $bellaryQuery = "SELECT * FROM accomodation WHERE cid = 3";
                $response=mysqli_query($db,$bellaryQuery);
                while ($row = mysqli_fetch_assoc($response))
                {
                        $hname = $row["hname"];
                        $location = $row["location"];
                        $fare = $row['fare'];
                        $check_in=$row['check_in'];
                        $check_out=$row['check_out'];

echo "
<table>
<tr>
<th>Fields</th>
<th>Values</th>

</tr>
<tr>
<td>Hotel Name</td>
<td>".$hname."</td>

</tr>
<tr>
<td>Location</td>
<td>".$location."</td>

</tr>
<tr>
<td>Fare</td>
<td>".$fare."</td>

</tr>
<tr>
<td>Fare</td>
<td>".$check_in."</td>

</tr>
<tr>
<td>Fare</td>
<td>".$check_out."</td>

</tr>


</table>
<br>
";                   
                    }
           }
            


            else if(isset($_GET['hubli']))
            {    
                    $db = mysqli_connect("localhost","root","root123","pratibha");
                    $hubliQuery = "SELECT * FROM accomodation WHERE cid = 4";
                    $response=mysqli_query($db,$hubliQuery);
                    while ($row = mysqli_fetch_assoc($response))
                    {
                        $hname = $row["hname"];
                        $location = $row["location"];
                        $fare = $row['fare'];
                        $check_in=$row['check_in'];
                        $check_out=$row['check_out'];

echo "
<table>
<tr>
<th>Fields</th>
<th>Values</th>

</tr>
<tr>
<td>Hotel Name</td>
<td>".$hname."</td>

</tr>
<tr>
<td>Location</td>
<td>".$location."</td>

</tr>
<tr>
<td>Fare</td>
<td>".$fare."</td>

</tr>
<tr>
<td>Fare</td>
<td>".$check_in."</td>

</tr>
<tr>
<td>Fare</td>
<td>".$check_out."</td>

</tr>


</table>
<br>
";                   
                    }
           }
            


            else if(isset($_GET['mangalore']))
            {    
                    $db = mysqli_connect("localhost","root","root123","pratibha");
                    $mangaloreQuery = "SELECT * FROM accomodation WHERE cid = 5";
                    $response=mysqli_query($db,$mangaloreQuery);
                    while ($row = mysqli_fetch_assoc($response))
                    {
                        $hname = $row["hname"];
                        $location = $row["location"];
                        $fare = $row['fare'];
                        $check_in=$row['check_in'];
                        $check_out=$row['check_out'];

echo "
<table>
<tr>
<th>Fields</th>
<th>Values</th>

</tr>
<tr>
<td>Hotel Name</td>
<td>".$hname."</td>

</tr>
<tr>
<td>Location</td>
<td>".$location."</td>

</tr>
<tr>
<td>Fare</td>
<td>".$fare."</td>

</tr>
<tr>
<td>Fare</td>
<td>".$check_in."</td>

</tr>
<tr>
<td>Fare</td>
<td>".$check_out."</td>

</tr>


</table>
<br>
";                   
                    }
           }
            


            else if(isset($_GET['mysore']))
            {    
                    $db = mysqli_connect("localhost","root","root123","pratibha");
                    $mysoreQuery = "SELECT * FROM accomodation WHERE cid = 6";
                    $response=mysqli_query($db,$mysoreQuery);
                    while ($row = mysqli_fetch_assoc($response))
                    {
                        $hname = $row["hname"];
                        $location = $row["location"];
                        $fare = $row['fare'];
                        $check_in=$row['check_in'];
                        $check_out=$row['check_out'];

echo "
<table>
<tr>
<th>Fields</th>
<th>Values</th>

</tr>
<tr>
<td>Hotel Name</td>
<td>".$hname."</td>

</tr>
<tr>
<td>Location</td>
<td>".$location."</td>

</tr>
<tr>
<td>Fare</td>
<td>".$fare."</td>

</tr>
<tr>
<td>Fare</td>
<td>".$check_in."</td>

</tr>
<tr>
<td>Fare</td>
<td>".$check_out."</td>

</tr>


</table>
<br>
";                   
                    }
           }          
    
    ?>



        

        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
   