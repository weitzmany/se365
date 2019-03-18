<?
$query = "SELECT * FROM `contacts`";
$result = $db->query($query);
?>

<? if ($result->num_rows > 0) { ?>

    <table>
    <tr>
        <th>ID</th>
        <th>Name</th>
        <th>Phone</th>
        <th>Actions</th>
    </tr>
    <? while($obj = $result->fetch_object()) { ?>
        <tr id="show_<?= $obj->id ?>">
            <td><?= $obj->id ?></td>
            <td><?= $obj->name ?></td>
            <td><?= $obj->phone ?></td>
            <td>
                <button onclick="edit(<?= $obj->id ?>)">edit</button>
                <form class="delete" method="post">
                    <input type="hidden" name="id" value="<?= $obj->id ?>">
                    <input type="submit" name="type" value="Delete">
                </form>
            </td>
        </tr>
        <tr id="edit_<?= $obj->id ?>" class="hidden">
            <form method="post" onsubmit="return validate(this);">
                <input type="hidden" name="id" value="<?= $obj->id ?>">
                <td><?= $obj->id ?></td>
                <td><input type="text" name="name" value="<?= $obj->name ?>" required></td>
                <td><input type="text" name="phone" value="<?= $obj->phone ?>" required></td>
                <td><input type="submit" name="type" value="Update"></td>
            </form>
        </tr>
    <? } ?>
    </table>
   
<? } else { ?>
    <p>No Results</p>
<? } ?>