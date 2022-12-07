$(function () {
  $("#haspatronymic").on("click", function () {
    if ($("#haspatronymic").is(":checked")) {
      $("#patronymic").val("0")
      $("#patronymic").hide()
      $("#haspatronymic").val("1")
    } else {
      $("#haspatronymic").val("0")
      $("#patronymic").val("")
      $("#patronymic").show()
    }
  })
  $('input[name="condition"]').on("change", function () {
    if (
      $('input[name="condition"]:checked').val() === "dissatisfied" ||
      $('input[name="condition"]:checked').val() === "verydissatisfied"
    ) {
      $("#moredetails").prop("style", false)
    } else {
      $("#grudge").val("")
      $("#moredetails").prop("style", "display: none;")
    }
  })
  $("#send").on("click", function () {
    if ($.trim($("#name").val()) === "") {
      alert('Пожалуйста, заполните поле "Имя"')
      return false
    }
    if ($.trim($("#surname").val()) === "") {
      alert('Пожалуйста, заполните поле "Фамилия"')
      return false
    }
    if (!$("#haspatronymic").is(":checked")) {
      if ($.trim($("#patronymic").val()) === "") {
        alert('Пожалуйста, заполните поле "Отчество"')
        return false
      }
    }
    if ($.trim($("#email").val()) === "") {
      alert('Пожалуйста, заполните поле "Email"')
      return false
    }
    if (!$('input[name="client"]').is(":checked")) {
      alert("Пожалуйста, ответьте на вопрос Являетесь ли вы клиентом нашей компании?")
      return false
    }
    if (!$('input[name="isresolved"]').is(":checked")) {
      alert("Пожалуйста, ответьте на вопрос Была ли решена ваша проблема?")
      return false
    }
    $("#send").prop("disabled", true)
    $.ajax({
      url: "addsurvey.php",
      method: "post",
      data: {
        name: $("#name").val(),
        surname: $("#surname").val(),
        patronymic: $("#patronymic").val(),
        haspatronymic: $("#haspatronymic").val(),
        email: $("#email").val(),
        client: $('input[name="client"]:checked').val(),
        resolved: $('input[name="isresolved"]:checked').val(),
        condition: $('input[name="condition"]:checked').val(),
        grudge: $("#grudge").val(),
      },
    }).done(function () {
      $("#send").prop("disabled", false)
      alert("Добавлено")
      $("#surveyform")[0].reset()
    })
  })
})
