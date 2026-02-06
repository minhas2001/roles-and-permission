@extends('backend.layout.app')
@section('main')
    <div class="pagetitle">
        <h1>Hero Tables</h1>
        <nav>
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                <li class="breadcrumb-item">Hero</li>
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
                                <h5 class="card-title">Default Table</h5>

                            </div>
                            <div class="col-2">
                                <a href="{{route('heroes.create')}}" class="btn btn-primary float-end">
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
                                <th scope="col">Description</th>
                                <th scope="col">Image</th>
                                <th scope="col">Image Title</th>
                                <th scope="col">Price</th>
                            </tr>
                            </thead>
                            <tbody>
                            @forelse($heroes as $hero)
                            <tr>
                                <td>{{$loop->iteration}}</td>
                                <td>{{$hero->title}}</td>
                                <td>{{$hero->description}}</td>
                                <td >
                                        <img class="avatar rounded-circle"
                                             src="{{asset($hero->image)}}" alt="image"
                                             width="60px" height="60px">
                                </td>
                                <td>{{$hero->image_title}}</td>
                                <td>{{$hero->sale_price}}</td>

                                <td class="d-flex gap-2 justify-content-center text-center">
                                    <a class="btn btn-sm btn-primary bi bi-pencil"
                                       href="{{route('heroes.edit',$hero->id)}}"></a>
                                    <form action="{{route('heroes.destroy',$hero->id)}}" method="POST">
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
