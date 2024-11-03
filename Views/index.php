<!doctype html>
<html lang="en" class="h-100" data-bs-theme="auto">
<head>
    <script src="/docs/5.3/assets/js/color-modes.js"></script>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Hugo 0.122.0">
    <title>Date</title>

    <link rel="canonical" href="https://getbootstrap.com/docs/5.3/examples/sticky-footer-navbar/">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@docsearch/css@3">
    <link href="/assets/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">


    <!-- Favicons -->
    <link rel="apple-touch-icon" href="/docs/5.3/assets/img/favicons/apple-touch-icon.png" sizes="180x180">
    <link rel="icon" href="/docs/5.3/assets/img/favicons/favicon-32x32.png" sizes="32x32" type="image/png">
    <link rel="icon" href="/docs/5.3/assets/img/favicons/favicon-16x16.png" sizes="16x16" type="image/png">
    <link rel="manifest" href="/docs/5.3/assets/img/favicons/manifest.json">
    <link rel="mask-icon" href="/docs/5.3/assets/img/favicons/safari-pinned-tab.svg" color="#712cf9">
    <link rel="icon" href="/docs/5.3/assets/img/favicons/favicon.ico">
    <link href="https://cdn.jsdelivr.net/npm/sweetalert2@11.14.4/dist/sweetalert2.min.css" rel="stylesheet">

    <meta name="theme-color" content="#712cf9">

    <style>

        /* style bootstrap */
        .bd-placeholder-img {
        font-size: 1.125rem;
        text-anchor: middle;
        -webkit-user-select: none;
        -moz-user-select: none;
        user-select: none;
      }

      @media (min-width: 768px) {
        .bd-placeholder-img-lg {
          font-size: 3.5rem;
        }
      }

      .b-example-divider {
        width: 100%;
        height: 3rem;
        background-color: rgba(0, 0, 0, .1);
        border: solid rgba(0, 0, 0, .15);
        border-width: 1px 0;
        box-shadow: inset 0 .5em 1.5em rgba(0, 0, 0, .1), inset 0 .125em .5em rgba(0, 0, 0, .15);
      }

      .b-example-vr {
        flex-shrink: 0;
        width: 1.5rem;
        height: 100vh;
      }

      .bi {
        vertical-align: -.125em;
        fill: currentColor;
      }

      .nav-scroller {
        position: relative;
        z-index: 2;
        height: 2.75rem;
        overflow-y: hidden;
      }

      .nav-scroller .nav {
        display: flex;
        flex-wrap: nowrap;
        padding-bottom: 1rem;
        margin-top: -1px;
        overflow-x: auto;
        text-align: center;
        white-space: nowrap;
        -webkit-overflow-scrolling: touch;
      }

      .btn-bd-primary {
        --bd-violet-bg: #712cf9;
        --bd-violet-rgb: 112.520718, 44.062154, 249.437846;

        --bs-btn-font-weight: 600;
        --bs-btn-color: var(--bs-white);
        --bs-btn-bg: var(--bd-violet-bg);
        --bs-btn-border-color: var(--bd-violet-bg);
        --bs-btn-hover-color: var(--bs-white);
        --bs-btn-hover-bg: #6528e0;
        --bs-btn-hover-border-color: #6528e0;
        --bs-btn-focus-shadow-rgb: var(--bd-violet-rgb);
        --bs-btn-active-color: var(--bs-btn-hover-color);
        --bs-btn-active-bg: #5a23c8;
        --bs-btn-active-border-color: #5a23c8;
      }

      .bd-mode-toggle {
        z-index: 1500;
      }

      .bd-mode-toggle .dropdown-menu .active .bi {
        display: block !important;
      }


      /* style makan */
        body {
            font-family: 'Comic Sans MS', cursive, sans-serif; /* Mengubah font menjadi Comic Sans */
            background-color: #f8f9fa;
            margin-top: 10;
        }

        .menu-title {
            text-align: center;
            margin: 10px 0; /* Mengatur margin atas menjadi 10px */
            color: #343a40;
        }

        .menu-category {
            margin-bottom: 30px;
        }

        .menu-item {
            display: flex;
            justify-content: space-between;
            padding: 15px;
            border: 1px solid #dee2e6;
            border-radius: 5px;
            background-color: #ffffff;
            transition: transform 0.2s;
        }

        .menu-item:hover {
            transform: scale(1.02);
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        }

        .menu-item span {
            color: #6c757d;
        }

        .menu-image {
            width: 10%;
            height: auto;
            border-radius: 5px;
            object-fit: cover;
            margin-right: 15px;
        
        }

        .custom-card {
        width: 300px; /* Atur lebar card */
        height: auto; /* Tinggi otomatis untuk menjaga proporsi */
        margin: auto; /* Center card */
        }

        /* style date */

        body {
            background-color: white; /* Latar belakang putih */
            color: black;            /* Teks hitam */
        }
        .custom-label {
            background-color: #007bff; /* Warna latar belakang biru untuk label */
            color: white;              /* Warna teks putih untuk label */
            padding: 8px 12px;        /* Padding untuk memberi ruang di sekitar teks */
            border-radius: 5px;       /* Sudut melengkung */
            display: inline-block;     /* Mengubah label menjadi inline-block */
            margin-bottom: 10px;      /* Jarak bawah */
        }
        .form-control {
            background-color: #f8f9fa; /* Warna latar belakang terang untuk input */
            color: black;              /* Warna teks hitam untuk input */
        }
        .btn-primary {
            background-color: #007bff; /* Warna tombol biru */
            border-color: #007bff;     /* Warna border tombol biru */
        }



    </style>

    <!-- Custom styles for this template -->
    <link href="sticky-footer-navbar.css" rel="stylesheet">
    <link href="dropdowns.css" rel="stylesheet">
</head>

<body class="d-flex flex-column h-100">
    <header>
        <!-- Fixed navbar -->
        <?= $this->include('navbar'); ?>
    </header>

    <!-- Begin page content -->
    <main class="flex-shrink-0">
        <div class="container" style="margin-top: 0px;">
            <?= $this->renderSection('content'); ?>
        </div>
    </main>

    <footer class="footer mt-auto py-3 bg-body-tertiary">
        <?= $this->include('footer'); ?>
    </footer>

    <script src="/assets/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>