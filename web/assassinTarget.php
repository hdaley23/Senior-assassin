<?php

/*************************************************************************************************
 * assassinTarget.php
 *
 * Content page to display a list of players with randomly generated targets. 
 * This page is expected to be contained within index.php.
 *************************************************************************************************/

?>

<script>
    function editPlayer(id) {
        location.href = 'index.php?content=detail&id=' + id;
    }
</script>

<br>

<table class='table table-bordered table-hover'>
    <thead>
        <tr class="table-dark">
            <th>Assassin Name</th>
            <th>Target Name</th>
        </tr>
    </thead>
    <tbody class="table-group-divider">

    <?php

    $name = '';
    $targets = array();

    $conn = get_database_connection();

    $name = $conn->real_escape_string($name);
    for ($i = 0; $i < sizeof($targets); $i++)
    {
        $targets[$i] =  $conn->real_escape_string($targets[$i]);
    }

    $sql = <<<SQL
    SELECT pla_name
      FROM players
    SQL;

    $result = $conn->query($sql);

    $row = $result->fetch_assoc();
    $result = $conn->query($sql);
    while ($row = $result->fetch_assoc())
    {
        $targets[] = $row['pla_name'];
    }
    shuffle($targets);

    $sql = <<<SQL
    SELECT *
      FROM players
    SQL;

    $result = $conn->query($sql);

    $row = $result->fetch_assoc();
    $result = $conn->query($sql);
    $empty = true;

    for ($i = 0; $i < sizeof($targets); $i++)
    {
        echo '<tr class="align-middle" style="cursor:pointer" onclick="editPlayer(' . $row['pla_id'] . ')">';
        echo '<td>' . $targets[$i] . '</td>';
        if($i == sizeof($targets)-1){
            echo '<td>' . $targets[1] . '</td>';
        } else{
            echo '<td>' . $targets[$i + 1] . '</td>';
        }
        echo '</tr>';

        $empty = false;
    }

    if ($empty)
    {
        echo '<tr><td class="text-center" colspan="7"><em>No Records</em></td></tr>';
    }

    ?>

    </tbody>
</table>
