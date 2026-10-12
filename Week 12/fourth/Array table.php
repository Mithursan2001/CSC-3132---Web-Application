<html>
    <body>
        <h1>Array Table</h1>
        <?php
        $a = array(
            "males" => array("a" => "Nimal", "b" => "Amara", "c" => "Kamal"),
            "females" => array("a" => "Kumari", "b" => "Nirmala", "c" => "Kamala"),
            "fees" => array(2500, 1500, 500)
        );
        ?>

        <table border="1" cellpadding="5" cellspacing="0">
            <tr>
                <th>Males</th>
                <th>Females</th>
                <th>Fees</th>
            </tr>

            <tr>
                <td><?php echo $a["males"]["a"]; ?></td>
                <td><?php echo $a["females"]["a"]; ?></td>
                <td><?php echo $a["fees"][0]; ?></td>
            </tr>

            <tr>
                <td><?php echo $a["males"]["b"]; ?></td>
                <td><?php echo $a["females"]["b"]; ?></td>
                <td><?php echo $a["fees"][1]; ?></td>
            </tr>

            <tr>
                <td><?php echo $a["males"]["c"]; ?></td>
                <td><?php echo $a["females"]["c"]; ?></td>
                <td><?php echo $a["fees"][2]; ?></td>
            </tr>
        </table>
    </body>
</html>
