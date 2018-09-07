@extends('layouts.app')

@section('content')

    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Upload txt File</div>

                <div class="card-body">

                    <form action="{{route('fileread')}}" method="POST" enctype="multipart/form-data">

                        @csrf

                        <div class="row">

                            <div class="col-xs-12 col-sm-12 col-md-12">

                                <div class="form-group">

                                    <strong>File:</strong>

                                    <input type="file" name="filetxt" accept="text/*">

                                </div>

                            </div>

                            <div class="col-xs-12 col-sm-12 col-md-12 text-center">

                                <button type="submit" class="btn btn-primary">Upload</button>

                            </div>

                        </div>


                    </form>

                </div>
            </div>
        </div>
    </div>

@endsection