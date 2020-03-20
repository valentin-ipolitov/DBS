<div class="sidebar">
    <div class="sidebar-header">
        <a href="/main-page"> DBS </a>
    </div>

    <div class="sidebar-content">
        <ul>
             <a href="/users"> <li>Users</li> </a>
        </ul>
    </div>

    <div class="logout">
        <form action="/logout" id="logout-form" method="POST">
            @csrf
            <a href="#" onclick="document.getElementById('logout-form').submit()">
                <div class="logout-icon">
                </div>
            </a>
        </form>
    </div>
    <div class="sidebar-footer">
        <p>
            Valentyn Ipolitov <br>
            Sabina Szabova
        </p>
    </div>
</div>