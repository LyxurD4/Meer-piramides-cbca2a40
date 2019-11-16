<!DOCTYPE html>
<html lang="en">
<head>
    <title>Piramide</title>
    <style>
        * {
            margin: 0;
            padding: 0; 
        }
        body {
            font-family: Arial;
        }
        .table {
            background-color: black;
            padding: 50px;
        }

    </style>
</head>
<body>
    <h1>Halve Piramide</h1>
    <br>
    <table>
        <tbody>
        <?php for($i = 0; $i <= 9 ; $i++) { ?>
                    <tr>
                    <?php 
                    for($j = 0; $j <= $i  ; $j++) {  
                        echo "<td class = table></td>";
                    } ?>

                    </tr>
                <?php } ?>
        </tbody>
    </table>
</body>

</html>