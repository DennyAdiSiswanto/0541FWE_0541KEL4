<!DOCTYPE html>
<html lang="en">
    <head>
    <meta charset="utf-8">
        <title>@yield('page_title','Sistem Informasi Pegawai') </title>

        <link rel="stylesheet" type="text/css"
        href="{{asset('component/bootstrap/dist/css/bootstrap.min.css')}} ">
        <link rel="stylesheet" type="text/css"
        href="{{asset('component/font-awesome/css/font-awesome.min.css')}} ">
        <style type="text/css">

           
            body {
                padding-top: 70px;
                padding-bottom: 70px;
                background-color: lightgreen;*/
           }

           .starter-template{
            padding: 40px 15px;
            text-align: center;
           }

           .form-horizontal{
            padding: 15px 10px;
           }

           footer{
            padding-top: 15px;
            text-align: right;
           }



        </style>
    </head>
    <body>
       <nav class="navbar navbar-default navbar-fixed-top">
        <div class="container">
            <div class="navbar-header">
                
                <a href="{{url('/')}}" class="navbar-brand">System Informasi Pegawai</a>
            </div>
            <div id="navbar" class="collapse navbar-collapse">
                <ul class="nav navbar-nav">

                    <li class="dropdown active">
                        <a href="#" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"> Pegawai <span class="caret"></span>
                        </a>
                         <ul class="dropdown-menu" aria-labelledby="dLabel">
                                <li><a href="{{url('pegawai')}}">Data pegawai</a></li>
                                <li class="divider"></li>
                                <li><a href="{{url('kerja')}}">Jadwal Kerja</a></li>
                                <li><a href="{{url('cuti')}}">Cuti</a></li>
                                
                            </ul>
                    </li>
                

                    <li class="dropdown active">
                        <a href="#" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"> Pengaturan <span class="caret"></span>
                        </a>
                         <ul class="dropdown-menu" aria-labelledby="dLabel">
                        
                                <li><a href="{{url('ruang')}}">Ruang</a></li>
                                <li><a href="{{url('golongan')}}">Golongan</a></li>
                                <li><a href="{{url('gaji')}}">Gaji</a></li>
                            </ul>
                    </li>
                                        <li class="dropdown active">
                        <a href="#" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"> User <span class="caret"></span>
                        </a>
                         <ul class="dropdown-menu" aria-labelledby="dLabel">
                         <li><a href="{{url('pengguna')}}">Pengguna</a></li>
                                <li><a href="{{url('manager')}}">manager</a></li>
                                <li class="divider"></li>
                                <li><a href="{{url('devisi')}}">devisi</a></li>
                            </ul>
                    </li>

                    <li><a href="{{ url('logout')}}">Logout</a></li>
                </ul>

            </div><!--/.nav-collapse -->
        </div>
       </nav>
       
       <div class="clearfix"></div>

       <div class="container">
           @if(Session::has('informasi'))
                <div class="alert alert-info">
                    <strong>Informasi :</strong>
                    {{Session::get('informasi')}}
                </div>
            @endif

            @if (count($errors) > 0)
            <div class="alert alert-danger">
              <ul>
                @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
                @endforeach
              </ul>
            </div>
            @endif

            @yield('container')
       </div>
       <nav class="navbar navbar-default navbar-fixed-bottom">
           <footer class="container">
               <!   please dont delete this ><marquee>
               created by <a href="http://facebook.com/naufal.saputra.14?fref=ts">
               <span><i class="fa fa-facebook-square" style="color: #1da1f2"></i>Denny Adi SIswanto</span></a>
               gitHub by <a href="https://github.com/Naufalsaputra1/Framework_E_1515015210_160597">
              <span><i class="fa fa-github" style="color: #1da1f2"></i>Denny Adi SIswanto</span></a> <!--/   please dont delete this    -->
           <!-- </marquee></footer> -->
       </nav>

       <script type="text/javascript" src="{{ asset('component/jquery/dist/jquery.min.js') }}"></script>
        <script type="text/javascript" src="{{ asset('component/bootstrap/dist/js/bootstrap.min.js') }}"></script>
        <script type="text/javascript">
            $(function(){
                $('[data-toggle="tolltip"]').tolltip()
            });
        </script>

</body>
</html>

