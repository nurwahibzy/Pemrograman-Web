$(document).ready(function () {
  $("#upload=form").submit(function (e) {
    e.preventDefault();

    var fromData = new FormData(this);

    $.ajax({
      type: "POST",
      url: "upload_ajax.php",
      data: formData,
      cache: false,
      contentType: false,
      proccesData: false,
      success: function (response) {
        $("#status").html(Response);
      },
      error: function () {
        $("#status").html("Terjadi kesalahan saat mengunggah file.");
      },
    });
  });
});
