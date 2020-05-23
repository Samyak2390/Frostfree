<!--Header-part-->
<?php 
    use Illuminate\Support\Facades\DB;
    $user = DB::table('users')->where('id','=',auth()->id())->select('username', 'user_photo')->get()[0]; 
?>
<div id="header">
    <div style="display:flex; align-items: center">
        @if(Auth::user()->user_photo)
            <div style="max-width: 65px; margin-right: 13px; padding: 10px 0 0 10px">
                <img style= "border-radius: 50% " src="{{url('uploads/profile/',Auth::user()->user_photo)}}" alt="avatar">
            </div>
        @else
            <div style="font-size: 50px; color:white; margin-right: 13px; padding: 10px 0 0 10px">
                <i class="fa fa-user-circle" aria-hidden="true"></i>
            </div>
        @endif
        <div style="font-size: 18px; margin-right: 13px;">
            <a style="color: white" href="{{url('/trader/profile/create')}}">{{$user->username}}</a>
            <div class="trader-logout" style="font-size: 13px"> 
                <a style="color: white" class="dropdown-item" href="{{ route('logout') }}"
                onclick="event.preventDefault();
                document.getElementById('logout-form').submit();">
                    <i class="icon icon-share-alt"></i>{{ __('Logout') }}
                </a>

                <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                    @csrf
                </form>
            </div>
        </div>
    </div>
</div>
<!--close-Header-part-->
<!--top-Header-menu-->
{{-- <div id="user-nav" class="navbar navbar-inverse">
    <ul class="nav">
        <li class=""><a title="" href="{{url('/admin/settings')}}"><i class="icon icon-cog"></i> <span class="text">Settings</span></a></li>
        <li class="">
            <a class="dropdown-item" href="{{ route('logout') }}"
               onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                <i class="icon icon-share-alt"></i>{{ __('Logout') }}
            </a>

            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                @csrf
            </form>

        </li>
    </ul>
</div> --}}
<!--close-top-Header-menu-->
<!--start-top-serch-->
{{-- <div id="search">
    <input type="text" placeholder="Search here..."/>
    <button type="submit" class="tip-bottom" title="Search"><i class="icon-search icon-white"></i></button>
</div> --}}
<!--close-top-serch-->