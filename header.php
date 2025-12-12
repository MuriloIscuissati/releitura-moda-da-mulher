<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <link href="assets/styles/bootstrap.min.css" rel="stylesheet">

    <link rel="stylesheet" href="assets/styles/app.css">
</head>

<body>
    <!--cabecalho principal-->

    <header>
        <div class="container" id="cabecalho">
            <div class="row">

                <div class="col-lg-2 my-2 text-center">
                    <img src="assets/images/logo/loja_sinistra_logo3.0.svg" alt="">
                </div>


                <div class="col-lg-7 my-4 d-flex align-items-center">
                    <form action="" class="site-search w-100">

                        <div class="input-group">
                            <input type="text" class="form-control rounded-pill py-2 px-4 pe-5"
                                placeholder="   escolha seu estilo aqui...">
                            <button class="btn position-absolute"> <i class="bi bi-search"></i> </button>
                        </div>

                    </form>
                </div>



                <div class="col-lg-3 d-flex align-items-center justify-content-end">

                    <ul class="nav">
                        <li class="nav-item">
                            <a class="nav-link text-secondary" href="#"><i class="bi bi-person-fill"></i> entrar</a>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link text-secondary" href="#"><i class="bi bi-cart-fill position-relative">
                                    <span
                                        class="badge position-absolute top-0 start-100 translate-middle bg-danger rounded-circle">3
                                    </span>
                                </i> carrinho</a>
                        </li>
                    </ul>

                </div>
            </div>
        </div>
    </header>

    <!-- /cabecalho principal -->

    <!--navbar-->

    <nav class="navbar navbar-expand-lg bg-body-tertiary">
        <div class="container-fluid">
            <a class="navbar-brand" href="index.html">Home</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
                aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="camisetas.php">Camisetas</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="calcados.php">Calçados</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="sinistromero.php">Sinistrômero</a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown"
                            aria-expanded="false">
                            Acessórios
                        </a>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="chapelaria.php">Chapelaria</a></li>
                            <li><a class="dropdown-item" href="pulseiras.php">Pulseiras</a></li>
                        </ul>
                    </li>
                </ul>

            </div>
        </div>
    </nav>


    <!-- /navbar -->
</body>

</html>