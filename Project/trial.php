<?php	
/*ob_start();
session_start(); */
$current_file=$_SERVER['SCRIPT_NAME'];
$http_referer=$_SERVER['HTTP_REFERER'];
function showBangalore()
{
		$query="select * from accomodation where cid=1 ";
		$run=mysql_query($query) or die(mysql_error());
		$num= mysql_num_rows($run);
		echo $num;
}

function getfield($field){
		$query="select $field from accomodation where cid='".$_SESSION['cid']."'";
		if($query_run=@mysql_query($query))
		{
		 if($query_result=@mysql_result($query_run,0,$field)){
			return $query_result;
		}
		}
	}