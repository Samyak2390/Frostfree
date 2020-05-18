<div class="modal fade user-register-modal" id="userregisterModal" tabindex="-1" role="dialog" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <form id="userregisterModalForm" method="POST" action="{{ route('register') }}">
        @csrf
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">
            <span aria-hidden="true">&times;</span><span class="sr-only">Close</span>
          </button>
          <h4 class="modal-title">Register account</h4>
        </div>
        <div class="modal-body">
          <div class="form-group">
            <label for="seeAnotherField">Register as:</label>
            <select class="form-control" id="seeAnotherField" name="role" required>
              <option value="2" {{old('role') == "2" ? 'selected' : ''}}>Customer</option>
              <option value="1" {{old('role') == "1" ? 'selected' : ''}}>Trader</option>
            </select>
          </div>
          <div class="form-group">
            <label>Username</label>
            <input type="text" name="username" required class="form-control" value="{{ old('username') }}"
              placeholder="Username" required>
            @error('username')
              <span style="color: red">
                <strong>{{ $message }}</strong>
              </span>
            @enderror
          </div>
          <div class="form-group">
            <label for="user_email">Email</label>
            <input type="email" id="user_email" name="email" required class="form-control" value="{{ old('email') }}"
              placeholder="Email">
            @error('email')
              <span style="color: red">
                <strong>{{ $message }}</strong>
              </span>
            @enderror
          </div>
          <div class="form-group">
            <label for="user_password">Password</label>
            <input type="password" id="user_password" required value="{{ old('password') }}" name="password"
              class="form-control" placeholder="Password">
            @error('password')
              <span style="color: red">
                <strong>{{ $message }}</strong>
              </span>
            @enderror
          </div>
          <div class="form-group">
            <label for="user_password">Confirm password</label>
            <input type="password" id="cuser_password" required value="{{ old('password_confirmation') }}" name="password_confirmation"
              class="form-control" placeholder="Confirm password">
          </div>

          <div class="form-group" id="otherFieldDiv">
            <label for="trader_category">Trader Category:</label>
            <select class="form-control" name="trader_category" value ="{{old('trader_category')}}">
              <option value=""  {{old('trader_category') == null ? 'selected' : ''}}>Choose a category</option>
              <option value="butcher" {{old('trader_category') == "butcher" ? 'selected' : ''}}>Butcher</option>
              <option value="fishmonger" {{old('trader_category') == "fishmonger" ? 'selected' : ''}}>Fishmonger</option>
              <option value="greengrocer" {{old('trader_category') == "greengrocer" ? 'selected' : ''}}>Greengrocer</option>
              <option value="bakery" {{old('trader_category') == "bakery" ? 'selected' : ''}}>Bakery</option>
              <option value="delicatessen" {{old('trader_category') == "delicatessen" ? 'selected' : ''}}>Delicatessen</option>
            </select>
            @error('trader_category')
              <span style="color: red">
                <strong>{{ $message }}</strong>
              </span>
            @enderror
          </div>

          <div class="form-group" id="otherFieldDiv2">
            <label for="otherField">Shop Name</label>
            <input type="text" name="shop_name" class="form-control" value="{{old('shop_name')}}" placeholder="Shop Name"
              id="otherField">
            @error('shop_name')
              <span style="color: red">
                <strong>{{ $message }}</strong>
              </span>
            @enderror
          </div>
        </div>
        <div class="modal-footer">
          <span class="user-login-modal-link pull-left">
            <a data-rel="loginModal" href="#loginModal">Already have an account?</a>
          </span>
          <button type="submit" class="btn btn-default btn-outline">Register</button>
        </div>
        @if($errors->any() && !strcmp(Route::current()->uri, "contact") == 0)
          @section('injectJQuery')
            <script type="text/javascript">
              $(document).ready(function() {
                console.log('click simulation');
                $('[data-rel=registerModal]').trigger('click');
              });
            </script>
          @endsection
        @endif
      </form>
    </div>
  </div>
</div>