var clicked = false;

var rightrow = $('#incontro, #dataora');
rightrow.hide();


//Sistemare toggling freccia
$("[id^='top_']").on('click', function(){
    $(this).find('.fa').toggleClass('fa-chevron-up fa-chevron-down');
});


$("[id^='matches']").on('click', 'td', function() {



  if ($(this).attr('id') == 'odd'){
    rightrow.show();
    $('#thenhide').hide();

    //debugger;
    if (!clicked) {
      clicked = true;
      $(this).css('background-color', 'lightblue');
    }
    else {
      $(this).css('background-color', 'white');
    }


    var idmatch = $(this).parent().attr('id').split('|')[0];
    var match = $(this).parent().attr('id').split('|')[1];
    var team1 = match.split('%')[0];
    var team2 = match.split('%')[1];
    match = team1 + ' - ' + team2;
    var dataora = new Date($(this).parent().find($('td#when')).text());
    var giorno = dataora.getDate(); var mese = dataora.getMonth() + 1;
    var anno = dataora.getFullYear();
    var ora = dataora.getHours() + ':' + dataora.getMinutes();
    var dataRiepilogo = giorno + '/' + mese + '/' + anno + ' ' + ora



    $('#incontro').html(match);
    $('#dataora').html(dataRiepilogo);
    $('#quota').html($(this).text());
    var vincita = $(this).text() * 100;
    $('#potvin').html(vincita);
  }
});
