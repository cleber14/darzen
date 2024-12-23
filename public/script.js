// Função que redireciona para o link do vídeo
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
        }
    }
}

// Adiciona o event listener para as divs com a classe 'info-video'
document.querySelectorAll('.info-video').forEach(div => {
    div.addEventListener('click', redirectToLink);
});