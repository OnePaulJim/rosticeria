@extends('layouts.app')

@section('content')

<div class="hero">
  <div class="container">
                        <div class="row">
                                                    
                       

                                                </div>
	<div class="row d-flex align-items-center">
        
    
		<div class="col-lg-6 hero-left">
		    <h1 class="display-4 mb-5">Rosticeria Juquilita</h1> <h2> El verdadero sabor de Tequila, Veracruz!</h2>
		    <div class="mb-2">
		    	<a class="btn btn-primary btn-shadow btn-lg" href="{{ url('/#vistaProductos') }}" role="button">VER MENÚ</a>
			    <a class="btn btn-icon btn-lg" href="#" data-featherlight="iframe" data-featherlight-iframe-allowfullscreen="true">
			    	<span class="lnr lnr-film-play"></span>
			    	Muestra de nuestros pollos.
			    </a>
		    </div>
		   
		    <ul class="hero-info list-unstyled d-flex text-center mb-0">
		    	<li class="border-right">
		    		<span class="lnr lnr-rocket"></span>
		    		<h5>
		    			Entrega inmediata.
		    		</h5>
		    	</li>
		    	<li class="border-right">
		    		<span class="lnr lnr-leaf"></span>
		    		<h5>
		    			Comida fresca.
		    		</h5>
		    	</li>
		    	<li class="">
		    		<span class="lnr lnr-bubble"></span>
		    		<h5>
		    			La mejor atención.
		    		</h5>
		    	</li>
		    </ul>

	    </div>
	    <div class="col-lg-6 hero-right">
	    	<div class="owl-carousel owl-theme hero-carousel">
			    <div class="item">
			    	<img class="img-fluid" src="{{ asset('assets/img/Normal.png') }}" alt="sin imagen">
			    </div>
			    <div class="item">
			    	<img class="img-fluid" src="{{ asset('assets/img/abanero.png')}}" alt="sin imagen">
			    </div>
			    <div class="item">
			    	<img class="img-fluid" src="{{ asset('assets/img/salsa con limon.png')}}" alt="sin imagen">
			    </div>
			</div>
	    </div>
	</div>
  </div>
</div>	

<!-- Welcome Section -->
<section id="gtco-welcome" class="bg-white section-padding" >
    <div class="container">
        <div class="section-content">
            <div class="row">
                <div class="col-sm-5 img-bg d-flex shadow align-items-center justify-content-center justify-content-md-end img-2" style="background-image: url({{ asset('assets/img/Normal.png') }});">
                    
                </div>
                <div class="col-sm-7 py-5 pl-md-0 pl-4">
                    <div class="heading-section pl-lg-5 ml-md-5">
                        <h2>
                            Sea bienvenido a Rosticeria Juquilita
                        </h2>
                    </div>
                    <div class="pl-lg-5 ml-md-5">
                        <p>El mejor pollo rostizado que puede encontrar en la región.</p>
                        <h3 class="mt-5">Nuestras especialidades</h3>
                        <div class="row">
                            <div class="col-4">
                                <a href="#" class="thumb-menu">
                                    <img class="img-fluid img-cover" src="{{ asset('assets/img/abanero.png') }}" />
                                    <h6>Sabor habanero</h6>
                                </a>
                            </div>
                            <div class="col-4">
                                <a href="#" class="thumb-menu">
                                    <img class="img-fluid img-cover" src="{{ asset('assets/img/encacahuatdo.png')}}" />
                                    <h6>Pollo encacahuatado</h6>
                                </a>
                            </div>
                            <div class="col-4">
                                <a href="#" class="thumb-menu">
                                    <img class="img-fluid img-cover" src="{{ asset('assets/img/pollo-enchilado (2).png')}}"/>
                                    <h6>Sabor enchilado</h6>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section><b id="vistaPaquetes"></b>
<!-- End of Welcome Section -->			<!-- Menu Section -->
<section id="gtco-menu"  class="section-padding">
    <div class="container" >
        <div class="section-content">
            <div class="row mb-5">
                <div class="col-md-12" >
                    <div class="heading-section text-center">
                         <h2 font="italic" >
                            Nuestros pollos.
                        </h2>
                    </div>  
                </div>
                <p class="d-none">{{$c=1}} {{$b=1}}</p>
            </div>                            
                                                

                                                @if ($b==1)
                                                <div class="heading-menu">
                                                    <h3 class="text-center mb-5">Paquetes.</h3>
                                                </div>
                                                @endif

                                                


            <div class="row" >

                             
           
                                    @foreach($listaPaquetes as $paquete)
                                   
                                    @if ($c==1)
                                    

                                                <div class="col-lg-6 menu-wrap" >
                                                
                                                


                                                <div class="menus d-flex align-items-center">
                                                    <div class="menu-img rounded-circle">
                                                        <img class="img-fluid" src="{{ asset('../storage/app/'.$paquete->image.'') }}" alt="Imagen">
                                                    </div>
                                                    <div class="text-wrap">
                                                        <div class="row align-items-center">
                                                            <div class="col-12">
                                                                <h4>{{ $paquete->nombre }}</h4>
                                                                <div class="col-6">
                                                                <h4 class="text-muted ">$ {{ $paquete->precio }}</h4>
                                                                <h6>Cantidad: {{$paquete->cantidad}} disponibles</h6>
                                                                </div>
                                                                <p style="font-size:17px">{{ $paquete->descripcion }}</p>
                                                                <a class="btn btn-primary btn-shadow btn-lg" href="{{ url('/root/cliente/all/'.encrypt($paquete->id).'/edit') }}" role="button">COMPRAR</a>
                                                            </div>

                                                        </div>
                                                    
                                                    </div>
                                                    
                                                </div>
                                    
                                     <p class="d-none">{{$c=2}} {{$b=0}}</p>
                                    @else
                                    
                                    <div class="menus d-flex align-items-center">
                                                <div class="menu-img rounded-circle">
                                                    <img class="img-fluid" src="{{ asset('../storage/app/'.$paquete->image.'') }}" alt="Imagen">
                                                </div>
                                                
                                                <div class="text-wrap">
                                                    <div class="row align-items-center">
                                                                            <div class="col-12">
                                                                            <h4>{{ $paquete->nombre }}</h4>
                                                                            <div class="col-6">
                                                                            <h4 class="text-muted ">$ {{ $paquete->precio }}</h4>
                                                                            <h6>Cantidad: {{$paquete->cantidad}} disponibles</h6>
                                                                            </div>
                                                                            <p style="font-size:17px">{{ $paquete->descripcion }}</p>
                                                                            <a class="btn btn-primary btn-shadow btn-lg" href="{{ url('/root/cliente/all/'.encrypt($paquete->id).'/edit') }}" role="button">COMPRAR</a>
                                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div> <p class="d-none">{{$c=1}}</p>
                                    @endif

                                        
                                    @endforeach
            <!--###################################################-->
                
                    
                   
                
                <!--################################################################################################-->

            </div>
            

                                                <p class="d-none" >{{$c=1}} {{$b=1}}</p>
                                                 @if ($b==1)
                                                <div class="heading-menu" id="vistaProductos">
                                                    <h3 class="text-center mb-5">Productos: Complementos</h3>
                                                </div>
                                                @endif

            <div class="row">
                
            
           
                            @foreach($listaProductos as $producto)

                                   @if ($producto->tipo =='Complemento')
                            
                                   @if ($c==1)
                                   

                                               <div class="col-lg-6 menu-wrap" ><b class="d-noned" id="complementos"></b>
                                               
                                               


                                               <div class="menus d-flex align-items-center">
                                                   <div class="menu-img rounded-circle">
                                                       <img class="img-fluid" src="{{ asset('../storage/app/'.$producto->image.'') }}" alt="Imagen">
                                                   </div>
                                                   <div class="text-wrap">
                                                       <div class="row align-items-center">
                                                           <div class="col-12">
                                                               <h4>{{ $producto->nombre }}</h4>
                                                               <div class="col-6">
                                                               <h4 class="text-muted ">$ {{ $producto->precio }}</h4>
                                                               <h6>Cantidad: {{$producto->cantidad}} disponibles</h6>
                                                               </div>
                                                               <!--<p style="font-size:17px">{{ $producto->tipo }}</p>-->
                                                               <!--<a class="btn btn-primary btn-shadow btn-lg" href="menu.html" role="button">COMPRAR</a>-->
                                                           </div>

                                                       </div>
                                                   
                                                   </div>
                                                   
                                               </div>
                                   
                                    <p class="d-none">{{$c=2}} {{$b=0}}</p>
                                   @else
                                   
                                   <div class="menus d-flex align-items-center">
                                               <div class="menu-img rounded-circle">
                                                   <img class="img-fluid" src="{{ asset('../storage/app/'.$producto->image.'') }}" alt="Imagen">
                                               </div>
                                               
                                               <div class="text-wrap">
                                                   <div class="row align-items-center">
                                                                           <div class="col-12">
                                                                           <h4>{{ $producto->nombre }}</h4>
                                                                           <div class="col-6">
                                                                           <h4 class="text-muted ">$ {{ $producto->precio }}</h4>
                                                                           <h6>Cantidad: {{$producto->cantidad}} disponibles</h6>
                                                                           </div>
                                                                           <!--<p style="font-size:17px">{{ $producto->tipo }}</p>-->
                                                                           <!--<a class="btn btn-primary btn-shadow btn-lg" href="menu.html" role="button">COMPRAR</a>-->
                                                                       </div>
                                                   </div>
                                               </div>
                                           </div>
                                       </div> <p class="d-none">{{$c=1}}</p>
                                   @endif
                                   @endif

                                       
                            @endforeach
            
             
            </div>
            <p class="d-none">{{$c=1}} {{$b=1}}</p>
                                                 @if ($b==1)
                                                <div class="heading-menu">
                                                    <h3 class="text-center mb-5">Productos: Extras.</h3>
                                                </div>
                                                @endif

            <div class="row">
                
            
           
                            @foreach($listaProductos as $producto)

                                   @if ($producto->tipo =='Extra')
                            
                                   @if ($c==1)
                                   

                                               <div class="col-lg-6 menu-wrap" >
                                               
                                               


                                               <div class="menus d-flex align-items-center">
                                                   <div class="menu-img rounded-circle">
                                                       <img class="img-fluid" src="{{ asset('../storage/app/'.$producto->image.'') }}" alt="Imagen">
                                                   </div>
                                                   <div class="text-wrap">
                                                       <div class="row align-items-center">
                                                           <div class="col-12">
                                                               <h4>{{ $producto->nombre }}</h4>
                                                               <div class="col-6">
                                                               <h4 class="text-muted ">$ {{ $producto->precio }}</h4>
                                                               <h6>Cantidad: {{$producto->cantidad}} disponibles</h6>
                                                               </div>
                                                               <!--<p style="font-size:17px">{{ $producto->tipo }}</p>-->
                                                               <!--<a class="btn btn-primary btn-shadow btn-lg" href="menu.html" role="button">COMPRAR</a>-->
                                                           </div>

                                                       </div>
                                                   
                                                   </div>
                                                   
                                               </div>
                                   
                                    <p class="d-none">{{$c=2}} {{$b=0}}</p>
                                   @else
                                   
                                   <div class="menus d-flex align-items-center">
                                               <div class="menu-img rounded-circle">
                                                   <img class="img-fluid" src="{{ asset('../storage/app/'.$producto->image.'') }}" alt="Imagen">
                                               </div>
                                               
                                               <div class="text-wrap">
                                                   <div class="row align-items-center">
                                                                           <div class="col-12">
                                                                           <h4>{{ $producto->nombre }}</h4>
                                                                           <div class="col-6">
                                                                           <h4 class="text-muted ">$ {{ $producto->precio }}</h4>
                                                                           <h6>Cantidad: {{$producto->cantidad}} disponibles</h6>
                                                                           </div>
                                                                           <!--<p style="font-size:17px">{{ $producto->tipo }}</p>-->
                                                                           <!--<a class="btn btn-primary btn-shadow btn-lg" href="menu.html" role="button">COMPRAR</a>-->
                                                                       </div>
                                                   </div>
                                               </div>
                                           </div>
                                       </div> <p class="d-none">{{$c=1}}</p>
                                   @endif
                                   @endif

                                       
                            @endforeach
            
             
            </div>
        </div>
    </div>
</section>  
<!-- End of menu Section -->		
<!-- Testimonial Section-->
<section id="gtco-testimonial" class="overlay bg-fixed section-padding" style="background-color: rgb(241, 208, 99);" >
    <div class="container">
        <div class="section-content" >
            <div class="heading-section text-center">
                <h2>
                    Personas satisfechas
                </h2>
            </div>
            <div class="row">
                <!-- Testimonial -->
                <div class="testi-content testi-carousel owl-carousel">
                    <div class="testi-item">
                        <i class="testi-icon fa fa-3x fa-quote-left"></i>
                        <p class="testi-text">Excelente atención.</p>
                        <p class="testi-author">Don Pancho</p>
                        <p class="testi-desc">Lic. en derechos <span></span></p>
                    </div>
                    <div class="testi-item">
                        <i class="testi-icon fa fa-3x fa-quote-left"></i>
                        <p class="testi-text">Página muy bonita, muy profesional</p>
                        <p class="testi-author">Doña Gertrudis</p>
                        <p class="testi-desc">Mtra <span>Tequila</span></p>
                    </div>
                    <div class="testi-item">
                        <i class="testi-icon fa fa-3x fa-quote-left"></i>
                        <p class="testi-text">Excelente atención, le atendemos con todo gusto.</p>
                        <p class="testi-author">Don Ricardo.</p>
                        <p class="testi-desc">Lic. en derechos <span></span></p>
                    </div>
                    <div class="testi-item">
                        <i class="testi-icon fa fa-3x fa-quote-left"></i>
                        <p class="testi-text">Página muy bonita, muy profesional</p>
                        <p class="testi-author">Doña María.</p>
                        <p class="testi-desc">Mtra <span>Tequila</span></p>
                    </div>
                </div>
                <!-- End of Testimonial -->
            </div>
        </div>
    </div>
</section>
<!-- End of Testimonial Section-->		<!-- Team Section -->

<section id="gtco-welcome" class="bg-white section-padding" >
    <div class="container">
        <h2>Nuestra ubicación.</h2>
        <div class="section-content">
            <div class="">
            
                    
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3778.5841525602864!2d-97.072751168469!3d18.7274268959766!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x85c4ff71dd02ef8f%3A0xd196b48bcc476240!2sRosticeria%20%22Juquilita%22!5e0!3m2!1ses!2smx!4v1655494578866!5m2!1ses!2smx" 
                width="1100" height="700" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
            </div>
        </div>
    </div>
</section>

<!---->

<!-- End of Team Section -->
@endsection
