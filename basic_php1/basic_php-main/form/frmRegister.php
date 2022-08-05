<!DOCTYPE html>
<title>Register</title>
<link rel="icon" type="image/x-icon" href="https://gfycat.com/lightshinybufeo.gif">
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>register</title>
</head>

<body>
  <?php
  include("header.php");
  ?>
  <main>
    <div class="container">
      <div class="card">
        <div class="card-header">
          Register
        </div>
        <div class="card-body">
          <form name="form1" action="insert.php" method="post">
            <div class="row">
              <!--row1-->
              <div class="col-md-2">
                <label class="form-label">ชื่อขึ้นต้น</label>
                <select class="form-select" id="fname" name="fname" aria-label="Default select example">
                  <option value="Mr.">นาย</option>
                  <option value="Ms.">นาง</option>
                  <option value="Mrs.">นางสาว</option>
                </select>
              </div>
              <div class="col-md-4">
                <label for="name" class="form-label">ชื่อ</label>
                <input type="text" name="name" id="name" class="form-control" placeholder="Enter your Name">
              </div>
              <div class="col-md-4">
                <label for="lname" class="form-label">นามสกุล</label>
                <input type="text" class="form-control" id="lname" placeholder="Enter your Lastname" name="lname">
              </div>
            </div>
            <div class="row">
              <!--row2-->
              <div class="col-md-3">
                <label for="sex" class="form-label">เพศ</label>
                <div class="form-check">
                  <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault1" checked>
                  <label class="form-check-label" for="flexRadioDefault1">
                    ชาย
                  </label>
                </div>
                <div class="form-check">
                  <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault2">
                  <label class="form-check-label" for="flexRadioDefault2">
                    หญิง
                  </label>
                </div>
              </div>
              <div class="col-md-3">
                <label for="BD" class="form-label">วันเกิด</label>
                <input type="text" class="form-control" id="BD" placeholder="dd/mm/yyyy" name="BD">
              </div>
              <div class="col-md-6">
                <label for="adr" class="form-label">ที่อยู่</label>
                <input type="text" class="form-control" id="adr" placeholder="Enter your Address" name="adr">
              </div>
              <div class="col-md-3">
                <label for="PhoNum" class="form-label">เบอร์โทร</label>
                <input type="text" class="form-control" id="PhoNum" placeholder="Enter your phone number" name="PhoNum">
              </div>
              <div class="col-md-4">
                <label for="Email" class="form-label">อีเมล</label>
                <input type="text" class="form-control" id="Email" placeholder="Enter your Email" name="Email">
              </div>
            </div>
            <br>
            <input type="submit" href="insert.php" class="btn btn-success btn-primary">
            <input type="reset" href="frmRegister.php" class="btn btn-success btn-danger">
          </form>
        </div>
      </div>
    </div>
    </div>
  </main>
  <?php
  include("footer.php");
  ?>
</body>
<style>
  body {
    
    background-image: url('https://tenor.com/view/transitions-kinemaster-black-guy-suit-tiktok-gif-25279479.gif');
    background-repeat: no-repeat;
    background-attachment: fixed;
    background-size: 100% 100%;
  }
</style>
<style type="text/css">
        body {
            
            font-family: 'Athiti', sans-serif;
            font-family: 'Itim', cursive;
        }
    </style>

</html>