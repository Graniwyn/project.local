$(document).ready(function () {
  $("#send").on("click", function () {
    if ($.trim($("#name").val()) === "") {
      alert('Пожалуйста, заполните поле "Имя"')
      return false
    }
    if ($.trim($("#email").val()) === "") {
      alert('Пожалуйста, заполните поле "Email"')
      return false
    }
    if ($.trim($("#position").val()) === "") {
      alert('Пожалуйста, заполните поле "Должность"')
      return false
    }
    if ($.trim($("#review").val()) === "") {
      alert('Пожалуйста, заполните поле "Отзыв"')
      return false
    }
    $("#send").prop("disabled", true)
    $.ajax({
      url: "addreview.php",
      method: "post",
      data: {
        name: $("#name").val(),
        email: $("#email").val(),
        position: $("#position").val(),
        review: $("#review").val(),
      },
    }).done(function (data) {
      $("#hide").html(data)
      $("#send").prop("disabled", false)
    })
  })
})
