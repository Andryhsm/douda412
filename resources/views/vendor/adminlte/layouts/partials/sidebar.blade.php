<!-- Left side column. contains the logo and sidebar -->
<aside class="main-sidebar">

    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">

        <!-- Sidebar user panel (optional) -->
        @if (! Auth::guest())
            <div class="user-panel">
                <div class="pull-left image">
                    @if (Auth::user()->profile_image)
                        <img src="upload/profile/{{ Auth::user()->profile_image }}" class="img-circle" alt="User Image" />
                    @else    
                        <img src="{{ Gravatar::get($user->email) }}" class="img-circle" alt="User Image" />
                    @endif 
                </div>
                <div class="pull-left info">
                    <p>{{ Auth::user()->name }}</p>
                    <!-- Status -->
                    <a href="#"><i class="fa fa-circle text-success"></i> {{ trans('adminlte_lang::message.online') }}</a>
                </div>
            </div>
        @endif

        <!-- search form (Optional) -->
        <form action="#" method="get" class="sidebar-form">
            <div class="input-group">
                <input type="text" name="q" class="form-control" placeholder="{{ trans('adminlte_lang::message.search') }}..."/>
              <span class="input-group-btn">
                <button type='submit' name='search' id='search-btn' class="btn btn-flat"><i class="fa fa-search"></i></button>
              </span>
            </div>
        </form>
        <!-- /.search form -->

        <!-- Sidebar Menu -->
        <ul class="sidebar-menu">
            <li class="header">{{ trans('adminlte_lang::message.header') }}</li>
            <!-- Optionally, you can add icons to the links -->
            <li class="active">
                <a href="{{ url('home') }}"><i class='fa fa-link'></i> <span>Dashboard</span></a>
            </li>
            <li>
                <a href="{{ url('users')}}"><i class='fa fa-link'></i> <span>Utilisateur</span></a>
            </li>
            <li class="treeview">
                <a href="#"><i class='fa fa-link'></i> <span>Stock</span> <i class="fa fa-angle-left pull-right"></i></a>
                <ul class="treeview-menu">
                    <li><a href="#">Catalogue</a></li>
                    <li><a href="#">Produit</a></li>
                </ul>
            </li>
        </ul><!-- /.sidebar-menu -->
    </section>
    <!-- /.sidebar -->
</aside>
