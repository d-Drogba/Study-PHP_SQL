<?php
$conn = mysqli_connect("localhost", "root", "000000", "opentutorials");

$sql = "
    INSERT INTO topic
        (title, description, created)
        VALUES(
            'MySQL',
            'MySQL is ...',
            NOW()
        )
";

$reslut = mysqli_query($conn, $sql);
if($result == false) {
    echo mysqli_error($conn);   // 실제로는 절대 echo로 출력하면 보안상 굉장히 위험!
}
?>