<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title><?=$title?? $this->config->item("web_title")?></title>

    <meta name="description" content="Team francophone sur PSO2 JP"/>
    <meta name="keywords" content="Arks-System, Arks, System, PSO2, Phantasy, Star, Online, SEGA, Ship, Team, Francophone, Fr, Française"/>
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <?php if (isset($canon) && $canon != ""): ?>
    <link rel="canonical" href="<?=$canon?>" />
    <?php else: ?>
    <meta name="robots" content="noindex,nofollow"/>
    <?php endif; ?>

    <style>
        @import url('https://fonts.googleapis.com/css?family=Lato|Raleway:400,500,600');

        @font-face {
            font-family: 'arks-system-icons';
            src:  url('<?=base_url("assets/fonts/arks-system-icons.eot?xevsmz")?>');
            src:  url('<?=base_url("assets/fonts/arks-system-icons.eot?xevsmz#iefix")?>') format('embedded-opentype'),
                  url('<?=base_url("assets/fonts/arks-system-icons.ttf?xevsmz")?>') format('truetype'),
                  url('<?=base_url("assets/fonts/arks-system-icons.woff?xevsmz")?>') format('woff'),
                  url('<?=base_url("assets/fonts/arks-system-icons.svg?xevsmz#icomoon")?>') format('svg');
            font-weight: normal;
            font-style: normal;
        }
    </style>

    <link href="/assets/dist/css/main.css" rel="stylesheet"/>
</head>
<body>
<section class="head">
    <nav class="menu">
        <a href="<?=base_url()?>" class="home">
            <img src="<?=base_url("assets/svg/long.svg")?>" />
        </a>
        <?php $this->load->view("base/menu"); ?>
    </nav>
</section>

<main>