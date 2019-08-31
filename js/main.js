$(function () {
  $('[data-toggle="tooltip"]').tooltip()
})

function onChange(param) {
  $(`#${param.id}`).siblings().text(param.value);
};

function calc(a, b, c, d) {

  c = parseInt(c) * 150;
  d = parseInt(d) * 150;

  let option = $('.radio-buttons input[type="radio"]:checked').val();

  switch (option) {
    case 'economy':
      a = parseInt(a) * 290;
      b = parseInt(b) * 300;
      break;
    case 'standart':
      a = parseInt(a) * 370;
      b = parseInt(b) * 400;
      break;
    case 'lux':
      a = parseInt(a) * 470;
      b = parseInt(b) * 500;
      break;
  }

  let price;
  let boxes = 0;

  $(`.check-boxes input[type='checkbox']:checked`).each(function () {
    boxes += parseInt($(this).attr('value'));
  })

  price = a + b + c + d + boxes;
  $('#result').text(`${price}` + " руб.");
}

function More(number) {
  $.ajax({
    type: 'POST',
    url: 'hundler.php',
    data: 'more_f=1&more_number=' + number,
    success: function (data) {
      $('#modal_more').html(data);
      $('#modal2').modal('show');
    }
  });
}

function Send_Request(name, phone) {
  if ($(phone).val()) {
    $.ajax({
      type: 'POST',
      url: 'hundler.php',
      data: 'send_f=1&name=' + $(name).val() + "&phone=" + $(phone).val(),
      success: function (data) {
        $(name).val("");
        $(phone).val("");
        $('#modal1').modal('hide');
        $('#modal2').modal('hide');
        $('#modal3').modal('show');
      }
    });
  }
}
