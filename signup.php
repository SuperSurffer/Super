<?php
include'conn_db.php'; // แนบไฟล์เชื่อมต่อฐานข้อมูล
?>

<?php

// นำค่าที่ถูกส่งจากฟอร์มในหน้า signin.html ผ่าน method=post เข้ามาและเก็บไว้ในตัวแปรที่สร้างใหม่
$username = $_POST['username'];
$password = $_POST['password'];
$name = $_POST['name'];
$tel = $_POST['tel'];


// สร้างตัวแปร check เพื่อเก็บค่าการเปรียบเทียบ $username กับค่า username ในฐานข้อมูล
$check = $conn->prepare('SELECT id FROM user_log WHERE user = ?');
$check->bind_param('s', $username);
$check->execute();
$check->store_result();


if($check->num_rows > 0){ // หากค่า $username ตรงกับ username ในฐานข้อมูลจะหมายความว่า username ซ้ำ
    echo 'username ซ้ำ';
    
    // ยุติการเชื่อมต่อ และไปยังหน้าแสดงผล
    $check->close();
    $conn->close();
    
    header('location:signupfailed.html');

}else{ // หาก username ไม่ซ้ำ ให้ทำการใส่ค่าที่กรอกลงในฟอร์ม ลงฐานข้อมูล
    $stmt = $conn->prepare('INSERT INTO user_log(user,pass,ss_name,tel) VALUES( ?, ?, ?, ?)');
    $stmt->bind_param('ssss', $username, $password, $name, $tel);
    $stmt->execute();

    // ยุติการเชื่อมต่อ และไปยังหน้าแสดงผล
    $stmt->close();
    $conn->close();

    header('location:signupsuccess.html');

}

?>

<!-- <meta http-equiv="refresh" content="0;URL=result.html" /> -->


