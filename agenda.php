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
	<meta name="google-site-verification" content="uyMzwAwZab71Q9h8IKHutNXIHfIBzQ43TI0HOVt0p5s" />
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
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
    <title>Agenda</title>
    <link rel="stylesheet" href="fullcalendar/fullcalendar.css" />
    <script src="fullcalendar/biblioteca/jquery.min.js"></script>
    <script src="fullcalendar/biblioteca/moment.min.js"></script>
    <script src="fullcalendar/fullcalendar.js"></script>
    <!-- script de traducao -->
    <script src="fullcalendar/locale/pt-br.js"></script>
    <script>
    $(document).ready(function() {

        dataAtual = new Date();

        defaultDate = dataAtual.getFullYear();

        //CARREGA CALENDARIO E EVENTOS DO BANCO
        $('#calendario').fullCalendar({
                header: {
                        left: 'prev,next today',
                        center: 'title',
                        right: 'month,agendaWeek,agendaDay'
                },
                defaultDate,
                editable: true,
                eventLimit: true, 
                events: 'eventos.php',           
                eventColor: '#dd6777'
        });	
        //CADASTRA NOVO EVENTO
        $('#novo_evento').submit(function(){
                //serialize() junta todos os dados do form e deixa pronto pra ser enviado pelo ajax
                var dados = jQuery(this).serialize();
                $.ajax({
                        type: "POST",
                        url: "cadastrar_evento.php",
                        data: dados,
                        success: function(data)
                        {   
                                if(data == "1"){
                                        alert("Cadastrado com sucesso! ");
                                        location.reload();
                                }else{
                                        alert("Houve algum problema.. ");
                                }
                        }
                });                
                return false;
            });	
	}); 	
	</script>
	<style>
            #calendario{
                    position: relative;
                    width: 50%;
                    margin: 0px auto;
            }        
	</style>
    <script src='https://www.google.com/recaptcha/api.js'></script>
</head>
    <body> 
        <section id="hero">
           <div class="hero-container">
              <div class="wow fadeIn">
                 <h1>Suporte técnico onaya</h1>
                 <h2>Solicite <span class="rotating">nosso suporte remoto, nosso suporte presencial, nossos serviços de infra, nossa consultória</span></h2>
                 <div class="actions">
                    <a href="index.php" class="btn-get-started">Início</a>
                    <a href="#team" class="btn-services">Agenda</a>
                 </div>
              </div>
           </div>
        </section>
        <header id="header">
            <div class="container">
                <div id="logo" class="pull-left">
                <a href="index.php"><img src="img/logo.png" alt="" title=""></a>
            </div>
                <nav id="nav-menu-container">
                   <ul class="nav-menu">
                        <li class="menu-active"><a href="index.php">Home</a></li>
                        <li><a href="agenda.php">Agenda</a></li>
                   </ul>
                </nav>
            </div>
        </header>
        <br/>
        <div>
        <section id="team">
            <div class="container wow fadeInUp">
                <div class="row">
                    <div class="col-md-12">
                      <h3 class="section-title">horário e data</h3>
                      <div class="section-title-divider"></div>
                      <p class="section-description">Veja a disponibilidade</p>
                    </div>
                </div>		
                <div id='calendario' class="cols-md-6">
                    <br/>
                    <form>
                        <label>
                            Nome:
                            <input type="text" id="nome" name="nome" class="form-control" required="true" />
                        </label>
                        <label>
                            Telefone:
                            <input type="text" id="telefone" name="telefone" class="form-control" required="true" />
                        </label>
                        <label>
                            Celular:
                            <input type="text" id="celular" name="celular" class="form-control" required="true" />
                        </label>
                        <label>
                            E-mail:
                            <input type="text" id="email" name="email" class="form-control" required="true" />
                        </label>
                        <label>
                            Data:
                            <input type="date" id="data" name="data" class="form-control" required="true" />
                        </label>
                        <label>
                            Horario:
                            <input type="time" id="celular" name="celular" class="form-control" required="true" />
                        </label>
                        <label>
                            Status:
                            <input type="hidden" id="status" name="status" class="form-control" />
                        </label>
                        <br/>
                        <input type="button" class="btn btn-primary" value="Salvar" />
                        <input type="button" class="btn btn-danger" value="Limpar" /><br/><br/>
                        <div class="g-recaptcha" data-sitekey="6LcJAWoUAAAAABMJ2Dh6KuVYQsqmhlxvGo9nmK3G"></div>
                    </form>
                </div>
            </div>
        </section>
        </div>
    <br/>
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

