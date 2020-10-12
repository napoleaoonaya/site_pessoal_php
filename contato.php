<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="google-site-verification" content="uyMzwAwZab71Q9h8IKHutNXIHfIBzQ43TI0HOVt0p5s" />
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Suporte técnico onaya</title>
	<meta content="width=device-width, initial-scale=1.0" name="viewport">
	<meta content="Suporte tecnico Onaya" name="keywords">
	<meta content="Suporte tecnico computador,notebook,tablet,celular,impressora,smart tv,roteador,repetidor,webdesigner,desenvolvedor,freelancer ti,trabalhos de informatica" name="description">
	<!-- Facebook Opengraph integration: https://developers.facebook.com/docs/sharing/opengraph -->
	<meta property="og:title" content="Suporte tecnico Onaya">
	<meta property="og:image" content="Suporte tecnico">
	<meta property="og:url" content="www.suporteonaya.com.br">
	<meta property="og:site_name" content="suporteonaya">
	<meta property="og:description" content="Suporte tecnico computador,notebook,tablet,celular,impressora,smart tv,roteador,repetidor,webdesigner,desenvolvedor,freelancer ti,trabalhos de informatica">
	<!-- Twitter Cards integration: https://dev.twitter.com/cards/  -->
	<meta name="twitter:card" content="summary">
	<meta name="twitter:site" content="www.suporteonaya.com.br">
	<meta name="twitter:title" content="Suporte tecnico Onaya">
	<meta name="twitter:description" content="Suporte tecnico computador,notebook,tablet,celular,impressora,smart tv,roteador,repetidor,webdesigner,desenvolvedor,freelancer ti,trabalhos de informatica">
	<meta name="twitter:image" content="Suporte tecnico">
	<!-- Place your favicon.ico and apple-touch-icon.png in the template root directory -->
	<link href="suporte.ico" rel="shortcut icon">
	<!-- Google Fonts -->
	<link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,700,700i|Raleway:300,400,500,700,800" rel="stylesheet">
	<!-- Bootstrap CSS File -->
	<link href="biblioteca/bootstrap/css/bootstrap.min.css" rel="stylesheet">
	<!-- bibliotecararies CSS Files -->
	<link href="biblioteca/font-awesome/css/font-awesome.min.css" rel="stylesheet">
	<link href="biblioteca/animate-css/animate.min.css" rel="stylesheet">
	<!-- Main Stylesheet File -->
	<link href="css/style.css" rel="stylesheet">
</head>
    <body>
        <section id="hero">
           <div class="hero-container">
              <div class="wow fadeIn">
                 <h1>Suporte técnico onaya</h1>
                 <h2>Solicite <span class="rotating">nosso suporte remoto, nosso suporte presencial, nossos serviços de infra, nossa consultória</span></h2>
                 <div class="actions">
                    <a href="index.php" class="btn-get-started">Início</a>
                    <a href="#contact" class="btn-services">Contato</a>
                 </div>
              </div>
           </div>
        </section>
      <header id="header">
         <div class="container">
            <div id="logo" class="pull-left">
               <a href="index.php"><img src="img/logo.png" alt="" title=""/></a>
            </div>
            <nav id="nav-menu-container">
               <ul class="nav-menu">
                  <li class="menu-active"><a href="index.php">Home</a></li>
                  <li><a href="contato.php">Contato</a></li>
               </ul>
            </nav>
         </div>
      </header>
      <section>
          <!-- Start contact Area -->
  <div id="contact" class="contact-area">
    <div class="contact-inner area-padding">
      <div class="contact-overly"></div>
      <div class="container ">
        <div class="row">
          <div class="col-md-12 col-sm-12 col-xs-12">
            <div class="row">
               <div class="col-md-12">
                  <h3 class="section-title">Contato</h3>
                  <div class="section-title-divider"></div>
                  <p class="section-description">Envie uma mensagem</p>
               </div>
            </div>
          </div>
        </div>
        <div class="row">
          <!-- Start contact icon column -->
          <div class="col-md-4 col-sm-4 col-xs-12">
            <div class="contact-icon text-center">
              <div class="single-icon">
                <i class="fa fa-mobile fa-2x"></i>
                <p>
                  Telefone: (011)95124-4835<br/>
                  <span>Atendimento de segunda a sexta (8:00 - 23:00)</span>
                </p>
              </div>
            </div>
          </div>
          <!-- Start contact icon column -->
          <div class="col-md-4 col-sm-4 col-xs-12">
            <div class="contact-icon text-center">
              <div class="single-icon">
                <i class="fa fa-envelope-o fa-2x"></i>
                <p>
                  Email: suporteonaya@gmail.com
                </p>
              </div>
            </div>
          </div>
          <!-- Start contact icon column -->
          <div class="col-md-4 col-sm-4 col-xs-12">
            <div class="contact-icon text-center">
              <div class="single-icon">
                <i class="fa fa-map-marker fa-2x"></i>
                <p>
                  Endereço: rua Alexandre Dias nº404 - São Paulo/SP
                </p>
              </div>
            </div>
          </div>
        </div>
        <div class="row">
        <!-- Start Google Map -->
          <div class="col-md-6 col-sm-6 col-xs-12">
            <!-- Start Map -->
            <br/><br/><br/>
            <div class="row">
                <div>
                  <div class="member">
			              <div class="form-group">
                      <div id="map" style="margin: auto;height:400px; width:70%;"></div>
                        <script>
                           function initMap() {
                             var house = {lat: -23.530668, lng: -46.459833};
                             var map = new google.maps.Map(document.getElementById('map'), {
                               zoom: 17,
                               center: house
                             });
                             var marker = new google.maps.Marker({
                               position: house,
                               map: map
                             });
                           }
                        </script>
                        <script async defer
                         src="https://maps.googleapis.com/maps/api/js?key=AIzaSyA7DG1letlaqBEY-R5OMuvwA_I9wpyFE5U&callback=initMap">
                        </script>
                        </div>  
                    </div>
		            </div>
            </div>
          <!-- End Map -->
          </div>
          <!-- End Google Map -->
          <!-- Start  contact -->
          <div class="col-md-6 col-sm-6 col-xs-12">
            <div class="form contact-form">
              <div id="sendmessage">Sua mensagem foi recebida, obrigado!</div>
              <div id="errormessage"></div>
              <form name="enviaEmail" action="enviaEmail.php" method="post">
                <div class="form-group">
                  Nome:         
                  <input class="form-control" type="text" name="nome" value="" required />
                </div>
                <div class="form-group">
                  Telefone:         
                  <input class="form-control" type="text" name="telefone" value="" required />
                </div>
                <div class="form-group">
                  Celular:         
                  <input class="form-control" type="text" name="celular" value="" required />
                </div>
                <div class="form-group">
                  Endereço:
                  <input class="form-control" type="text" name="endereco" value="" required />  
                </div>
                <div class="form-group">
                  Email:
                  <input class="form-control" type="text" name="email" value="" required />
                </div>
                <div class="form-group">
                  Motivo:
                  <input class="form-control" type="text" name="motivo" value="" required />
                </div>
                <div class="form-group">
                  Mensagem:
                  <textarea class="form-control" name="mensagem" cols="120" rows="5" required ></textarea>
                </div>
                  <div class="text-left">
                    <input class="btn btn-danger" type="reset" name="limpar" value="Limpar" />
                    <input class="btn btn-primary" type="submit" name="enviar" value="Enviar" />
                  </div>
              </form>
            </div>
          </div>
          <!-- End Left contact -->
        </div>
      </div>
    </div>
  </div>
  <!-- End Contact Area -->
  </section>
  <section id="subscribe">
            <div class="container wow fadeInUp">
               <div class="row">
                  <div class="col-md-8">
                     <h6 class="subscribe-title">Suporte Técnico Onaya</h6>
                     <h4 class="subscribe-text">Entre em contato consoco (11)95124-4835</h4>
                  </div>
               </div>
            </div>
         </section>
      <footer id="footer">
         <div class="container">
            <div class="row">
               <div class="col-md-12">
                  <div class="copyright">
                     <strong>Suporte técnico onaya&reg; 2018 |</strong> Todos direitos reservados
                  </div>
               </div>
            </div>
         </div>
      </footer>
      <!-- #footer -->
      <a href="#" class="back-to-top"><i class="fa fa-chevron-up"></i></a>
      <!-- Required JavaScript bibliotecararies -->
      <script src="biblioteca/jquery/jquery.min.js"></script>
      <script src="biblioteca/bootstrap/js/bootstrap.min.js"></script>
      <script src="biblioteca/superfish/hoverIntent.js"></script>
      <script src="biblioteca/superfish/superfish.min.js"></script>
      <script src="biblioteca/morphext/morphext.min.js"></script>
      <script src="biblioteca/wow/wow.min.js"></script>
      <script src="biblioteca/stickyjs/sticky.js"></script>
      <script src="biblioteca/easing/easing.js"></script>
      <!-- Template Specisifc Custom Javascript File -->
      <script src="js/custom.js"></script>
      <script src="contactform/contactform.js"></script>
   </body>
</html>

