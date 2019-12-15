@extends('layouts.app')

@section('content')
    <div class="container">
        <form action="/product" method="post" >

            <label for="name">Product Name</label> <br>
            <input type="text" name="name" class="form-control" placeholder=""> <br> <br>

{{--            <div>--}}
{{--                {{$errors->first('name')}}--}}
{{--            </div>--}}
            <label for="detail">Product Detail</label> <br>
            <input type="text" name="detail" class="form-control" placeholder=""> <br> <br>

{{--            <div>--}}
{{--                {{$errors->first('detail')}}--}}
{{--            </div>--}}

            <label for="price">Product Price</label> <br>
            <input type="text" name="price" class="form-control">

{{--            <div>--}}
{{--                {{$errors->first('price')}}--}}
{{--            </div>--}}

            <label for="stock">Product Stock</label> <br>
            <input type="text" name="stock" class="form-control">

{{--            <div>--}}
{{--                {{$errors->first('stock')}}--}}
{{--            </div>--}}

            <label for="discount">Product Discount</label> <br>
            <input type="text" name="discount" class="form-control">

{{--            <div>--}}
{{--                {{$errors->first('discount')}}--}}
{{--            </div>--}}
            <br>
            <button class="btn btn-primary">Add Product</button>
            @csrf
        </form>
    </div>

@endsection
