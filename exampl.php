<?php 

$connection = mysqli_connect('127.0.0.1', 'root', '', 'test_db');

if( $connection == false )
{
	echo 'Not connection bd<br>';
	echo mysqli_connect_error();
	exit();
}
$result =mysqli_query($connection, "SELECT * FROM 'articles_caegories'");

while( ($record = mysqli_fetch_assoc($result)) )
{

}
?>

<?php echo $post;#ded?>
<p>	ff</p>
<p>ff</p>