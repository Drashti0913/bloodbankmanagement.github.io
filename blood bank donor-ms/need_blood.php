<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Need blood</title>
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
                <a class="nav-link" href="index1.html">Home</a>
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
        <h1 class="display-1 text-center fw-semibold">Let us to help you!</h1>
        <p class="text-center fs-5 text">Fill this form if you need a blood.</p>
      </div>


      <div class="container mt-4">
        <div class="row justify-content-center text-left">
            <div class="col-sm-5">
                <form method="post" action="#">
                    <div class="mb-3">
                        <label for="name_patient" data-bs-toggle="popover" data-bs-placement="top"  title="Name" class="form-label">Name</label>
                        <input type="text" class="form-control" id="name_patient" name="name_patient" aria-describedby="name_patient">
                    </div>
                    <div class="mb-3">
                        <label for="surname_patient" data-bs-toggle="popover" data-bs-placement="top"  title="Surname" class="form-label">Surname</label>
                        <input type="text" class="form-control" id="surname_patient" aria-describedby="surname_patient">
                    </div>
                    <div class="mb-3">
                      <label for="gender" data-bs-toggle="popover" data-bs-placement="top" title="Gender" class="form-label">Gender:</label>
                      <select name="gender" id="gender">
                        <option value="male">Male</option>
                        <option value="female">Female</option>
                      </select>
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
                      <label for="body_weight" data-bs-toggle="popover" data-bs-placement="top"  title="body_weight" class="form-label">Body weight</label>
                      <input type="text" class="form-control" id="body_weight" aria-describedby="body_weight">
                  </div>
                    <div class="mb-3">
                      <label for="email_patient" data-bs-toggle="popover" data-bs-placement="top"  title="email" class="form-label">Email</label>
                          <input type="email" class="form-control" id="email_patient" aria-describedby="email_patient">
                          <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
                      </div>
                    <div class="mb-3">
                        <label for="phone_patient" data-bs-toggle="popover" data-bs-placement="top"  title="phone" class="form-label">Phone</label>
                            <input type="text" class="form-control" id="phone_patient" aria-describedby="phone_patient">
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

  $("#createBtn").click(function(){

    let name_patient = $("#name_patient").val();
    let surname_patient = $("#surname_patient").val();
    let gender = $("#gender").val();
    let blood_group = $("#blood_group").val();
    let body_weight = $("#body_weight").val();
    let email_patient = $("#email_patient").val();
    let phone_patient = $("#phone_patient").val();

    /*console.log(name_patient);*/

    $.ajax({
        url:"create_patient.php",
        type:"POST",
        data:{
          name_patient:name_patient,
          surname_patient:surname_patient,
          gender:gender,
          blood_group:blood_group,
          body_weight:body_weight,
          email_patient:email_patient,
          phone_patient:phone_patient
        },
        dataType:"JSON",
        success:function(data){
          
          for (let i = 0; i < data.length; i++) {
              if (data[i].status == false) {
                  alert(data[i].message);
              }else if(data[i].status == true){
                  alert(data[i].message);
                  $("#name_patient").val("");
                  $("#surname_patient").val("");
                  $("#body_weight").val("");
                  $("#email_patient").val("");
                  $("#phone_patient").val("");
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