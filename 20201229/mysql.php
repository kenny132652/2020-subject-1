<?php
$dbhost = ‘localhost’;  // mysql伺服器主機位址
$dbuser = ‘root’;            // mysql使用者名稱
$dbpass = ‘123456’;          // mysql 密碼
$conn = mysqli_connect($dbhost, $dbuser, $dbpass);
if(! $conn )
{
    die('Could not connect: ' . mysqli_error());
}
echo ‘You did it!';
mysqli_close($conn);
?>

