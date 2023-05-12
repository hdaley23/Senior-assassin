<?php

/*************************************************************************************************
 * save.php
 *
 * Page to save a single player. This page expects the following request paramaters to
 * be set:
 *
 * - plapId (this value will be empty if saving a new record)
 * - firstName
 * - lastName
 * - instagram
 * - status (this value will be set to playing if saving a new record)
 *************************************************************************************************/

include('library.php');

$conn = get_database_connection();

// Sanitize all input values to prevent SQL injection exploits
$plaId = $conn->real_escape_string($plaId);
$name = $conn->real_escape_string($name);
$instagram = $conn->real_escape_string($instagram);
$status = $conn->real_escape_string($status);
$numberOfKills = $conn->real_escape_string($numberOfKills);

// Determine if we need to create a new application or edit an existing application
if (empty($plaId))
{
    /*
     * This is a new application (INSERT operation)
     */

    // Step 1: Create the `player` record
    $sql = <<<SQL
    INSERT INTO players (pla_name, pla_instagram, pla_status)
        VALUES ('$name', '$instagram', '$status')
    SQL;

    if (!$conn->query($sql))
    {
        die('Error inserting customer record: ' . $conn->error);
    }

}
else
{
    /*
     * This is an existing application (UPDATE operation)
     */

    // Step 1: Update the `player` record
    $sql = <<<SQL
    UPDATE players
       SET pla_name = '$name',
           pla_instagram = '$instagram',
           pla_status = '$status',
           pla_number_of_kills = '$numberOfKills'
     WHERE pla_id = $plaId
    SQL;

    if (!$conn->query($sql))
    {
        die('Error updating customer record: ' . $conn->error);
    }
}

$conn->close();

header('Location: index.php?content=list');