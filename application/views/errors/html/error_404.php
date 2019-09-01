<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>Arks-System</title>

    <meta name="description" content="Team francophone sur PSO2 JP"/>
    <meta name="keywords" content="Arks-System, Arks, System, PSO2, Phantasy, Star, Online, SEGA, Ship, Team, Francophone, Fr, Française"/>
	<meta name="viewport" content="width=device-width, initial-scale=1"/>
	<meta name="robots" content="noindex,nofollow"/>

    <style>
        @import url('https://fonts.googleapis.com/css?family=Lato|Raleway:400,500,600');

        @font-face {
            font-family: 'arks-system-icons';
            src:  url('/assets/fonts/arks-system-icons.eot?xevsmz');
            src:  url('/assets/fonts/arks-system-icons.eot?xevsmz#iefix') format('embedded-opentype'),
                  url('/assets/fonts/arks-system-icons.ttf?xevsmz') format('truetype'),
                  url('/assets/fonts/arks-system-icons.woff?xevsmz') format('woff'),
                  url('/assets/fonts/arks-system-icons.svg?xevsmz#icomoon') format('svg');
            font-weight: normal;
            font-style: normal;
		}

		*{box-sizing:border-box}body{background-image:url("/assets/img/bg/forest.jpg");background-repeat:no-repeat;background-attachment:fixed;background-size:cover;color:black;font-family:'Raleway', sans-serif;margin:0px}section.head{max-width:1000px;margin:0px auto;border-radius:4px}section.head nav.menu{padding:5px 0px}section.head nav.menu a.home img{height:8em}section.head nav.menu ul{list-style:none;display:flex;padding:0px;margin:0px}section.head nav.menu ul li a{padding:5px;text-decoration:none;color:white;font-size:1.25em}section.head nav.menu ul li a:hover .icon{transition:color .6s ease;color:lightskyblue}section.head nav.menu ul li a label{cursor:pointer}section.head nav.menu ul li:not(:last-child){padding-right:15px}section.container{margin:10px auto;max-width:1000px;background:white;color:black;padding:15px;border-radius:4px}section.container>h2:first-child{margin-top:0px}section.container a{color:black;font-weight:500}section.container p{line-height:1.4em;margin:10px 0px 10px 15px}section.container h1,section.container h2,section.container h3,section.container h4,section.container h5{font-family:"Lato", sans-serif;margin-bottom:0.5em}section.container h2{font-weight:bolder;font-size:1.8em}section.container h3{font-weight:bold;font-size:1.4em}section.container .highlight{display:inline;background:#f0f0f0;border:1px solid #a0a0a0;border-radius:2px;padding:0 5px;white-space:nowrap;font-size:.9em}section.container .center{text-align:center}section.container ul li,section.container ol li{margin-top:2px;margin-bottom:2px}section.container.discord iframe{height:500px;margin:0px auto;display:block}section.container.recruit a.joinus img{width:95%;border:1px lightgray solid;padding:1px}@media only screen and (max-width: 1000px){section.container{border-radius:0px}}@media only screen and (max-width: 900px){section.head nav.menu a.home img{height:7em}section.head nav.menu ul li a{padding:5px;font-size:1em}section.head nav.menu ul li:not(:last-child){padding-right:10px}}@media only screen and (max-width: 700px){section.head nav.menu a.home img{height:6em}section.head nav.menu ul li a{padding:5px;font-size:.9em}section.head nav.menu ul li:not(:last-child){padding-right:5px}section.container{padding:10px 5px}section.container p{padding-left:5px}}@media only screen and (max-width: 600px){section.head nav.menu a.home img{width:48%}section.head nav.menu ul{float:right;width:48%;display:block}section.head nav.menu ul li a{float:left;padding:5px;margin:5px;font-size:1em}section.head nav.menu ul li a label{display:none}section.head nav.menu ul li:not(:last-child){padding-right:5px}}.icon{font-family:'arks-system-icons' !important;font-style:normal;font-weight:normal;font-variant:normal;text-transform:none;-webkit-font-smoothing:antialiased;-moz-osx-font-smoothing:grayscale}.icon.home:before{content:"\e900"}.icon.newspaper:before{content:"\e904"}.icon.user:before{content:"\e971"}.icon.group:before{content:"\e972"}.icon.twitter:before{content:"\ea96"}.icon.youtube:before{content:"\ea9d"}.icon.steam:before{content:"\eaad"}.icon.github:before{content:"\eab0"}.icon.nswitch:before{content:"\e901"}.icon.sonyps4:before{content:"\e902"}.icon.playstation:before{content:"\e903"}.icon.windows:before{content:"\e905"}.icon.discord:before{content:"\e906"}
    </style>

    <link href="/assets/dist/css/main.css" rel="stylesheet"/>
</head>
<body>
<section class="head">
    <nav class="menu">
        <a href="/" class="home">
            <img src="/assets/svg/long.svg" />
        </a>
        <ul class="menu">
    <li>
        <a href="/">
            <span class="icon home"></span> <label>Accueil</label>
        </a>
    </li>
    <li>
        <a href="/recrutement">
            <span class="icon group"></span> <label>Recrutement</label>
        </a>
    </li>
    <li>
        <a href="/discord">
            <span class="icon discord"></span> <label>Discord</label>
        </a>
    </li>
    <li>
        <a href="https://github.com/Arks-System/Arks-SystemTool" rel="nofollow">
            <span class="icon windows"></span> <label>Arks-System Tool</label>
        </a>
    </li>
    <li>
        <a href="https://blog.arks-system.eu">
            <span class="icon newspaper"></span> <label>Blog</label>
        </a>
    </li>
    <li>
        <a href="https://twitter.com/ArksSystem">
            <span class="icon twitter"></span> <label>Twitter</label>
        </a>
    </li>
</ul>    </nav>
</section>

<main>
	<section class="container">
		<h2><?=$heading?></h2>
		<p>
			<?=$message?>
		<p>
	</section>
</main>
<footer>

</footer>
<script src="https://arks-system.eu/assets/dist/js/main.js"></script>
</body>
</html>