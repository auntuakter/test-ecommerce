
@extends('layouts.master')
@section('content')
 <!--sidebar + content start -->
 <div class="container">
    <div class="row">
        <div class="col-md-4">
            <div class="list-group margin-top-20">
                <a href="#" class="list-group-item list-group-item-action active" aria-current="true">
                The current link item
                </a>
                <a href="#" class="list-group-item list-group-item-action">A second link item</a>
                <a href="#" class="list-group-item list-group-item-action">A third link item</a>
                <a href="#" class="list-group-item list-group-item-action">A fourth link item</a>
                <a class="list-group-item list-group-item-action disabled">A disabled link item</a>
            </div>
        </div>
        <div class="col-md-8">
            <div class="widget">
                <h3>Featured Products</h3>
                <div class="row">
                    <div class="col-md-3">
                        <div class="card">
                            <img src="{{ asset('frontend/assets/css/images/formal.jpg') }}" class="card-img-top feature-img" alt="...">
                            <div class="card-body">
                                <h5 class="card-title">Samsung</h5>
                                <h3>Tk- 45000 BDT</h3>
                                <p class="card-text">Some quick example text</p>
                                <a href="#" class="btn btn-primary">Add to Cart</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="card">
                            <img src="{{ asset('frontend/assets/css/images/formal.jpg') }}" class="card-img-top feature-img" alt="...">
                            <div class="card-body">
                                <h5 class="card-title">Samsung</h5>
                                <h3>Tk- 45000 BDT</h3>
                                <p class="card-text">Some quick example text</p>
                                <a href="#" class="btn btn-primary">Add to Cart</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="card">
                            <img src="{{ asset('frontend/assets/css/images/formal.jpg') }}" class="card-img-top feature-img" alt="...">
                            <div class="card-body">
                                <h5 class="card-title">Samsung</h5>
                                <h3>Tk- 45000 BDT</h3>
                                <p class="card-text">Some quick example text</p>
                                <a href="#" class="btn btn-primary">Add to Cart</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="card">
                            <img src="{{ asset('frontend/assets/css/images/formal.jpg') }}" class="card-img-top feature-img" alt="...">
                            <div class="card-body">
                                <h5 class="card-title">Samsung</h5>
                                <h3>Tk- 45000 BDT</h3>
                                <p class="card-text">Some quick example text</p>
                                <a href="#" class="btn btn-primary">Add to Cart</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="card">
                            <img src="{{ asset('frontend/assets/css/images/formal.jpg') }}" class="card-img-top feature-img" alt="...">
                            <div class="card-body">
                                <h5 class="card-title">Samsung</h5>
                                <h3>Tk- 45000 BDT</h3>
                                <p class="card-text">Some quick example text</p>
                                <a href="#" class="btn btn-primary">Add to Cart</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="card">
                            <img src="{{ asset('frontend/assets/css/images/formal.jpg') }}" class="card-img-top feature-img" alt="...">
                            <div class="card-body">
                                <h5 class="card-title">Samsung</h5>
                                <h3>Tk- 45000 BDT</h3>
                                <p class="card-text">Some quick example text</p>
                                <a href="#" class="btn btn-primary">Add to Cart</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="card">
                            <img src="{{ asset('frontend/assets/css/images/formal.jpg') }}" class="card-img-top feature-img" alt="...">
                            <div class="card-body">
                                <h5 class="card-title">Samsung</h5>
                                <h3>Tk- 45000 BDT</h3>
                                <p class="card-text">Some quick example text</p>
                                <a href="#" class="btn btn-primary">Add to Cart</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="card">
                            <img src="{{ asset('frontend/assets/css/images/formal.jpg') }}" class="card-img-top feature-img" alt="...">
                            <div class="card-body">
                                <h5 class="card-title">Samsung</h5>
                                <h3>Tk- 45000 BDT</h3>
                                <p class="card-text">Some quick example text</p>
                                <a href="#" class="btn btn-primary">Add to Cart</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="widget">
                <h3>Trending Products</h3>
            </div>
        </div>
    </div>
</div>
<!--sidebar + content end -->
@endsection
