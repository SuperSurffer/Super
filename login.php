<?php

session_start(); // เริ่มต้นการทำงาน session
include 'conn_db.php'; // แนบไฟล์ conn_db.php
?>
<?php

// สร้างตัวแปร username และ password โดยนำค่ามาจาก name=username และ
// name=password ที่ถูกส่งผ่าน method=post จากหน้า signin.html
$username = $_POST['username'];
$password = $_POST['password'];

// ตรวจเช็ค username ที่กรอก เทียบกับฐานข้อมูล
$check = $conn->prepare('SELECT id, pass FROM user_log WHERE user = ?');
$check->bind_param('s', $username); // ตัวแปร $username แทนค่า ? ในบรรทัดบน
$check->execute();
$check->store_result();

    if ($check->num_rows > 0) { // หากพบค่า username ในฐานข้อมูลตรงที่กับใน $username จะทำให้ row > 1 ทำให้เงื่อนไขเป็น True (หากไม่พบจะเป็น 0)
        $check->bind_result($id, $pass);
        $check->fetch();

        if($password === $pass){ // เช็ค password เปรียบเทียบค่าจาก cus_password ในฐานข้อมูล กับค่าใน $password
            $_SESSION['loggedin'] = TRUE; // ให้ตัวแปรมีค่าเป็น TRUE
            $_SESSION['username'] = $username; // นำค่าในตัวแปร username เข้าไปในตัวแปร session
            header('location:index.php'); // ล็อคอินสำเร็จ ไปยังหน้า index.php
        }else{
            header('location:loginfailed.html');
        }
    }else{
        header('location:loginfailed.html');
    }
    //$stmt->close();



?>