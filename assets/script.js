var clicked = false;

var rightrow = $('#incontro, #dataora');
rightrow.hide();

//Sistemare toggling freccia
$("[id^='top_']").on('click', function(){
    $(this).find('.fa').toggleClass('fa-chevron-up fa-chevron-down');
});


$("[id^='matches']").on('click', 'td', function() {



  if ($(this).attr('id') == 'odd'){
    var idmatch, match, team1, team2, dataora, giorno, anno, ora, dataRiepilogo;
    var esito;


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



    if ($(this).parent().attr('id').startsWith('expand')){
      var trtag = $(this).parent().prev().prev().prev().prev();
      var idTR = trtag.attr('id');
      idmatch = idTR.split('|')[0];
      match = idTR.split('|')[1];
      team1 = match.split('%')[0];
      team2 = match.split('%')[1];
      match = team1 + ' - ' + team2;

      dataora = new Date(trtag.find($('td#when')).text());
      giorno = dataora.getDate(); var mese = dataora.getMonth() + 1;
      anno = dataora.getFullYear();
      ora = dataora.getHours() + ':' + dataora.getMinutes();
      dataRiepilogo = giorno + '/' + mese + '/' + anno + ' ' + ora
    }
    else {
      idmatch = $(this).parent().attr('id').split('|')[0];
      match = $(this).parent().attr('id').split('|')[1];
      team1 = match.split('%')[0];
      team2 = match.split('%')[1];
      match = team1 + ' - ' + team2;
      dataora = new Date($(this).parent().find($('td#when')).text());
      giorno = dataora.getDate(); var mese = dataora.getMonth() + 1;
      anno = dataora.getFullYear();
      ora = dataora.getHours() + ':' + dataora.getMinutes();
      dataRiepilogo = giorno + '/' + mese + '/' + anno + ' ' + ora
    }
    esito = $(this).attr('odd');

    $('#incontro').html('<b>'+match+'</b>: ' + esito);
    $('#dataora').html(dataRiepilogo);
    $('#quota').html($(this).text());
    var vincita = $(this).text() * 100;
    $('#potvin').html(vincita);
  }
});
