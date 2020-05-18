@extends('trader.layouts.master')
@section('title', 'FrostFree | Profile')
@section('addCss')
{{-- <link rel="stylesheet" href="{{ URL::asset('https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css')}}"
        integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous"> --}}
  <style>
    .margin-top{
    }

    @media (min-width: 700px){
      .margin-top{
        margin-top: 5em
      }
    }

    @media (max-width: 700px){
      .mobile{
        max-width: 50%;
      }
    }

    .nav-itemm{
      border: 2px solid grey;
    }

    .nav-tabs{
      border-bottom: 2px solid grey;
    }

    .container {
      margin-right: auto;
      margin-left: auto;
      padding-left: 15px;
      padding-right: 15px;
    }
  </style>
        
@endsection
@section('content')
  <div class="container">
    <div class="row my-2 margin-top">
      <div class="col-lg-3 order-lg-1 text-center">
        <div> 
          <img style= "border-radius: 50% " class="mobile" src="{{url('uploads/profile/',Auth::user()->user_photo ?? 'default-profile.png')}}" class="mx-auto img-fluid img-circle d-block"
          alt="avatar">
        </div>
        <h5 class="mt-2">{{ Auth::user()->username }}</h5>
      </div>
      <div class="col-lg-1"> 
      </div>
      <div class="col-lg-8 order-lg-2" style="float:right">
        {{-- <ul class="nav nav-tabs">
          <li class="nav-itemm">
            <a class="nav-link active">Edit</a>
          </li>
        </ul> --}}
        <h2>Your Profile </h2>
        <div class=" py-4">
          <div class="tab-pane active" id="edit">
            <form role="form" method="post" action="{{route('profile.update')}}" enctype="multipart/form-data">
              {{ csrf_field() }}
              {{method_field("PUT")}}
              {{--            <div class="form-group row">
                            <label class="col-lg-3 col-form-label form-control-label">First name</label>
                            <div class="col-lg-9">
                              <input class="form-control" type="text" placeholder="FName" value="{{ Auth::user()->firstname }}">
                            </div>
                          </div>
                          <div class="form-group row">
                            <label class="col-lg-3 col-form-label form-control-label">Last name</label>
                            <div class="col-lg-9">
                              <input class="form-control" type="text" placeholder="LName" value="{{ Auth::user()->lastname }}">
                            </div>
                          </div>--}}
              <div class="form-group row">
                <label class="col-lg-3 col-form-label form-control-label">Username</label>
                <div class="col-lg-9">
                  <input disabled class="form-control" type="text" name="username" placeholder="Username"
                        value="{{ Auth::user()->username ?? '' }}">
                  <span style="color: red">{{$errors->first('username')}}</span>
                </div>
              </div>
              <div class="form-group row">
                <label class="col-lg-3 col-form-label form-control-label">Email</label>
                <div class="col-lg-9">
                  <input disabled class="form-control" name="email" type="email" placeholder="Email"
                        value="{{ Auth::user()->email ?? '' }}">
                  <span style="color: red">{{$errors->first('email')}}</span>

                </div>
              </div>
              <div class="form-group row">
                <label class="col-lg-3 col-form-label form-control-label">Address</label>
                <div class="col-lg-9">
                  <input class="form-control" name="address" type="text" placeholder="Address"
                        value="{{ old('address') ?? Auth::user()->address  ?? ''}}">
                  <span style="color: red">{{$errors->first('address')}}</span>
                </div>
              </div>
              {{--           <div class="form-group row">
                        <label class="col-lg-3 col-form-label form-control-label"></label>
                      <div class="col-lg-6">
                          <input class="form-control" type="text" value="" placeholder="City" value="{{ Auth::user()->city }}">
                        </div>
                        <div class="col-lg-3">
                          <input class="form-control" type="text" value="" placeholder="State" value="{{ Auth::user()->state }}">
                        </div>
                </div>--}}
              <div class="form-group row">
                <label class="col-lg-3 col-form-label form-control-label">Phone Number</label>
                <div class="col-lg-9">
                  <input class="form-control" name="phone_number" type="tel" placeholder="Phone Number"
                        value="{{ old('phone_number') ?? Auth::user()->phone_number ?? '' }}">
                  <span style="color: red">{{$errors->first('phone_number')}}</span>
                </div>
              </div>
              <div class="form-group row">
                <label class="col-lg-3 col-form-label form-control-label">Password</label>
                <div class="col-lg-9">
                  <input class="form-control" name="password" type="password" placeholder="Password" value="{{old('password') ?? ''}}">
                </div>
              </div>
              <div class="form-group row">
                <label class="col-lg-3 col-form-label form-control-label">Confirm password</label>
                <div class="col-lg-9">
                  <input class="form-control" name="password_confirmation"  value="{{old('password_confirmation') ?? ''}}" type="password" placeholder="Confirm password">
                  <span style="color: red">{{$errors->first('password')}}</span>
                </div>
              </div>
              <div class="form-group row" style="display:none">
                <div class="col-lg-9">
                  <input class="form-control" type="hidden" name="role" value="{{ Auth::user()->role }}">
                </div>
              </div>
              @if(\Illuminate\Support\Facades\Auth::user()->role==1)
                <div class="form-group row">
                  <label class="col-lg-3 col-form-label form-control-label">Trader Category</label>
                  <div class="col-lg-9">
                    <input disabled class="form-control" type="text" name="trader_category"
                          value="{{ Auth::user()->trader_category }}">
                    <span style="color: red">{{$errors->first('trader_category')}}</span>
                  </div>
                </div>
              @endif
              <div class="form-group">
                <label class="control-label">Image upload</label>
                <div class="controls">
                  <input type="file" name="user_photo" id="user_photo"/>
                  <span style="color: red">{{$errors->first('user_photo')}}</span>
                {{-- <span style="color:red">{{$errors->first('user_photo')}}</span>--}}
                  @if(Auth::user()->user_photo != '')
                    <span>
                      <img src="{{url('uploads/profile/',Auth::user()->user_photo)}}" width="50" alt=""
                          style="margin-right: 20px">
                      <a class="btn btn-danger" id="deleteRecord" onclick="document.getElementById('delete-image').submit();">Remove Image</a>
                    </span>
                  @endif
                </div>
              </div>
              {{-- <div class="form-group">
                <img src="{{url('uploads/profile/',Auth::user()->user_photo)}}"
                    class="mx-auto img-fluid img-circle d-block" alt="avatar">

              </div> --}}
              <div class="form-group row">
                <div class="col-lg-8">
                  <input type="submit" class="btn btn-primary" value="Save Changes">
                </div>
              </div>
            </form>
            <form id="delete-image" action="{{ route('profile.image.destroy') }}" method="POST" style="display: none;">
              @csrf
              @method('DELETE')
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>
@endsection
@section('jsblock')
{{-- <script src="{{ URL::asset('https://code.jquery.com/jquery-3.4.1.slim.min.js')}}"
        integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n"
        crossorigin="anonymous"></script>
<script src="{{ URL::asset('https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js')}}"
        integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo"
        crossorigin="anonymous"></script>
<script src="{{ URL::asset('https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js')}}"
        integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6"
        crossorigin="anonymous"></script> --}}
@endsection
