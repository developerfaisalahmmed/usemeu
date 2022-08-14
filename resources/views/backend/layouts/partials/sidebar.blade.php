<div class="sidebar-header">
    <div>
        <img src="{{asset('backend')}}/assets/images/logo-icon.png" class="logo-icon" alt="logo icon">
    </div>
    <div>
        <h4 class="logo-text">Faisal</h4>
    </div>
    <div class="toggle-icon ms-auto"><i class='bx bx-arrow-to-left'></i>
    </div>
</div>
<!--navigation-->
<ul class="metismenu" id="menu">

    <li>
        <a href="{{route('admin.dashboard')}}" class="has-arrow">
            <div class="parent-icon"><i class='bx bx-home-circle'></i>
            </div>
            <div class="menu-title">Dashboard</div>
        </a>
    </li>

    <li>
        <a href="javascript:;" class="has-arrow">
            <div class="parent-icon"><i class="lni lni-blogger"></i>
            </div>
            <div class="menu-title"> Blog </div>
        </a>
        <ul>
            <li><a href="index.html"><i class="bx bx-right-arrow-alt"></i>Category</a></li>
            <li><a href="index2.html"><i class="bx bx-right-arrow-alt"></i>Sub Category</a></li>
            <li><a href="index2.html"><i class="bx bx-right-arrow-alt"></i>Child Category</a></li>
            <li><a href="index2.html"><i class="bx bx-right-arrow-alt"></i>Post</a></li>
        </ul>
    </li>

    <li>
        <a href="javascript:;" class="has-arrow">
            <div class="parent-icon"><i class="bx bx-donate-blood"></i></div>
            <div class="menu-title"> Contact </div>
        </a>
        <ul>
            <li><a href="index.html"><i class="bx bx-right-arrow-alt"></i>Default</a></li>
            <li><a href="index2.html"><i class="bx bx-right-arrow-alt"></i>Alternate</a></li>
        </ul>
    </li>

    <li>
        <a href="javascript:;" class="has-arrow">
            <div class="parent-icon"><i class="bx bx-cog bx-spin"></i>
            </div>
            <div class="menu-title">Settings</div>
        </a>
        <ul>
            @can('role-list')
                <li><a href="{{route('roles.index')}}"><i class="bx bx-right-arrow-alt"></i>Roles</a></li>
            @endcan
            @can('permission-list')
                <li><a href="{{route('permissions.index')}}"><i class="bx bx-right-arrow-alt"></i>Permissions</a></li>
            @endcan
                @can('user-list')
                <li><a href="{{route('users.index')}}"><i class="bx bx-right-arrow-alt"></i>Users</a>
                </li>
            @endcan

        </ul>
    </li>


</ul>
<!--end navigation-->
