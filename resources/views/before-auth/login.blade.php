<div class="modal fade user-login-modal" id="userloginModal" tabindex="-1" role="dialog" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <form id="userloginModalForm" method="POST" action="{{ route('login') }}">
        @csrf
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">
            <span aria-hidden="true">&times;</span><span class="sr-only">Close</span>
          </button>
          <h4 class="modal-title">Login</h4>
        </div>
        <div class="modal-body">
          <div class="form-group">
            <label>Username</label>
            <input type="text" id="username" name="username" required class="form-control" value="{{ old('username') }}"
              placeholder="Username">
          </div>
          <div class="form-group">
            <label for="password">Password</label>
            <input type="password" id="password" required value="{{ old('password') }}" name="password" class="form-control"
              placeholder="Password">
            @error('username')
              <span style="color: red">
                <strong>{{ $message }}</strong>
              </span>
            @enderror
            @error('password')
              <span style="color: red">
                <strong>{{ $message }}</strong>
              </span>
            @enderror
          </div>
          <div class="checkbox clearfix">
            <div class="form-flat-checkbox pull-left">
              <input type="checkbox" name="rememberme" id="rememberme" value="forever"><i></i>&nbsp;Remember
              Me
            </div>
            <span class="lostpassword-modal-link pull-right">
              <a href="#lostpasswordModal" data-rel="lostpasswordModal">Lost your
                password?</a>
            </span>
          </div>
        </div>
        <div class="modal-footer">
          <span class="user-login-modal-register pull-left">
            <a data-rel="registerModal" href="#">Not a Member yet?</a>
          </span>
          <button type="submit" class="btn btn-default btn-outline" name="signIn" value="signIn">Sign in</button>
        </div>
        @if($errors->any() && old('signIn'))
          @section('injectJQuery')
            <script type="text/javascript">
              $(document).ready(function() {
                $('[data-rel=loginModal]').trigger('click');
              });
            </script>
          @endsection
        @endif
      </form>
    </div>
  </div>
</div>