function loadmodal(judul, isi) {

    $("#modalku").find(".modal-title").html(judul);
    $("#modalku").find(".modal-body").html(isi);
    $("#modalku").modal("show");
}



// Memanggil Modal Register
$(document).on("click", "#test", function () {

    $.post("content/add.php", function (hasil) {
        loadmodal("Tes Hipertensi", hasil);
    })


})



