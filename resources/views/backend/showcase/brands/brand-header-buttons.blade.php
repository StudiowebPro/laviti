<div class="pull-right mb-10 hidden-sm hidden-xs">
    {{ link_to_route('admin.showcase.brand.index', trans('menus.backend.showcase.brand.all'), [], ['class' => 'btn btn-primary btn-xs']) }}
    {{ link_to_route('admin.showcase.brand.create', trans('menus.backend.showcase.brand.create'), [], ['class' => 'btn btn-success btn-xs']) }}
    {{--{{ link_to_route('admin.access.user.deactivated', trans('menus.backend.access.users.deactivated'), [], ['class' => 'btn btn-warning btn-xs']) }}--}}
    {{ link_to_route('admin.showcase.brand.deleted', trans('menus.backend.showcase.brand.deleted'), [], ['class' => 'btn btn-danger btn-xs']) }}
</div><!--pull right-->

<div class="pull-right mb-10 hidden-lg hidden-md">
    <div class="btn-group">
        <button type="button" class="btn btn-primary btn-xs dropdown-toggle" data-toggle="dropdown" aria-expanded="false">
            {{ trans('menus.backend.showcase.brand.main') }} <span class="caret"></span>
        </button>

        <ul class="dropdown-menu" role="menu">
            <li>{{ link_to_route('admin.showcase.brand.index', trans('menus.backend.showcase.brand.all')) }}</li>
            <li>{{ link_to_route('admin.showcase.brand.create', trans('menus.backend.showcase.brand.create')) }}</li>
            <li class="divider"></li>
            {{--<li>{{ link_to_route('admin.access.user.deactivated', trans('menus.backend.access.users.deactivated')) }}</li>--}}
            <li>{{ link_to_route('admin.showcase.brand.deleted', trans('menus.backend.showcase.brand.deleted')) }}</li>
        </ul>
    </div><!--btn group-->
</div><!--pull right-->

<div class="clearfix"></div>