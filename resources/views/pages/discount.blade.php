@extends('layout.app')
@section('main')
    <div class="loader"></div>
    <div id="app">
        <section class="section">
            <div class="container mt-5">
                <div class="page-error">
                    <div class="page-inner">
                        <div>
                            <form>
                                    <div class="d-flex justify-content-center ">
                                        <div class="input-group-append">
                                            <button class="btn btn-primary btn-lg">
                                                Create Discount
                                            </button>
                                        </div>
                                    </div>
                            </form>
                            <div class="mt-3">
                                <a href="{{url('/dashboard')}}">Back to Home</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>
@endsection
