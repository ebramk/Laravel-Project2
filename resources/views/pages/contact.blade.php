@extends('layouts.landing')
@section('content')
    <div class="container py-5">
        <div class="row">
            <div class="col-md-12">
                <h2 class="text-center mb-3">Contact Us</h2>
                <div class="row">
                    <div class="col-md-6 mx-auto">
                        <div class="card border-secondary">
                            <div class="card-header">
                                <h3 class="mb-0 my-2">Get in touch</h3>
                            </div>
                            <div class="card-body">

                                    <form action="{{route('contact.store')}}" method="post">
                                        @csrf
                                        <div class="form-group">
                                            <label for="exampleFormControlInput1">Full Name:</label>
                                            <input type="name" name="name" class="form-control" id="name" placeholder="Your Name">
                                        </div>


                                        <div class="form-group">
                                            <label for="exampleFormControlTextarea1">Message:</label>
                                            <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
                                        </div>
                                        <button type="submit" class="btn btn-primary mb-2">Submit</button>
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