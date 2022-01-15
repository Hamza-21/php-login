<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Login</title>
    <link
      rel="stylesheet"
      href="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha1/css/bootstrap.min.css"
      integrity="sha384-r4NyP46KrjDleawBgD5tp8Y7UzmLA05oM1iAEQ17CSuDqnUK2+k9luXQOfXJCJ4I"
      crossorigin="anonymous"
    />
    <script
      src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"
      integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo"
      crossorigin="anonymous"
    ></script>
    <script
      src="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha1/js/bootstrap.min.js"
      integrity="sha384-oesi62hOLfzrys4LxRF63OJCXdXDipiYWBnvTl9Y9/TRlw5xlKIEHpNyvvDShgf/"
      crossorigin="anonymous"
    ></script>
    <link rel="stylesheet" href="style.css" />
  </head>
  <body>
    <div class="box">
      <p id="heading" class="text-center">
        <b><u>Login</u></b>
      </p>
      <form action="validate.php" method="post">
        <div class="fill">
          <div class="form-text">
            <div class="text-center">
              <label for="email" id="email-label"><b>E-mail</b> </label>
              <input
                type="email"
                placeholder="Enter Email"
                class="form-control"
                id="name-input"
                name="email"
                required
              />
            </div>
          </div>
          <div class="form-text">
            <div class="text-center">
              <label for="pass" id="pass-label"><b>Password</b> </label>
              <input
                type="password"
                placeholder="Enter Password"
                class="form-control"
                id="pass-input"
                name="password"
                required
              />
            </div>
            <div class="show-pass text-muted">
              <input type="checkbox" onclick="showPass()" />Show Password
            </div>
          </div>
          <div class="form-button">
            <button class="btn btn-success btn-lg" name="login">Login</button>
          </div>
          <div class="text-muted">
            Not registered yet? <a href="register.php">Register here</a>
          </div>
        </div>
      </form>
    </div>

    <script src="app.js"></script>
  </body>
</html>
