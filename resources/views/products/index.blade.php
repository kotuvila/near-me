@extends('layouts.master')


@section('content')
    <div class="row">
        <div class="col-2">
            <a href="{{ route('products.create') }}" class="btn btn-success"> ADD NEW PRODUCT</a>
        </div>
    </div>
    <br/>
    <div class="card">
        <div class="card-header bg-warning"><h3 style="color:white">All
                Items</h3></div>
        <div class="card-body">
            <div class="table-responsive">
                <table class=" table table-sm table-bordered table-striped table-hover datatable">
                    <thead>
                    <tr>
                        {{--                <th>ID</th>--}}
                        <th>Item Code</th>
                        <th>Name</th>
                        <th>Supplier</th>
                        <th>Brand</th>
                        <th>Category</th>
                        <th>Subcategory</th>
                        <th>Status</th>
                        <th>Option</th>

                    </tr>
                    </thead>
                    {{-- <tbody>

                    @foreach($items as $key => $item)

                        <tr data-entry-id="{{ $item->id }}">
                            <td>{{$item->code}}</td>
                            <td>{{$item->name}}</td>
                            <td>
                                @foreach($item->supplier as $sup)
                                    {{$sup->name}}
                                @endforeach
                            </td>
                            <td>{{$item->brand->name}}</td>
                            <td>{{$item->subcategory->category->name}}</td>
                            <td>{{$item->subcategory->name}}</td>
                            <td>{{$item->status}}</td>
                            <td>
                                <a href="{{ route('admin.items.edit', $item->id) }}"
                                   class="btn btn-warning btn-sm">EDIT</a>
                                <form action="{{ route('admin.items.destroy', $item->id) }}" method="POST"
                                      onsubmit="return confirm('{{ trans('global.areYouSure') }}');"
                                      style="display: inline-block;">
                                    <input type="hidden" name="_method" value="DELETE">
                                    <input type="hidden" name="_token" value="{{ csrf_token() }}">
                                    <input type="submit" class="btn btn-danger btn-sm"
                                           value="{{ trans('global.delete') }}">
                                </form>
                            </td>
                        </tr>
                    @endforeach
                    </tbody> --}}
                </table>
            </div>
        </div>
    </div>
    <script>
        $(function () {
            let dtButtons = $.extend(true, [], $.fn.dataTable.defaults.buttons)
            $('.datatable:not(.ajaxTable)').DataTable({ buttons: dtButtons })
        });
    </script>
@endsection
