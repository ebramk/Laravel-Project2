@extends('layouts.landing')
@section('content')
    <div class="container py-5">
        <div class="row">
            <div class="col-md-12">
                <h2 class="text-center mb-5">Get in touch</h2>
                <div class="row">
                    <div class="col-md-6 mx-auto">
                        <div class="card border-secondary">
                            <div class="card-header">
                                <h3 class="mb-0 my-2">Sign Up</h3>
                            </div>
                            <div class="card-body">
                               
                                    <form action="/contact" method="post">
                                        @csrf
                                        <div class="form-group">
                                            <label for="exampleFormControlInput1">Email address</label>
                                            <input type="email" class="form-control" id="exampleFormControlInput1" placeholder="name@example.com">
                                        </div>


                                        <div class="form-group">
                                            <label for="exampleFormControlTextarea1">Example textarea</label>
                                            <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
                                        </div>
                                    </form>
                            </div>
                        </div>
                    </div>
                </div>
                <!--/row-->

            </div>
            <!--/col-->
        </div>
        <!--/row-->
    </div>
    <!--/container-->
@stop