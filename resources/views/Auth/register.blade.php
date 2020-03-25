<div class="modal fade user-register-modal" id="userregisterModal" tabindex="-1" role="dialog" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <form id="userregisterModalForm">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">
            <span aria-hidden="true">&times;</span><span class="sr-only">Close</span>
          </button>
          <h4 class="modal-title">Register account</h4>
        </div>
        <div class="modal-body">
          <div class="form-group">
            <label for="seeAnotherField">Register as:</label>
            <select class="form-control" id="seeAnotherField" required>
              <option value="no">Customer</option>
              <option value="yes">Trader</option>
            </select>
          </div>
          <div class="form-group">
            <label>Username</label>
            <input type="text" name="user_login" required class="form-control" value=""
              placeholder="Username">
          </div>
          <div class="form-group">
            <label for="user_email">Email</label>
            <input type="email" id="user_email" name="user_email" required class="form-control" value=""
              placeholder="Email">
          </div>
          <div class="form-group">
            <label for="user_password">Password</label>
            <input type="password" id="user_password" required value="" name="user_password"
              class="form-control" placeholder="Password">
          </div>
          <div class="form-group">
            <label for="user_password">Confirm password</label>
            <input type="password" id="cuser_password" required value="" name="cuser_password"
              class="form-control" placeholder="Confirm password">
          </div>

          <div class="form-group" id="otherFieldDiv">
            <label for="otherField">Shop</label>
            <input type="text" name="trader_name" required class="form-control" value="" placeholder="Shop"
              id="otherField">
          </div>
        </div>
        <div class="modal-footer">
          <span class="user-login-modal-link pull-left">
            <a data-rel="loginModal" href="#loginModal">Already have an account?</a>
          </span>
          <button type="submit" class="btn btn-default btn-outline">Register</button>
        </div>
      </form>
    </div>
  </div>
</div>