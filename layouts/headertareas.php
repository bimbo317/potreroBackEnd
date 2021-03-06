<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <!-- CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous" />
    <link rel="stylesheet" href="../../css/trabajos.css" />
    <link rel="stylesheet" href="../../css/inicio.css"/>
    <!-- Fuente -->
    <link rel="preconnect" href="https://fonts.gstatic.com" />
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;700;900&amp;display=swap" rel="stylesheet" />
    <title>Potrero Digital - Backend</title>
    <title>Inicio</title>
</head>

<body>
    <div data-app="true" class="v-application v-application--is-ltr theme--light" id="myApp">
        <div class="v-application--wrap">
            <div class="v-main pb-10" style="padding: 0px" data-booted="true">
                <div class="v-main__wrap">
                    <div class="container minHeight100 container--fluid" id="panelGeneral">
                        <div id="novedades" class="row pt-12 justify-center">
                            <div class="order-3 order-md-2 col-lg-7 col-xl-8 col-12">
                                <!-- Tareas -->
                                <div class="container py-7" id="tareas">
                                    <div class="d-flex align-center">
                                        <svg width="50" height="30px" viewBox="0 0 50 50" fill="none" xmlns="http://www.w3.org/2000/svg" class="mr-4">
                                            <path fill-rule="evenodd" clip-rule="evenodd" d="M25 50C38.8071 50 50 38.8071 50 25C50 11.1929 38.8071 0 25 0C11.1929 0 0 11.1929 0 25C0 38.8071 11.1929 50 25 50ZM28.5185 15.9167H32.2222C33.4491 15.9167 34.4445 16.8965 34.4445 18.1042V34.1458C34.4445 35.3535 33.4491 36.3333 32.2222 36.3333H18.8889C17.6621 36.3333 16.6667 35.3535 16.6667 34.1458V18.1042C16.6667 16.8965 17.6621 15.9167 18.8889 15.9167H22.5926C22.5926 14.3079 23.9213 13 25.5556 13C27.1898 13 28.5185 14.3079 28.5185 15.9167ZM20 31.2292C20 31.8353 20.4954 32.3229 21.1111 32.3229C21.7269 32.3229 22.2222 31.8353 22.2222 31.2292C22.2222 30.623 21.7269 30.1354 21.1111 30.1354C20.4954 30.1354 20 30.623 20 31.2292ZM20 26.8542C20 27.4603 20.4954 27.9479 21.1111 27.9479C21.7269 27.9479 22.2222 27.4603 22.2222 26.8542C22.2222 26.248 21.7269 25.7604 21.1111 25.7604C20.4954 25.7604 20 26.248 20 26.8542ZM20 22.4792C20 23.0853 20.4954 23.5729 21.1111 23.5729C21.7269 23.5729 22.2222 23.0853 22.2222 22.4792C22.2222 21.873 21.7269 21.3854 21.1111 21.3854C20.4954 21.3854 20 21.873 20 22.4792ZM26.6667 15.9167C26.6667 15.3105 26.1713 14.8229 25.5556 14.8229C24.9398 14.8229 24.4445 15.3105 24.4445 15.9167C24.4445 16.5228 24.9398 17.0104 25.5556 17.0104C26.1713 17.0104 26.6667 16.5228 26.6667 15.9167ZM31.1111 31.9583C31.3148 31.9583 31.4815 31.7943 31.4815 31.5938V30.8646C31.4815 30.6641 31.3148 30.5 31.1111 30.5H24.4445C24.2408 30.5 24.0741 30.6641 24.0741 30.8646V31.5938C24.0741 31.7943 24.2408 31.9583 24.4445 31.9583H31.1111ZM31.1111 27.5833C31.3148 27.5833 31.4815 27.4193 31.4815 27.2188V26.4896C31.4815 26.2891 31.3148 26.125 31.1111 26.125H24.4445C24.2408 26.125 24.0741 26.2891 24.0741 26.4896V27.2188C24.0741 27.4193 24.2408 27.5833 24.4445 27.5833H31.1111ZM31.1111 23.2083C31.3148 23.2083 31.4815 23.0443 31.4815 22.8438V22.1146C31.4815 21.9141 31.3148 21.75 31.1111 21.75H24.4445C24.2408 21.75 24.0741 21.9141 24.0741 22.1146V22.8438C24.0741 23.0443 24.2408 23.2083 24.4445 23.2083H31.1111Z" fill="#51B8B1"></path>
                                        </svg>
                                        <span class="cabecera darkBg--text">Tareas</span>
                                    </div>
                                    <hr role="separator" aria-orientation="horizontal" class="w-2 mt-1 v-divider theme--light" />
                                </div>
                                <div class="container">
    <div class="row ml-2">
        <div class="container">
            <div class="row mt-md-3 align-center justify-space-between">
                <div class="col-md-6 col-12">
                    <div class="display-1 darkBg--text">
                        <a href="../../index.php">
                            <button type="button" class="rounded-circle">
                                <span class="v-btn__content">
                                    < </span>
                                </span>
                            </button></a>