@extends('layouts.master')
@section('content')

    <div class="card">
        <div class="card-header bg-primary">
            <h3 style="color:white">ADD NEW PRODUCT</h3>
        </div>
        @if ($message = Session::get('success'))
            <div class="alert alert-success">
                <p>{{ $message }}</p>
            </div>
        @endif
        <div class="card-body">
            <form action="{{ route('products.store') }}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="row">
                    <div class="col-lg-12">

                        <div class="row form-group {{ $errors->has('shop_id') ? 'has-error' : '' }}">
                            <div class="col-lg-3">
                                <lable>Shop ID:</lable>
                            </div>
                            <div class="col-lg-9">
                                <select class="form-control form-control-sm" name="shop_id" id="shop_id"
                                    value="{{ old('shop_id', isset($item) ? $item->area : '') }}">
                                    <option selected disabled>Select Shop</option>
                                    @foreach ($shops as $shop)
                                        <option value="{{ $shop->id }}">
                                            {{ $shop->name }}
                                        </option>
                                    @endforeach
                                </select>
                                @if ($errors->has('area'))
                                    <em class="invalid-feedback">
                                        {{ $errors->first('area') }}
                                    </em>
                                @endif
                            </div>
                        </div>


                        <div class="row form-group {{ $errors->has('id') ? 'has-error' : '' }}">
                            <div class="col-lg-3">
                                <lable>Product ID<span style="color: red">*</span>:</lable>
                            </div>
                            <div class="col-lg-9">
                                <input type="text" name="id" readonly class="form-control form-control-sm"
                                    placeholder="Enter id Here" @if ($lastProduct) value="{{ $lastProduct->id + 1 }}">
                         @else
                                                                                                                                                                 value="1001"> @endif @if ($errors->has('id'))
                                <em class="invalid-feedback">
                                    {{ $errors->first('id') }}
                                </em>
                                @endif
                            </div>
                        </div>



                        <div class="row form-group {{ $errors->has('name') ? 'has-error' : '' }}">
                            <div class="col-lg-3">
                                <lable> Product Name<span style="color: red">*</span>:</lable>
                            </div>
                            <div class="col-lg-9">
                                <input type="text" name="name" class="form-control form-control-sm"
                                    placeholder="Enter  Name Here"
                                    value="{{ old('name', isset($product) ? $product->name : '') }}">
                                @if ($errors->has('name'))
                                    <em class="invalid-feedback">
                                        {{ $errors->first('name') }}
                                    </em>
                                @endif
                            </div>
                        </div>

                        <div class="row form-group {{ $errors->has('image') ? 'has-error' : '' }}">
                            <div class="col-lg-3">
                                <lable> Product Image<span style="color: red">*</span>:</lable>
                            </div>
                            <div class="col-lg-9">
                                <input type="file" name="image" class="form-control" placeholder="image">
                                @if ($errors->has('image'))
                                    <em class="invalid-feedback">
                                        {{ $errors->first('image') }}
                                    </em>
                                @endif
                            </div>
                        </div>


                        <div class="row form-group {{ $errors->has('price') ? 'has-error' : '' }}">
                            <div class="col-lg-3">
                                <lable> Price<span style="color: red">*</span>:</lable>
                            </div>
                            <div class="col-lg-9">
                                <input type="text" name="price" class="form-control form-control-sm"
                                    placeholder="Enter  Price Here"
                                    value="{{ old('price', isset($item) ? $item->price : '') }}">
                                @if ($errors->has('price'))
                                    <em class="invalid-feedback">
                                        {{ $errors->first('price') }}
                                    </em>
                                @endif
                            </div>
                        </div>



                        <div class="row form-group {{ $errors->has('description') ? 'has-error' : '' }}">
                            <div class="col-lg-3">
                                <lable> Description<span style="color: red"></span>:</lable>
                            </div>
                            <div class="col-lg-9">
                                <textarea type="text" name="description" class="form-control form-control-sm"
                                    placeholder="Enter  Key Words Here"
                                    value="{{ old('description', isset($shop) ? $shop->description : '') }}"></textarea>
                                @if ($errors->has('description'))
                                    <em class="invalid-feedback">
                                        {{ $errors->first('description') }}
                                    </em>
                                @endif
                            </div>
                        </div>


                        <div class="row">
                            <div class="offset-9 col-lg-1">
                                <input type="submit" name="status" value="Submit" class="btn btn-primary">
                            </div>
                            <div class="col-lg-1">
                                <a class="btn btn-light" href="{{ url()->previous() }}">Cancel</a>
                            </div>
                            <div class="col-lg-1">
                                <input type="reset" value="Clear" class="btn btn-warning">
                            </div>
                        </div>

                    </div>
                </div>
            </form>
        </div>
    </div>

    <script src="https://maps.google.com/maps/api/js?sensor=false"></script>
    <script>
        function showPosition() {
            if (navigator.geolocation) {
                navigator.geolocation.getCurrentPosition(showMap, showError);
            } else {
                alert("Sorry, your browser does not support HTML5 geolocation.");
            }
        }

        // Define callback function for successful attempt
        function showMap(position) {
            // Get location data
            lat = position.coords.latitude;
            long = position.coords.longitude;
            var latlong = new google.maps.LatLng(lat, long);

            var myOptions = {
                center: latlong,
                zoom: 16,
                mapTypeControl: true,
                navigationControlOptions: {
                    style: google.maps.NavigationControlStyle.SMALL
                }

            }

            var map = new google.maps.Map(document.getElementById("embedMap"), myOptions);
            var marker = new google.maps.Marker({
                position: latlong,
                map: map,
                draggable: true,
                title: "You are here!"
            });

            google.maps.event.addListener(marker, 'dragend', function(marker) {
                var latLng = marker.latLng;

                var x = latLng.lat();
                var y = latLng.lng();

                document.getElementById("lat-span").value = x;
                document.getElementById("lon-span").value = y;


                // document.getElementById('lat-span').innerHTML = latLng.lat();
                // document.getElementById('lon-span').innerHTML = latLng.lng();
            });
        }

        // Define callback function for failed attempt
        function showError(error) {
            if (error.code == 1) {
                result.innerHTML = "You've decided not to share your position, but it's OK. We won't ask you again.";
            } else if (error.code == 2) {
                result.innerHTML = "The network is down or the positioning service can't be reached.";
            } else if (error.code == 3) {
                result.innerHTML = "The attempt timed out before it could get the location data.";
            } else {
                result.innerHTML = "Geolocation failed due to unknown error.";
            }
        }

    </script>

@endsection
