<?php require __DIR__ . "/header.php"; ?>

<main>

    <div class="container d-flex justify-content-start mt-4">
        <form onsubmit="return processarFormulario()">

            <!-- nome -->
            <div class="mb-3">
                <label for="exampleFormControlInput1" class="form-label">Nome</label>
                <input type="text" class="form-control" id="nome" placeholder="portões sinistros...">
            </div>

            <!-- /nome -->

            <!-- idade -->
            <div class="mb-3">
                <label for="range4" class="form-label">Idade</label>
                <input type="range" class="form-range" min="0" max="100" value="50" id="range4">
                <output for="range4" id="rangeValue" aria-hidden="true"></output>
            </div>
            <!-- /idade -->

            <!-- melhor genêro -->
            <div class="mb-3">
                <select class="form-select" aria-label="genero" id="genero">
                    <option selected value="">Qual a seu gênero de metal favorito?</option>
                    <option value="Heavy Metal">Heavy Metal</option>
                    <option value="Prog Metal">Prog Metal</option>
                    <option value="Power Metal">Power Metal</option>
                    <option value="Black Metal">Black Metal</option>
                    <option value="Nu Metal">Nu Metal</option>
                </select>
            </div>
            <!-- /melhor genèro -->


            <!-- melhor banda -->
            <div class="mb-3">
                <select class="form-select" aria-label="banda" id="banda">
                    <option selected value="">Qual a sua banda favorita?</option>
                    <option value="Metallica">Metallica</option>
                    <option value="Iron Maiden">Iron Maiden</option>
                    <option value="Limp Bizkit">Limp Bizkit</option>
                    <option value="Avenged Sevenfold">Avenged Sevenfold</option>
                    <option value="Angra">Angra</option>
                </select>
            </div>
            <!-- /melhor banda -->

            <!-- /melhor guitarrista -->
            <div class="mb-3">
                <select class="form-select" aria-label="guitarrista" id="guitarrista">
                    <option selected value="">Qual o seu guitarrista de metal favorito?</option>
                    <option value="Synyster Gates">Synyster Gates</option>
                    <option value="Adrian Smith">Adrian Smith</option>
                    <option value="John Petrucci">John Petrucci</option>
                    <option value="Kiko Loureiro">Kiko Loureiro</option>
                    <option value="Kirk Hammet">Kirk Hammet</option>
                </select>
            </div>
            <!-- /melhor guitarrista -->

            <!-- altura -->
            <div class="my-5">
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="altura" id="mais180" value="mais180" checked>
                    <label class="form-check-label" for="radioDefault1">
                        Tenho mais de 1,80 m
                    </label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="altura" id="menos180" value="menos180">
                    <label class="form-check-label" for="radioDefault2">
                        Não tenho mais de 1,80 m
                    </label>
                </div>
            </div>

            <!-- /altura -->

            <div class="mb-3">

                <button class="btn btn-primary" type="submit">Enviar</button>

            </div>


        </form>
    </div>
</main>

<script>
    // This is an example script, please modify as needed
    const rangeInput = document.getElementById('range4');
    const rangeOutput = document.getElementById('rangeValue');

    // Set initial value
    rangeOutput.textContent = rangeInput.value;

    rangeInput.addEventListener('input', function() {
        rangeOutput.textContent = this.value;
    });
</script>

<script src="processarFormulario.js"></script>

<?php require __DIR__ . "/footer.php"; ?>