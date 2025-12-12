function processarFormulario(){
    let nome = document.querySelector("#nome")
    let idade = document.querySelector("#range4")
    let genero = document.querySelector("#genero")
    let banda = document.querySelector("#banda")
    let guitarrista = document.querySelector("#guitarrista")
    let altura = document.querySelector('input[name="altura"]:checked')
    let sinistromero = 0

   if(nome.value === ""){
    alert("O nome não pode estar vazio!")
    return false
   }

   let idadeValor = parseInt(idade.value);
   
   sinistromero += idadeValor

   if(genero.value === ""){
    alert("Você deve escolher um gênero de metal!")
    return false
   }

    else if(genero.value === "Heavy Metal"){
    sinistromero += 1
   }

    else if(genero.value === "Prog Metal"){
    sinistromero += 5
   }
   
    else if(genero.value === "Power Metal"){
    sinistromero += 10
   }

    else if(genero.value === "Black Metal"){
    sinistromero -= 15
   }

    else if(genero.value === "Nu Metal"){
    sinistromero += 3
   }



   if(banda.value === ""){
    alert("Você deve escolher uma banda de metal!")
    return false
   }

    else if(banda.value === "Metallica"){
    sinistromero += 2
   }

    else if(banda.value === "Iron Maiden"){
    sinistromero += 7
   }

    else if(banda.value === "Limp Bizkit"){
    sinistromero -= 2
   }

    else if(banda.value === "Avenged Sevenfold"){
    sinistromero += 10
   }

    else if(banda.value === "Angra"){
    sinistromero += 11
   }


   if(guitarrista.value === ""){
    alert("Você deve escolher um guitarrista de metal!")
    return false
   }

   else if(guitarrista.value === "Synyster Gates"){
    sinistromero += 20
   }

   else if(guitarrista.value === "Adrian Smith"){
    sinistromero += 8
   }

   else if(guitarrista.value === "John Petrucci"){
    sinistromero += 12
   }

   else if(guitarrista.value === "Kiko Loureiro"){
    sinistromero += 25
   }

   else if(guitarrista.value === "Kirk Hammet"){
    sinistromero += 5
   }

   
   if(altura.value === "mais180"){
    sinistromero += 20
   }

   else if(altura.value === "menos180"){
    sinistromero -= 20
   }

   
   if(sinistromero >= 30){
    alert("Parabéns, " + nome.value + ", você é muito sinistro!")
   }

   else if(sinistromero <= 30 & sinistromero > 10){
    alert(nome.value + ", você é um pouco sinistro.")
   }

   else if(sinistromero <= 10){
    alert(nome.value + ", você não é sinistro.")
   }

}