<!--Navbar -->
<nav class="mb-1 navbar navbar-expand-lg navbar-light lighten-1">
<a class="navbar-brand" href="trang-chu">
  <!--b class="text-primary font-weght-bold" id="facebook-logo-login">F a c e b o o k</b-->
  <svg id="facebook-logo-login" class="eltiug27 a8c37x1j icchualog" height="22" viewBox="100 100 822.51 160"><path d="M166.43,126.68c-9.65,0-12.44,4.28-12.44,13.72v15.66h25.74l-2.58,25.3H154v76.78H123.11V181.36H102.3v-25.3h20.81V140.83c0-25.52,10.29-39,39-39a146.17,146.17,0,0,1,18,1.07v23.81Z"></path><path d="M181.87,203.88c0-28.52,13.51-50,41.82-50,15.44,0,24.87,7.94,29.38,17.8V156.06h29.59V258.14H253.07V242.7c-4.29,9.87-13.94,17.59-29.38,17.59-28.31,0-41.82-21.45-41.82-50Zm30.88,6.87c0,15.22,5.57,25.3,19.94,25.3,12.66,0,19.09-9.22,19.09-23.8V202c0-14.58-6.43-23.8-19.09-23.8-14.37,0-19.94,10.08-19.94,25.3Z"></path><path d="M347,153.91c12,0,23.37,2.58,29.59,6.86l-6.86,21.88a48.6,48.6,0,0,0-20.59-4.72c-16.73,0-24,9.65-24,26.17v6c0,16.52,7.29,26.17,24,26.17a48.6,48.6,0,0,0,20.59-4.72l6.86,21.87c-6.22,4.29-17.58,6.87-29.59,6.87-36.25,0-52.76-19.52-52.76-50.83v-4.72C294.24,173.43,310.75,153.91,347,153.91Z"></path><path d="M380.66,211v-9c0-28.95,16.51-48,50.19-48,31.74,0,45.68,19.3,45.68,47.61v16.3h-65c.65,13.94,6.87,20.16,24,20.16,11.59,0,23.81-2.36,32.82-6.22L474,253c-8.15,4.3-24.88,7.51-39.67,7.51C395.24,260.5,380.66,241,380.66,211Zm30.88-13.3h37.32v-2.57c0-11.15-4.5-20-18-20C416.91,175.14,411.54,183.94,411.54,197.66Z"></path><path d="M591,210.32c0,28.52-13.72,50-42,50-15.44,0-26.16-7.72-30.45-17.59v15.44H489.39V104.8L520.27,102v68.2c4.5-9,14.37-16.3,28.74-16.3,28.31,0,42,21.45,42,50Zm-30.88-7.08c0-14.37-5.57-25.09-20.37-25.09-12.66,0-19.52,9-19.52,23.59v10.72c0,14.58,6.86,23.59,19.52,23.59,14.8,0,20.37-10.72,20.37-25.09Z"></path><path d="M601.33,209.67v-5.14c0-29.39,16.73-50.62,50.83-50.62S703,175.14,703,204.53v5.14c0,29.38-16.73,50.62-50.83,50.62S601.33,239.05,601.33,209.67Zm70.78-7.29c0-13.51-5.58-24.23-20-24.23s-19.95,10.72-19.95,24.23v9.44c0,13.51,5.58,24.23,19.95,24.23s20-10.72,20-24.23Z"></path><path d="M713.27,209.67v-5.14c0-29.39,16.73-50.62,50.83-50.62s50.83,21.23,50.83,50.62v5.14c0,29.38-16.73,50.62-50.83,50.62S713.27,239.05,713.27,209.67Zm70.78-7.29c0-13.51-5.58-24.23-19.95-24.23s-19.94,10.72-19.94,24.23v9.44c0,13.51,5.57,24.23,19.94,24.23s19.95-10.72,19.95-24.23Z"></path><path d="M857.39,204.74l30.45-48.68h32.81l-31.95,50.4,33.24,51.68H889.13l-31.74-50v50H826.5V104.8L857.39,102Z"></path></svg>
  </a>
  <button class="navbar-toggler " type="button" data-toggle="collapse" data-target="#navbarSupportedContent-555"
    aria-controls="navbarSupportedContent-555" aria-expanded="false" aria-label="Toggle navigation">
   <span>

 <div class="btn-group btn-group-sm" role="group">
        <a href="dang-nhap"><button type="button" class="btn btn-success  btn-sm dangky">Tham gia</button></a>
    </div>
  </span>
  </button>
<div class="collapse navbar-collapse" id="navbarSupportedContent-555">
    <ul class="navbar-nav ml-auto nav-flex-icons m-2">
    <form class="menulog" action="javascript:volid()" method="POST"><li class="nav-item avatar mr-3">
    <input id="username" placeholder="Tên tài khoản..." type="text" class="form-control">
        </li>
        <li class="nav-item avatar mr-3">
            <input placeholder="Mật khẩu" type="password" class="form-control" id="password" >
        </li>
        <li class="nav-item avatar mr-3">
            <button id="login" type="submit" class="nav-link btn-dangnhap dangnhappc"><b>Đăng nhập</button>
        </a>
        </li>
        </form>
        <li class="nav-item avatar mr-3">
            <a href="dang-nhap" class="chuatk">Bạn chưa có tài khoản?</a>
        </li>    
    </ul>
    </div>
</nav>
<script>
$('#login').click(function(){
  var username = $("#username").val();
  var password = $("#password").val();
  if(username == '' || password == ''){
    toastr.error('Chưa điền đầy đủ thông tin.');
    return false;
  }
  $("#username").prop('disabled', true)
  $("#password").prop('disabled', true)
  $('#login').prop('disabled', true)
  var kunloc = {
					"async": true,
					"crossDomain": true,
					"url": "xuly/login.php",
					"method": "POST",
					"headers": {
						"content-type": "application/x-www-form-urlencoded",
						"cache-control": "no-cache"
					},
					"data": {
						"username": username,
						"password": password,
					}
		}
	 $.ajax(kunloc).done (function(data) {
        Data = JSON.parse(data)
        if(Data.url){
            setTimeout(() => { location.reload() } , Data.time)
        }
        toarst(Data.type,Data.text,Data.title)
        $("#username").prop('disabled', false)
        $("#password").prop('disabled', false)
        $('#login').prop('disabled', false)
    })
})
</script>