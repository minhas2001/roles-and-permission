@extends('backend.layout.app')
@section('main')
    <div class="pagetitle">
        <h1>Products Tables</h1>
        <nav>
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                <li class="breadcrumb-item">Products</li>
                <li class="breadcrumb-item active">Details</li>
            </ol>
        </nav>
    </div><!-- End Page Title -->
    <section class="section">
        <div class="row">
            <div class="col-lg-12">

                <div class="card">
                    <div class="card-body">
                        <div class="row p-3">
                            <div class="col-10">
                                <h5 class="card-title">Products Table</h5>

                            </div>
                            <div class="col-2">
                                <a href="{{route('products.create')}}" class="btn btn-primary float-end">
                                    + create new
                                </a>

                            </div>
                        </div>
                        <!-- Default Table -->
                        <table class="table">
                            <thead>
                            <tr>
                                <th scope="col">S#</th>
                                <th scope="col">Title</th>
                                <th scope="col">Image</th>
                                <th scope="col">Price</th>
                                <th scope="col">Type</th>

                                <th scope="col">Action</th>

                            </tr>
                            </thead>
                            <tbody>
                            @forelse($products as $product)
                                <tr>
                                    <td>{{$loop->iteration}}</td>
                                    <td>{{$product->title}}</td>
                                    <td>
                                        <img class="avatar rounded-circle"
                                             src="{{asset($product->image)}}" alt="image"
                                             width="40px" height="40px">
                                    </td>
                                    @if($product->sale_price == null)
                                        <td>{{$product->original_price}}</td>
                                    @else
                                        <td>{{$product->sale_price}}</td>

                                    @endif
                                    <td>{{$product->productType->name}}</td>

                                    <td class="d-flex gap-2 p-2">
                                        <a class="btn btn-sm btn-primary bi bi-pencil"
                                           href="{{route('products.edit',$product->id)}}"></a>
                                        <form action="{{route('products.destroy',$product->id)}}" method="POST">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit"
                                                    class="btn btn-sm btn-danger bi bi-trash"></button>
                                        </form>
                                    </td>

                                </tr>
                            @empty
                                <tr>
                                    <td class="text-center" colspan="6"><strong>No record found...</strong></td>
                                </tr>
                            @endforelse
                            </tbody>
                        </table>
                        <!-- End Default Table Example -->
                    </div>
                </div>

            </div>
        </div>

    </section>
@endsection
