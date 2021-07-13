<!DOCTYPE html>
<html lang="en">
    <head>
        <link rel="stylesheet" type="text/css" href="styletransport.css">
        <title>Transport</title>
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
        <div class="transport-section">
        <h1><center>Transport</center></h1>
        </div>
    <div>
  <form method = "post" action="transport.php">
    <label for="src">From</label>
    <input type="text" id="src" name="source" placeholder="Your source city">

    <label for="dest">To</label>
    <input type="text" id="dest" name="destination" placeholder="Your destination city">
      <br>
      
    <label for="Day">Day</label>
    <select id="Day" name="Day">
      <option value="today">Today</option>
      <option value="tomorrow">Tomorrow</option>
      <option value="dayafter">Day after tomorrow</option>
    </select><br>
     
    <label for="tkts">No of Tickets</label>
    <input type="text" id="tkts" name="tickets" placeholder="Number of tickets">
      <br>
  
      <button type="submit" name = "submit">submit</button>
  </form>
</div>
    </body>
</html>

<?php 
        if(isset($_POST['submit']))
            {    
                    $db = mysqli_connect("localhost","root","root123","pratibha");
                    $source = $_POST['source'];
                    $destination = $_POST['destination'];
                    $tickets=$_POST['tickets'];
                    $busQuery = "SELECT * FROM buses WHERE source='".$source."' AND destination='".$destination."'";
                    $response=mysqli_query($db,$busQuery);
                   
                    while ($row = mysqli_fetch_assoc($response))
                    {
                        $src = $row["source"];
                        $dest = $row["destination"];
                        $timings = $row['timings'];
                        $fare = $row['fare'];
                        $tot = $tickets*$fare;
            
                        
echo "
<table>
<tr>
<th>Fields</th>
<th>Values</th>

</tr>
<tr>
<td>From</td>
<td>".$src."</td>

</tr>
<tr>
<td>To</td>
<td>".$dest."</td>

</tr>
<tr>
<td>Fare per person</td>
<td>".$fare."</td>

</tr>
<tr>
<td>Timings</td>
<td>".$timings."</td>

</tr>
<tr>
<td>Total</td>
<td>".$tot."</td>

</tr>

</table>
<br>
";        
                    }
        }

            

?>       
            
            
            
            
            
            
            
            
            
            
            
            
            
            
            
            
            
            
            
            
            
            
            
            
            
            
            
            
            
            
            
            
            
            
            
            
            
            
            
            
            
            
            
            
            
            
            
            
            
            
            
            
            
            
            
            
            
            
            
            
            
            
            
            
            
            
            
            
            
            
            
            
            
            
            
            
            
            
            
            
            
            
            
            
            
            
            
            
            
            
            
            
            
            
            
            
            
            
            
            
            
            
            
            
            
            
            
            
            
            
            
            
            
            
            
            
            
            
            
            
            
            
            
            
            
            
            
            
            
            
            
            
            
            
            
            
            
            
            
            
            
            
            
            
            
            
            
            
            
            
            
            
            
            
            
            
            
            
            
            
            
            
            
            
            
            
            
            
            
            
            
            
            
            
            
            
            
            
            
            
            
            
            
            
            
            
            
            
            
            
            
            
            
            
            
            
            
            
            
            
            
            
            
            
            
            
            
            
            
            
            
            
            
            
            
            
            
            
            
            
            
            
            
            
            
            
            
            
            
            
            
            
            
            
            
            
            
            
            
            
            
            
            
            
            
            
            
            
            
            
            
            
            
            
            
            
            
            
            
            
            
            
            
            
            
            
            
            
            
            
            
            
            
            
            
            
            
            
            
            
            
            
            
            
            
            
            
            
            
            
            
            
            
            
            
            
            
            
            
            
            
            
            
            
            
            
            
            
            
            
            
            
            
            
            
            
            
            
            
            
            
            
            
            
            
            
            
            
            
            
            
            
            
            
            
            
            
            
            
            
            
            
            
            
            
            
            
            
            
            
            
            
            



