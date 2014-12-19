<!DOCTYPE html>
<!--

-->
<html>
    <head>
        <meta charset="ISO-8859-1">
        <title>Kamifer</title>
        <link rel="stylesheet" type="text/css" href="css/estilo.css" />
        <link href='http://fonts.googleapis.com/css?family=PT+Mono|Fugaz+One|Imprima' rel='stylesheet' type='text/css'>
        <link rel="shortcut icon" href="imgs/favicon.ico" type="image/png" />
        
        <meta name="description" content="Programador, .NET, JAVA, Python">
        <meta name="keywords" content="Programador, .NET, JAVA, Python"> 
        <meta name="robots" content="index,follow,all,noarchive,noodp">
        <meta http-equiv="content-language" content="es">
        <meta http-equiv="cache-control" content="no-cache" />
        <meta http-equiv="pragma" content="no-cache" />
        <meta http-equiv="expires" content="0" />
        
        <meta name="viewport" content="initial-scale=1, maximum-scale=1">
        <script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
        <link rel="stylesheet" href="//ajax.googleapis.com/ajax/libs/jqueryui/1.11.2/themes/smoothness/jquery-ui.css" />
        <script src="//ajax.googleapis.com/ajax/libs/jqueryui/1.11.2/jquery-ui.min.js"></script>
        
        <script type="text/javascript" >
        $(function() {                
            $('a[href*=#]:not([href=#])').click(function() {
              if (location.pathname.replace(/^\//,'') === this.pathname.replace(/^\//,'') && location.hostname === this.hostname) {
                var target = $(this.hash);
                target = target.length ? target : $('[name=' + this.hash.slice(1) +']');
                if (target.length) {
                  $('html,body').animate({
                    scrollTop: target.offset().top
                  }, 1000);
                  AbreCierraMenu();
                  return false;
                }
              }
            });   
            AbreCierraMenu();
          });
        </script>
    </head>
    <body>
        <div id="cajaSuperior" class="cajaSuperior">
            <div  class="cajaMenu">
                <h1><a href="#Intro">KamiFer</a></h1>
            </div>
            
            <div  id="botonMenu" class="botonMenu">
                <img src="imgs/menu.png" id="hide" style="height: 72px;" />
                
            </div>
            <div id="menuLugares" style="background-color: black;">
                <div class="cajaMenu2" style="width: 30px;" >                
                </div>

                <div class="cajaMenu2" >
                    <br/> <a href="http://ferdminguela.blogspot.com.es/">Blog</a>
                </div>
                <div class="cajaMenu2" >
                    <br/> <a href="#Contacto" >Contacto </a>
                </div>                           
                 <div class="cajaMenu2" >
                    <br/> <a href="#Conocimientos">Conocimientos</a>                    
                </div>
                 <div class="cajaMenu2" >
                    <br/> <a href="#Proyectos">Proyectos</a>
                    
                </div>
                
            </div>
        </div>
        
        <script>            
                    $( "#hide" ).click(function() {
                        if ($('#menuLugares').is(':hidden')) {
                            $('#menuLugares').show('drop').fadeIn();
                        } 
                        else{
                            $( "#menuLugares" ).hide('drop');
                            /*$( "cajaSuperior" ).css('height', 50);*/
                        }
                      });
                      
                      function AbreCierraMenu(){
                          if($(window).width() < 1000){
                            if ($('#menuLugares').is(':hidden')) {
                              $('#menuLugares').show('drop').fadeIn();
                              } 
                              else{
                                  $( "#menuLugares" ).hide('drop');
                                  /*$( "cajaSuperior" ).css('height', 50);*/
                              }        
                          }
                      }
        </script>
                
         <div class="apartado" id="Intro" style="color:#455A64; background-color: #E0E0E0;">
            <br/><br/><br/>
            <h2 style="color: #455A64">Bienvenido/a</h2>
            
            <p></p>
         </div>
        <div class="apartado" id="Conocimientos" style="color:#263238; background-color: #BDBDBD;">
            <br/><br/>
            <h2 style="color: #263238">Conocimientos y perfiles profesionales</h2>
            <p>
                Los conocimientos tanto academicos como los obtenidos con el transcurrir del
                tiempo.
            </p>
            
        </div>
        <div class="apartado" id="Proyectos" style="color:white; background-color: #424242;">
            <br/><br/>
            <h2 style="color: #919191">Proyectos que he realizado</h2>
            <p>
                Una pequeña muestra de los proyectos que he ido realizando a lo largo de 
                estos años.
            </p>
            <br/>
        </div>
        <div class="apartado" id="Contacto" style="color:white; background-color: #212121;">
            <br/><br/>
            <h2 style="color: #919191">Contacta conmigo</h2>
            
            <h3 style="font-size: 20pt; margin-left: 10px;">fer @ kamifer.es</h3>
            <br/>
            <h3 style="color: #919191; margin-left: 10px;">O sigueme en tu red social favorita</h3>
            
            
            <a href="https://github.com/Arkadoel">
            <img src="imgs/GitHub-icon.png" class="img_social" />
            </a>
            
            <a href="https://twitter.com/arkadoel" >
            <img src="imgs/Twitter-icon.png" class="img_social" />
            </a>
            
        </div>
    </body>
</html>
