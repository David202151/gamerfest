<div class="sidebar">
    <nav class="sidebar-nav">
        <ul class="nav">
            <li class="nav-title">{{ trans('brackets/admin-ui::admin.sidebar.content') }}</li>
            <li class="nav-item"><a class="nav-link" href="{{ url('admin/aulas') }}"><i class="nav-icon icon-diamond"></i> {{ trans('admin.aula.title') }}</a></li>
           <li class="nav-item"><a class="nav-link" href="{{ url('admin/horarios') }}"><i class="nav-icon icon-diamond"></i> {{ trans('admin.horario.title') }}</a></li>
           <li class="nav-item"><a class="nav-link" href="{{ url('admin/videojuegos') }}"><i class="nav-icon icon-plane"></i> {{ trans('admin.videojuego.title') }}</a></li>
           <li class="nav-item"><a class="nav-link" href="{{ url('admin/categoria') }}"><i class="nav-icon icon-star"></i> {{ trans('admin.categorium.title') }}</a></li>
           {{-- Do not delete me :) I'm used for auto-generation menu items --}}

            <li class="nav-title">{{ trans('brackets/admin-ui::admin.sidebar.settings') }}</li>
            <li class="nav-item"><a class="nav-link" href="{{ url('admin/admin-users') }}"><i class="nav-icon icon-user"></i> {{ __('Manage access') }}</a></li>
            <li class="nav-item"><a class="nav-link" href="{{ url('admin/translations') }}"><i class="nav-icon icon-location-pin"></i> {{ __('Translations') }}</a></li>
            {{-- Do not delete me :) I'm also used for auto-generation menu items --}}
            {{--<li class="nav-item"><a class="nav-link" href="{{ url('admin/configuration') }}"><i class="nav-icon icon-settings"></i> {{ __('Configuration') }}</a></li>--}}
        </ul>
    </nav>
    <button class="sidebar-minimizer brand-minimizer" type="button"></button>
</div>
