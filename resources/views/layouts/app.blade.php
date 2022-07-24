<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>

<!--###################################################################################-->
<!--actualizar auto pag WEB http-equiv="refresh" content="10"-->
<meta charset="utf-8" >
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

       <!-- Scripts -->
    <!--<script src="{{ asset('js/app.js') }}" defer></script>-->

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    <!--
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">-->
<!--#####################################################################################-->


    <!-- External CSS -->
    <link rel="stylesheet" href="{{ asset('assets/vendor/bootstrap/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/vendor/select2/select2.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/vendor/owlcarousel/owl.carousel.min.css') }}">
    <link rel="stylesheet" href="https://cdn.rawgit.com/noelboss/featherlight/1.7.13/release/featherlight.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/tempusdominus-bootstrap-4/5.0.1/css/tempusdominus-bootstrap-4.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.8.1/css/brands.css">

    <!-- Fonts -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,700|Josefin+Sans:300,400,700">
    <link rel="stylesheet" href="https://cdn.linearicons.com/free/1.0.0/icon-font.min.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">

    <!-- CSS -->
    <link rel="stylesheet" href="{{ asset('assets/css/style.min.css') }}">

    <!-- Modernizr JS for IE8 support of HTML5 elements and media queries -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/modernizr/2.8.3/modernizr.js"></script>





    <style type="text/css">

       

			
			* {
				margin:0px;
				padding:0px;
			}
			
			#header {
				margin:auto;
				width:500px;
				
			}
			
			ul, ol {
				list-style:none;
			}
			
			.nav > li {
				float:left;
			}
			
			.nav li a {
				background-color:#f1d063;
				color: black;
				text-decoration:none;
				padding:10px 12px;
				display:block;
			}
			
			.nav li a:hover {
				background-color:#f2f1f1;
			}
			
			.nav li ul {
				display:none;
				position:absolute;
				min-width:140px;
			}
			
			.nav li:hover > ul {
				display:block;
			}
			
			.nav li ul li {
				position:relative;
			}
			
			.nav li ul li ul {
				right:-140px;
				top:0px;
			}


            .lds-spinner {
  color: official;
  display: inline-block;
  position: relative;
  width: 80px;
  height: 80px;
}




.centrado{
    height: 100vh;
    background-color:#FFD764;
    display: flex;
    justify-content: center;
    align-items:center;
    z-index:66px;
}
.lds-spinner div {
  transform-origin: 40px 40px;
  animation: lds-spinner 1.2s linear infinite;
}
.lds-spinner div:after {
  content: " ";
  display: block;
  position: absolute;
  top: 3px;
  left: 37px;
  width: 6px;
  height: 18px;
  border-radius: 20%;
  background: #fff;
}
.lds-spinner div:nth-child(1) {
  transform: rotate(0deg);
  animation-delay: -1.1s;
}
.lds-spinner div:nth-child(2) {
  transform: rotate(30deg);
  animation-delay: -1s;
}
.lds-spinner div:nth-child(3) {
  transform: rotate(60deg);
  animation-delay: -0.9s;
}
.lds-spinner div:nth-child(4) {
  transform: rotate(90deg);
  animation-delay: -0.8s;
}
.lds-spinner div:nth-child(5) {
  transform: rotate(120deg);
  animation-delay: -0.7s;
}
.lds-spinner div:nth-child(6) {
  transform: rotate(150deg);
  animation-delay: -0.6s;
}
.lds-spinner div:nth-child(7) {
  transform: rotate(180deg);
  animation-delay: -0.5s;
}
.lds-spinner div:nth-child(8) {
  transform: rotate(210deg);
  animation-delay: -0.4s;
}
.lds-spinner div:nth-child(9) {
  transform: rotate(240deg);
  animation-delay: -0.3s;
}
.lds-spinner div:nth-child(10) {
  transform: rotate(270deg);
  animation-delay: -0.2s;
}
.lds-spinner div:nth-child(11) {
  transform: rotate(300deg);
  animation-delay: -0.1s;
}
.lds-spinner div:nth-child(12) {
  transform: rotate(330deg);
  animation-delay: 0s;
}
@keyframes lds-spinner {
  0% {
    opacity: 1;
  }
  100% {
    opacity: 0;
  }
}
			
		</style>
    </head>


    <body class="hidden" >

        <div class="centrado" id="onload">
            Cargando...
            <div class="lds-spinner"><div></div><div></div><div></div><div></div><div></div><div></div><div></div><div></div><div></div><div></div><div></div><div></div></div>

        </div>
        
    </body>


<body data-spy="scroll" data-target="#navbar" class="static-layout" >


	
	<div id="canvas-overlay"></div>
	<div class="boxed-page">
	<nav id="navbar-header" class="navbar navbar-expand-lg" >
     
    
</nav>	
<header id="header">
    <nav class="menu">
     <div class="logo-box">
     <img src="{{  asset('img/icon.jpg')  }}" alt="" width="100px" height="100px" class="image">
     
       <span class="btn-menu"><i class="fas fa-bars"></i></span>
     </div>
     
    

                            <div class="list-container">
        
                            <ul class="lists">

                                <li><a href="{{ url('/') }}" class="active">Inicio</a></li>

                                <li><a href="{{ url('/nosotros') }}">Nosotros</a></li>
                                <li><a href="{{ url('/#gtco-menu') }}" >Nuestros pollos</a></li>
                               

                                
                                
                                
                            </ul>
                        </div>
                        <ul class="nav">

                            @auth                    
                        @if(Auth::user()->role_id==1)
                           <!-- <ul class="nav">-->
                            

                                <li><a href="{{ url('/root/pedido/all') }}"   >
                                                        <h3 style="display: inline">Pedidos</h3>  </a>
                                        
				                </li>
                                


                               <li><a class="dropdown-toggle"  >
                                                        <h3 style="display: inline">Gestión</h3> <b class="caret"></b> </a>
                                        <ul>
                                                    
                                                    <li><a  href="{{ url('/root/producto/all') }}" ><h4 >Productos</h4></a></li>
                                                    <li><a  href="{{ url('/root/paquete/all') }}" ><h4 >Paquetes</h4></a></li>
                                                    <li><a  href="{{ url('/root/categoria/all') }}" ><h4 >Categorías</h4></a></li>
                                                    <li><a href="{{ url('/root/user/all') }}"> <h4 >Usuarios</h4></a></li>
                                                    <li><a href="{{ url('/root/rol/all') }}"> <h4 >Roles</h4></a></li>
                                        </ul>
				                </li>

                                
				
							<!--</ul>-->








                                
                                                
                                                
                        @endif

                                
                        @if(Auth::user()->role_id==2)
                        <!--<div class="list-container">
                                <ul class="nav">-->
                                            <li>
                                
                                                    <a    href="{{ url('/#gtco-menu') }}"> 
                                                    <h3  >
                                                    Comprar
                                                    </h3>         
                                                    </a>

                                                
                                        </li>
                                       

                                <!--</ul>-->
                                <!--</div>-->
                                                
                           
                                                
                                                
                        @endif

                        @endauth 
                        
            
            
            @guest

            <!--<div class="list-container">-->
                                <!--<ul class="nav">-->
                                            <li>
                                
                                                    <a    href="{{ url('newCliente') }}"> 
                                                    <h3  >
                                                    Registro
                                                    </h3>         
                                                    </a>

                                                
                                        </li>
                                        <li>
                                                <a     href="{{ route('login') }}"> 
                                                    <h3  >
                                                    Login
                                                    </h3>
                                                    
                                                    </a>
                                        </li>

                                <!--</ul>-->
                                <!--</div>-->

                            
                        @else

                       

                         <!--<ul class="nav">-->
                            
                                <li>
                                    <a class="dropdown-toggle"  >
                                                      <h3 style="display: inline">{{ Auth::user()->name }} {{ Auth::user()->f_surname }}</h3> <b class="caret"></b> </a>
                                        <ul>
                                        
                                                            <li>
                                                                            <a  href="{{ route('logout') }}"
                                                                        onclick="event.preventDefault();
                                                                                        document.getElementById('logout-form').submit();">
                                                                                        <h4 >
                                                                                        {{ __('Cerrar sesión') }}
                                                                                        </h4>
                                                                        </a>


                                                                        
                                                                        <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                                                            @csrf
                                                                        </form>
                                                            </li>
                                        </ul>
				                </li>
				
							</ul>





                        

            
                        @endguest

    
     
     
    </nav>
    
 
    </header>
    


          
              
         





        <main class="py-4">
            @yield('content')
        </main>
    



        <footer class="mastfoot pb-5 bg-white section-padding pb-0" >
    <div class="inner">
         <div class="row ">
            <div ></div>
         	<div class="col-lg-4">
         		<div class="footer-widget pr-lg-5 pr-0">
         			<img src="{{  asset('img/icon.jpg')  }}" class="img-fluid footer-logo mb-3" alt="">
	         		<p>Puede también visitar nuestro local o seguirnos a través de redes sociales </p>
	         		<nav class="nav nav-mastfoot justify-content-start">
		                <a class="nav-link" target="_blank" href="http://facebook.com/Rosticeria-Juguilita-111519804926140/about/?ref=page_internal">
                            <i class='fab fa-facebook fa-3x'></i>
		                </a>
		                
		            </nav>
         		</div>
         		
         	</div>
         	<div class="col-lg-4">
         		<div class="footer-widget px-lg-5 px-0">
         			<h4>Nuestro horario.</h4>
	         		<ul class="list-unstyled open-hours">
		                <li class="d-flex justify-content-between"><span>De lunes a domingo</span><span>11:00 - 20:00</span></li>
		                
		                <li class="d-flex justify-content-between"><span>Los 365 dias del año.</span><span> </span></li>
		              </ul>
         		</div>
         		
         	</div>

         	<div class="col-lg-4">
         		<div class="footer-widget pl-lg-5 pl-0">
         			<h4>¿Desea saber más sobre nosotros?.</h4>
	         		<p>Envienos su correo de contacto.</p>
	         		<form action="{{ url('/en_desarrollo') }}" id="newsletter">
						<div class="form-group">
							<input type="email" class="form-control" id="emailNewsletter" aria-describedby="emailNewsletter" placeholder="Ingresar correo.">
						</div>
						<button type="submit" class="btn btn-primary w-100">Enviar</button>
					</form>
         		</div>
         		
         	</div>
         	<div class="col-md-12 d-flex align-items-center">
             <!--<button  style="float: right;" data-toggle="modal" type="submit" data-target="#addModal"> Abri Modal</button>-->
         		<p class="mx-auto text-center mb-0">Derechos reservados.  |  Rosticería Juquilita.</p>
         	</div>
            
        </div>
    </div>
    
</footer>	</div>
</div>
	<!-- External JS -->
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.22.2/moment.min.js"></script>
	<script src="{{ asset('assets/vendor/bootstrap/popper.min.js') }}"></script>
	<script src="{{ asset('assets/vendor/bootstrap/bootstrap.min.js') }}"></script>
	<script src="{{ asset('assets/vendor/select2/select2.min.js') }} "></script>
	<script src="{{ asset('assets/vendor/owlcarousel/owl.carousel.min.js') }}"></script>
	<script src="https://cdn.rawgit.com/noelboss/featherlight/1.7.13/release/featherlight.min.js"></script>
	<script src="{{ asset('assets/vendor/stellar/jquery.stellar.js') }}" type="text/javascript" charset="utf-8"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/tempusdominus-bootstrap-4/5.0.1/js/tempusdominus-bootstrap-4.min.js"></script>

	<!-- Main JS -->
	<script src="{{ asset('js/app.min.js') }}"></script>




     <!-- MODAL -->
 <div style="padding-top: 80px;" wire:ignore.self class="modal fade" id="addModal" tabindex="-1" data-backdrop="static" data-keyboard="false" role="dialog" aria-labelledby="modelTitleId" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                                                 @if (session('statusPedido'))
                                                    <div class="alert alert-success alert-dismissible fade show" role="alert">
                                                        <h6>{{ session('statusPedido') }}</h6>
                                                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                                        <span aria-hidden="true">&times;</span>
                                                        </button>
                                                    </div>

                                                    <script>
                                                        $(document).ready(function(){
                                                            $('#addModal').modal('show');

                                                        });
                                                        
                                                    </script>

                                                   
                                                    
                                                @endif
                    
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">

                <div class="login-box">
                <!-- /.login-logo -->
                <div class="card card-outline card-primary">
                    <div class="card-header text-center">
                    <a href="../../index2.html" class="h3"><b> </b>Acuse de pedido</a>
                    </div>
                    <div class="card-body">
                    <p class="login-box-msg">Detalles de pedido: </p>

                                               
                                                <form action="{{ asset('Ticket/Ticket.php') }}" method="post">


                                                            <label for=""><b>Cliente: </b>{{ session('cliente') }}</label>
                                                            <input class="d-none" type="text" name="cliente" id="" value="{{ session('cliente') }}"><br>

                                                            <label for=""><b>Fecha: </b>{{ session('fechaCreacion') }}</label>
                                                            <input class="d-none" type="text" name="fechaCreacion" id="" value="{{ session('fechaCreacion') }}"><br>


                                                            <label for=""><b>Paquete: </b>{{ session('paquete') }}</label>
                                                            <input class="d-none" type="text" name="paquete" id="" value="{{ session('paquete') }}"><br>

                                                            <label for=""><b>Cantidad: </b>{{ session('cantidad') }}</label>
                                                            <input class="d-none" type="text" name="cantidad" id="" value="{{ session('cantidad') }}"><br>

                                                            <label for=""><b>Precio Unitario: $ </b>{{ session('precio') }}</label>
                                                            <input class="d-none" type="text" name="precio" id="" value="{{ session('precio') }}"><br>

                                                            <label for=""><b>Total: $ </b>{{ session('cantidad') * session('precio') }}</label><br>
                                                            
                                                            <label style="color: #FF2D01"><b>Folio: </b>{{ session('folio') }}</label>

                                                            @if (session('formaPago') =='0')
                                                              <label style="color: #1B1BFF" for=""><b>Forma de pago: </b>Efectivo</label>
                                                            @else
                                                            <label style="color: #1B1BFF" for=""><b>Forma de pago: </b>Transferencia</label>
                                                            @endif

                                                            <input class="d-none" type="text" name="folio" id="" value="{{ session('folio') }}"><br>
                                                            <input class="d-none" type="text" name="formaPago" id="" value="{{ session('formaPago') }}"><br>
                                                            <input class="d-none" type="text" name="opcion" id="opcion" value="0"><br>



                                                                                
                                                                                   <div class="row">
                                                                                        <div class="form-group col-md-6">
                                                                                        <button class="btn btn-success" onclick="cambiarOpcion(0)"> Descargar Ticket PDF</button>
                                                                                        </div>

                                                                                        <div class="form-group col-md-6">
                                                                                        <button class="btn btn-success" onclick="cambiarOpcion(1)"> Imprimir Ticket</button>
                                                                                        </div>
                                                                                   </div>
                                                                                   
                                                                               
                                                    
                                                </form>
                                                
                                                <!--<button class="btn btn-primary btn-shadow btn-lg" onclick="cerrarModal()">Cancelar</button>-->

                   
                    </div>
                   
                    <!-- /.card-body -->
                </div>
                <!-- /.card -->
                </div>
                <!-- /.login-box -->
                </div>
            </div>
        </div>
    </div>

    <!--End MODAL-->


    

<script>

    function cambiarOpcion(opcion){
        document.getElementById("opcion").value = opcion;
    }
    
    function cerrarModal(){
        $('#addModal').modal('hide');

            
            }


            window.onload= function(){
                $('#onload').fadeOut();
            }
</script>

</body>
</html>
