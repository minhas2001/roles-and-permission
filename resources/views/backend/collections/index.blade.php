@extends('backend.layout.app')
@section('main')
    <div class="pagetitle">
        <h1>Trending Collections Tables</h1>
        <nav>
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="#">Home</a></li>
                <li class="breadcrumb-item">Collections</li>
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
                                <h5 class="card-title">Collections Table</h5>

                            </div>
                            <div class="col-2">
                                <a href="{{route('collections.create')}}" class="btn btn-primary float-end">
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

                            </tr>
                            </thead>
                            <tbody>
                            @forelse($collections as $collection)
                            <tr>
                                <td>{{$loop->iteration}}</td>
                                <td>{{$collection->title}}</td>
                                <td>{{$collection->description}}</td>
                                <td >
                                        <img class="avatar rounded-circle"
                                             src="{{asset($collection->image)}}" alt="image"
                                             width="40px" height="40px">
                                </td>


                                <td class="d-flex gap-2 justify-content-center text-center">
                                    <a class="btn btn-sm btn-primary bi bi-pencil"
                                       href="{{route('collections.edit',$collection->id)}}"></a>
                                    <form action="{{route('collections.destroy',$collection->id)}}" method="POST">
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
