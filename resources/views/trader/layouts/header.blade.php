<!--Header-part-->
<div id="header">
    <div style="display:flex; align-items: center">
        <div style="font-size: 50px; color:white; margin-right: 13px; padding: 10px 0 0 10px">
            <i class="fa fa-user-circle" aria-hidden="true"></i>
        </div>
        <div style="color: white; font-size: 18px; margin-right: 13px;">
            <?php use Illuminate\Support\Facades\DB;
            $user = DB::table('users')->where('id','=',auth()->id())->select('username', 'user_photo')->get()[0]; ?>
            {{$user->username}}
            <div> 
                <a class="dropdown-item" href="{{ route('logout') }}"
                    style="color: white; font-size: 13px"
                    onclick="event.preventDefault();
                    document.getElementById('logout-form').submit();">
                    <i class="icon icon-share-alt"></i>Logout
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