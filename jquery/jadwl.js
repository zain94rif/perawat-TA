// const hmz = document.getElementById('jadwal');
// hmz.onclick = function() {
	// const bu = document.getElementById('bulan');
	// const pa = document.getElementById('pagi');
	// const si = document.getElementById('siang');
	// const ma = document.getElementById('malam');
	 $(document).ready(function(){
      $("#ubah").click(function(){
        var bul = $("#bulan").val();
        var pag = $("#pagi").val();
        var sia = $("#siang").val();
        var mal = $("#malam").val();
        $.post("tool/jadwal2.php",{
          bulan: bul,
          pagi: pag,
          siang: sia,
          malam: mal
        },function(data, status){
          $("#ok").html(data);
        });
      });
    });
// 	naw.innerHTML = '<img src="image/foto_siswa/2.jpg" width="100" height="100">';

// 	const mim = document.querySelector('h3');
// 	mim.innerHTML = 'wkwkwkkwkkkwwww';

// }
// var mysql = require('MySQL');

// var con = mysql.createConnection({
//   host: "localhost",
//   user: "root",
//   password: ""
//   database ="cobaan";
// });

// con.connect(function(err) {
//   if (err) throw err;
//   console.log("Connected!");
// });
 // $(document).ready(function(){
 //          var gam = "r001";
 //          $("button").click(function(){
 //            $("#jj").load("https://localhost/coba/js/rubah.php", {
 //              gamb: gam
 //            });
 //          });
 //        });