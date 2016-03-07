<html>
<body>
<table cellpadding="0" border="1">
    <tr>
        <td>Distance</td> <td>Cost</td>
    </tr>
    <?php
    $i=50;
    while($i<=250){

        echo "<tr><td>".$i."</td> <td>"
            .($i/10)."</td></tr>";
        $i+=50;
    }

    ?>

</table>
</body>
</html>