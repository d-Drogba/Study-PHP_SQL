<?php
$conn = mysqli_connect(
    "localhost", 
    "root", 
    "000000", 
    "opentutorials");

?>
<!docttype html>
<html>

<head>
    <meta charset="utf-8">
    <title>PHP&SQL</title>
</head>

<body>
    <h1><a href="index.php">WEB</a></h1>
    <p><a href="index.php">topic</a></p>
    <table border='1'>
        <tr>
            <td>ID</td><td>NAME</td><td>PROFILE</td>
            <?php
            $sql = "SELECT * FROM author";
            $result = mysqli_query($conn, $sql);
            while($row = mysqli_fetch_array($result)) {
                $filtered = array(
                    'id'=>htmlspecialchars($row['id']),
                    'name'=>htmlspecialchars($row['name']),
                    'profile'=>htmlspecialchars($row['profile'])
                );
                ?>
                <tr>
                <td><?=$row['id']?></td>
                <td><?=$row['name']?></td>
                <td><?=$row['profile']?></td>
                </tr>
                <?php
            }
            ?>
        </tr>
    </table>
    <form action="process_create_author.php" method="post">
            <p><input type="text" name="name" placeholder="author_name"></p>
            <p><textarea name="profile" placeholder="author_profile"></textarea></p>
            <p><input type="submit" value="Create author"></p>
    </form>
</body>

</html>