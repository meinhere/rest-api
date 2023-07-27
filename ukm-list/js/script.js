function tampilkanSemuaList() {
  $("#list-row").html("");

  $.getJSON("data/data.json", function (data) {
    let list = data.list;

    $.each(list, function (i, data) {
      content = `<div class="col-md-4">
      <div class="card mt-3">
        <img src="img/${data.gambar}" class="card-img-top img-fluid">
  
        <div class="card-body">
          <h5 class="card-title">${data.nama}</h5>
          <span class="badge bg-primary mt-2">${data.kategori}</span>
          <p class="card-text">${data.deskripsi}</p>
          <a href="#" class="">Detail</a>
        </div>
      </div>
    </div>`;

      $("#list-row").append(content);
    });
  });
}

tampilkanSemuaList();

$(".nav-link").on("click", function () {
  $(".nav-link").removeClass("active");
  $(this).addClass("active");

  let kategori = $(this).html();
  $("h1").html(kategori);

  if (kategori == "All List") {
    tampilkanSemuaList();
    return;
  }

  $.getJSON("data/data.json", function (data) {
    let list = data.list;
    let content = "";

    $.each(list, function (i, data) {
      if (data.kategori == kategori.toLowerCase()) {
        content += `<div class="col-md-4">
        <div class="card mt-3">
          <img src="img/${data.gambar}" class="card-img-top img-fluid">
    
          <div class="card-body">
            <h5 class="card-title">${data.nama}</h5>
            <span class="badge bg-primary mt-2">${data.kategori}</span>
            <p class="card-text">${data.deskripsi}</p>
            <a href="#" class="">Detail</a>
          </div>
        </div>
      </div>`;
      }

      $("#list-row").html(content);
    });
  });
});
