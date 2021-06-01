@extends('layouts.master')


@section('content')
    <div class="row">
        <div class="col-2">
            <a href="{{ route('products.create') }}" class="btn btn-warning"> ADD NEW PRODUCT</a>
        </div>
    </div>
    <br />
    <div class="card">
        <div class="card-header" style="background-color: brown">
            <h3 style="color:white">
                Products </h3>
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
                                    <a href="{{ route('products.edit', $product->id) }}" class="btn btn-warning btn-sm"
                                        style="width: 90px">EDIT</a>
                                    <br>
                                    <br>

                                    <a href="{{ route('products.edit', $product->id) }}" style="width: 90px"
                                        class="btn btn-warning btn-sm">VIEW</a>
                                    <br>
                                    <br>

                                    <form action="{{ route('products.destroy', $product->id) }}" method="POST"
                                        onsubmit="return confirm('{{ trans('Are You Sure?') }}');"
                                        style="display: inline-block;">
                                        <input type="hidden" name="_method" value="DELETE">
                                        <input type="hidden" name="_token" value="{{ csrf_token() }}">
                                        <input style="width: 90px" type="submit" class="btn btn-warning btn-sm"
                                            value="{{ trans('DELETE') }}">
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
