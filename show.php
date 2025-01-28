<?php


// معلومات الاتصال بقاعدة البيانات
$servername = "localhost";
$username = "Training supervisor";
$password = "1234@";
$dbname = "user_registration";

// إنشاء الاتصال بقاعدة البيانات
$conn = new mysqli($servername, $username, $password, $dbname);

// التحقق من الاتصال
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// استعلام SQL لاسترجاع البيانات
$sql = "SELECT id, username, email FROM users1";
$result = $conn->query($sql);

?>

<!DOCTYPE html>
<html lang="ar">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>عرض بيانات المستخدمين</title>
    <style>
        table {
            width: 80%;
            margin: 20px auto;
            border-collapse: collapse;
            text-align: center;
        }
        table, th, td {
            border: 1px solid #ddd;
        }
        th, td {
            padding: 10px;
        }
        th {
            background-color: #4CAF50;
            color: white;
        }
    </style>
</head>
<body>

<h1 style="text-align: center;">عرض بيانات المستخدمين</h1>

<table>
    <tr>
        <th>رقم المستخدم</th>
        <th>اسم المستخدم</th>
        <th>البريد الإلكتروني</th>
    </tr>

    <?php
    // التحقق من وجود بيانات لعرضها
    if ($result->num_rows > 0) {
        // عرض كل صف في الجدول
        while ($row = $result->fetch_assoc()) {
            echo "<tr>";
            echo "<td>" . $row["id"] . "</td>";
            echo "<td>" . $row["username"] . "</td>";
            echo "<td>" . $row["email"] . "</td>";
            echo "</tr>";
        }
    } else {
        echo "<tr><td colspan='3'>لا توجد بيانات</td></tr>";
    }
    ?>

</table>

</body>
</html>

<?php
// إغلاق الاتصال بقاعدة البيانات
$conn->close();
?>