@extends('layouts.master')


@section('content')
    <div class="row">
        <div class="col-2">
            <a href="{{ route('products.create') }}" class="btn btn-success"> ADD NEW PRODUCT</a>
        </div>
    </div>
    <br />
    <div class="card">
        <div class="card-header bg-warning">
            <h3 style="color:white">All
                Items</h3>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class=" table table-sm table-bordered table-striped table-hover datatable">
                    <thead>
                        <tr>

                            <th>Product Id</th>
                            <th>Name</th>
                            <th>Shop ID</th>
                            <th>Image</th>
                            <th>Price</th>
                            <th>Description</th>
                            {{-- <th>Status</th> --}}
                            <th>Option</th>

                        </tr>
                    </thead>
                    <tbody>

                        @foreach ($products as $key => $product)

                            <tr data-entry-id="{{ $product->id }}">
                                <td>{{ $product->id }}</td>
                                <td>{{ $product->name }}</td>
                                <td>
                                    {{ $product->shop->name }}
                                </td>
                                <td> <img class="img-thumbnail" width="170px" height="100px"
                                        src="{{ asset('/storage/files/' . $product->image) }}" alt="" title=""></td>
                                <td>{{ $product->price }}</td>
                                <td>{{ $product->description }}</td>
                                <td>
                                    <a href="{{ route('products.edit', $product->id) }}"
                                        class="btn btn-warning btn-sm">EDIT</a>
                                    <form action="{{ route('products.destroy', $product->id) }}" method="POST"
                                        onsubmit="return confirm('{{ trans('global.areYouSure') }}');"
                                        style="display: inline-block;">
                                        <input type="hidden" name="_method" value="DELETE">
                                        <input type="hidden" name="_token" value="{{ csrf_token() }}">
                                        <input type="submit" class="btn btn-danger btn-sm" value="{{ trans('DELETE') }}">
                                    </form>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
    <script>
        $(function() {
            let dtButtons = $.extend(true, [], $.fn.dataTable.defaults.buttons)
            $('.datatable:not(.ajaxTable)').DataTable({
                buttons: dtButtons
            })
        });

    </script>
@endsection
