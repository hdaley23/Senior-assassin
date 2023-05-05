<?php

/*************************************************************************************************
 * assassinDetail.php
 *
 * Content page to display the detail form for a single player. This page is expected to be
 * contained within index.php.
 *************************************************************************************************/

$plaId = '';
$name = '';
$instagram = '';
$status = '';

$conn = get_database_connection();

if (isset($id))
{
    // Step 1: Load the customer and application records
    $sql = <<<SQL
    SELECT * 
      FROM players
     WHERE pla_id = $id
    SQL;


    $result = $conn->query($sql);

    $row = $result->fetch_assoc();

    $plaId = $row['pla_id'];
    $name = $row['pla_name'];
    $instagram = $row['pla_instagram'];
    $status = $row['pla_status'];
}

?>

<script>
    function deletePlayer(id) {
        if (confirm('Are you sure you want to delete this player?')) {
            location.href = 'delete.php?id=' + id;
        }
    }
</script>

<form action="save.php" method="POST">
    <input type="hidden" name="plaId" value="<?php echo $plaId; ?>" />
    <div class="mb-3">
        <label for="name" class="form-label">Name</label>
        <input type="text" class="form-control" name="name" value="<?php echo $name; ?>">
    </div>
    <div class="mb-3">
        <label for="instagram" class="form-label">Instagram</label>
        <input type="text" class="form-control" name="instagram" value="<?php echo $instagram; ?>">
    </div>
    <div class="mb-3">
        <label for="status" class="form-label">Status</label>
        <input type="text" class="form-control" name="states" value="<?php echo $status; ?>">
    </div>

    <div>
    <br>
    </div>

<?php

if (isset($id))
{
    echo '<a href="javascript:deletePlayer(' . $id . ')" class="btn btn-danger"><i class="fa fa-trash-o" aria-hidden="true"></i> Delete</a>';
}

?>
    <div>
    <br>
    <button type="submit" class="btn btn-primary">Save</button>
    <a href="index.php?content=list" class="btn btn-secondary" role="button">Cancel</a>
    </div>
</form>