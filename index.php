<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Sergio Massa</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" media="screen" href="styles.css">
    <link rel="stylesheet" type="text/css" media="screen" href="stylesResponsive.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">
</head>
<body>
        <div class="gridMenuTop">
                <div id="navMenuTop">
                        <a class="navWeb" href="#SergioMassaPresidente">INICIO</a>
                        <a class="navWeb" href="#Sitios">NUESTROS SITIOS</a>
                        <a class="navWeb" href="#Contacto">SUMATE</a>
                </div>
                <div id="navRedesTop">
                        <a style="padding-left:0" href="https://twitter.com/SergioMassa" target="_blank"><i class="fab fa-twitter"></i></a>
                        <a href="https://www.facebook.com/SergioMassaOK/" target="_blank"><i class="fab fa-facebook-f"></i></a>
                        <a href="https://www.instagram.com/sergiomassaok" target="_blank"><i class="fab fa-instagram"></i></a>
                        <a href="https://www.linkedin.com/in/massasergio/" target="_blank"><i class="fab fa-linkedin"></i></a>
                </div>
            </div>
    <div class="gridPrincipal">
        
        <div class="divHome" id="SergioMassaPresidente"></div>
        <div class="divSlogan">
            <div id="textPub">            
                "Los argentinos van a buscar que el próximo Gobierno ponga en marcha el desarrollo,             
                la  producción y el trabajo."            
            </div>
            <h3 id="textPubTwitter">@sergiomassa</h3>   
        </div>
        <div class="gridSitiosPrincipal" id="Sitios">
            <div class="divTitleSitios"><div class="titleSitios" >Visita nuestros sitios</div></div>
            <div class="gridSitios">
                    <div class="massaDirecto divImgSitio" id="divImagenesSitios" target="_blank" style="cursor: pointer;" onclick="window.open('http://www.sergiomassa.com.ar')">                
                        <div class="divOverlayText">                                            
                            <div class="titleOverlay">
                                Massa Directo
                            </div>
                            <hr/>
                            <div class="textOverlay">
                                Conocé qué pienso sobre  
                                los distintos temas de la 
                                realidad y actualidad de la Argentina.
                            </div>                              
                        </div>
                    </div>
                    <div class="argentinaDePie divImgSitio" id="divImagenesSitios" style="cursor: pointer;" onclick="window.open('http://www.laargentinadepie.com')">                                                                         
                        <div class="divOverlayText">
                            <div class="titleOverlay">
                                La Argentina <br/> de Pie
                            </div>
                            <hr>
                            <div class="textOverlay">
                                Dejá tu idea para ayudarnos a construir un país mejor.
                            </div>
                        </div>
                    </div>
                    <div class="primerVotante divImgSitio" id="divImagenesSitios" style="cursor: pointer;" onclick="window.open('https://www.argentina.gob.ar/justiciacerca/votoprimeravez')">                                                                                                                                       
                    <div class="divOverlayText">
                        <div class="titleOverlay">
                            Primer Votante
                        </div>
                        <hr>
                        <div class="textOverlay">
                            Obtené información de 
                            cómo realizar tu primer 
                            votación.
                        </div>
                    </div>
                </div>            
            </div>            
        </div>
        <div class="divGridForm" id="Contacto">
            <div class="gridForm">
                <p id="titleFormulario">Sumate a nuestra alternativa</p>    
                <form id="formulario">                    
                    <div class="form-group">                    
                        <input name="Nombre" class="form-control form-control-lg" type="text" placeholder="Nombre">
                    </div>
                    <div class="form-group">
                        <input name="Lugar" class="form-control form-control-lg" type="text" placeholder="Lugar">
                    </div>
                    <div class="form-group">
                        <input name="Email" type="email" class="form-control form-control-lg" id="exampleFormControlInput1" placeholder="Email">
                    </div>
                    <div id="alert" class="alert alert-success hidden" role="alert">
                        <span id="responseMessage"></span>
                    </div>      
                    <div id="alertError" class="alert alert-danger hidden" role="alert">
                        <span id="responseMessageError"></span>
                    </div>                          
                    <button id="btnEnviar" type="submit" class="btn btn-primary">ENVIAR</button> 
                </form>  
            </div>     
                       
            
    <div class="footer">
        <div class="navBarBottom">
                <div class="divRedesBottom">
                        <a href="https://twitter.com/SergioMassa" target="_blank"><i style="padding:0" class="fab fa-twitter"></i></a>
                        <a href="https://www.facebook.com/SergioMassaOK/" target="_blank"><i style="padding:0" class="fab fa-facebook-f fabBottom"></i></a>
                        <a href="https://www.instagram.com/sergiomassaok" target="_blank"><i style="padding:0" class="fab fa-instagram fabBottom"></i></a>
                        <a href="https://twitter.com/SergioMassa" target="_blank"><i style="padding:0" class="fab fa-linkedin fabBottom"></i></a>
                </div>
                <div class="hayAlternativa">
                    #HayAlternativa
                </div>
        </div>
    </div>
        </div>        
    </div>  
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="js/main.js"></script>  
</body>
</html>