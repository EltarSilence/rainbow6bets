$("#matches").on("click", "td", function() {
  if ($(this).attr('id') == "odd"){
    var idmatch = $(this).parent().attr('id').split('|')[0];
    var match = $(this).parent().attr('id').split('|')[1];
    var team1 = match.split('v')[0];
    var team2 = match.split('v')[1];
    var dataora = new Date($(this).parent().find($('td#when')).text());
    var giorno = dataora.getDate(); var mese = dataora.getMonth() + 1;
    var anno = dataora.getFullYear();
    var ora = dataora.getHours() + ':' + dataora.getMinutes();
    debugger;

    $('#incontro').html(match);
    $('#dataora').html(giorno + '/' + mese + '/' + anno + ' ' + ora);
    $('#quota').html($(this).text());
    var vincita = $(this).text() * 100;
    $('#potvin').html(vincita);
  }
});
