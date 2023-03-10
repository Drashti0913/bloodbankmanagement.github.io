<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Become Donor</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.2/css/all.min.css" integrity="sha512-1sCRPdkRXhBV2PBLUdRb4tMg1w2YPf37qatUFeS7zlBy7jJI8Lf4VHwWfZZfpXtYSLy85pkm9GaYVYMfw5BC1A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="index.css">
</head>
<body>


    <nav class="navbar navbar-expand-lg">
        <div class="container">
          <a class="navbar-brand" href="index.html">Blood+</a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarText" aria-controls="navbarText" aria-expanded="false" aria-label="Toggle navigation">
            Navbar
          </button>
          <div class="collapse navbar-collapse" id="navbarText">
            <ul class="navbar-nav mx-auto d-flex ">
              <li class="nav-item">
                <a class="nav-link"  href="index1.html">Home</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="become_donor.php">Become donor</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="need_blood.php">Need Blood</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="checkavaiblity.php">Blood Availability</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="about.php">About us</a>
              </li>
            </ul>
            <span class="navbar-text d-flex">
                <a href="admin/admin.php">Admin</a>
            </span>

            </div>
            </div>
      </nav>



      <div class="heading-donor mt-5 mb-5">
        <h1 class="display-1 text-center fw-semibold">Become a donor!</h1>
        <p class="text-center fs-5 text">Fill this form and become a donor.</p>
      </div>

      <div class="container mt-4">
        <div class="row justify-content-center text-left">
            <div class="col-sm-5">
                <form method="post" action="#">
                    <div class="mb-3">
                        <label for="name_donor" data-bs-toggle="popover" data-bs-placement="top"  title="Name" class="form-label">Name</label>
                        <input type="text" class="form-control" id="name_donor" name="name_donor" aria-describedby="name_donor">
                    </div>
                    <div class="mb-3">
                        <label for="surname_donor" data-bs-toggle="popover" data-bs-placement="top"  title="Surname" class="form-label">Surname</label>
                        <input type="text" class="form-control" id="surname_donor" aria-describedby="surname_donor">
                    </div>
                    <div class="mb-3">             
                        <label for="blood_group">Choose a blood group:</label>

                        <select name="blood_group" id="blood_group">
                          <option value="O+">O+</option>
                          <option value="O-">O-</option>
                          <option value="A+">A+</option>
                          <option value="A-">A-</option>
                          <option value="B+">B+</option>
                          <option value="B-">B-</option>
                          <option value="AB+">AB+</option>
                          <option value="AB-">AB-</option>
                           
                        </select>
                    </div>
                    <div class="mb-3">
                      <label for="email_donor" data-bs-toggle="popover" data-bs-placement="top"  title="email" class="form-label">Email</label>
                          <input type="email" class="form-control" id="email_donor" aria-describedby="email_donor">
                          <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
                      </div>
                    <div class="mb-3">
                        <label for="phone_donor" data-bs-toggle="popover" data-bs-placement="top"  title="phone" class="form-label">Phone</label>
                            <input type="text" class="form-control" id="phone_donor" aria-describedby="phone_donor">
                            <div id="phoneHelp" class="form-text">We'll never share your phone number with anyone else.</div>
                        </div>
                    <div class="mb-3">
                      <input type="button" value="Send" class="btn btn-danger w-25" id="createBtn">
                    </div>
                </form>
            </div>
        </div>
    </div>

    
<script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>    


<script>
$(document).ready(function(){

    $('[data-bs-toggle="popover"]').popover();

    $("#createBtn").click(function(){

      //alert("hello!");

      let name_donor = $("#name_donor").val();
      let surname_donor = $("#surname_donor").val();
      let email_donor = $("#email_donor").val();
      let blood_group = $("#blood_group").val();
      let phone_donor = $("#phone_donor").val();

      $.ajax({
        url:"create_donor.php",
        type:"POST",
        data:{
          name_donor:name_donor,
          surname_donor:surname_donor,
          blood_group:blood_group,
          email_donor:email_donor,
          phone_donor:phone_donor
        },
        dataType:"JSON",
        success:function(data){
            for (let i = 0; i < data.length; i++) {
              if(data[i].status == false){
                  alert(data[i].message);
              }else if(data[i].status == true) {
                  alert(data[i].message);
                  $("#name_donor").val("");
                  $("#surname_donor").val("");
                  $("#email_donor").val("");
                  $("#phone_donor").val("");
              }
            }
        },
        error:function(){
          alert("Error!");
        }
      });


    });

});  
</script>


</body>
</html>