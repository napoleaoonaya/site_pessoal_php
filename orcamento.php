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
    <style type="text/css">
        #linhas:hover{
            background-color: #cccccc;
        }
    </style>
</head>
<body>
    <section id="hero">
        <div class="hero-container">
            <div class="wow fadeIn">
                <h1>Suporte técnico onaya</h1>
                <h2>Solicite <span class="rotating">nosso suporte remoto, nosso suporte presencial, nossos serviços de infra, nossa consultória</span></h2>
                <div class="actions">
                <a href="index.php" class="btn-get-started">Início</a>
                <a href="#team" class="btn-services">Orçamento</a>
                </div>
            </div>
        </div>
    </section>
    <header id="header">
        <div class="container">
        <div id="logo" class="pull-left">
            <a href="index.php"><img src="img/logo.png" alt="" title="" /></img></a>              
        </div>
        <nav id="nav-menu-container">
            <ul class="nav-menu">
                <li class="menu-active"><a href="index.php">Home</a></li>
                <li><a href="orcamento.php">Orçamento</a></li>
            </ul>
        </nav>
        </div>
    </header>
<div>
    <section id="team">
        <div class="container wow fadeInUp">
        <div class="row">
            <div class="col-md-12">
                <h3 class="section-title">Orçamento</h3>
                <div class="section-title-divider"></div>
                <p class="section-description">Veja nosso valores</p>
            </div>
        </div>
            <div class="row">
                <div>
                    <div class="member">
                        <table class="table table-bordered">
                            <thead style="background-color: #3671a5; color: white;">
                                <tr>
                                    <th class="text-center">Código</th>
                                    <th class="text-center">Serviços</th>
                                    <th class="text-center">Preços</th>
                                </tr>
                            </thead>
                            <?php    
                                include ("conexao.php");
                                $servicos = selecionaTodosServicos();    
                                foreach ($servicos as $servico) { ?>
                            <tbody>
                                <tr id="linhas">
                                    <td><?=$servico["idServico"]?></td>
                                    <td><?=$servico["nomeServico"]?></td>
                                    <td><?=utf8_encode("R$").number_format($servico["precoServico"],2,',', '')?></td>
                                </tr>
                            </tbody>
                            <?php 
                                }
                            ?>
                        </table>
                        <a class="btn btn-primary text-left" name="relatorioPDF" id="relatorioPDF" href="./relatorioPDF.php">Relatório em PDF</a>
                    </div>
                </div>   
            </div>
        </div>
    </section>
</div>
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