<!DOCTYPE html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />

  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous" />
  <title>Input Pekerjaan!</title>
</head>

<body>
  <div class="container">
    <h1>Form Daftar Pekerjaan</h1>

    <?php
    $date = new DateTime("now", new DateTimeZone('Asia/Jakarta'));
    echo "time opened (Asia/Jakarta) : " . $date->format('Y-m-d H:i:s');
    ?>

    <form id="myForm" method="post">
      <div class="form-group">
        <label for="inputNama">Nama Lengkap</label>
        <input type="text" class="form-control" id="completename" name="completename" aria-describedby="namaHelp" placeholder="Masukkan Nama" />
      </div>

      <div class="form-group">
        <label for="email">Email address</label>
        <input type="email" class="form-control" id="email" name="email" aria-describedby="emailHelp" placeholder="Enter email" />
      </div>
      <div class="form-group">
        <label for="job">Pekerjaan</label>
        <input type="text" class="form-control" id="job" name="job" aria-describedby="jobHelp" placeholder="Pekerjaan" />
      </div>
      <div class="container">
        <button id="btnSubmitKu" name="btnkirim" onclick="btnSubmitForm()" class="btn btn-primary">Submit</button>
        <button id="btnreload" name="btnreload" onclick="btnReload()" class="btn btn-info">Reload</button>
      </div>
    </form>
  </div>

  </br>

  <div class="message_box" style="margin:10px 0px;">
  </div>
  </br>

  <script src="js/jquery.min.js"></script>
  <script>
    function btnReload() {
      location.reload();
    }

    function btnSubmitForm() {
      var delay = 2000;
      var completename = $("#completename").val();
      var email = $("#email").val();
      var job = $("#job").val();

      $.ajax({
        type: "POST",
        url: "insertuser.php",
        data: "completename=" + completename + "&email=" + email + "&job=" + job,
        beforeSend: function() {
          $('.message_box').html(
            '<img src="Loader.gif" width="25" height="25"/>'
          );
        },
        success: function(data) {
          setTimeout(function() {
            $('.message_box').html(data);
          }, delay);
        }
      });
    }
  </script>
  <?php
  include("readuser.php");
  ?>

  <p id="demo2"></p>
  <p id="demo"></p>
  <!-- Optional JavaScript -->
  <!-- jQuery first, then Popper.js, then Bootstrap JS -->
  <script src="insertuser.js"></script>
  <!-- <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script> -->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>

</body>

</html>