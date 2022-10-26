<?php include 'C:\UwAmp\www\le-vrai-portfolio-main\template portfolio\sendmail.php'; ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Portfolio</title>
    <link rel="stylesheet" href="styles/styles.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" integrity="sha512-1ycn6IcaQQ40/MKBW2W4Rhis/DbILU74C1vSrLJxCq57o941Ym01SwNsOMqvEBFlcgUa6xLiPY/NS5R+E6ztJQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700;800&display=swap" rel="stylesheet">
</head>
<body> <!--alert messages start-->
        <?php echo $alert; ?>
        <!--alert messages end-->
    <header class="container header active" id="home">
        <div class="header-content">
            <div class="left-header">
                <div class="h-shape"></div>
                <div class="image">
                    <img src="img/IMG_1066.jpg" alt="">
                </div>
            </div>
            <div class="right-header">
                <h1 class="name">
                    Bonjour, je suis <span>Hugo BAUDRY LUCOT</span>
                    Étudiant au Gaming Campus.
                </h1>
                <p>
                Elève au Gaming Campus, en 3ème année du Bachelor Management 
                jeux vidéo et esport. Je me suis orienté vers ce cursus pour pouvoir allier 
                mes passions à mon domaine professionnel à venir. 
                </p>
                <div class="btn-con">
                <a download="CV Hugo BAUDRY-LUCOT 2022 (2).pdf" href="CV Hugo BAUDRY-LUCOT 2022 (2).pdf" class="main-btn" type="application/octet-stream">
                        <span class="btn-text">Télécharger mon CV</span>
                        <span class="btn-icon"><i class="fas fa-download"></i></span>
                    </a>
                </div>
            </div>
        </div>
    </header>
    <main>
        <section class="container about" id="about">
            <div class="main-title">
                <h2>À propos <span> de moi</span><span class="bg-text">mes statistiques</span></h2>
            </div>
            <div class="about-container">
                <div class="left-about">
                    <h4>À mon sujet</h4>
                    <p>
                        Je suis curieux, motivé et j’apprécie particulièrement le travail en équipe.
                        J'ai pu explorer la méthode scrum lors d'un stage en tant que Proxy Product Owner chez Suricats Consulting.
                        Cette exprérience m'a permis de me rendre compte que le relationnel est un valeur forte pour moi, 
                        puis que je veux faire de cette valeur mon outil de travail. <br /> <br />
                        Le métier de Scrum Master m'intéresse, de par le fait qu'il est le médiateur entre les équipes d'un projet.
                        Je pourrais utiliser mes compétences apprises lors de certains projets, puis de mon expérience professionnelle acquise durant mon stage.
                        
                    </p>
                    <div class="btn-con">
                    <a download="CV Hugo BAUDRY-LUCOT 2022 (2).pdf" href=".CV Hugo BAUDRY-LUCOT 2022 (2).pdf" class="main-btn" type="application/octet-stream">
                        <span class="btn-text">Télécharger mon CV</span>
                        <span class="btn-icon"><i class="fas fa-download"></i></span>
                        </a>
                    </div>
                </div>
                <div class="right-about">
                    <div class="about-item">
                        <div class="abt-text">
                            <p class="large-text">35+</p>
                            <p class="small-text">Projets <br /> Aboutis</p>
                        </div>
                    </div>
                    <div class="about-item">
                        <div class="abt-text">
                            <p class="large-text">15</p>
                            <p class="small-text">Personnes <br /> managées </p>
                        </div>
                    </div>
                    <div class="about-item">
                        <div class="abt-text">
                            <p class="large-text">8</p>
                            <p class="small-text">Mois d'expérience <br /> en Scrum</p>
                        </div>
                    </div>
                    <div class="about-item">
                        <div class="abt-text">
                            <p class="large-text">1</p>
                            <p class="small-text">Formulaire d'inscription<br /> réussi en Php/Sql</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="about-stats">
                <h4 class="stat-title">Mes compétences</h4>
                <div class="progress-bars">
                    <div class="progress-bar">
                        <p class="prog-title">Pack Office</p>
                        <div class="progress-con">
                            <p class="prog-text">90%</p>
                            <div class="progress">
                                <span class="html"></span>
                            </div>
                        </div>
                    </div>
                    <div class="progress-bar">
                        <p class="prog-title">Jira Software</p>
                        <div class="progress-con">
                            <p class="prog-text">80%</p>
                            <div class="progress">
                                <span class="css"></span>
                            </div>
                        </div>
                    </div>
                    <div class="progress-bar">
                        <p class="prog-title">Trello</p>
                        <div class="progress-con">
                            <p class="prog-text">75%</p>
                            <div class="progress">
                                <span class="js"></span>
                            </div>
                        </div>
                    </div>
                    <div class="progress-bar">
                        <p class="prog-title">UX/UI</p>
                        <div class="progress-con">
                            <p class="prog-text">85%</p>
                            <div class="progress">
                                <span class="react"></span>
                            </div>
                        </div>
                    </div>
                    <div class="progress-bar">
                        <p class="prog-title">Notion</p>
                        <div class="progress-con">
                            <p class="prog-text">85%</p>
                            <div class="progress">
                                <span class="node"></span>
                            </div>
                        </div>
                    </div>
                    <div class="progress-bar">
                        <p class="prog-title">Php/Sql</p>
                        <div class="progress-con">
                            <p class="prog-text">65%</p>
                            <div class="progress">
                                <span class="python"></span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <h4 class="stat-title">Mes expériences</h4>
            <div class="timeline">
                <div class="timeline-item">
                    <div class="tl-icon">
                        <i class="fas fa-briefcase"></i>
                    </div>
                    <p class="tl-duration">Janvier 2018 - Juillet 2018</p>
                    <h5>Employé polyvalent<span> - BackStreet</span></h5>
                    <p>
                        Mise en place des différents produits / Conseil auprès des clients sur les
                        marques / Vente et encaissement / Suivi du stock et des approvisionnements.
                    </p>
                    </p>
                </div>
                <div class="timeline-item">
                    <div class="tl-icon">
                        <i class="fas fa-briefcase"></i>
                    </div>
                    <p class="tl-duration">2020 - 2021</p>
                    <h5>Professional Player<span> - Invulnerable Esport</span></h5>
                    <p>
                        League of Legends Toplaner - Swedish 2nd Division.
                    </p>
                </div>
                <div class="timeline-item">
                    <div class="tl-icon">
                        <i class="fas fa-briefcase"></i>
                    </div>
                    <p class="tl-duration">Mai 2021 - Juillet 2021</p>
                    <h5>Proxy Product Owner<span> - Suricats Consulting</span></h5>
                    <p>
                        Gestion des missions journalières de l'équipe / Création de design UX /
                        Rédactions des comptes-rendus de réunions.
                    </p>
                </div>
                <div class="timeline-item">
                    <div class="tl-icon">
                        <i class="fas fa-briefcase"></i>
                    </div>
                    <p class="tl-duration">Janvier 2022 - Avril 2022</p>
                    <h5>Équipier Polyvalent<span> - MC Donald</span></h5>
                    <p>
                        Préparation des commandes : production des sandwichs, frites, salades,
                        desserts et boissons / Entretien des locaux / Respect des normes d’hygiène,
                        de qualité et de service du Mc Donald. 
                    </p>
                </div>
                <div class="timeline-item">
                    <div class="tl-icon">
                        <i class="fas fa-briefcase"></i>
                    </div>
                    <p class="tl-duration">Avril 2022 - Juin 2022</p>
                    <h5>Gestion de Projet Évènementiel<span> - Horizon Gaming</span></h5>
                    <p>
                        Organisation de l'emploi du temps des activités / Gestion des locaux pour
                        l'événement / Création graphique pour les réseaux sociaux.
                    </p>
                </div>
                <div class="timeline-item">
                    <div class="tl-icon">
                        <i class="fas fa-briefcase"></i>
                    </div>
                    <p class="tl-duration">Mai 2022 - Août 2022</p>
                    <h5>Préparateur de commande<span> - Metro Cash and Carry</span></h5>
                    <p>
                        Préparation des commandes / Réception de commande / Remise des
                        commandes aux clients.
                    </p>
                </div>
            </div>
        </section>
        <section class="container" id="portfolio">
            <div class="main-title">
                <h2>Mon <span>Portfolio</span><span class="bg-text">My Work</span></h2>
            </div>
            <p class="port-text">
                Voici mon portfolio.
            </p>
            <div class="portfolios">
                <div class="portfolio-item">
                    <div class="image">
                        <img src="img/logo-suricats-consulting-1024x531.png" alt="">
                    </div>
                    <div class="hover-items">
                        <h3>Suricats Consulting</h3>
                        <div class="icons">
                            <a href="https://www.suricats-consulting.com/" class="icon">
                                <i class="fa-solid fa-o"></i>
                            </a>
                            <a href="https://www.covea.eu/fr" class="icon">
                                <i class="fa-solid fa-o"></i>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="portfolio-item">
                    <div class="image">
                        <img src="img/UX UI.jfif" alt="">
                    </div>
                    <div class="hover-items">
                        <h3>Adobe UI/UX</h3>
                        <div class="icons">
                            <a href="https://xd.adobe.com/view/be9fca06-fb11-41d4-8132-89d624c3fcdb-ebcc/?fullscreen" class="icon">
                                <i class="fa-solid fa-o"></i>
                            </a>
                            <a href="https://xd.adobe.com/view/ca2d176d-91a9-43cb-aed8-d00c05ed3d2d-9f7e/" class="icon">
                                <i class="fa-solid fa-o"></i>
                            </a>
                            <a href="https://xd.adobe.com/view/771f51d6-b928-481f-96f7-d1a67b562b5c-224c/" class="icon">
                                <i class="fa-solid fa-o"></i>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="portfolio-item">
                    <div class="image">
                        <img src="img/Jira-Symbol.png" alt="">
                    </div>
                    <div class="hover-items">
                        <h3>Useful Links</h3>
                        <div class="icons">
                            <a href="img/Jira-Backlog.png" class="icon">
                                <i class="fa-solid fa-o"></i>
                            </a>
                            <a href="img/Jira-Backlog-Grooming.webp" class="icon">
                                <i class="fa-solid fa-o"></i>
                            </a>
                        </div>
                    </div>
                </div>
                
            </div>
        </section>
        <section class="container" id="blogs">
            <div class="blogs-content">
                <div class="main-title">
                    <h2>Mes centres<span> d'intérets</span><span class="bg-text">My Blogs</span></h2>
                </div>
                <div class="blogs">
                    <div class="blog">
                        <img src="img/trial fusion.jfif" alt="">
                        <div class="blog-text">
                            <h4>
                                Jeux Vidéos
                            </h4>
                            <p>
                                Je suis un joueur depuis mon enfance, j'ai toujours aimé les jeux vidéos, que ce soit des MOBA, FPS ou bien simplement des jeux entres amis pour s'amuser.
                            </p>
                        </div>
                    </div>
                    <div class="blog">
                        <img src="img/lol.jfif" alt="">
                        <div class="blog-text">
                            <h4>
                                League of Legends
                            </h4>
                            <p>
                                Je joue à League of Legends depuis 2015. J'y joue pour le fun et pour m'amuser avec mes amis.
                            </p>
                        </div>
                    </div>
                    <div class="blog">
                        <img src="img/piano.jfif" alt="">
                        <div class="blog-text">
                            <h4>
                                Musique
                            </h4>
                            <p>
                                J'écoute de la musique tout le temps, que ce soit pour me concentrer, me reposer, me balader et même pour m'endormir.
                            </p>
                        </div>
                    </div>
                    <div class="blog">
                        <img src="img/management.jfif" alt="">
                        <div class="blog-text">
                            <h4>
                                Gestion
                            </h4>
                            <p>
                                J'ai longtemps aimer la gestion, particulièrement le management d'équipe, c'est pour cela que je me penché sur les sites comme JIRA, accompagné de Confluence.
                            </p>
                        </div>
                    </div>
                    <div class="blog">
                        <img src="img/ux design.png" alt="">
                        <div class="blog-text">
                            <h4>
                                Design
                            </h4>
                            <p>
                               J'aime tout ce qui touche à la création, au design etc. Je fais moi même tout ce qui est design de recherche d'équipe, bannière twitter et photo de profil. Ainsi que du développement UX/UI d'application ou de site internet
                            </p>
                        </div>
                    </div>
                    <div class="blog">
                        <img src="img/skate.jfif" alt="">
                        <div class="blog-text">
                            <h4>
                                Sport
                            </h4>
                            <p>
                               Je suis sportif depuis tout petit, orienté sport extrême comme le BMX, le skate, le trial et l'escalade. Les sports collectifs ne sont pas fait pour moi, je préfère me combattre seul contre un obstacle que à plusieurs, cela va à l'encontre de mon fonctionnement à l'école.
                               Mais depuis maintenant 2 ans, je pratique du volleyball avec mes amis
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="container contact" id="contact">
            <div class="contact-container">
                <div class="main-title">
                    <h2>Me <span>Contacter</span><span class="bg-text">Contacter</span></h2>
                </div>
                <div class="contact-content-con">
                    <div class="left-contact">
                    <h4>Me contacter</h4>
                        <p>
                            Pour me contacter :
                        </p>
                        <div class="contact-info">
                            <div class="contact-item">
                                <div class="icon">
                                    <i class="fas fa-map-marker-alt"></i>
                                    <span>Location</span>
                                </div>
                                <p>
                                    Lyon, France
                                </p>
                            </div>
                            <div class="contact-item">
                                <div class="icon">
                                    <i class="fas fa-envelope"></i>
                                    <span>Email</span>
                                </div>
                                <p>
                                    <span>hbaudrylucot@gaming.bs</span>
                                </p>
                            </div>
                            <div class="contact-item">
                                <div class="icon">
                                    <i class="fas fa-user-graduate"></i>
                                    <span>Education</span>
                                </div>
                                <p>
                                    <span>Gaming Business School, Lyon</span>
                                </p>
                            </div>
                            <div class="contact-item">
                                <div class="icon">
                                    <i class="fas fa-user-graduate"></i>
                                    <span>Téléphone</span>
                                </div>
                                <p>
                                    <span>06 43 56 65 19</span>
                                </p>
                            </div>
                            <div class="contact-item">
                                <div class="icon">
                                    <i class="fas fa-globe-africa"></i>
                                    <span>Langues</span>
                                </div>
                                <p>
                                    <span>Français, Anglais, Chinois, Espagnol</span>
                                </p>
                            </div>
                        </div>
                        <div class="contact-icons">
                            <div class="contact-icon">
                                <a href="https://twitter.com/baudry_hugo" target="_blank">
                                    <i class="fab fa-twitter"></i>
                                </a>
                                <a href="https://www.youtube.com/c/ANTHONYPZC" target="_blank">
                                    <i class="fab fa-youtube"></i>
                                </a>
                                <a href="https://konect.gg/Phyraxx" target="_blank">
                                    <i class="fa-brands fa-kickstarter-k"></i>                         
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="right-contact">
                        <form method="POST" action="" class="contact-form">
                            <div class="input-control i-c-2">
                                <input type="text" name="name" required placeholder="Ton Nom">
                                <input type="email" name="email" required placeholder="Email">
                            </div>
                            <div class="input-control">
                                <input type="text" name="subject" required placeholder="Objet">
                            </div>
                            <div class="input-control">
                                <textarea name="message" id="" cols="15" rows="8" placeholder="Ton message..."></textarea>
                            </div>
                            <div class="submit-btn">
                                <input type="submit" name="submit" class="send-btn" value="Envoyer">
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </section>
    </main>

    <div class="controls">
        <div class="control active-btn" data-id="home" >
            <i class="fas fa-home"></i>
        </div>
        <div class="control" data-id="about">
            <i class="fas fa-user"></i>
        </div>
        <div class="control" data-id="portfolio">
            <i class="fas fa-briefcase"></i>
        </div>
        <div class="control" data-id="blogs">
            <i class="far fa-newspaper"></i>
        </div>
        <div class="control" data-id="contact">
            <i class="fas fa-envelope-open"></i>
        </div>
    </div>
    <div class="theme-btn">
        <i class="fas fa-adjust"></i>
    </div>
    <script src="app.js"></script>
    <script>
    if ( window.history.replaceState ) {
        window.history.replaceState( null, null, window.location.href );
    }
</script>
</body>
</html>
