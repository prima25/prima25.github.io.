<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
  </head>
  <body>

    <ul class="nav justify-content-center fixed-top fluid bg-dark">
      <li class="nav-item">
        <a class="nav-link active text-light" href="#home">Home</a>
      </li>
      <li class="nav-item">
        <a class="nav-link  text-light" href="#about">About</a>
      </li>
      <li class="nav-item">
        <a class="nav-link  text-light" href="#resume">Resume</a>
      </li>
      <li class="nav-item">
        <a class="nav-link text-light" href="#skill">Skill</a>
      </li>
    </ul>

    <center>
      <div class="jarak" id="home">
        <div class="type-js headline">
          <h1 class="text-js text-light">Portfolio Prima</h1>
        </div>
      </div>
  </center>

    <div class="container">
      <div class="jumbotron" id="about">
          <h1 class="text-center pb-5">About</h1>
          <div class="row">
            <div class="col-sm-4">
              <img src="img.jpeg" class="rounded gambar">
            </div>
            <div class="col-sm-8">
              <h3>Data Pribadi</h3>
              <h6 class="text-justify">Nama ​​​​: Ni komang Prima Handayani </h6>
              <h6 class="text-justify">  Tempat,Tanggal Lahir ​: Muntigunung, 25 Oktober 2001 </h6>
              <h6 class="text-justify">  Jenis Kelamin ​​​: Perempuan </h6>
              <h6 class="text-justify">  Agama ​​​: Kristen </h6>
              <h6 class="text-justify">  Tinggi Badan ​​​: 167 cm </h6>
              <h6 class="text-justify">  Berat Badan ​​​: 45 kg </h6>
              <h6 class="text-justify">  Alamat ​​​: Jl. Gustiwa X E no .1, penatih, kec Denpasar tim. Kota denpasar . Bali 80237, indonesia </h6>
              <h6 class="text-justify">  Handphone ​​​: 087860409144</h6>
              <h6 class="text-justify">  Status ​​​​: Belum Menikah</h6>
              <h6 class="text-justify">  E-mail ​​​​: primahandayani25@gmail.com</h6>
            </div>
          </div>
      </div>
    </div>

    <div class="container-fluid"id="resume">
      <center>
      <div class="jumbotron jumbotron-k mb-0">
        <h1 class="display-4 pl-4 pt-5 text-dark">Riwayat Pendidikan</h1>
        <div class="container-flued p-4 my-4">
          <table class="table table-striped  ">
          <thead class="thead-dark">
            <tr class="text-center">

              <th scope="col" class="center">No</th>
              <th scope="col">Tahun Masuk</th>
              <th scope="col">Tahun Keluar</th>
              <th scope="col">Nama Institusi</th>

            </tr>
          </thead>
          <tbody id="myTable">
            <tr class="text-dark text-center">
              <th scope="row">1</th>
              <td>2007</td>
              <td>2013</td>
              <td>Sd N 6 Karangasem </td>
            </tr>
            <tr class="text-dark text-center">
              <th scope="row">2</th>
              <td>2013</td>
              <td>2016</td>
              <td>SMP 3 Kubu Karangasem </td>
            </tr>
            <tr class="text-dark text-center">
              <th scope="row">3</th>
              <td>2016</td>
              <td>2019</td>
              <td>SMK Pratama Widya Mandala</td>
            </tr>
          </tbody>
        </table>
        </div>
        </center>
      </div>
    </div>

<div class="container" id="skill">
  <?php
  include 'progres.html';
   ?>
</div>

    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: jQuery and Bootstrap Bundle (includes Popper) -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-Piv4xVNRyMGpqkS2by6br4gNJ7DXjqk09RmUpJ8jgGtD7zP9yug3goQfGII0yAns" crossorigin="anonymous"></script>
    <script>


    function autoType(elementClass, typingSpeed){
  var thhis = $(elementClass);
  thhis.css({
    "position": "relative",
    "display": "inline-block"
  });
  thhis.prepend('<div class="cursor" style="right: initial; left:0;"></div>');
  thhis = thhis.find(".text-js");
  var text = thhis.text().trim().split('');
  var amntOfChars = text.length;
  var newString = "";
  thhis.text("|");
  setTimeout(function(){
    thhis.css("opacity",1);
    thhis.prev().removeAttr("style");
    thhis.text("");
    for(var i = 0; i < amntOfChars; i++){
      (function(i,char){
        setTimeout(function() {
          newString += char;
          thhis.text(newString);
        },i*typingSpeed);
      })(i+1,text[i]);
    }
  },1500);
}

$(document).ready(function(){
  // Now to start autoTyping just call the autoType function with the
  // class of outer div
  // The second paramter is the speed between each letter is typed.
  autoType(".type-js",200);
});
    </script>
    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.min.js" integrity="sha384-+YQ4JLhjyBLPDQt//I+STsc9iw4uQqACwlvpslubQzn4u2UU2UFM80nGisd026JF" crossorigin="anonymous"></script>
    -->


  </body>
</html>
