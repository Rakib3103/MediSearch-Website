<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css"
      rel="stylesheet"
      integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3"
      crossorigin="anonymous"
/>
      
    <title>Signup page</title>

    <style>
        h1{text-align: center;}
        
   </style>
  </head>
  <body background="bg.jpeg">
    <main>
      <h1>Signup to MediSearch</h1> <br>
      <section style="height: 470px;" class="container d-flex justify-content-center align-items-center rounded-3 " id="subscribe">
          <div>
            <br>

              <form action="update_info.php" method='post'>
                
                <div class="mb-4">

                  <label for="exampleInputEmail1" class="form-label">User name</label>
                  <input type="type" class="form-control" id="exampleInputEmail1"  name="user_name">

                </div>
                <div class="mb-4">
                  <label for="exampleInputPassword1" class="form-label">Password</label>
                  <input type="password" name="password" class="form-control" id="password">
                </div>


                <div class="mb-4">
                  <label for="exampleInputPassword1" class="form-label">Email</label>
                  <input type="type" name="email" class="form-control" id="email">
                </div>
                <div>
                  <label for="exampleInputPassword1" class='form-label'>Number</label>
                  <input type="type" name="number" class="form-control" id="number">
                </div>
                <div>
                  <label for="exampleInputPassword1" class='form-label'>Address</label>
                  <input type="type" name="address" class="form-control" id="address">
                </div>
                <div>
                   <br>
                   <button type="submit" class="btn btn-primary">Sign Up</button>
                   <br>              <br>
                   <!-- Already have an account?
                   <a href="culogin.php" class="de text-white">Click to Login</a> -->
                </div>
                 <br> 

              </form>
            </div>
      </section>
      

    </main>
    <script
      src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
      integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p"
      crossorigin="anonymous"
    ></script>
  </body>
</html> 