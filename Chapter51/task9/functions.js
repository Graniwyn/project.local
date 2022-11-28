$(document).ready(function () {
  const urlParams = new URLSearchParams($(location).attr("search"))
  if (urlParams.has("page")) {
    $.ajax({
      url: "getreviews.php",
      method: "post",
      data: {
        page: urlParams.get("page"),
      },
    }).done(function (data) {
      $("#reviews").html(data)
    })
  } else if (!urlParams.has("page") || urlParams.get("page") == 1) {
    $.ajax({
      url: "getreviews.php",
      method: "post",
      data: {
        page: 1,
      },
    }).done(function (data) {
      $("#reviews").html(data)
    })
  }
})
