<?php

/*************************************************************************************************
 * delete.php
 *
 * Page to delete a single player. This page
 * expects the 'id' request paramater to be set which represents the ID of the player to
 * delete.
 *
 *************************************************************************************************/

include('library.php');

$plaId = '';

$conn = get_database_connection();

if (isset($id))
{
    // Step 1: Load the player records
    $sql = <<<SQL
    SELECT * 
      FROM players
     WHERE pla_id = $id
    SQL;


    $result = $conn->query($sql);

    $row = $result->fetch_assoc();

    $plaId = $row['pla_id'];
}

$sql = <<<SQL
DELETE FROM players
 WHERE pla_id = $plaId
SQL;

if (!$conn->query($sql))
{
    die('Error deleting the player record: ' . $conn->error);
}

$conn->close();

header('Location: index.php?content=list');