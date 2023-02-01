@extends('layout.app')
@section('main')
    <div class="main-content">
        <section class="section">
            <div class="section-body">
                <div class="row">
                    <div class="col-8 col-md-6 col-lg-12">
                        <div class="card">
                            <div class="card-header">
                                <h4>Shipping</h4>
                            </div>
                            <div class="card-body">
                                <div class="form-group">
                                    <label>Name of shipping rules</label>
                                    <input type="text" class="form-control">
                                </div>
                                <div class="form-group">
                                    <label>Phone Number (US Format)</label>
                                    <div class="input-group">
                                        <div class="input-group-prepend">
                                            <div class="input-group-text">
                                                <i class="fas fa-phone"></i>
                                            </div>
                                        </div>
                                        <input type="text" class="form-control phone-number">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label>Shipping Fee</label>
                                    <div class="input-group">
                                        <div class="input-group-prepend">
                                            <div class="input-group-text">
                                                $
                                            </div>
                                        </div>
                                        <input type="text" class="form-control currency">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label>Purchase Code</label>
                                    <input type="text" class="form-control purchase-code"
                                        placeholder="ASDF-GHIJ-KLMN-OPQR">
                                </div>
                                <div class="form-group">
                                    <label>Based on product price</label>
                                    <div class="input-group">
                                        <div class="input-group-prepend">
                                            <div class="input-group-text">
                                                $
                                            </div>
                                        </div>
                                        <input type="text" class="form-control currency">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label>Invoice</label>
                                    <input type="text" class="form-control invoice-input">
                                </div>
                                <div class="form-group">
                                    <label>Date</label>
                                    <input type="text" class="form-control datemask" placeholder="YYYY/MM/DD">
                                </div>
                                <div class="form-group">
                                    <label>Credit Card</label>
                                    <input type="text" class="form-control creditcard">
                                </div>
                                <div class="form-group">
                                    <label>Tags</label>
                                    <input type="text" class="form-control inputtags">
                                </div>
                                <div class="form-group mb-0">
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" id="gridCheck">
                                        <label class="form-check-label" for="gridCheck">
                                            I agree all terms and conditions
                                        </label>
                                    </div>
                                </div>
                                <div class="card-footer text-right">
                                    <button class="btn btn-primary text-right" role="button" type="submit"
                                        name="submitbutton" class="button">Submit</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>
@endsection
