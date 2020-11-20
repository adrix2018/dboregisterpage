<div class="signin-form">
  <div class="container">
    <div class="row">
      <div class="col-lg-4 col-md-6 col-sm-8 col-xs-12">
        <div class="mytitle">Account Registration / Crea tu cuenta</div>
        <div id="error"></div>
        <div id="success"></div>
        <form action="functions/register.php" class="form-signin" method="POST" id="register-form">
          <div class="form-group">
            <label for="user">Username / Usuario:</label>
            <input type="text" id="user" class="form-control" name="user" required>
            <span id="check-e"></span>
          </div>
          <div class="form-group">
            <label for="pass">Password / contrasena:</label>
            <input type="password" id="pass" class="form-control" name="pass" required>
          </div>
          <div class="form-group">
            <label for="pass2">Confirm Password / repite contrasena:</label>
            <input type="password" id="pass2" class="form-control" name="pass2" required>
          </div>
          <div class="form-group">
            <label for="email">Email:</label>
            <input type="email" id="email" class="form-control" name="email" required>
          </div>
          <div class="form-group">
            <label for="exp">2+2=:</label>
            <select name="exp" id="exp" class="form-control" required>
              <option value="0" hidden disabled selected></option>
              <option value="10">2</option>
              <option value="10">3</option>
              <option value="10">4</option>
            </select>
          </div>
          <div class="form-group">
            <button type="submit" class="btn btn-default" name="btn-save" id="btn-submit">
              <span class="glyphicon glyphicon-log-in"></span> &nbsp; Create Account / crear cuenta
            </button>
          </div>
        </form>
      </div>
    </div>
  </div>
</div>
<!-- Load Facebook SDK for JavaScript -->
      <div id="fb-root"></div>
      <script>
        window.fbAsyncInit = function() {
          FB.init({
            xfbml            : true,
            version          : 'v8.0'
          });
        };

        (function(d, s, id) {
        var js, fjs = d.getElementsByTagName(s)[0];
        if (d.getElementById(id)) return;
        js = d.createElement(s); js.id = id;
        js.src = 'https://connect.facebook.net/es_ES/sdk/xfbml.customerchat.js';
        fjs.parentNode.insertBefore(js, fjs);
      }(document, 'script', 'facebook-jssdk'));</script>

      <!-- Your Chat Plugin code -->
      <div class="fb-customerchat"
        attribution=setup_tool
        page_id="101152985101877"
  logged_in_greeting="¡Hola! como podemos ayudarte?"
  logged_out_greeting="¡Hola! como podemos ayudarte?">
      </div>
