<html>
    <body>
        <form action="insert.php" method="post">
            Firstname: <input type="text" name="firstname"><br>
            Lastname: <input type="text" name="lastname"><br>
            Age: <input type="text"  name="age"><br>
            <input type="submit" value="Add">
        </form>

        <table border="1">
        <tr>
            <th>ID</th>
            <th>Firstname</th>
            <th>Lastname</th>
            <th>Age</th>
            <th>Actions</th>
        </tr>

        <?php
        $conn = new mysqli("localhost", "root", "", "university");
        $result = $conn->query("SELECT * FROM students");

        while($row = $result->fetch_assoc()) {
            echo "<tr>
                    <td>".$row['id']."</td>
                    <td>".$row['firstname']."</td>
                    <td>".$row['lastname']."</td>
                    <td>".$row['age']."</td>
                    <td><a href='edit.php?id=".$row['id']."'>Edit</a> |
                            <a href='delete.php?id=".$row['id']."' 
                               onclick=\"return confirm('Are you sure?');\">
                               Delete
                            </a></td>
                </tr>";
        }
        $conn->close();
        ?>
    </table>
    </body>
</html>