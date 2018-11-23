@extends('layouts.app')
@section('title','Home ManagementAir')
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
                <div class="panel-heading"><a href="{{ route('register') }}">Register</a></div>
            </div>
        </div>
    </div>
</div>

<table width="1500" border="1" align="center">
    <tr>
        <td align="center">ห้อง</td>
        <td align="center">อุณหภูมิคอยล์เย็น</td>
        <td align="center">ความชื้นสัมพัทธ์</td>
        <td align="center">อุณหภูมิห้อง</td>
        <td align="center">แรงดันคอยล์เย็น</td>
        <td align="center">กระแสคอยล์เย็น</td>
        <td align="center">กระแสคอยล์ร้อน</td>
        <td align="center">ความเร็วลม</td>
        <td align="center">ประสิทธิภาพ</td>
        <td align="center">สถานะ</td>
        <td align="center">ส่วนควบคุม</td>
    </tr>
</table>
@endsection