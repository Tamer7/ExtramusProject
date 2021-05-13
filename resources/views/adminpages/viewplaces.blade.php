@extends('layouts.adminmaster')

@section('section')
  <div class="container paddingTop20">
    <h1>Negombo View Places</h1>
    <hr>
    <div class="row">
        <div class="col-sm-12">
            <table id="example" class="table table-striped table-bordered" style="width:100%">
                <thead>
                    <tr>
                        <th>Place ID</th>
                        <th>Map Name</th>
                        <th>Place Name</th>
                        <th>Price 1</th>
                        <th>Price 2</th>
                        <th>Price 3</th>
                        <th>Price 4</th>
                        @if (Auth::user()->role == "admin")
                          <th>Action</th>
                        @endif

                    </tr>
                </thead>
                <div id="preloader"></div>
                <tbody id="hidden_table_processing">
                  @foreach ($places as $place)
                    <tr>
                        <td>{{ $place->place_id }}</td>
                        <td>{{ $place->map_name }}</td>
                        <td>{{ $place->place_name }}</td>
                        <td>{{ $place->price1 }} €</td>
                        <td>{{ $place->price2 }} €</td>
                        <td>{{ $place->price3 }} €</td>
                        <td>{{ $place->price4 }} €</td>
                        @if (Auth::user()->role == "admin")
                          <td> <a href="{{ route('admin.place.edit', $place->place_id) }}">Edit</a> /
                            @if ($place->status == -1)
                              <a href="{{ route('admin.place.changestatus', $place->place_id) }}">Activate</a>
                            @else
                              <a href="{{ route('admin.place.changestatus', $place->place_id) }}">Deactivate</a>
                            @endif

                          </td>
                        @endif
                    </tr>
                  @endforeach
                </tbody>
            </table>

            <div id="loader_space"></div>
            <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/pace/1.0.2/pace.min.js"></script>
            <script>
                paceOptions = {
                  ajax: true,
                  document: true,
                  eventLag: false
                };

                Pace.on('done', function() {
                  $('#preloader').delay(100).fadeOut(500);
                  document.getElementById("loader_space").style.display = "none";
                  $('#hidden_table_processing').fadeIn(200);
                });
            </script>


        </div>
    </div>
  </div>
@endsection
