<header class="main-header header-style-one">
    
<div class="header-upper">
        <div class="auto-container" style="background-color:#E9E9E9;">
            <div class="inner-container clearfix">
                <div class="nav-outer clearfix">
                    <div class="mobile-nav-toggler"><i class="material-icons">menu</i></div>
                        <nav class="main-menu navbar-expand-md navbar-light">
                            <div class="collapse navbar-collapse show clearfix" id="navbarSupportedContent">
                                <ul class="navigation clearfix">
                                    <li><a href="{{ route('pages.home') }}">Inicio</a></li>
                                    <li><a href="{{ route('pages.home') }}">Informe de Rendicion de Cuentas</a></li>
                                    
                                    <li class="dropdown">
                                        <a href="">
                                            Distrito</a>
                                        <ul>
                                            <li><a href="/distrito/historia">Historia</a></li>
                                        </ul>
                                    </li>
                                    <li class="dropdown"><a href="">Municipalidad</a>
                                        <ul>
                                            <li><a href="{{ route('pages.municipality.mission-vision') }}">Misión y Visión</a></li>
                                            <li><a href="{{ route('pages.municipality.mayor') }}">Alcalde</a></li>
                                            <li><a href="{{ route('pages.municipality.city-council') }}">Concejo Municipal</a></li>
                                            <li><a href="{{ route('pages.municipality.commissions') }}">Comisiones</a></li>
                                            <li><a href="/agenda">Agenda</a></li>

                                        </ul>
                                    </li>
                                
                                    <li class="dropdown"><a href="">Obras Municipales</a>
                                        <ul>
                                            @foreach($services as $service)
                                            <li><a href="/servicios-municipales/{{ $service['slug'] }}">{{ $service['title'] }}</a></li>
                                            @endforeach

                                        
                                        </ul>
                                    </li>
                                    <li class="dropdown"><a href="">Enlaces</a>
                                        <ul>
                                            @foreach($services as $service)
                                            <li><a href="/servicios-municipales/{{ $service['slug'] }}">{{ $service['title'] }}</a></li>
                                            @endforeach

                                        
                                        </ul>
                                    </li>
                                    <li class="dropdown"><a href="">Servicios</a>
                                        <ul>
                                            @foreach($services as $service)
                                            <li><a href="/servicios-municipales/{{ $service['slug'] }}">{{ $service['title'] }}</a></li>
                                            @endforeach

                                        
                                        </ul>
                                    </li>
                              
                                    
                                    <li><a href="/portal-de-transparencia">Portal de Transparencia</a>
                                    </li>
                                    
                                </ul>
                            </div>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
        <!-- 
        <div class="sticky-header">
            <div class="auto-container clearfix">
                <div class="pull-right">
                    <nav class="main-menu clearfix"></nav>
                </div>
            </div>
        </div>
    --> 
    
    <!-- INICIO MENU MOBILE -->
    <div class="mobile-menu">
        <nav class="menu-box">
            
                <div class="menu-logo " style="background-color:#2ecc71">
                    <a href="#"><img src="/img/logo2023_blanco.png" style="height: 60px" alt="" title=""></a>
                </div>
                
            <ul class="navigation clearfix card-body">
                
                <li><a href="" class="rounded" style="background-color: #27ae60; color: #fff;"><svg class="svg-inline--fa fa-home fa-w-18" aria-hidden="true" focusable="false" data-prefix="fas" data-icon="home" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512" data-fa-i2svg=""><path fill="currentColor" d="M280.37 148.26L96 300.11V464a16 16 0 0 0 16 16l112.06-.29a16 16 0 0 0 15.92-16V368a16 16 0 0 1 16-16h64a16 16 0 0 1 16 16v95.64a16 16 0 0 0 16 16.05L464 480a16 16 0 0 0 16-16V300L295.67 148.26a12.19 12.19 0 0 0-15.3 0zM571.6 251.47L488 182.56V44.05a12 12 0 0 0-12-12h-56a12 12 0 0 0-12 12v72.61L318.47 43a48 48 0 0 0-61 0L4.34 251.47a12 12 0 0 0-1.6 16.9l25.5 31A12 12 0 0 0 45.15 301l235.22-193.74a12.19 12.19 0 0 1 15.3 0L530.9 301a12 12 0 0 0 16.9-1.6l25.5-31a12 12 0 0 0-1.7-16.93z"></path></svg> Inicio</a></li>
                <li class="dropdown">
                    <a href="#" class="rounded" style="background-color: #27ae60; color: #fff;">
                        <svg class="svg-inline--fa fa-map-marked-alt fa-w-18" aria-hidden="true" focusable="false" data-prefix="fas" data-icon="map-marked-alt" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512" data-fa-i2svg=""><path fill="currentColor" d="M288 0c-69.59 0-126 56.41-126 126 0 56.26 82.35 158.8 113.9 196.02 6.39 7.54 17.82 7.54 24.2 0C331.65 284.8 414 182.26 414 126 414 56.41 357.59 0 288 0zm0 168c-23.2 0-42-18.8-42-42s18.8-42 42-42 42 18.8 42 42-18.8 42-42 42zM20.12 215.95A32.006 32.006 0 0 0 0 245.66v250.32c0 11.32 11.43 19.06 21.94 14.86L160 448V214.92c-8.84-15.98-16.07-31.54-21.25-46.42L20.12 215.95zM288 359.67c-14.07 0-27.38-6.18-36.51-16.96-19.66-23.2-40.57-49.62-59.49-76.72v182l192 64V266c-18.92 27.09-39.82 53.52-59.49 76.72-9.13 10.77-22.44 16.95-36.51 16.95zm266.06-198.51L416 224v288l139.88-55.95A31.996 31.996 0 0 0 576 426.34V176.02c0-11.32-11.43-19.06-21.94-14.86z"></path></svg> Distrito</a>
                    <ul>
                        <li><a href="/distrito/historia" class="navmobile__option"> Historia</a></li>
                    </ul>
                    </li>
                
                <li class="dropdown"><a href="#" class="rounded" style="background-color: #27ae60; color: #fff;"><svg class="svg-inline--fa fa-building fa-w-14" aria-hidden="true" focusable="false" data-prefix="fas" data-icon="building" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512" data-fa-i2svg=""><path fill="currentColor" d="M436 480h-20V24c0-13.255-10.745-24-24-24H56C42.745 0 32 10.745 32 24v456H12c-6.627 0-12 5.373-12 12v20h448v-20c0-6.627-5.373-12-12-12zM128 76c0-6.627 5.373-12 12-12h40c6.627 0 12 5.373 12 12v40c0 6.627-5.373 12-12 12h-40c-6.627 0-12-5.373-12-12V76zm0 96c0-6.627 5.373-12 12-12h40c6.627 0 12 5.373 12 12v40c0 6.627-5.373 12-12 12h-40c-6.627 0-12-5.373-12-12v-40zm52 148h-40c-6.627 0-12-5.373-12-12v-40c0-6.627 5.373-12 12-12h40c6.627 0 12 5.373 12 12v40c0 6.627-5.373 12-12 12zm76 160h-64v-84c0-6.627 5.373-12 12-12h40c6.627 0 12 5.373 12 12v84zm64-172c0 6.627-5.373 12-12 12h-40c-6.627 0-12-5.373-12-12v-40c0-6.627 5.373-12 12-12h40c6.627 0 12 5.373 12 12v40zm0-96c0 6.627-5.373 12-12 12h-40c-6.627 0-12-5.373-12-12v-40c0-6.627 5.373-12 12-12h40c6.627 0 12 5.373 12 12v40zm0-96c0 6.627-5.373 12-12 12h-40c-6.627 0-12-5.373-12-12V76c0-6.627 5.373-12 12-12h40c6.627 0 12 5.373 12 12v40z"></path></svg> Municipalidad</a>
                    <ul>
                        <li><a href="/municipalidad/mision-y-vision" class="navmobile__option">Misión y Visión</a></li>
                        <li><a href="/municipalidad/alcalde" class="navmobile__option">Alcalde</a></li>
                        <li><a href="/municipalidad/concejo-municipal" class="navmobile__option">Concejo Municipal</a></li>
                        <li><a href="/municipalidad/comisiones" class="navmobile__option">Comisiones</a></li>
                        <li><a href="/municipalidad/organigrama" class="navmobile__option">Organigrama</a></li>
                    </ul>
                    </li>
            
                <li class="dropdown"><a href="#" class="rounded" style="background-color: #27ae60; color: #fff;"><svg class="svg-inline--fa fa-laptop-house fa-w-20" aria-hidden="true" focusable="false" data-prefix="fas" data-icon="laptop-house" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 640 512" data-fa-i2svg=""><path fill="currentColor" d="M272,288H208a16,16,0,0,1-16-16V208a16,16,0,0,1,16-16h64a16,16,0,0,1,16,16v37.12C299.11,232.24,315,224,332.8,224H469.74l6.65-7.53A16.51,16.51,0,0,0,480,207a16.31,16.31,0,0,0-4.75-10.61L416,144V48a16,16,0,0,0-16-16H368a16,16,0,0,0-16,16V87.3L263.5,8.92C258,4,247.45,0,240.05,0s-17.93,4-23.47,8.92L4.78,196.42A16.15,16.15,0,0,0,0,207a16.4,16.4,0,0,0,3.55,9.39L22.34,237.7A16.22,16.22,0,0,0,33,242.48,16.51,16.51,0,0,0,42.34,239L64,219.88V384a32,32,0,0,0,32,32H272ZM629.33,448H592V288c0-17.67-12.89-32-28.8-32H332.8c-15.91,0-28.8,14.33-28.8,32V448H266.67A10.67,10.67,0,0,0,256,458.67v10.66A42.82,42.82,0,0,0,298.6,512H597.4A42.82,42.82,0,0,0,640,469.33V458.67A10.67,10.67,0,0,0,629.33,448ZM544,448H352V304H544Z"></path></svg> Modernización</a>
                    <ul>
                        <li><a href="/modernizacion/tributos-municipales" class="navmobile__option">Tributos Municipales</a></li>
                        <li><a href="/modernizacion/licencia-de-edificaciones" class="navmobile__option">Licencia de Edificaciones</a></li>
                        <li><a href="/modernizacion/licencia-de-funcionamiento" class="navmobile__option">Licencia de Funcionamiento</a></li>
                        <li><a href="/modernizacion/libro-de-reclamaciones" class="navmobile__option">Libro de Reclamaciones</a></li>
                    </ul>
                    </li>
                
                <li class="dropdown"><a href="#" class="rounded" style="background-color: #27ae60; color: #fff;"><svg class="svg-inline--fa fa-balance-scale fa-w-20" aria-hidden="true" focusable="false" data-prefix="fas" data-icon="balance-scale" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 640 512" data-fa-i2svg=""><path fill="currentColor" d="M256 336h-.02c0-16.18 1.34-8.73-85.05-181.51-17.65-35.29-68.19-35.36-85.87 0C-2.06 328.75.02 320.33.02 336H0c0 44.18 57.31 80 128 80s128-35.82 128-80zM128 176l72 144H56l72-144zm511.98 160c0-16.18 1.34-8.73-85.05-181.51-17.65-35.29-68.19-35.36-85.87 0-87.12 174.26-85.04 165.84-85.04 181.51H384c0 44.18 57.31 80 128 80s128-35.82 128-80h-.02zM440 320l72-144 72 144H440zm88 128H352V153.25c23.51-10.29 41.16-31.48 46.39-57.25H528c8.84 0 16-7.16 16-16V48c0-8.84-7.16-16-16-16H383.64C369.04 12.68 346.09 0 320 0s-49.04 12.68-63.64 32H112c-8.84 0-16 7.16-16 16v32c0 8.84 7.16 16 16 16h129.61c5.23 25.76 22.87 46.96 46.39 57.25V448H112c-8.84 0-16 7.16-16 16v32c0 8.84 7.16 16 16 16h416c8.84 0 16-7.16 16-16v-32c0-8.84-7.16-16-16-16z"></path></svg> Normatividad</a>
                    <ul>
                        <li><a href="/normatividad/resoluciones-de-alcaldia" class="navmobile__option">Resoluciones de Alcaldía</a></li>
                        <li><a href="/normatividad/decretos-de-alcaldia" class="navmobile__option">Decretos de Alcaldía</a></li>
                        <li><a href="/normatividad/ordenanzas-municipales" class="navmobile__option">Ordenanzas Municipales</a></li>
                        <li><a href="/normatividad/resoluciones-de-gerencia-municipal" class="navmobile__option">Resoluciones de Gerencia Municipal</a></li>
                        <li><a href="/normatividad/acuerdos-de-concejo-municipal" class="navmobile__option">Acuerdos de Concejo Municipal</a></li>
                        <li><a href="/normatividad/resoluciones-de-gerencia-de-administracion" class="navmobile__option">Resoluciones de Gerencia de Administración</a></li>
                        <li><a href="/normatividad/documento-de-gestion" class="navmobile__option">Documentos de Gestion</a></li>
                        <li><a href="/normatividad/otros-documentos">Otros Documentos</a></li>
                    </ul>
                    </li>
                
                <li><a href="/servicios-municipales" class="rounded" style="background-color: #27ae60; color: #fff;"><svg class="svg-inline--fa fa-house-user fa-w-18" aria-hidden="true" focusable="false" data-prefix="fas" data-icon="house-user" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512" data-fa-i2svg=""><path fill="currentColor" d="M570.69,236.27,512,184.44V48a16,16,0,0,0-16-16H432a16,16,0,0,0-16,16V99.67L314.78,10.3C308.5,4.61,296.53,0,288,0s-20.46,4.61-26.74,10.3l-256,226A18.27,18.27,0,0,0,0,248.2a18.64,18.64,0,0,0,4.09,10.71L25.5,282.7a21.14,21.14,0,0,0,12,5.3,21.67,21.67,0,0,0,10.69-4.11l15.9-14V480a32,32,0,0,0,32,32H480a32,32,0,0,0,32-32V269.88l15.91,14A21.94,21.94,0,0,0,538.63,288a20.89,20.89,0,0,0,11.87-5.31l21.41-23.81A21.64,21.64,0,0,0,576,248.19,21,21,0,0,0,570.69,236.27ZM288,176a64,64,0,1,1-64,64A64,64,0,0,1,288,176ZM400,448H176a16,16,0,0,1-16-16,96,96,0,0,1,96-96h64a96,96,0,0,1,96,96A16,16,0,0,1,400,448Z"></path></svg> Servicios</a></li>
                <li><a href="/portal-de-transparencia" class="rounded" style="background-color: #27ae60; color: #fff;"><svg class="svg-inline--fa fa-search fa-w-16" aria-hidden="true" focusable="false" data-prefix="fas" data-icon="search" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512" data-fa-i2svg=""><path fill="currentColor" d="M505 442.7L405.3 343c-4.5-4.5-10.6-7-17-7H372c27.6-35.3 44-79.7 44-128C416 93.1 322.9 0 208 0S0 93.1 0 208s93.1 208 208 208c48.3 0 92.7-16.4 128-44v16.3c0 6.4 2.5 12.5 7 17l99.7 99.7c9.4 9.4 24.6 9.4 33.9 0l28.3-28.3c9.4-9.4 9.4-24.6.1-34zM208 336c-70.7 0-128-57.2-128-128 0-70.7 57.2-128 128-128 70.7 0 128 57.2 128 128 0 70.7-57.2 128-128 128z"></path></svg> Portal de Transparencia</a></li>
                <li style="background-color: #27ae60;" class="rounded text-center">
                    <div class="pb-2 pt-2">
                    <a href="https://www.facebook.com/profile.php?id=100089636037765" target="_blank" class="pr-4" style="color: #fff;"><svg class="svg-inline--fa fa-facebook-f fa-w-10 btn_icon_ovrly" aria-hidden="true" focusable="false" data-prefix="fab" data-icon="facebook-f" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 320 512" data-fa-i2svg=""><path fill="currentColor" d="M279.14 288l14.22-92.66h-88.91v-60.13c0-25.35 12.42-50.06 52.24-50.06h40.42V6.26S260.43 0 225.36 0c-73.22 0-121.08 44.38-121.08 124.72v70.62H22.89V288h81.39v224h100.17V288z"></path></svg></a>
                    <a href="https://www.facebook.com/profile.php?id=100089636037765" target="_blank" class="pr-4" style="color: #fff;"><svg class="svg-inline--fa fa-twitter fa-w-16 btn_icon_ovrly" aria-hidden="true" focusable="false" data-prefix="fab" data-icon="twitter" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512" data-fa-i2svg=""><path fill="currentColor" d="M459.37 151.716c.325 4.548.325 9.097.325 13.645 0 138.72-105.583 298.558-298.558 298.558-59.452 0-114.68-17.219-161.137-47.106 8.447.974 16.568 1.299 25.34 1.299 49.055 0 94.213-16.568 130.274-44.832-46.132-.975-84.792-31.188-98.112-72.772 6.498.974 12.995 1.624 19.818 1.624 9.421 0 18.843-1.3 27.614-3.573-48.081-9.747-84.143-51.98-84.143-102.985v-1.299c13.969 7.797 30.214 12.67 47.431 13.319-28.264-18.843-46.781-51.005-46.781-87.391 0-19.492 5.197-37.36 14.294-52.954 51.655 63.675 129.3 105.258 216.365 109.807-1.624-7.797-2.599-15.918-2.599-24.04 0-57.828 46.782-104.934 104.934-104.934 30.213 0 57.502 12.67 76.67 33.137 23.715-4.548 46.456-13.32 66.599-25.34-7.798 24.366-24.366 44.833-46.132 57.827 21.117-2.273 41.584-8.122 60.426-16.243-14.292 20.791-32.161 39.308-52.628 54.253z"></path></svg></a>
                    
                    </div>
                </li>
                <li>
                    <div class="close-btn rounded pb-2 pt-2" style="background-color: #1377eb; color: #fff; margin-top:2px;">CERRAR</div>
                </li>
            </ul>
        </nav>
    </div>
    <!--FIN MENU MOBILE-->

    <div class="header-ban">
        <div class="auto-container">
            <div class="row justify-content-center">
                <div class="col-md-8">       
                    <img class="img-fluid" src="{{ $setting->cover }}">
                </div>
            </div>
        </div>
    </div>

    <div class="page-wrapper">
            <div class="preloader" style="display: none;">
            </div>
                
    </div>
</div>
<header class="main-header header-style-one">  

</header>