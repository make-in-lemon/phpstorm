
<html>
<body>
<table cellpadding="0" border="1">
    <tr>
        <td>Distance</td> <td>Cost</td>
    </tr>
    <?php

    for($i=50;$i<=250;$i+=50){

        echo "<tr><td>".$i."</td> <td>"
            .($i/10)."</td></tr>";

    }

    ?>

</table>
</body>
</html>