<?php require __DIR__ . "/header.php"; ?>

<main class="produto">

    <div class="container">
        <nav style="--bs-breadcrumb-divider: '>';" aria-label="breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                <li class="breadcrumb-item"><a href="camisetas.php">Camisetas</a></li>
                <li class="breadcrumb-item active" aria-current="page">Camiseta Nightmare Avenged Sevenfold</li>
            </ol>
        </nav>

        <div class="row">
            <div class="col-7">
                <img src="assets/images/produtos/camisa-a7x.jpg" alt="">
            </div>

            <div class="col-5">
                <h1>Camiseta Nightmare Avenged Sevenfold</h1>

                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Facilis quia rem quas molestias repudiandae nisi corrupti quisquam ea, laborum ratione modi magni dolore quasi ipsum aperiam recusandae consectetur culpa deserunt!</p>

                <div class="rating">
                    <i class="bi bi-star-fill"></i>
                    <i class="bi bi-star-fill"></i>
                    <i class="bi bi-star-fill"></i>
                    <i class="bi bi-star-fill"></i>
                    <i class="bi bi-star-fill"></i>
                </div>

                <h5 class="preco mt-3">R$79,99</h5>
                <span>Em até 10x sem juros</span>

                <div class="mt-4">
                    <select class="form-select" aria-label="Default select example">
                        <option value="1">1 parcela</option>
                        <option value="2">2 parcelas</option>
                        <option value="3">3 parcelas</option>
                        <option value="1">4 parcelas</option>
                        <option value="2">5 parcelas</option>
                        <option value="3">6 parcelas</option>
                        <option value="1">7 parcelas</option>
                        <option value="2">8 parcelas</option>
                        <option value="3">9 parcelas</option>
                        <option value="1">10 parcelas</option>
                        <option value="2">11 parcelas</option>
                        <option value="3">12 parcelas</option>
                    </select>
                </div>

            </div>
        </div>
    </div>
    <div class="comentarios row">
        <div class="col">

            <div class="fb-comments"
                data-href="https://www.seusite.com/sua-pagina"
                data-width="100%"
                data-numposts="5">
            </div>

        </div>
    </div>

    <script async defer crossorigin="anonymous"
        src="https://connect.facebook.net/pt_BR/sdk.js#xfbml=1&version=v19.0">
    </script>

</main>
<?php require __DIR__ . "/footer.php"; ?>