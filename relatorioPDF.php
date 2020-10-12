<?php
    include ("fpdf/fpdf.php");
    include ("conexao.php");

    $servicos = selecionaTodosServicos();

    //Instanciando a classe FPDF 
    //Tipo de orientação 
    //retrato P ou paisagem L , 
    //Tipo de unidade 
    //pt: point
    //mm: millimeter
    //cm: centimeter
    //in: inch
    //Tipo de papel
    //A3
    //A4
    //A5
    //Letter
    //Legal
    //or array 100,150
    $pdf = new FPDF('L','mm',array(240,220));

    $pdf->SetAuthor(utf8_decode("Napoleão Kazu Onaya"));

    //Nova pagina
    $pdf->AddPage();

    //Adicionando imagens no PDF
    //$pdf->Image('./img/logo_site.png',10,6,30);
    //$pdf->Ln(20);

    //Fonts do PDF SetFont "Fonte","Negrito ou Italico","Tamanho"
    $pdf->SetFont('Arial','B',12);
    $pdf->SetDrawColor(12,0,0);
    //Colocando dados Cell "Largura","altura","texto principal","borda","pular linha","centralizar"
    $pdf->Cell(220,10,utf8_decode('Relatório de serviços'),0,0,"C");
    //Pula linha
    $pdf->Ln(15);

    //Cabeçalho do relatório
    $pdf->SetFont("Arial",'I',10);
    $pdf->Cell(50,7,("ID"),1,0,"C");
    $pdf->Cell(120,7,utf8_decode("Serviços"),1,0,"C");
    $pdf->Cell(50,7,utf8_decode("Preços"),1,0,"C");
    $pdf->Ln();

    //Itens do cabeçalho
    foreach ($servicos as $servico) {
        $pdf->Cell(50,7,($servico["idServico"]),1,0,"C");
        $pdf->Cell(120,7,utf8_decode($servico["nomeServico"]),1,0,"C");
        $pdf->Cell(50,7,utf8_decode($servico["precoServico"]),1,0,"C");
        $pdf->Ln();
    }

    
    //Footer
    // Arial italic 8
    $pdf->SetFont('Arial','I',8);
    // Page number
    // Cell borda , frame, titulo concat -> function, a direita , pula uma linha ou right R,center C,left L
    // Position at 1.5 cm from bottom
    $pdf->SetY(185);
    $pdf->SetX(10);
    $pdf->Cell(0,1,utf8_decode('Suporte Técnico Onaya'),0,0,'C');
    // Position at 1.5 cm from bottom
    $pdf->SetY(185);
    $pdf->SetX(250);
    $pdf->Cell(0,1,utf8_decode('Pág.: ').$pdf->PageNo(),0,0,'R');


     //Nova pagina 2
     //$pdf->AddPage();

     //Adicionando imagens no PDF
     //$pdf->Image('./img/logo.png',10,6,30);
     //$pdf->Ln(15);

    //Fonts do PDF SetFont "Fonte","Negrito ou Italico","Tamanho"
    // $pdf->SetFont('Arial','B',12);
    //Colocando dados Cell "Largura","altura","texto principal","borda","pular linha","centralizar"
    //$pdf->Cell(280,10,utf8_decode('Gráficos Clientes'),0,0,"C");
    //Pula linha
    //$pdf->Ln(15);

    //$pdf->SetFont('Arial','B',8);
    // Insert a dynamic image from a URL
    // API Google PoX,PoY,PoZ
    // http://chart.googleapis.com/chart?
    // cht=p3& tipo de gráfico
    // chs=250x120& dimensão do gráfico  
    // chd=t60,40& tamanho da legenda
    // ch1=Legenda1|Legenda2
    //$pdf->Image('http://chart.googleapis.com/chart?cht=p3&chd=t:60,40&chs=350x120&chl=Field|Remoto',100,80,90,0,'PNG');
    //

    // Arial italic 8
    //$pdf->SetFont('Arial','I',8);
    // Page number
    // Cell borda , frame, titulo concat -> function, a direita , pula uma linha ou right R,center C,left L
    // Position at 1.5 cm from bottom
    //$pdf->SetY(185);
    //$pdf->SetX(10);
    //$pdf->Cell(0,1,utf8_decode('Suporte Técnico Onaya'),0,0,'C');
    // Position at 1.5 cm from bottom
    //$pdf->SetY(185);
    //$pdf->SetX(250);
    //$pdf->Cell(0,1,utf8_decode('Pág.: ').$pdf->PageNo(),0,0,'R');

    //Saída de dados PDF
    $pdf->Output();

?>    