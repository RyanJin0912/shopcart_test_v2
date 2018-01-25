@extends('layouts.master')

@section('title')
    Laravel Ryan's Shop
@endsection



@section('content')
    <div class="row">
        <div class="col-sm-6 col-md-4">
            <div class="thumbnail">
                <img src="http://3.bp.blogspot.com/-3REl1dnP4Xs/VJLZohkS0mI/AAAAAAAAEIU/M0Bb4r6XLOs/s1600/laravel-logo.jpg" alt="..."  class="img-responsive">
                    <div class="caption">Captain
                        <h3>Product title(Product 1)</h3>
                        <p class="description">Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet. Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet.(Description1)</p>

                                <div class="clearfix">
                                    <div class="pull-left  price">$1000</div>
                                    <a href="#" class="btn btn-success pull-right" role="button">Add to Cart</a>{{--<a href="#" class="btn btn-default" role="button">Button</a>--}}
                                </div>


                    </div>{{--表單--}}
            </div>
        </div>



        <div class="col-sm-6 col-md-4">
            <div class="thumbnail">
                <img



            </div>



        </div>

    </div>
@endsection


