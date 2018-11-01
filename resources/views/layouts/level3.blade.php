@extends('layouts.app')

@extends('layouts.menubar')
@section('content')
<!DOCTYPE html>
<div class=="container">
  <div class="row">
      <div class="col-md-12">
      <br><br>
      @if(\Session::has('success'))
          <div class="alert alert-success">
              <p>{{\Session::get('success')}}</p>
          </div>
      @endif
      <div align="right">{{-- <a href="{{route('user.create')}}"class="btn btn-success">เพิ่มข้อมูลผู้ใช้</a>--}}</div>
          <table {{--class="table table-bordered table-striped"--}} align="center" border="1"  width="70%"max-width="70%"margin-bottom="22px">
              <tr>
                  <th>IP</th>
                  <th>อุณหภูมิคอยล์เย็น</th>
                  <th>อุณหภูมิห้อง</th>
                  <th>แรงดันคอยล์เย็น</th>
                  <th>กระแสคอยล์ร้อน</th>
                  <th>ความเร็วลม</th>
                  <th>ประสิทธิภาพ</th>
                  <th>สถานะ</th>
              </tr>
               @foreach($statusair as $row)
                  <tr>
                      <td>{{$row['IP']}}</td>
                      <td>{{$row['Tempcool']}}</td>
                      <td>{{$row['TempRoom']}}</td>
                      <td>{{$row['voltCool']}}</td>
                      <td>{{$row['CurrentCool']}}</td>
                      <td>{{$row['CurrentHot']}}</td>
                      <td>{{$row['WindSpeed']}}</td>
                      <td>{{$row['Performance']}}</td>
                      <td>{{$row['Power']}}</td>

                      {{-- <td><a href="{{action('UsersController@edit',$row['id'])}}" class="btn btn-warning">Edit</a></td>
                      <td>
                          <form method="post" class="delete_form" action="{{action('UsersController@destroy',$row['id'])}}">
                              {{csrf_field()}}
                              <input type="hidden" name="_method" value="DELETE" />
                              <button type="submit" class="btn btn-danger">Delete</button>
                          </form>
                      </td> --}}
                  </tr>
              @endforeach
          </table>
      </div>
  </div>
</div>
{{-- <script type="text/javascript">
  $(document).ready(function()
      {$('.delete_form').on('submit', function()
          {
              if(confirm("คุณต้องการลบข้อมูลใช่หรือไม่ ?"))
              {
                  return true;
              }
              else
              {
                  return false;
              }
          });
      });
</script> --}}
{{-- <div id='app'>
<users></users>
</div> --}}
<script src="https://cdn.jsdelivr.net/npm/vue/dist/vue.js"></script>
{{-- <script>
Vue.component('users',(
  templete: '#users-template'

  data: function() {
      return {
          users:[]
      }
  },

  created: function() {
      this.getUsers();
  },

  methods: {
      getUsers: function() {
          $.getJSON("{{route('api_users')}}", function(users) {
           this.users = users;
          }.bind(this));

          setTimeout(this.getUsers,1000);
      }
  }
));
new Vue({
  e1: '#app',

});
</script> --}}
@endsection
