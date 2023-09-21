$(".hitung-pinjaman").keyup(function(){
    var harga_pinjam = parseInt($("#harga_pinjam").val())
    var lama_pinjaman = parseInt($("#lama_pinjaman").val())

    var total_pinjaman = harga_pinjam / lama_pinjaman;
    $("#total_pinjaman").attr("value",total_pinjaman)
  });