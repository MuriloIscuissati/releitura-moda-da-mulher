<?php require __DIR__ . "/header.php"; ?>

<main>

    <div class="container d-flex justify-content-start mt-4">
        <form action="">

            <!-- nome -->
            <div class="mb-3">
                <label for="exampleFormControlInput1" class="form-label">Nome</label>
                <input type="email" class="form-control" id="exampleFormControlInput1" placeholder="portões sinistros...">
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
                <select class="form-select" aria-label="genêro">
                    <option selected>Qual a seu gênero de metal favorito?</option>
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
                <select class="form-select" aria-label="banda">
                    <option selected>Qual a sua banda favorita?</option>
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
                <select class="form-select" aria-label="guitarrista">
                    <option selected>Qual o seu guitarrista de metal favorito?</option>
                    <option value="Synyster Gates">Synyster Gates</option>
                    <option value="Adrian Smith">Adrian Smith</option>
                    <option value="John Petrucci">John Petrucci</option>
                    <option value="Kiko Loureiro">Kiko Loureiro</option>
                    <option value="Kirk Hammet">Kirk Hammet</option>
                </select>
            </div>
            <!-- /melhor guitarrista -->

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

<?php require __DIR__ . "/footer.php"; ?>