<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Register</title>
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
        <b><u>Register</u></b>
      </p>
      <form action="insert.php" method="post">
        <div class="fill">
          <div class="form-text text-center">
            <label for="name" id="name-label"><b>Name</b> </label>
            <input
              type="text"
              placeholder="Enter Name"
              class="form-control"
              id="name-input"
              name="name_user"
              required
            />
          </div>
          <div class="form-text text-center">
            <label for="email" id="email-label"><b>E-mail</b> </label>
            <input
              type="email"
              placeholder="xyz@example.com"
              class="form-control"
              id="email-input"
              name="email"
              required
            />
          </div>
          <div class="form-text">
            <div class="text-center">
              <label for="pass" id="pass-label"><b>Password</b> </label>
              <input
                type="password"
                placeholder="Enter Password under 15 characters"
                class="form-control"
                id="pass-input"
                name="pass"
                required
              />
            </div>
            <div class="show-pass text-muted">
              <input type="checkbox" onclick="showPass()" />Show Password
            </div>
          </div>
          <div class="form-text">
            <div class="text-center">
              <label for="confirm" id="confirm-label"
                ><b>Confirm Password</b>
              </label>
              <input
                type="password"
                placeholder="Re-type Password"
                class="form-control"
                id="confirm-input"
                name="confirm_pass"
                onkeyup="passMatch()"
                required
              />
            </div>
            <div class="show-pass text-muted">
              <input type="checkbox" onclick="showConPass()" />Show Password
            </div>
          </div>
          <div id="msg"></div>
          <div class="form-button">
            <button class="btn btn-warning btn-lg" onclick="fixPass()">Register</button>
          </div>
          <div class="text-muted">
            Already registered? <a href="home.php">Login here</a>
          </div>
        </div>
      </form>
    </div>
    <script src="app.js"></script>
  </body>
</html>
