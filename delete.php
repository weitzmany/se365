<?
$query = "DELETE FROM `contacts` WHERE `id` = {$_POST['id']}";
if($db->query($query) === TRUE){
?>
<div class="message success">
    contact deleted succefully
</div>
<? }else{ ?>
<div class="message failed">
    failed to delete contact
</div>
<? } ?>