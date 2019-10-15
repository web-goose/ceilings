$(function () {
  $('[data-toggle="tooltip"]').tooltip()
})

var lazyLoadInstance = new LazyLoad({
  elements_selector: ".lazy"
  // ... more custom settings?
});

function onChange(param) {
  $(`#${param.id}`).siblings().text(param.value);
};

function calc(length, width, lamps, angles, pipes) {

  if (angles > 4) {
    cc = angles - 4;
    angles = cc * 150;
  }
  else
    angles = 0;

  pipes = parseInt(pipes) * 150;
  square = 0;

  let option = $('.radio-buttons input[type="radio"]:checked').val();

  switch (option) {
    case 'economy':
      square = parseInt(length) * parseInt(width) * 160;
      lamps = parseInt(lamps) * 300;
      break;
    case 'standart':
      square = parseInt(length) * parseInt(width) * 200;
      lamps = parseInt(lamps) * 400;
      break;
    case 'lux':
      square = parseInt(length) * parseInt(width) * 270;
      lamps = parseInt(lamps) * 500;
      break;
  }

  let price;
  let boxes = 0;
  let perimeter = 0;

  perimeter = (parseInt(length) + parseInt(width) + parseInt(length) + parseInt(width));
  console.log(perimeter);
  perimeter *= 150;
  square += perimeter;

  $(`.check-boxes input[type='checkbox']:checked`).each(function () {
    boxes += parseInt($(this).attr('value'));
  })

  price = square + angles + pipes + lamps + boxes;
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
