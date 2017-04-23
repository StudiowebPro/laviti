<div class="pull-right mb-10 hidden-sm hidden-xs">
    {{ link_to_route('admin.showcase.product.index', trans('menus.backend.showcase.product.all'), [], ['class' => 'btn btn-primary btn-xs']) }}
    {{ link_to_route('admin.showcase.product.create', trans('menus.backend.showcase.product.create'), [], ['class' => 'btn btn-success btn-xs']) }}
    {{--{{ link_to_route('admin.access.user.deactivated', trans('menus.backend.access.users.deactivated'), [], ['class' => 'btn btn-warning btn-xs']) }}--}}
    {{ link_to_route('admin.showcase.product.deleted', trans('menus.backend.showcase.product.deleted'), [], ['class' => 'btn btn-danger btn-xs']) }}
</div><!--pull right-->

<div class="pull-right mb-10 hidden-lg hidden-md">
    <div class="btn-group">
        <button type="button" class="btn btn-primary btn-xs dropdown-toggle" data-toggle="dropdown" aria-expanded="false">
            {{ trans('menus.backend.showcase.product.main') }} <span class="caret"></span>
        </button>

        <ul class="dropdown-menu" role="menu">
            <li>{{ link_to_route('admin.showcase.product.index', trans('menus.backend.showcase.product.all')) }}</li>
            <li>{{ link_to_route('admin.showcase.product.create', trans('menus.backend.showcase.product.create')) }}</li>
            <li class="divider"></li>
            {{--<li>{{ link_to_route('admin.access.user.deactivated', trans('menus.backend.access.users.deactivated')) }}</li>--}}
            <li>{{ link_to_route('admin.showcase.product.deleted', trans('menus.backend.showcase.product.deleted')) }}</li>
        </ul>
    </div><!--btn group-->
</div><!--pull right-->

<div class="clearfix"></div>