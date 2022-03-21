<!DOCTYPE html>
<html lang="en">

<head>
    <!-- =========== Meta ============= -->
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <!-- =========== Title ============= -->
    <title>The PHP Times The Php Custom Theme for news and magazine</title>
    <!-- ======== Load Google Fonts ============= -->
    <!-- <link media="print" onload="this.onload=null;this.removeAttribute('media');"
        href="https://fonts.googleapis.com/css?family=Roboto:300,400,700%7COswald:400,700&amp;display=swap"
        rel="stylesheet" type="text/css" /> -->
    <!-- ======== Bootstrap Core CSS ============= -->
    <link rel='stylesheet' href='libs/bootstrap/css/bootstrap.min.css' type='text/css' media='all' />
    <!-- =========== Main CSS ============= -->
    <link rel='stylesheet' href='style.css' type='text/css' media='all' />
    <!-- =========== Favicon ============= -->
    <link rel="icon" href="img/favicon-32x32.png" sizes="32x32" />
    <link rel="icon" href="img/favicon-192x192.png" sizes="192x192" />
    <link rel="apple-touch-icon" href="img/favicon-180x180.png" />
    <meta name="msapplication-TileImage" content="img/favicon-270x270.png" />
</head>

<body>
    <header class="site-header">
        <div class="container-fluid">
            <!DOCTYPE html>
            <html lang="en">

            <head>
                <!-- =========== Meta ============= -->
                <meta charset="UTF-8" />
                <meta http-equiv="X-UA-Compatible" content="IE=edge" />
                <meta name="viewport" content="width=device-width, initial-scale=1" />
                <!-- =========== Title ============= -->
                <title>Second Time Around &#8211; The perfect theme for news and magazine</title>
                <!-- ======== Load Google Fonts ============= -->
                <!-- <link media="print" onload="this.onload=null;this.removeAttribute('media');"
                    href="https://fonts.googleapis.com/css?family=Roboto:300,400,700%7COswald:400,700&amp;display=swap"
                    rel="stylesheet" type="text/css" /> -->
                <!-- ======== Bootstrap Core CSS ============= -->
                <link rel='stylesheet' href='libs/bootstrap/css/bootstrap.min.css' type='text/css' media='all' />
                <!-- =========== Main CSS ============= -->
                <link rel='stylesheet' href='style.css' type='text/css' media='all' />
                <!-- =========== Favicon ============= -->
                <link rel="icon" href="img/favicon-32x32.png" sizes="32x32" />
                <link rel="icon" href="img/favicon-192x192.png" sizes="192x192" />
                <link rel="apple-touch-icon" href="img/favicon-180x180.png" />
                <meta name="msapplication-TileImage" content="img/favicon-270x270.png" />
            </head>

            <body>

                <?php if (isset($_COOKIE["Remember_me"])): ?>
                <header class="site-header">
                    <div class="container-fluid">
                        <!-- Navbar -->
                        <nav class="navbar navbar-expand-lg navbar-light bg-light">
                            <!-- Container wrapper -->
                            <div class="container">
                                <!-- Navbar brand -->
                                <a class="navbar-brand me-2" href="#">
                                    👋 Admin
                                </a>

                                <!-- Toggle button -->


                                <!-- Collapsible wrapper -->
                                <div class="collapse navbar-collapse" id="navbarButtonsExample">
                                    <!-- Left links -->
                                    <div class="d-flex align-items-center">
                                        <a href="http://localhost/blog/admin/dashboard.php
" type="button" target="_blank" class="btn btn-primary me-3">
                                            Go To Admin Panel
                                        </a>
                                    </div>
                                </div>
                                <!-- Collapsible wrapper -->
                            </div>
                            <!-- Container wrapper -->
                        </nav>
                        <!-- Navbar -->
                    </div>
                    <?php  endif ?>
                    <!-- =========== Logo ============= -->
                    <div class="container">
                        <div class="header-wrapper text-center">
                            <a class="text-logo" href="index.php">The Php Times</a>
                            <div class="site-description">The perfect theme for news and magazine</div>
                        </div>
                    </div>
                    <?php require_once '_navbar.php'; ?>
                </header>
        </div>
        <!-- =========== Logo ============= -->
        <?php require_once '_navbar.php'; ?>
    </header>