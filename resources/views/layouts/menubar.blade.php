
<style>
#sidebar{
  position: fixed;
  padding: 0px;
  height: 100%;
  background: #151719;
  padding-top: 50px;
  /* left: -200px; */
  transition: all 500ms linear;
}
/* #sidebar.active{
left: 0px;
} */
#sidebar ul li{
  color: rgba(230,230,230,0.9);
  list-style: none;
  padding: 15px 10px;
  /* border-bottom: 1px solid rgba(100,100,100,0.3) */
}
#sidebar .toggle-btn{
  position: absolute;
  left: 205px;
  top: 20px;
  padding-top: 30px;
}
/* #sidebar .toggle-btn span{
  display: block;
  width: 30px;
  height: 5px;
  background: #151719;
  margin: 5px 0px;
} */
</style>
<div id="sidebar">
  <div class="toggle-btn" {{--onclick="toggleSidebar()"--}}> 
   <span></span>
   <span></span>
   <span></span>
 </div>
  <ul>
    <li>
      <a href="level1">Level 1</a>
    </li>
    <li>
      <a href="level2">Level 2</a>
    </li>
    <li>
      <a href="level3">Level 3</a>
    </li>
    <li>
      <a href="level4">Level 4</a>
    </li>
    <li>
      <a href="level5">Level 5</a>
    </li>
    
  </ul>
</div>
{{-- <script>
  function toggleSidebar(){
    document.getElementById("sidebar").classList.toggle('active');
  }
</script> --}}


