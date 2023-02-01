@extends('layout.app')
@section('main')
    <div class="main-content">
        <section class="section">
            <div class="section-body">
                <div class="row">
                    <div class="col-12">
                        <div class="footer text-right mb-3">
                            <a class="btn btn-primary text-right" href="{{ url('') }}"role="button">Add
                                New</a>
                        </div>
                        <div class="card">
                            <div class="card-header">
                                <h4>Flash Sale</h4>
                                <div class="card-header-action">
                                    <form>
                                        <div class="input-group">
                                            <input type="text" class="form-control" placeholder="Search">
                                            <div class="input-group-btn">
                                                <button class="btn btn-primary"><i class="fas fa-search"></i></button>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                            <div class="card-body p-0">
                                <div class="table-responsive">
                                    <table class="table table-striped" id="sortable-table">
                                        <thead>
                                            <tr>
                                                <th class="text-center">
                                                    <i class="fas fa-th"></i>
                                                </th>
                                                <th>Id</th>
                                                <th>Name</th>
                                                <th>Percentage</th>
                                                <th>Due Date</th>
                                                <th>Status</th>
                                                <th>Action</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td>
                                                    <div class="sort-handler">
                                                    </div>
                                                </td>
                                                <td>10</td>
                                                <td class="align-middle">Winter Sale</td>
                                                <td>70%</td>
                                                <td>2023-01-11</td>
                                                <td>
                                                    <div class="badge badge-success">Completed</div>
                                                </td>
                                                <td>
                                                    <a class="btn btn-primary btn-action mr-1" class="edit"
                                                        data-toggle="tooltip" title="Edit"><i
                                                            class="fas fa-pencil-alt"></i></a>
                                                    <a class="btn btn-danger btn-action" class="delete"
                                                        data-toggle="tooltip" title="Delete"
                                                        data-confirm="Are You Sure?|This action can not be undone. Do you want to continue?"
                                                        data-confirm-yes="alert('Deleted')"><i class="fas fa-trash"></i></a>
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>
@endsection
