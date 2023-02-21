<!DOCTYPE html>
<html>

<head>
</head>

<body>
    <table width="500px">
        <?php
        for ($rij = 1; $rij <= 8; $rij++) {
            echo "<tr>";
            for ($collom = 1; $collom <= 8; $collom++) {
                $totaal = $rij + $collom;
                if ($totaal % 2 == 0) {
                    echo "<td height=30px width=30px bgcolor='white'></td>";
                } else {
                    echo "<td height=30px width=30px bgcolor='black'></td>";
                }
            }
            echo "</tr>";
        }
        ?>
    </table>
    <br>
    <a href="../index.html">
        <h3> return to home </h3>
    </a>
</body>

</html>