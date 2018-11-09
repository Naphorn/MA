<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>

  <?PHP

    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "ma";

    // Create connection
    $conn = new mysqli($servername, $username, $password, $dbname);
    // Check connection
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    } 
    
    $sql = "SELECT IP, TempCool, Humidity, TempRoom, VoltCool, CurrentCool, CurrentHot, WindSpeed, Performance, PowerStatus FROM statusair";
    $result = $conn->query($sql);

  ?>

    <table width="500" border="2" align="center">
        <tr>
          <td>IP</td>
          <td>อุณหภูมิคอยล์เย็น</td>
          <td>ความชื้นสัมพัทธ์</td>
          <td>อุณหภูมิห้อง</td>
          <td>แรงดันคอยล์เย็น</td>
          <td>กระแสคอยล์เย็น</td>
          <td>กระแสคอยล์ร้อน</td>
          <td>ความเร็วลม</td>
          <td>ประสิทธิภาพ</td>
          <td>สถานะ</td>
        </tr>
        <tr>
          <td>
          <?php
            while($row = $result->fetch_assoc()) 
              {
                echo "<tr>";
                echo "<td>" .$row["IP"] . "</td>";
                echo "<td>" .$row["TempCool"] . "</td>";
                echo "<td>" .$row["Humidity"] . "</td>";
                echo "<td>" .$row["TempRoom"] . "</td>";
                echo "<td>" .$row["VoltCool"] . "</td>";
                echo "<td>" .$row["CurrentCool"] . "</td>";
                echo "<td>" .$row["CurrentHot"] . "</td>";
                echo "<td>" .$row["WindSpeed"] . "</td>";
                echo "<td>" .$row["Performance"] . "</td>";
                echo "<td>" .$row["PowerStatus"] . "</td>";
              }
          ?>
            &nbsp;
          </td>
        </tr>

  </body>
</html>
