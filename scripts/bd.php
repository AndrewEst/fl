 <?php
        $host = "localhost";
$user = "root";
$password = "mysql";
$db = "freelance";
 
if (!$conn = mysql_connect($host, $user, $password))
{
echo "<h2>MySQL Error!</h2>";
exit;
}
?>