<style>
    h2{
        font-family: "Helvetica";
    }
</style>

<h2>Player with the most kills: </h2>

<table class='table table-bordered table-hover'>
    <thead>
        <tr class="table-dark">
            <th>Name</th>
            <th>Number of Kills</th>
        </tr>
    </thead>
    <tbody class="table-group-divider">

    <?php

    $conn = get_database_connection();

    // Build the SELECT statement
    $sql = <<<SQL
    SELECT *
      FROM players
      ORDER BY pla_number_of_kills DESC
      LIMIT 1
    SQL;

    // Execute the query and save the results
    $result = $conn->query($sql);

    $empty = true;

    // Iterate over each row in the results
    while ($row = $result->fetch_assoc())
    {
        echo '<tr>';
        echo '<td>' . $row['pla_name'] . '</td>';
        echo '<td>' . $row['pla_number_of_kills'] . '</td>';
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