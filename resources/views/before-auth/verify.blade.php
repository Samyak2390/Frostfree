<!DOCTYPE html>
<html>
<head>
<style>
.card {
  box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2);
  width: 600px;
  margin: 0 auto;
  text-align: center;
  font-family: arial;
  padding: 20px;
}

@media screen and (max-width: 600px) {
    .card {
        width: 95%;
        font-size: 14px;
        padding: 10px;
    }
}


.card button {
  border: none;
  outline: 0;
  padding: 12px;
  color: white;
  background-color: green;
  text-align: center;
  cursor: pointer;
  width: 100%;
  font-size: 18px;
}

.card button:hover {
  opacity: 0.7;
}
</style>
</head>
<body>
<div class="card">
    <h2 style="text-align:center">Email not verified !</h2>
    @if (session('resent'))
        <div style="color:green">
            {{ __('A fresh verification link has been sent to your email address.') }}
        </div>
    @endif
    {{ __('Before proceeding, please check your email for a verification link.') }}
    {{ __('If you did not receive the email') }},
    <form class="d-inline" method="POST" action="{{ route('verification.resend') }}">
        @csrf
        <p><button type="submit" >{{ __('click here to request another') }}</button><p>.
    </form>
</div>

</body>
</html>

