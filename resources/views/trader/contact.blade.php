@extends('trader.layouts.master')
@section('title','FrostFree | Report')
@section('addCss')
<style>
  @media (min-width: 700px){
    .padding{
      margin-left: -16px;
      padding: 0;
    }
  }

  @media (max-width: 700px){
    .padding{
      padding-left: 16px;
    }
  }
</style>

@endsection
@section('content')
<div style="width: 86%; margin: 0 auto;"> 
  <div style= "padding-top: 3%;"> 
    <h2>Report Product Clash: </h2>
    <p>Please make sure to add the name of the product and the shop Name that is selling it.</p>
  </div>
  <br/>
  <div style= "padding-top: 3%;"> 
    <form method="POST" action="{{route('send.mail')}}">
      @csrf
      <div class="row">
        <div class="col-sm-6">
          <div>Your Name (required)<br />
              <p class="form-control-wrap your-name">
                <input style="font-size: 15px" type="text" name="name" value="{{old('name') ?? ''}}" size="40" class="form-control text validates-as-required" />
              </p>
              <span style="color: red">{{$errors->first('name')}}</span>
            </div>
        </div>
        <div class="col-sm-6">
          <div>Your Email (required)<br />
              <p class="form-control-wrap your-email">
                <input style="font-size: 15px" type="email" name="email" value="{{old('email') ?? Auth::User()->email ?? ''}}" size="40" class="form-control text email validates-as-required validates-as-email" />
              </p>
              <span style="color: red">{{$errors->first('email')}}</span>
            </div>
        </div>
        <div class="col-sm-12">
          <div>Your Message<br />
              <p class="form-control-wrap your-message">	
                <textarea style="font-size: 15px" name="message_body" cols="40" rows	="10" class="form-control textarea">{{old('message_body') ?? ''}}</textarea>
              </p>
            </div>
            <span style="color: red">{{$errors->first('message_body')}}</span>
        </div>
      </div>
      <div class = "padding">
        <input type="submit" value="Send" class="form-control submit" />
      </div>
    </form>
  </div>

 
</div>

@endsection