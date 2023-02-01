@extends('frontend.layout.app')
@section('frontend_main')
    <div class="blue_bg">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="titlepage">
                        <h2>Checkout</h2>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- contact section -->
    <div id="contact" class="contact">
        <div class="container">
            <div class="row">
                <div class="col-md-6 ">
                    <form id="request" class="main_form">
                        <h1>Contact Detail:</h1>
                        <div class="row">
                            <div class="col-md-6 col-sm-6">Name:
                                <input class="contactus" placeholder="First and Last Name" type="type" name="Name">
                            </div>
                            <div class="col-md-6 col-sm-6">Number:
                                <input class="contactus" placeholder="Phone Number" type="type" name="Phone Number">
                            </div>
                            <div class="col-md-6 col-sm-6">Email:
                                <input class="contactus" placeholder="you@email.com" type="type" name="Email">
                            </div>
                            <div class="col-md-6 col-sm-6">Address:
                                <input class="contactus" placeholder="Address" type="type" name="Address">
                            </div>
                            <div class="col-md-12">Company:
                                <input class="contactus" placeholder="Co Inc" type="company" Message="Company">
                            </div>
                            <p class="ml-3 text-secondary mb-4">Double Check that you've entered your email <br> address
                                correctly.We will send order <br> Information to it.</p>
                        </div>
                    </form>
                </div>
                <div class="col-md-6">
                    <form id="request" class="main_form ml-5">
                        <h1> Credit Card Details:</h1>
                        <div class="row">
                            <div class="form-group col-md-6 col-sm-6">
                                <div class="">Payment Type:
                                    <input class="contactus" placeholder="Cash" type="type" name="payment type">
                                </div>
                                <div class="">Card Number
                                    <input class="contactus .bg-light" placeholder="00/0000/0000/0" type="type" name="cardnumber">
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 text-bottom">
                            <div class="invoice-detail-item d-flex">
                                <div class="invoice-detail-name text-primary mr-5">Subtotal</div>
                                <div class="invoice-detail-value text-primary  ml-5">$670.99</div>
                            </div>
                            <div class="invoice-detail-item d-flex">
                                <div class="invoice-detail-name text-primary  mr-5">Shipping</div>
                                <div class="invoice-detail-value text-primary  ml-5">$15</div>
                            </div>
                            <hr class="mt-2 mb-2">
                            <div class="invoice-detail-item d-flex">
                                <div class="invoice-detail-name text-dark mr-5">Total:</div>
                                <div class="invoice-detail-value invoice-detail-value-lg text-dark ml-5">$685.99</div>
                            </div>
                            <div class="col-md-12">
                                <button class="send_btn ml-2 mb-5"> PAY $685.99</button>
                            </div>
                        </div>
                    </form>
                </div>
            </form>
            </div>
        </div>
    </div>
    <!-- end contact section -->
@endsection
{{-- <div class="col-md-6">
        <form id="request" class="main_form">
            <h1>Billing Detail:</h1>
            <div class="">Cardholder Name:
                <input class="contactus" placeholder="Cardholder Name" type="type"
                    name="Cardholder Name">
            </div>
            <div class="">Card Number:
                <input class="contactus" placeholder="Card Number" type="type" name="Card Number">
            </div>
            <div class="">Expiration Date
                <input class="contactus" placeholder="Expiration Date" type="date"
                    name="Expiration Date">
            </div>
            <div class="">CVV
                <input class="contactus" placeholder="" type="password" name="code">
            </div>
            <div class="">Zip Code
                <input class="contactus" placeholder="Zip Code" type="password" Message="Name">
            </div>
            <div class="">City
                <input class="contactus" placeholder="Enter your City" type="drop down" Message="Name">
            </div>
    </div>
    </form> --}}
