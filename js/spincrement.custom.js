let percent_number_step = $.animateNumber.numberStepFactories.append('+');
$('.item__number').eq(0).animateNumber({
    number: 3,
}, 2000);
$('.item__number').eq(1).animateNumber({
  number: 500,
  numberStep: percent_number_step
}, 2000);
$('.item__number').eq(2).animateNumber({
  number: 200,
  numberStep: percent_number_step
}, 2000);