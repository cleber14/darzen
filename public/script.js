
function redirectToLink(event) {
    if(event.target.closest('.info-video')) { // Garantir que estamos clicando na div correta
        const videoId = event.target.closest('.info-video').id; // Pega o ID da div clicada
        switch(videoId) {
            case 'video1':
                window.open('https://www.youtube.com/watch?v=i4FdTwfTHok', '_blank');
                break;
            case 'video2':
                window.open('https://www.youtube.com/watch?v=EijUrnw2oTM', '_blank');
                break;
            case 'video3':
                window.open('www.youtube.com/watch?v=3dvq10QN_Gg&t', '_blank');
                break;
            case 'video4':
                window.open('https://www.youtube.com/watch?v=K2kggUFt2cM', '_blank');
                break;
            case 'video5':
                window.open('https://www.youtube.com/watch?v=yyN0xRHBRpQ', '_blank');
                break;
            case 'video6':
                window.open('https://www.youtube.com/watch?v=radyWNDPJgk', '_blank');
                break;
        }
    }
}

// Adiciona o event listener para as divs com a classe 'info-video'
document.querySelectorAll('.info-video').forEach(div => {
    div.addEventListener('click', redirectToLink);
});

function showImage(event) {
    // Verifica se o elemento clicado tem a classe 'col-md-4' ou está dentro dela
    const clickedElement = event.target.closest('.col-md-4');
    if (clickedElement) {
        // Obtém o ID do elemento clicado
        const imageId = clickedElement.id;

        // Seleciona o elemento com a classe 'showImage'
        const showImage = document.querySelector(".showImage");

        // Exibe a imagem correspondente com base no ID
        switch (imageId) {
            case 'image1':
            case 'image2':
            case 'image3':
            case 'image4':
                showImage.style.display = "block";
                break;
            default:
                console.error("ID não reconhecido:", imageId);
                break;
        }
    }
}

// Adiciona um event listener para todas as divs com a classe 'col-md-4'
document.querySelectorAll('.col-md-4').forEach(div => {
    div.addEventListener('click', () => {
        const showImageDiv = document.querySelector('.showImage');
        if (showImageDiv) {
            // Exibe a div com a classe 'showImage'
            showImageDiv.style.display = 'block';

            // Opcional: Alterar o conteúdo da div dinamicamente com base na imagem clicada
            const imageId = div.classList[1]; // Pegando a segunda classe (image1, image2, etc.)
            showImageDiv.innerHTML = `<p>Você clicou na ${imageId}</p>`;
        }
    });
});

