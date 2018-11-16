<!DOCTYPE html>
<html lang="en" dir="ltr">
    <head>
        <meta charset="utf-8">
        <title></title>
    </head>
    <body>

        <div class="container">
            <table>
                <table width="1500" border="1" align="center">
                <tr align=”center”>
                    <th>ห้อง</th>
                    <th>อุณหภูมิคอยล์เย็น</th>
                    <th>ความชื้นสัมพัทธ์</th>
                    <th>อุณหภูมิห้อง</th>
                    <th>แรงดันคอยล์เย็น</th>
                    <th>กระแสคอยล์เย็น</th>
                    <th>กระแสคอยล์ร้อน</th>
                    <th>ความเร็วลม</th>
                    <th>ประสิทธิภาพ</th>
                    <th>สถานะ</th>
                    <th>ส่วนควบคุม</th>
                </tr>
                @foreach($Users as $row)
                <tr align=”center”>
                    
                    <td>{{$row->IP}}</td>
                    <td>{{$row->TempCool}}'</td>
                    <td>{{$row->Humidity}}</td>
                    <td>{{$row->TempRoom}}</td>
                    <td>{{$row->VoltCool}}</td>
                    <td>{{$row->CurrentCool}}</td>
                    <td>{{$row->CurrentHot}}</td>
                    <td>{{$row->WindSpeed}}</td>
                    <td>{{$row->Performance}}</td>
                    <td>{{$row->PowerStatus}}</td>
                    <td><a>Edit</a></td>
                    
                </tr>
                @endforeach
            </table>
        </div>

    </body>
</html>
