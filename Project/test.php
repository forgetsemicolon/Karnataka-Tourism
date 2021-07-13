<?php

while($row)
{
$str = "Sruchi";
echo <<<HEREDOC
This is a heredoc string.
$str
<table>

    <td>$hotelname</td>
</table>
Newlines and everything else is preserved.
HEREDOC;

}

?>