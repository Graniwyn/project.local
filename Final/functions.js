$(function () {
  $(".button").on("click", function () {
    let trid = this.id
    $("#" + trid).hide()
    $.ajax({
      url: "hide.php",
      method: "post",
      data: {
        id: trid,
      },
    })
  })
  $(".plus").on("click", function () {
    let quantityid = this.id
    let quantity = Number($("#" + quantityid + ".quantity").text()) + 1
    $("#" + quantityid + ".quantity").text(quantity)
    $.ajax({
      url: "plus.php",
      method: "post",
      data: {
        id: quantityid,
      },
    })
  })
  $(".minus").on("click", function () {
    let quantityid = this.id
    if (Number($("#" + quantityid + ".quantity").text()) == 1) {
      alert("Количество не может быть 0")
      return false
    } else {
      let quantity = Number($("#" + quantityid + ".quantity").text()) - 1
      $("#" + quantityid + ".quantity").text(quantity)
      $.ajax({
        url: "minus.php",
        method: "post",
        data: {
          id: quantityid,
        },
      })
    }
  })
})
