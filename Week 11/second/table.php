<html>
    <body>
        <h1> Table </h1>
<?php
$subject1= "Maths";
$subject2= "Science";
$subject3= "English";
$marks1=90;
$marks2=95;
$marks3=99;

echo "<table border='1' cellpadding='10' cellspacing='0'>
<tr>
        <th>Subject</th>
        <th>Marks</th>
        </tr>

        <td>$subject1</td>
        <td>$marks1</td>
      </tr>

        <td>$subject2</td>
        <td>$marks2</td>
      </tr>

        <td>$subject3</td>
        <td>$marks3</td>
      </tr>

      <tr>
      <td><?php echo $subject1;?></td> <td><?php echo $marks1;?></td>
      </tr>
</table>";
echo "<br>";

echo '<table border="1">
<tr>
        <th>Subject</th>
        <th>Marks</th>
        </tr>

        <td>'.$subject1.'</td>
        <td>'.$marks1.'</td>
      </tr>

        <td>'.$subject2.'</td>
        <td>'.$marks2.'</td>
      </tr>

        <td>'.$subject3.'</td>
        <td>'.$marks3.'</td>
      </tr>
</table>';

echo "<br>";



?>

</body>
</html>