<?php
$username=$_POST['username'];
$password=$_POST['password'];
$username = stripslashes($username);
$password = stripslashes($password);
$username = mysql_real_escape_string($username);
$password = mysql_real_escape_string($password);

$sql="SELECT * FROM $tbl_name WHERE username='$username'";
$result=mysql_query($sql);

// Mysql_num_row is counting table row
$count=mysql_num_rows($result);
// If result matched $username and $password, table row must be 1 row
if($count==1)
{
    $row = mysql_fetch_assoc($result);
    if (md5($password) == $row['password'])
    {
        setcookie('admin', '1');
        $_COOKIE['admin'] = '1';
        echo "Login Successful";
    }
    else
    {
        echo "Wrong Username or Password";
    }
}
else
{
    echo "Wrong Username or Password";
}
?>