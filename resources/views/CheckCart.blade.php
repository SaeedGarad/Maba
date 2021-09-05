@extends('admin.adminLayout')
@section('content')

        {{--  <div class="row"  id="products">  --}}

        @foreach ($products as $product)

            <div class="col-3">
                <div class="card mb-3">
                    <h3 class="card-header">{{ $product->name }}</h3>
                    <div class="card-body">
                        <h5 class="card-title"> {{ $product->title }} </h5>
                        <h6 class="card-subtitle text-muted">{{ $product->subTitle }}</h6>
                    </div>
                    <img style="height: 200px; width: 100%; display: block;"
                        src="/image/{{ $product->image }}"
                        alt="Card image" />
                    <ul class="list-group list-group-flush">
                        <li class="list-group-item">{{ $product->description }}</li>
                        <li class="list-group-item">$ {{ $product->price }}</li>
                    </ul>
                    <div class="card-body">
                        <form action="/cart" method="POST" style="display: inline">
                            @csrf
                            <input type="hidden" name="product_id" value="{{ $product->id }}">
                        <button type="submit" class="btn btn-primary ">
                            Add to cart
                        </button>
                        </form>
                        <a href="/show/{{ $product->id }}"  class="btn btn-outline-primary float-right">
                            View
                        </a>
                    </div>
                </div>
            </div>

        @endforeach


        </div>

@endsection
