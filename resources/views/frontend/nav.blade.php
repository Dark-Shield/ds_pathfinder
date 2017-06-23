<header>
    <div class="container">
        <span class="bar hide"></span>
        <a href="/" class="logo">LOGO YO</a>
        <nav>
            <div class="nav-control">
                <ul>
                    <li>Home</li>
                    @if(!\Auth::guest())
                    <li>Guest Page</li>
                    @if(count(\Auth::User()->member))
                    <div class="visible-xs visible-sm">
                        <li>Member Page 1</li>
                        @if(\Auth::User()->admin)
                            <li>Admin Page</li>
                        @endif
                        <li class="divider"></li>
                        <li>Sign Out</li>
                    </div>
                    @endif
                    @endif
                </ul>
            </div>
        </nav>
        <div class="nav-right">
        @if(!\Auth::guest())
            @if(count(\Auth::User()->member))
            <div class="nav-profile dropdown">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown"> <span><img src="{{\Auth::User()->member->avatar}}" alt=""> {{\Auth::User()->member}} {!! Auth::user()->newThreadsCount() > 0 ? '<span class="label label-info">'.Auth::user()->newThreadsCount().'</span>' : '' !!}</span></a>
                <ul class="dropdown-menu">
                    <li><a href="{{route('frontend.team',Auth::user()->member->team_id)}}"><i class="fa fa-users"></i> My Team</a></li>
                    <li><a href="{{route('frontend.files.my-file')}}"><i class="fa fa-folder"></i> My File</a></li>
                    <li><a href="{{route('frontend.files.my-program')}}"><i class="fa fa-university"></i> My Qualifications</a></li>
                     <li><a href="{{route('frontend.loadout')}}"><i class="fa fa-circle"></i> My Loadout</a></li>
                    <li><a href="{{route('inbox')}}"><i class="fa fa-envelope-o"></i> My Inbox {!! Auth::user()->newThreadsCount() > 0 ? '<span class="label label-info">'.Auth::user()->newThreadsCount().'</span>' : '' !!}</a></li>
                    <li><a href="{{route('frontend.settings')}}"><i class="fa fa-gear"></i> Settings</a></li>
                    @if(\Auth::User()->admin)
                        <li><a href="{{route('admin.index')}}"><i class="fa fa-lock"></i> Admin</a></li>
                    @endif
                    <li class="divider"></li>
                    <li><a href="{{route('auth.logout')}}"><i class="fa fa-power-off"></i> Sign Out</a></li>
                </ul>
            </div>
            @else
                    <div class="nav-profile dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown"> <span>{{\Auth::User()->name()}}</span></a>
                        <ul class="dropdown-menu">
                            <li><a href="{{route('auth.logout')}}"><i class="fa fa-power-off"></i> Sign Out</a></li>
                        </ul>
                    </div>
            @endif

        </div>
        @else
            <a data-toggle="modal" href="#signin">Sign-In</a>
        @endif
        </div>
    </div>
</header>
<!-- /header -->
