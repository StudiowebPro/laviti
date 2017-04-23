@extends ('backend.layouts.app')

@section ('title', trans('labels.backend.showcase.product.management'))

@section('after-styles')
    {{ Html::style("css/backend/plugin/datatables/dataTables.bootstrap.min.css") }}
@endsection

@section('page-header')
    <h1>
        {{ trans('labels.backend.showcase.product.management') }}
        <small>{{ trans('labels.backend.showcase.product.visible') }}</small>
    </h1>
@endsection

@section('content')
    <div class="box box-success">
        <div class="box-header with-border">
            <h3 class="box-title">{{ trans('labels.backend.showcase.product.visible') }}</h3>

            <div class="box-tools pull-right">
                @include('backend.showcase.includes.partials.product-header-buttons')
            </div><!--box-tools pull-right-->
        </div><!-- /.box-header -->

        <div class="box-body">
            <div class="table-responsive">
                <table id="users-table" class="table table-condensed table-hover">
                    <thead>
                    <tr>
                        <th>{{ trans('labels.backend.showcase.product.table.id') }}</th>
                        <th>{{ trans('labels.backend.showcase.product.table.name') }}</th>
                        <th>{{ trans('labels.backend.showcase.product.table.price') }}</th>
                        <th>{{ trans('labels.backend.showcase.product.table.available') }}</th>
                        <th>{{ trans('labels.backend.access.users.table.created') }}</th>
                        <th>{{ trans('labels.backend.access.users.table.last_updated') }}</th>
                        <th>{{ trans('labels.general.actions') }}</th>
                    </tr>
                    </thead>
                </table>
            </div><!--table-responsive-->
        </div><!-- /.box-body -->
    </div><!--box-->

@endsection

@section('after-scripts')
    {{ Html::script("js/backend/plugin/datatables/jquery.dataTables.min.js") }}
    {{ Html::script("js/backend/plugin/datatables/dataTables.bootstrap.min.js") }}

    <script>
        $(function() {
            $('#users-table').DataTable({
                processing: true,
                serverSide: true,
                ajax: {
                    url: '{{ route("admin.showcase.product.get") }}',
                    type: 'post',
                    data: {is_visible: 1, trashed: true}
                },
                columns: [
                    {data: 'id', name: '{{config('access.products_table')}}.id'},
                    {data: 'name', name: '{{config('access.products_table')}}.name'},
                    {data: 'price', name: '{{config('access.products_table')}}.price'},
                    {data: 'is_available', name: '{{config('access.products_table')}}.is_available'},
                    {data: 'img', name: '{{config('access.products_table')}}.img'},
                    {data: 'updated_at', name: '{{config('access.products_table')}}.updated_at'},
                    {data: 'actions', name: 'actions', searchable: false, sortable: false}
                ],
                order: [[0, "asc"]],
                searchDelay: 500
            });

            {{--$("body").on("click", "a[name='restore_product']", function(e) {--}}
                {{--e.preventDefault();--}}
                {{--var linkURL = $(this).attr("href");--}}

                {{--swal({--}}
                    {{--title: "{{ trans('strings.backend.general.are_you_sure') }}",--}}
                    {{--text: "{{ trans('strings.backend.access.users.restore_user_confirm') }}",--}}
                    {{--type: "warning",--}}
                    {{--showCancelButton: true,--}}
                    {{--confirmButtonColor: "#DD6B55",--}}
                    {{--confirmButtonText: "{{ trans('strings.backend.general.continue') }}",--}}
                    {{--cancelButtonText: "{{ trans('buttons.general.cancel') }}",--}}
                    {{--closeOnConfirm: false--}}
                {{--}, function(isConfirmed){--}}
                    {{--if (isConfirmed){--}}
                        {{--window.location.href = linkURL;--}}
                    {{--}--}}
                {{--});--}}
            {{--});--}}

        });
    </script>
@endsection
