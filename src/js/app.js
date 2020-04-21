$(document).ready(function(){

    var cardTemplateSrc = $('#card-template').html();
    var cardTemplate = Handlebars.compile(cardTemplateSrc);


    $.ajax ({
        url: 'server.php',
        method: 'GET',
        success: function(data){
            console.log(data);
            var cd= data;
            for (var i = 0; i < cd.length; i++) {
                var song= cd[i];
                var infos = {
                    titolo: song.titolo,
                    immagine: song.immagine,
                    artista: song.artista,
                    anno: song.data
                };
                var filmCard = cardTemplate(infos);
                $('main').append(filmCard);
            }
        },
        error: function(error){
            console.log('errore');
        }


    });

});
