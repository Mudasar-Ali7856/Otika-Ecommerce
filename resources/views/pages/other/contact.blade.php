@extends('layout.app')
@section('main')

 <div class="loader"></div>
        <div id="app">
            <section class="section">
                <div class="container mt-5">
                    <div class="row">
                        <div class="col-6 col-md-6 offset-md-1 col-lg-8 offset-lg-1">
                            <div class="login-brand">
                                Otika
                            </div>
                            <div class="card card-primary ml-5">
                                <div class="">
                                    <div class="col-6 col-md-6 ">
                                        <div class="card-header text-center">
                                            <h4>Contact Us</h4>
                                        </div>
                                        <div class="card-body">
                                            <form method="POST">
                                                <div class="form-group floating-addon">
                                                    <label>Name</label>
                                                    <div class="input-group">
                                                        <div class="input-group-prepend">
                                                            <div class="input-group-text">
                                                                <i class="far fa-user"></i>
                                                            </div>
                                                        </div>
                                                        <input id="name" type="text" class="form-control"
                                                            name="name" autofocus placeholder="Name">
                                                    </div>
                                                </div>
                                                <div class="form-group floating-addon">
                                                    <label>Email</label>
                                                    <div class="input-group">
                                                        <div class="input-group-prepend">
                                                            <div class="input-group-text">
                                                                <i class="fas fa-envelope"></i>
                                                            </div>
                                                        </div>
                                                        <input id="email" type="email" class="form-control"
                                                            name="email" placeholder="Email">
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <label>Message</label>
                                                    <textarea class="form-control" placeholder="Type your message" data-height="150"></textarea>
                                                </div>
                                                <div class="form-group text-right">
                                                    <button type="submit" class="btn btn-round btn-lg btn-primary">
                                                        Send Message
                                                    </button>
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="simple-footer">
                                Copyright &copy; Otika 2018
                            </div>
                        </div>
                    </div>
                </div>
            </section>
        </div>
    @endsection
