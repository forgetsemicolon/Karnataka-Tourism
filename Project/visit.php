<!DOCTYPE html>
<html lang="en">
    <head>
        <link rel="stylesheet" type="text/css" href="stylevisit.css">
        <title>Visit</title>
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
        <div class="visit-section">
        <h1><center>Visit</center></h1>
        </div>
        <form name = "ss" action = "visit.php">
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
                    $db = mysqli_connect("localhost","root","root123","pratibha");
                    $bangaloreQuery = "SELECT * FROM places WHERE cid = 1";
                    $response=mysqli_query($db,$bangaloreQuery);
                    while ($row = mysqli_fetch_assoc($response))
                    {
                        $pname = $row["pname"];
                        $timings = $row["timings"];
                        $phone = $row['phone'];
                        $entry = $row['entry_fee'];
echo "
<table>
<tr>
<th>Fields</th>
<th>Values</th>

</tr>
<tr>
<td>Place Name</td>
<td>".$pname."</td>

</tr>
<tr>
<td>Opening Hours</td>
<td>".$timings."</td>

</tr>
<tr>
<td>Contact</td>
<td>".$phone."</td>

</tr>
<tr>
<td>Entry fee</td>
<td>".$entry."</td>

</tr>
</table>
<br>
";                  

                   }    
            }
            


            else if(isset($_GET['belgaum']))
           {    
                $db = mysqli_connect("localhost","root","root123","pratibha");
                $belgaumQuery = "SELECT * FROM places WHERE cid = 2";
                $response=mysqli_query($db,$belgaumQuery);
                while ($row = mysqli_fetch_assoc($response))
                {
                        $pname = $row["pname"];
                        $timings = $row["timings"];
                        $phone = $row['phone'];
                        $entry = $row['entry_fee'];
echo "
<table>
<tr>
<th>Fields</th>
<th>Values</th>

</tr>
<tr>
<td>Place Name</td>
<td>".$pname."</td>

</tr>
<tr>
<td>Opening Hours</td>
<td>".$timings."</td>

</tr>
<tr>
<td>Contact</td>
<td>".$phone."</td>

</tr>
<tr>
<td>Entry fee</td>
<td>".$entry."</td>

</tr>
</table>
<br>
";                   
                    }
           }
            


            else if(isset($_GET['bellary']))
           {    
                $db = mysqli_connect("localhost","root","root123","pratibha");
                $bellaryQuery = "SELECT * FROM places WHERE cid = 3";
                $response=mysqli_query($db,$bellaryQuery);
                while ($row = mysqli_fetch_assoc($response))
                {
                        $pname = $row["pname"];
                        $timings = $row["timings"];
                        $phone = $row['phone'];
                        $entry = $row['entry_fee'];
echo "
<table>
<tr>
<th>Fields</th>
<th>Values</th>

</tr>
<tr>
<td>Place Name</td>
<td>".$pname."</td>

</tr>
<tr>
<td>Opening Hours</td>
<td>".$timings."</td>

</tr>
<tr>
<td>Contact</td>
<td>".$phone."</td>

</tr>
<tr>
<td>Entry fee</td>
<td>".$entry."</td>

</tr>
</table>
<br>
";                   
                    }
           }
            


            else if(isset($_GET['hubli']))
            {    
                    $db = mysqli_connect("localhost","root","root123","pratibha");
                    $hubliQuery = "SELECT * FROM places WHERE cid = 4";
                    $response=mysqli_query($db,$hubliQuery);
                    while ($row = mysqli_fetch_assoc($response))
                    {
                        $pname = $row["pname"];
                        $timings = $row["timings"];
                        $phone = $row['phone'];
                        $entry = $row['entry_fee'];
echo "
<table>
<tr>
<th>Fields</th>
<th>Values</th>

</tr>
<tr>
<td>Place Name</td>
<td>".$pname."</td>

</tr>
<tr>
<td>Opening Hours</td>
<td>".$timings."</td>

</tr>
<tr>
<td>Contact</td>
<td>".$phone."</td>

</tr>
<tr>
<td>Entry fee</td>
<td>".$entry."</td>

</tr>
</table>
<br>
";                   
                    }
           }
            


            else if(isset($_GET['mangalore']))
            {    
                    $db = mysqli_connect("localhost","root","root123","pratibha");
                    $mangaloreQuery = "SELECT * FROM places WHERE cid = 5";
                    $response=mysqli_query($db,$mangaloreQuery);
                    while ($row = mysqli_fetch_assoc($response))
                    {
                        $pname = $row["pname"];
                        $timings = $row["timings"];
                        $phone = $row['phone'];
                        $entry = $row['entry_fee'];
echo "
<table>
<tr>
<th>Fields</th>
<th>Values</th>

</tr>
<tr>
<td>Place Name</td>
<td>".$pname."</td>

</tr>
<tr>
<td>Opening Hours</td>
<td>".$timings."</td>

</tr>
<tr>
<td>Contact</td>
<td>".$phone."</td>

</tr>
<tr>
<td>Entry fee</td>
<td>".$entry."</td>

</tr>
</table>
<br>
";                   
                    }
           }
            


            else if(isset($_GET['mysore']))
            {    
                    $db = mysqli_connect("localhost","root","root123","pratibha");
                    $mysoreQuery = "SELECT * FROM places WHERE cid = 6";
                    $response=mysqli_query($db,$mysoreQuery);
                    while ($row = mysqli_fetch_assoc($response))
                    {
                        $pname = $row["pname"];
                        $timings = $row["timings"];
                        $phone = $row['phone'];
                        $entry = $row['entry_fee'];

echo "
<table>
<tr>
<th>Fields</th>
<th>Values</th>

</tr>
<tr>
<td>Place Name</td>
<td>".$pname."</td>

</tr>
<tr>
<td>Opening Hours</td>
<td>".$timings."</td>

</tr>
<tr>
<td>Contact</td>
<td>".$phone."</td>

</tr>
<tr>
<td>Entry fee</td>
<td>".$entry."</td>

</tr>
</table>
<br>
";                   
                    }
           }          
    
    ?>


