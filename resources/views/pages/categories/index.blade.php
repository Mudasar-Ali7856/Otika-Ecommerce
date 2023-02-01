@extends('layout.app')
@section('main')
    <div class="main-content">
        <section class="section">
            <div class="section-body">
                <div class="row">
                    <div class="col-12">
                        <div class="footer text-right mb-3">
                            <a class="btn btn-primary text-right" href="{{url('/categories/form')}}" role="button">AddNew</a>
                        </div>
                        <div class="card">
                            <div class="card-header">
                                <h4>Categories</h4>
                            </div>
                            <div class="card-body">
                                <div class="table-responsive">
                                    <table class="table table-striped" id="table-1">
                                        <thead>
                                            <tr>
                                                <th class="text-center">
                                                </th>
                                                <th>Name</th>
                                                <th>Image</th>
                                                <th>Description</th>
                                                <th>Orders</th>
                                                <th>Action</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @foreach ($categories as $category )
                                            <tr>
                                                <td>
                                                    1
                                                </td>
                                                <td>{{$category->name}}</td>
                                                <td><img style="width: 40px" src="{{asset('/images/'.$category->image)}}" alt="image"></td>
                                                <td>{{$category->description}}</td>
                                                <td>{{$category->order}}</td>

                                                <td>
                                                    <a   href="{{url('/category/edit/'.$category->id)}}" class="btn btn-primary btn-action mr-1" class="edit"
                                                        data-toggle="tooltip" title="Edit"><i
                                                            class="fas fa-pencil-alt"></i></a>
                                                    <a   href="{{url('/category/delete/'.$category->id)}}" class="btn btn-danger btn-action" class="delete"
                                                        data-toggle="tooltip" title="Delete"
                                                        data-confirm="Are You Sure?|This action can not be undone. Do you want to continue?"
                                                        data-confirm-yes="alert('Deleted')"><i class="fas fa-trash"></i></a>
                                                        @endforeach
                                                </td>
                                            </tr>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        @endsection
