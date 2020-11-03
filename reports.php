<?php
include('setings.php');
$result = $link->query("SELECT * FROM `reports`");
echo "<h5>Reports:</h5>";
echo "<table>"; // start a table tag in the HTML\$res = $conn->query("SELECT count(*) FROM users WHERE rating > 10");
echo "<tr>";
echo "<td>";
echo "username";
echo "</td>";
echo "<td>";
echo " ";
echo "</td>";
echo "<td>";
echo "report";
echo "</td>";
echo "</tr>";
while ($row = $result->fetch_array()) {
    echo "<tr>";
        for ($j = 0 ; $j < 3 ; ++$j) echo "<td>$row[$j]";
        ?>
        <form method="GET" action='delete.php' >
        <input type="hidden" name="reportlogin" value="<?php echo $row['login']; ?>">
        <button type="submit" class="close" aria-label="Close">
            <span aria-hidden="true">&times;</span>
        </button>
    </form>
    <?
    echo "</td></tr>";
}
echo "</table>";

?>