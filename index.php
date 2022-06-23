<!DOCTYPE html>
<html lang="en">

<head>
    <title>Krisp1k - Home</title>

    <link rel="stylesheet" href="styles.css">
    <link rel="stylesheet" href="mobile.css" media="only screen and (max-width: 1089px)">

    <style>@import url('https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&family=Russo+One&display=swap');</style> 

    <link rel="icon" href="icon.ico" type="image/x-icon" />
    <link rel="shortcut icon" href="icon.ico" type="image/x-icon" />
    <link rel="apple-touch-icon" href="icon.ico" />

    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="author" content="Krisp1k" />
    <meta name="keywords" content="krisp1k, portfolio, e-portfolio, web, web dev, web development, web design, web-design, graphic design, graphics, video editing, video, commissions, czech, web app, wordpress website, wordpress development, html, css, js, javascript, frontend, front-end, framework, frontend framework, front-end framework, about me, twitch graphics, clients" />
    <meta name="description" content="A portfolio of a web developer Krisp1k" />
    <meta name="robots" content="index,follow" />
    <meta name="copyright" content="Krisp1k" />
</head>
<body id="body">
    <div class="fs-bg">
        <iframe frameborder="0" width="100%" height="100%" allowfullscreen loading="lazy" srcdoc="<html><head><style>body{margin: 0;padding: 0;}.fs-bg {position: relative;overflow: hidden;width: 100%;height: 100vh;display: flex;}video {object-fit: cover;min-width: 100%;min-height: 100vh;z-index: 1;}</style></head><body><div class='fs-bg'><video loop muted autoplay><source src='bg_2.webm' type='video/mp4'></video></div></body></html>"></iframe>
    </div>
    <div class="allpage">
        <header>
            <nav>
                <ul>
                    <li class="nav-li"><span data-navItem-id="0">| Home |</span></li>
                    <li class="nav-li"><span data-navItem-id="1">| About me |</span></li>
                    <li class="nav-li"><span data-navItem-id="2">| FaQ |</span></li>
                    <li class="nav-li"><span data-navItem-id="3">| Services & work |</span></li>
                    <li class="nav-li"><span data-navItem-id="4">| Contact |</span></li>
                </ul>
            </nav>
        </header>
        <main>
            <?php include "sections.php";?>
            
        </main>
    </div>
    <div class="pop-ups">
        <?php include "popups.php";?>
    </div> 
    <?php include "scripts.php";?>  
</body>
</html>