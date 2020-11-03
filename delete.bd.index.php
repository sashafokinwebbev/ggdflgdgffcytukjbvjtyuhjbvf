<?php

include('setings.php');
$result = $link->query("SELECT login,permisions FROM `registered users`");
echo "<h5>Accaunts:</h5>";
echo "<table>"; 
echo "<td>";
echo "username";
echo "</td>";
echo "<td>";
echo "permissions";
echo "</td>";
echo "</tr>";
while ($row = $result->fetch_array()) {
    echo "<tr>";
        for ($j = 0 ; $j < 3 ; ++$j) echo "<td>$row[$j]";
        ?>
        <form method="POST" action='delete.bd.php' >
        <input type="hidden" name="login" value="<?php echo $row['login']; ?>">
        <button type="submit" class="close" aria-label="Close">
            <span aria-hidden="true">&times;</span>
        </button>
    </form>
    <?
    echo "</td></tr>";
}
echo "</table>";