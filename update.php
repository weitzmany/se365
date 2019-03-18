<?
$query = "UPDATE `contacts` SET `name` = '{$_POST['name']}', `phone` = '{$_POST['phone']}' WHERE `id` = {$_POST['id']}";
$test = preg_match('/[a-zA-Z0-9]{2}/',$_POST['name']) && preg_match('/[0-9]{10}/',$_POST['phone']);
if($test && $db->query($query) === TRUE){
?>
<div class="message success">
    contact updated succefully
</div>
<? }else{ ?>
<div class="message failed">
    failed to update contact
</div>
<? } ?>