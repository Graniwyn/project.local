$(function () {
  $("#first").on("change", function () {
    $.ajax({
      url: "select.php?id=" + $("#first").val(),
    }).done(function (data) {
      $("#second").html(data)
      $("#second").prop("disabled", false)
    })
  })
  $("#delivery").on("click", hide)
})

function hide() {
  if ($("#deliveryFields").prop("hidden")) $("#deliveryFields").removeAttr("hidden")
  else $("#deliveryFields").attr("hidden", "")
}
