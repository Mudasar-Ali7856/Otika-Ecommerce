@extends('frontend.layout.app')
@section('frontend_main')
    <div class="main-content">
        <div class="row">
            <div class="col-12 mt-5 mb-5">
                <div class="card">
                    <div class="card-header">
                        <h4>Details</h4>
                        <div class="card-header-action">
                        </div>
                    </div>
                    <div class="card-body p-0">
                        <div class="table-responsive">
                            <table class="table table-striped" id="sortable-table">
                                <thead>
                                    <tr>
                                        <th>Product</th>
                                        <th>Amount</th>
                                        <th>Quantity</th>
                                        <th>Total</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>
                                            <img alt="image" src="assets/img/users/user-1.png" width="35">
                                            <img alt="image" src="assets/img/users/user-3.png" width="35">
                                            <img alt="image" src="assets/img/users/user-4.png" width="35">
                                        </td>
                                        <td class="align-middle">$29.2 </td>
                                        <td>
                                            <div class="d-flex">
                                                <input type="button" value="-"
                                                    class="button-minus border rounded-circle  icon-shape icon-sm mx-1 "
                                                    data-field="quantity">
                                                <input type="number" step="1" max="10" value="1"
                                                    name="quantity" class="quantity-field border-0 text-center w-25">
                                                <input type="button" value="+"
                                                    class="button-plus border rounded-circle icon-shape icon-sm "
                                                    data-field="quantity">
                                            </div>
                                        </td>
                                        <td class="align-middle">$29.2 </td>
                                        <td>
                                            <a class="btn btn- btn-action" class="delete"
                                                data-toggle="tooltip" title="Delete"
                                                data-confirm="Are You Sure?|This action can not be undone. Do you want to continue?"
                                                data-confirm-yes="alert('Deleted')"><i class=" text-danger bg-light fa-solid fa-trash"></i></a>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <img alt="image" src="assets/img/users/user-4.png" width="35">
                                        </td>
                                        <td class="align-middle">$5.4 </td>
                                        <td>
                                            <div>
                                                <div class="d-flex">
                                                    <input type="button" value="-"
                                                        class="button-minus border rounded-circle  icon-shape icon-sm mx-1 "
                                                        data-field="quantity">
                                                    <input type="number" step="1" max="10" value="1"
                                                        name="quantity" class="quantity-field border-0 text-center w-25">
                                                    <input type="button" value="+"
                                                        class="button-plus border rounded-circle icon-shape icon-sm "
                                                        data-field="quantity">

                                                </div>
                                            </div>
                                        </td>
                                        <td class="align-middle">$29.2 </td>
                                        <td>
                                            <a class="btn btn- btn-action" class="delete"
                                                data-toggle="tooltip" title="Delete"
                                                data-confirm="Are You Sure?|This action can not be undone. Do you want to continue?"
                                                data-confirm-yes="alert('Deleted')"><i class=" text-danger bg-light fa-solid fa-trash"></i></a>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <img alt="image" src="assets/img/users/user-1.png" width="35">
                                        </td>
                                        <td class="align-middle">$15.0</td>
                                        <td>
                                            <div>
                                                <div class="d-flex">

                                                    <input type="button" value="-"
                                                        class="button-minus border rounded-circle  icon-shape icon-sm mx-1 "
                                                        data-field="quantity">
                                                    <input type="number" step="1" max="10" value="1"
                                                        name="quantity" class="quantity-field border-0 text-center w-25">
                                                    <input type="button" value="+"
                                                        class="button-plus border rounded-circle icon-shape icon-sm "
                                                        data-field="quantity">

                                                </div>
                                            </div>
                                        </td>
                                        <td class="align-middle">$29.2 </td>
                                        <td>
                                            <a class="btn btn- btn-action" class="delete"
                                                data-toggle="tooltip" title="Delete"
                                                data-confirm="Are You Sure?|This action can not be undone. Do you want to continue?"
                                                data-confirm-yes="alert('Deleted')"><i class=" text-danger bg-light fa-solid fa-trash"></i></a>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <img alt="image" src="assets/img/users/user-1.png" width="35">
                                            <img alt="image" src="assets/img/users/user-3.png" width="35">
                                        </td>
                                        <td class="align-middle">$10.6 </td>
                                        <td>
                                            <div>
                                                <div class="d-flex">

                                                    <input type="button" value="-"
                                                        class="button-minus border rounded-circle  icon-shape icon-sm mx-1 "
                                                        data-field="quantity">
                                                    <input type="number" step="1" max="10" value="1"
                                                        name="quantity" class="quantity-field border-0 text-center w-25">
                                                    <input type="button" value="+"
                                                        class="button-plus border rounded-circle icon-shape icon-sm "
                                                        data-field="quantity">

                                                </div>
                                            </div>
                                        </td>
                                        <td class="align-middle">$29.2 </td>
                                        <td>
                                            <a class="btn btn- btn-action" class="delete"
                                                data-toggle="tooltip" title="Delete"
                                                data-confirm="Are You Sure?|This action can not be undone. Do you want to continue?"
                                                data-confirm-yes="alert('Deleted')"><i class=" text-danger bg-light fa-solid fa-trash"></i></a>
                                        </td>
                                    </tr>
                        </div>
                        </tbody>
                        </table>
                        <ul class="right_icon">
                            <a href="{{url('/checkout')}}" class="order">Order</a>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>
    </section>
    </div>
@endsection
