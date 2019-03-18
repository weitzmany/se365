<?
$query = "INSERT INTO `contacts` (`name`, `phone`) VALUES ('{$_POST['name']}', '{$_POST['phone']}')";
$test = preg_match('/[a-zA-Z0-9]{2}/',$_POST['name']) && preg_match('/[0-9]{10}/',$_POST['phone']);
if($test && $db->query($query) === TRUE){
?>
<div class="message success">
    new contact created succefully
</div>
<? }else{ ?>
<div class="message failed">
    failed to create contact
</div>
<? } ?>