@extends('front.master')

@section('title')
    Store Data
@endsection

@section('body')
    <section style="background-color: whitesmoke">
    <div class="container">
        <div class="row">
            <div class="col-md-12 col-sm-12">

                <a href="{{ route('show-data') }}" class="btn btn-outline-success mt-5" style="margin-left: 480px">Your Uploaded Data</a>


                <h4 class="text-center text-success">{{ Session::get('message') }}</h4>

                <div class="mt-5 mb-5">
                    <a href="#linkTwo" data-toggle="collapse" style="color: #1c2d3f">
                        <h3 href="#" class="text-center">Upload Your Data </h3>
                    </a>
                    <div id="linkTwo" class="collapse card mt-3 mb-5 float-left">
                        <div class="mt-3 mb-3">

                            <form action="{{ route('new-data-store') }}" method="POST" enctype="multipart/form-data">
                            @csrf
                                <div class="col-md-6 float-left mb-3">
                                    <div>Image</div>
                                </div>
                                <div class="col-md-6 float-left mb-3">
                                    <input type="file" name="image" accept="image/*">
                                </div>

                                <div class="col-md-6 float-left mb-3">
                                    <div>Audio</div>
                                </div>
                                <div class="col-md-6 float-left mb-3">
                                    <input type="file" name="audio" accept="audio/*">
                                </div>

                                <div class="col-md-6 float-left mb-3">
                                    <div>Video</div>
                                </div>
                                <div class="col-md-6 float-left mb-3">
                                    <input type="file" name="video" accept="video/*">
                                </div>

                                <div class="col-md-6 float-left mb-3">
                                    <div>Document</div>
                                </div>
                                <div class="col-md-6 float-left mb-3">
                                    <input type="file" name="document" accept="document/*">
                                </div>

                                <div class="col-md-6 mr-auto mt-3">
                                    <input type="submit" class="btn btn-success btn-block" value="Submit">
                                </div>
                            </form>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </section>

@endsection
