document.addEventListener("DOMContentLoaded", function() {
    // Quando a página terminar de carregar, busca as notícias
    fetch("noticias.json") // Supondo que você tenha um arquivo JSON com as notícias
        .then(response => response.json())
        .then(data => {
            // Atualiza o conteúdo do elemento com o id "noticias"
            var noticiasDiv = document.getElementById("noticias");
            noticiasDiv.innerHTML = "";

            data.noticias.forEach(function(noticia) {
                // Cria um elemento <div> para cada notícia e adiciona ao "noticiasDiv"
                var divNoticia = document.createElement("div");
                divNoticia.classList.add("noticia");

                var titulo = document.createElement("h2");
                titulo.innerText = noticia.titulo;
                divNoticia.appendChild(titulo);

                var descricao = document.createElement("p");
                descricao.innerText = noticia.descricao;
                divNoticia.appendChild(descricao);

                noticiasDiv.appendChild(divNoticia);
            });
        })
        .catch(error => console.log(error));
});
