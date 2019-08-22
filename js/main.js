$(document).on("change", "#kwiz input[type=radio][name=question]", function() {
  $.ajax({
    type: 'POST',
    url: 'hundler.php',
    data: 'kwiz_f=1&q=' + $('.kwiz h2').html() + "&a=" + $(this).val() + '&question=' + $(this).attr('question'),
    success: function(data) {
      $('.kwiz').html(data);
    }
  });
});

function kwiz_finish() {
  name = "#kwiz_name";
  phone = "#kwiz_phone";
  if ($(phone).val()) {
    $.ajax({
      type: 'POST',
      url: 'hundler.php',
      data: 'kwiz_f=1&kwiz_finish=1&name=' + $(name).val() + "&phone=" + $(phone).val(),
      success: function(data) {
        $('.kwiz').html(data);
      }
    });
  }
}

function Next() {
  if ($('#question3').val()) {
    $.ajax({
      type: 'POST',
      url: 'hundler.php',
      data: 'kwiz_f=1&q=' + $('.kwiz h2').html() + "&a=" + $('#question3').val() + '&question=' + $('#question3').attr('question'),
      success: function(data) {
        $('.kwiz').html(data);
      }
    });
  }
}

function More(number) {
  $.ajax({
    type: 'POST',
    url: 'hundler.php',
    data: 'more_f=1&more_number=' + number,
    success: function(data) {
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
      success: function(data) {
        $(name).val("");
        $(phone).val("");
        $('#modal1').modal('hide');
        $('#modal2').modal('hide');
        $('#modal3').modal('show');
      }
    });
  }
}
