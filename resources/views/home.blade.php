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

    <!-- Button trigger modal -->
    <button type="button" class="btn" data-toggle="modal" data-target="#exampleModalCenter">Test</button>

    <!-- Modal -->
    <div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h1 class="modal-title" id="exampleModalCenterTitle">Status</h1>
                </div>

                <div class="modal-body">
                <!-- ------------------------------------------------------------------------------------------------------------ -->
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
                <!-- ------------------------------------------------------------------------------------------------------------ -->
                    <table class="table table-dark">
                        <thead>
                            <tr>
                                <th scope="col">Status</th>
                                <th scope="col">-----</th>
                            </tr>
                        </thead>
                        <tbody>
                <!-- ------------------------------------------------------------------------------------------------------------ -->
                            <tr>
                                <th scope="row">IP</th>
                                <th scope="row">อุณหภูมิคอยล์เย็น</th>               
                                <th scope="row">ความชื้นสัมพัทธ์</th>                
                                <th scope="row">อุณหภูมิห้อง</th>                              
                                <th scope="row">แรงดันคอยล์เย็น</th>           
                                <th scope="row">กระแสคอยล์เย็น</th>               
                                <th scope="row">กระแสคอยล์ร้อน</th>         
                                <th scope="row">ความเร็วลม</th>  
                                <th scope="row">ประสิทธิภาพ</th>        
                                <th scope="row">สถานะ</th>                     
                            </tr>
                <!-- ------------------------------------------------------------------------------------------------------------ -->
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
                <!-- ------------------------------------------------------------------------------------------------------------ -->
                        </tbody>
                    </table>

                    <thead>
                        <tr>
                            <th scope="row">Switch</th>
                        </tr>
                        <tr>
                            <th scope="col"><button type="button" class="btn btn-success">ON</button></th>
                            <th scope="col"><button type="button" class="btn btn-danger">OFF</button></th>
                        </tr>
                    </thead>

                </div>

                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                </div>

            </div>
        </div>
    </div>

</div>
@endsection
