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

                <!-- <div class="panel-body">
                    @if (session('status'))
                        <div class="alert alert-success">
                            {{ session('status') }}
                        </div>
                    @endif

                    You are logged in!
                </div> -->
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-md-4 col-md-offset-2">
          <table class="table table-dark">
            <thead>
              <tr>
                <th scope="col">Status</th>
                <th scope="col">-----</th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <th scope="row">IP</th>
                <td></td>
              </tr>
              <tr>
                <th scope="row">อุณหภูมิคอยล์เย็น</th>
                <td></td>
              </tr>
              <tr>
                <th scope="row">อุณหภูมิห้อง</th>
                <td></td>
              </tr>
              <tr>
                <th scope="row">แรงดันคอยล์เย็น</th>
                <td></td>
              </tr>
              <tr>
                <th scope="row">กระแสคอยล์ร้อน</th>
                <td></td>
              </tr>
              <tr>
                <th scope="row">ความเร็วลม</th>
                <td></td>
              </tr>
              <tr>
                <th scope="row">ประสิทธิภาพ</th>
                <td></td>
              </tr>
              <tr>
                <th scope="row">สถานะ</th>
                <td></td>
              </tr>
            </tbody>
          </table>
        </div>
      </div>


</div>
@endsection
