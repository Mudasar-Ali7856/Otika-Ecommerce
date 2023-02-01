@extends('layout.app')
@section('main')
    <div class="main-content">
        <section class="section">
            <div class="section-body">
                <div class="row">
                    <div class="col-md-11 ml-5">
                        <div class="card">
                            <div class="card-header">
                                <h4>Products</h4>
                            </div>
                            <div class="card-body">
                                <form class="taxes-form" method="" action="" enctype="multipart/form-data">
                                    @csrf
                                    <div class="form-row">
                                        <div class="form-group col-md-6">
                                            <label>Name</label>
                                            <input type="text" class="form-control" required="" name="name"
                                                placeholder="Name">
                                        </div>
                                        <div class="form-group col-md-6">
                                            <label>Percentage</label>
                                            <input type="text" class="form-control" required="" name="percentage"
                                                placeholder="Percentage">
                                        </div>
                                    </div>
                                    <div class="form-row">
                                        <label>Priority</label>
                                        <input type="text" class="form-control" required="" name="priority"
                                            placeholder="Priority">
                                    </div>
                                    <div class="form-group">
                                        <label>Date</label>
                                        <input type="date" class="form-control">
                                      </div>
                                    <div class="form-row">
                                        <div class="ui-select-wrapper form-group col-md-6">
                                            <label for="status">Status</label>
                                            <select class="form-control ui-select ui-select is-valid" v-pre id="status"
                                                name="status" aria-invalid="false">
                                                <option value="#">Select Status</option>
                                                <option value="o">Published</option>
                                                <option value="1">Completed</option>
                                                <option value="2">Pending</option>
                                            </select>
                                            <svg class="svg-next-icon svg-next-icon-size-16"></svg>
                                        </div>
                                    </div>
                                    <div class="card-footer text-right">
                                        <button class="btn btn-primary text-right" role="button" type="submit"
                                            name="submitbutton" class="submitbutton">Submit</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    @endsection
