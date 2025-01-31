@extends('ui.master')
@section('content')
    <style>
        .box {
            border: 1px solid #cccccc;
            box-shadow: 5px 5px 15px rgba(89, 235, 5, 0.3);
            transition: box-shadow 0.3s ease;
        }

        .box:hover {
            box-shadow: 10px 10px 30px rgba(233, 6, 6, 0.5);
        }
    </style>

    <div class="container ">
      <div class="row mx-auto ">
        <div class="col-12 mt-5 ">
            <h1 style="font-family: 'Freckle Face', cursive;color: rgb(30, 77, 78)" class="text-center mb-4" style="color: cadetblue">Choose Categories </h1>
            @if (!$categories->isEmpty())
                <div class="row ">
                    @foreach ($categories as $category)
                        <a href="{{ route('test.start', $category->id) }}"
                            class="mb-2 col-md-7 text-decoration-none mx-auto border box rounded-lg p-2"
                            style="font-family: 'Freckle Face', cursive; color: rgb(30, 77, 78)">
                            <h4>{{ $category->name }}</h4>
                        </a>
                    @endforeach
                </div>
            @endif
        </div>
      </div>
    </div>
@endsection
