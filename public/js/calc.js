r = 0; //resultat
fop = 0; //former option
sumDepot = 0;
priceSite = 0;

function plus(){
 res.value = r + sumDepot + priceSite + ' тг';
}

$('#forLocal').click(function(){
  $('#local').fadeToggle();
  $('.gate').fadeToggle();
  fop = parseInt($('#local').val())
  pro = $(this).prop("checked");
  if ( pro == true){r = (r + fop);}
  else {r = (r - fop);}
  plus();
});
$('#count input[type = checkbox]:not(#forLocal)').click(function (){
  v =  parseInt($(this).val())
  pro = $(this).prop("checked");
  if ( pro == true){r = (r + v);}
  else {r = (r - v);}
  plus();
});
$('#local').click(function(){
  op = parseInt($(this).val());
  r = (r - fop + op);
  fop = op;
  plus();
});

function depotPlus(){
  sumDepot = amountDepot.value * priceDepot.value;
  plus();
}
$('#amountDepot').bind("change keyup input click", function() {
  if (this.value.match(/[^0-9]/g)) {
      this.value = this.value.replace(/[^0-9]/g, '');
  } else if(this.value == ''){ 
    this.value = 0;
    depotPlus()
  } else { depotPlus() }
});
$('#leftDepot').click(function(){
  if (amountDepot.value == 0) {}
    else {amountDepot.value = parseInt(amountDepot.value) - 1};
  depotPlus();
  sob.value = 'left';
});
$('#rightDepot').click(function(){
  amountDepot.value = parseInt(amountDepot.value) + 1;
  depotPlus();
  sob.value = 'right';
});

$('.btn-group label').click(function(){
  v = parseInt($(this).children().val());
  pro = $(this).children().prop("checked");
  if ( pro == true ) {
    priceSite = priceSite - v;   
  } else {
    priceSite = priceSite + v; 
  }
  plus();
});

$('#count-2 .btn-group label').click(function(){
  v = parseInt($(this).children().val());
  pro = $(this).children().prop("checked");
  if ( pro == true ) {
    res_2.value = parseInt(res_2.value) - v;
  } else {
    res_2.value = parseInt(res_2.value) + v; 
  }
});
