<?php 
  $con = mysqli_connect('localhost','root','','dataprogrammer'); 

    $nama = @$_POST['name'];
    $sql="INSERT INTO users values ('',$nama')";

//menyimpan data ke database
mysql_query($sql);
?>

<?php 
        //tampil
        $result = mysqli_query($con,"SELECT * FROM users")or die(mysqli_error($con));
        while ($data= mysqli_fetch_array($result))
      ?>

<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    <title> Data programmers and skills </title>
  </head>
  <body>
        <h1 class="text-center" style="margin: 30px 0px;">Data Programmers</h1>

  <div class="alert alert-primary" role="alert">
      <div class="input-group mb-3">
          <input type="text" class="form-control" placeholder="Tambah programmer baru" aria-label="txttambahprogrammer" aria-describedby="button-addon2">
              <div class="input-group-append">
                  <button class="btn btn-outline-secondary" type="button" name="tambahprogammer"  id="button-addon2">Tambah</button>
                   </div>
                   </div>
                    <br>

 <div class="col-lg-12 col-md-12 col-xs-12" style="padding: 0; margin : 20px 0px;border-radius: 3px;border:1px black solid;overflow: hidden;">
    <div class="col-lg-6 col-md-6 col-xs-6" style="padding: 0; float: left;">
      <div class="nama card-header col-lg-12 col-md-12 col-xs-12" style="height: 100px width: 50px;">Nama Programmers : <?php echo $data['name']; ?></div>
         <div class="nama card-header col-lg-12 col-md-12 col-xs-12" style="height: 100px width: 50px;">Skill Programmers : 
            </div>
              <div class="alert alert-primary" role="alert">
              <div class="input-group mb-3">
              <input type="text" class="form-control" placeholder="Tambah Skill Baru" aria-label="txttambahskill" aria-describedby="button-addon2">
<div class="input-group-append">
  <button class="btn btn-outline-secondary" type="button" name="tambahskill" id="button-addon2">Tambah Skill</button>
    </div>
      </div>
        </div>
          </div>
             </div>
             </div>
<br>
<div class="alert alert-primary" role="alert">
  <div class="col-lg-12 col-md-12 col-xs-12" style="padding: 0; margin : 20px 0px;border-radius: 3px;border:1px black solid;overflow: hidden;">
    <div class="col-lg-6 col-md-6 col-xs-6" style="padding: 0; float: left;">
      <div class="nama card-header col-lg-12 col-md-12 col-xs-12" style="height: 100px width: 50px;">Nama Programmers : 
        <div class="nama card-header col-lg-12 col-md-12 col-xs-12" style="height: 100px width: 50px;">Skill Programmers : 
         </div>
           <div class="alert alert-primary" role="alert">
           <div class="input-group mb-3">
           <input type="text" class="form-control" placeholder="Tambah Skill Baru" aria-label="txttambahskill" aria-describedby="button-addon2">
<div class="input-group-append">
      <button class="btn btn-outline-secondary" type="button" name="tambahskill" id="button-addon2">Tambah Skill</button>
            </div>
          </div>
        </div>
     </div>
   </div>
   </div>
   </div>
   </body>
   </html>




    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
</html>
</script>
