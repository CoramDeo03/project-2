<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Data</title>
</head>
<body>
    <h2>입력된 데이터</h2>
    
    <?php
    // POST 메서드를 통해 전송된 데이터를 가져옵니다.
    $username = $_POST['username'];
    $password = $_POST['pwd'];
    $gender = $_POST['gender'];
    $istype = $_POST['istype'];
    
    // 가져온 데이터를 출력합니다.
    echo "이름: $username <br>";
    echo "비번: $password <br>";
    
    // 성별을 출력합니다.
    echo "성별: ";
    if ($gender == 1) {
        echo "남자";
    } elseif ($gender == 2) {
        echo "여자";
    } else {
        echo "선택하지 않음";
    }
    echo "<br>";
    
    // 신입생/복학생을 출력합니다.
    echo "신입생/복학생: ";
    if ($istype == 1) {
        echo "신입생";
    } elseif ($istype == 2) {
        echo "복학생";
    } else {
        echo "선택하지 않음";
    }
    echo "<br>";
    ?>

    <p><a href="index.html">이전 페이지로 돌아가기</a></p>
</body>
</html>
