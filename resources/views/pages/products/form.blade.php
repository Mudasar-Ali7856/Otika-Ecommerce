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
                                <form class="product-form" method="post" action="{{route('products')}}" enctype="multipart/form-data">
                                    @csrf
                                    <div class="form-row">
                                        <div class="form-group col-md-6">
                                            <label for="name">Name</label>
                                            <input type="text" class="form-control" name="name" id="name"
                                                placeholder="Name">
                                        </div>
                                        <div class="form-group col-md-6">
                                            <label>Image</label>
                                            <input type="file" class="form-control"  name="image" id="image"
                                          placeholder="Image">
                                        </div>
                                    </div>
                                    <div class="form-row">
                                        <div class="form-group col-md-6" name="description">
                                            <label for="">Description</label>
                                            <textarea class="form-control"></textarea>
                                        </div>
                                    </div>
                                    <div class="form-group mb-3">
                                        <label for="order" class="control-label">Order</label>
                                        <input class="form-control is-valid" placeholder="Order by" name="order"
                                            type="number" id="order"
                                            aria-describedby="order-error">
                                        <span id="order-error" class="invalid-feedback" style="display: inline;"></span>
                                    </div>
                                    {{-- <div class="form-group">
                                        <label class="d-block">Enable Order Tracking</label>
                                        <div class="form-check">
                                            <input class="form-check-input" type="radio" name="exampleRadios"
                                                id="exampleRadios1" checked>
                                            <label class="form-check-label" for="exampleRadios1">
                                                YES
                                            </label>
                                        </div>
                                        <div class="form-check">
                                            <input class="form-check-input" type="radio" name="exampleRadios"
                                                id="exampleRadios2" checked>
                                            <label class="form-check-label" for="exampleRadios2">
                                                NO
                                            </label>
                                        </div>
                                    </div> --}}
                                    <div class="form-row">
                                        <div class="form-group col-md-6">
                                            <label for="name">Category</label>
                                            <input type="text" class="form-control" id="category" name="category"
                                                placeholder="Category">
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
    @push('custom-scripts')
        <script src="https://cdn.jsdelivr.net/jquery.validation/1.16.0/jquery.validate.min.js"></script>
        <script>
            $(document).ready(function() {
                $(".product-form").validate({
                    rules: {
                        name: 'required',
                        image: 'required',
                        description: {
                            required: true,
                            maxlength: 255,
                        },
                    }
                });
            });
        </script>
    @endpush
