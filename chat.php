<?php
require_once 'DB.php';
require_once 'formatDate.php';

$query = "SELECT * FROM chat ORDER BY id DESC ";
$result = $conn->query($query);

while($row = $result->fetch_array()){
	?>
	<div id="chat-data">
		<span><?php echo $row['name']?> </span>:
		<span><?php echo $row['message']?></span>
		<span><?php echo formatDate($row['date'])?></span>
	</div>
<?php }?>