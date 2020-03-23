<div class="sidebar">
    <div class="sidebar-header">
        <img src="{{asset('/images/profile/icons/'.session('user')->gender.'.png')}}" alt="profile_icon">
        <div>
            <a href="/main-page">   {{ session('user')->name }} {{ session('user')->lastname }} </a>
        </div>
    </div>

    <div class="sidebar-content">
       @yield('sidebar-content')
       
       <div class="sidear-bottom-content">
           @yield('sidebar-bottom-content')
           <div class="logout">
               <form action="/logout" id="logout-form" method="POST">
                    @csrf
                    <a href="#" onclick="document.getElementById('logout-form').submit()">
                        <div class="btn_primary btn_blue btn_100">
                            Log Out
                        </div>
                    </a>
                </form>
            </div>
       </div>
    </div>
    {{-- <div class="sidebar-footer">
        <p>
            Valentyn Ipolitov <br>
            Sabina Szabova
        </p>
    </div> --}}
</div>