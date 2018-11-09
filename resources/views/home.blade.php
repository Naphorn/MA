@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">

                <div class="panel-heading"><a href="level1">Lavel 1</a></div>
                <div class="panel-heading"><a href="level2">Lavel 2</a></div>
                <div class="panel-heading"><a href="level3">Lavel 3</a></div>
                <div class="panel-heading"><a href="level4">Lavel 4</a></div>
                <div class="panel-heading"><a href="level5">Lavel 5</a></div>

            </div>
        </div>
    </div>

    <!-- -------------------------------------------------------Show Table------------------------------------------------------------------ -->
    <?PHP

        $servername = "localhost";
        $username = "root";
        $password = "";
        $dbname = "ma";

        // Create connection
        $conn = new mysqli($servername, $username, $password, $dbname);
        // Check connection
        if ($conn->connect_error) 
        {
            die("Connection failed: " . $conn->connect_error);
        } 

        $sql = "SELECT IP, TempCool, Humidity, TempRoom, VoltCool, CurrentCool, CurrentHot, WindSpeed, Performance, PowerStatus FROM statusair";
        $result = $conn->query($sql);

    ?>

    <table width="1000" border="2" align="center">
        <tr>
            <td>ห้อง</td>
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
    <!-- ----------------------------------------------------------------------------------------------------------------------------------- -->

</div>
@endsection
