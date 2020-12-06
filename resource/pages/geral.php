<?php session_start();?>
<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset='utf-8'>
    <meta name='viewport' content='width=device-width, initial-scale=1'>
    <meta property="og:image" content="https://ed-list.herokuapp.com/images/logo/ico.png">
    <meta name="description" content="Tenha um maior controle sobre as suas atividades">
    <meta name="author" content="Éverton - Ed">
    <meta name="copyright" content="© 2020 EdList">
    <title>Geral - EdList</title>
    <link rel='manifest' href='../manifest.json'>
    <link rel="icon" sizes="144x144" href="../images/favicon/favicon-144.png">
    <link rel="icon" sizes="128x128" href="../images/favicon/favicon-128.png">
    <link rel="icon" sizes="96x96" href="../images/favicon/favicon-96.png">
    <link rel="icon" sizes="64x64" href="../images/favicon/favicon-64.png">
    <link rel="icon" sizes="48x48" href="../images/favicon/favicon-48.png">
    <link rel="icon" sizes="32x32" href="../images/favicon/favicon-32.png">
    <link rel="icon" sizes="16x16" href="../images/favicon/favicon-16.png">
    <link rel='stylesheet' type='text/css' media='screen' href='../styles/main_1.css'>
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans&family=Roboto:wght@400;500&display=swap" rel="stylesheet">
    <script src="https://kit.fontawesome.com/8544c965ee.js" crossorigin="anonymous"></script>
    <script src='../scripts/menu.js' defer></script>
    <script type="module" src="https://ed-list.herokuapp.com/pwabuilder-sw-register.js" defer></script>
</head>
<body>
    <nav class="menu-op">
        <span>Geral</span>
    </nav>
    <section class="conteudo">
        <?php require_once("../model/alunos.php"); require_once("../model/estatistica.php");?>
        <div class='titles-session'><span>Horário</span></div>
        <div class='div-horarios'>
            <div>
            <span>Segunda-feira</span>
                <ul> 
                    <li>Física- 08:00 às 8:40</li>
                    <li>Espanhol- 10:50 às 11:30</li>
                    <li>História- 13:30 às 14:15</li>
                    <li>Educação Física- 16:30 às 17:00</li>
                </ul>
            </div>
            <div>
            <span>Terça-feira</span>
                <ul>
                    <li>Matemática- 8:00 às 9:30</li>
                    <li>Geografia- 10:50 às 11:30</li>
                    <li>Homero- 13:30 às 15:00</li>
                    <li>Homero- 15:30 às 17:00</li>
                </ul>
            </div>
            <div>
            <span>Quarta-feira</span>
                <ul>
                    <li>Israel- 8:00 às 9:30</li>
                    <li>Israel- 10:00 às 11:30</li>
                    <li>Inglês Técnico- 13:00 às 14:00</li>
                    <li>Homero- 14:30 às 15:30</li>
                    <li>Formação p/cidadania- 16:00 às 17:00</li>
                </ul>
            </div>
            <div>
            <span>Quinta-feira</span>
                <ul>
                    <li>Inglês- 8:00 às 8:50</li>
                    <li>Química- 10:00 às 11:30</li>
                    <li>Português- 13:30 às 15:00</li>
                    <li>Biologia- 16:15 as 17:00</li>
                </ul>
            </div>
            <div>
            <span>Sexta-feira</span>
                <ul>
                    <li>Matemática- 8:00 às 9:30</li>
                    <li>Filosofia- 10:45 às 11:30</li>
                    <li>Sociologia- 16:30 às 17:00</li>
                </ul>
            </div>
        </div>
        <div class='titles-session'><span>Estatística</span></div>
        <div class='estatistica-div'>
            <div>
            <span>Total de atividades</span>
                <ul>
                    <li><?php echo$total_1; ?></li>
                </ul>
            </div>
            <div>
            <span>Atividades a fazer</span>
                <ul>
                    <li><?php  echo$total_2; ?></li>
                </ul>
            </div>
            <div>
            <span>Atividades feitas</span>
                <ul>
                    <li><?php echo$total_3; ?></li>
                </ul>
            </div>
        </div>
        <div class='titles-session'><span>Alunos</span></div>
        <div class='alunos-div'>
            <?php require_once("../model/alunos_participantes.php");?>
        </div>
    </section>
    <header class="menu">
        <div class="pop video">
            <span>Aulas Gravadas</span>
            <ul> 
            <li><a target='_blank' href="https://classroom.google.com/u/1/w/NzM3Nzc0MTUwMTBa/tc/NzQ3ODYxNzY5NDVa">Química</a></li>
                <li><a target='_blank' href="https://classroom.google.com/u/1/w/NzM3Nzc0MTUwMTBa/tc/NzQ3ODg1NDEyODFa">Matemático</a></li>
                <li><a target='_blank' href="https://drive.google.com/drive/u/0/folders/0B6VhsdzZjtmgfjQ2SkI3VExEdHNEQ3h0d1NTaFg2RGpSbnVLUXF3Q044MFk0R29peEJnYk0">Israel</a></li>
                <li><a target='_blank' href="https://drive.google.com/drive/u/1/folders/1rrSUUool6beDzCQInThG1HIXBPZnfeNR">Homero</a></li>
            </ul>
        </div>
        <nav>
            <ul> 
                <?php echo $icon?>
                <li class="fas fa-video icon1"></li>
                <?php echo $al?>
                <a class="fas fa-house-user" href="./geral.php"></a>
            </ul>
        </nav>
    </header>
</body>
</html>