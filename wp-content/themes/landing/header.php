

<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="<?php echo get_bloginfo('template_directoy'); ?>/style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" />

    <title>Plant a tree</title>
    <?php wp_head(); ?>
</head>
<body data-bs-spy="scroll" data-bs-target="#navbarNav" data-bs-offset="350">

<nav class="container-fluid fixed-top pt-5 navbar navigation-bar navbar-expand-md navbar-dark bg-success position-fixed">
        <div class="container">
          <!-- Логотип сайту, а також бургер-меню-->
          <a class="navbar-brand border border-1 px-3 fs-3 btn btn-success" href="index.html">Plant-a-Tree</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
            aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
            <!-- Перелік пунктів меню у стрічці меню, з посиланнями на відповідні секції на сторінці.-->
            <div class="collapse navbar-collapse fs-5" id="navbarNav">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item">
                        <a class="nav-link" href="#hero-section">Головна</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#about">Про нас</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#reviews">Відгуки</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#team">Команда</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#FAQ">FAQ</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#contact">Контакти</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    