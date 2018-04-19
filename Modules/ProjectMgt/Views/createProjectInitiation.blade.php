@extends('ProjectMgt::layouts.app')

@section('content')

    {{--{{ trans('ProjectMgt::example.welcome') }}--}}

    <div class="row page-titles">
        <div class="col-md-5 align-self-center">
            <h4 class="text-white">Planning and Investigation</h4> </div>
        <div class="col-md-7 align-self-center">
            <ol class="breadcrumb">
                <li class="breadcrumb-item text-white">{{--<a href="javascript:void(0)">--}}Planning and Investigation{{--</a>--}}</li>
                <li class="breadcrumb-item text-white active">Create Project</li>
            </ol>
        </div>
    </div>

    <div class="container-fluid">
        <div class="card">
            <form class="card-body">

                <div class="form-inline row">
                    <div class="form-group col-md-6">
                        <label for="text" class="col-sm-4 col-form-label text-md-right">Region:</label>
                        <select id="inputState" class="form-control">
                            <option selected>Choose...</option>
                            <option>Jajpur</option>
                        </select>
                    </div>

                    <div class="form-group col-md-6">
                        <label for="text" class="col-sm-4 col-form-label text-md-right">Circle:</label>
                        <select id="inputState" class="form-control">
                            <option selected>Choose...</option>
                            <option>Jajpur</option>
                        </select>
                    </div>

                    <div class="form-group col-md-6">
                        <label for="text" class="col-sm-4 col-form-label text-md-right">Division:</label>
                        <select id="inputState" class="form-control">
                            <option selected>Choose...</option>
                            <option>Jajpur</option>
                        </select>
                    </div>

                    <div class="form-group col-md-6">
                        <label for="text" class="col-sm-4 col-form-label text-md-right">Sub Division:</label>
                        <select id="inputState" class="form-control">
                            <option selected>Choose...</option>
                            <option>Jajpur</option>
                        </select>
                    </div>

                    <div class="form-group col-md-6">
                        <label for="text" class="col-sm-4 col-form-label text-md-right">Section:</label>
                        <select id="inputState" class="form-control">
                            <option selected>Choose...</option>
                            <option>Jajpur</option>
                        </select>
                    </div>
                    <div class="form-group col-md-6">
                        <label for="inputState" class="col-sm-4 col-form-label text-md-right">Project Name:</label>
                        <input type="text" class="input-default form-control" id="file" name="file-reference">
                    </div>
                    <div class="form-group col-md-6">
                        <label for="inputState" class="col-sm-4 col-form-label text-md-right">Project Type:</label>
                        <input type="text" class="input-default form-control" id="file" name="file-reference">
                    </div>

                    <div class="form-group col-md-6">
                        <label for="inputState" class="col-sm-4 col-form-label text-md-right">File Reference:</label>
                        <input type="text" class="input-default form-control" id="file" name="file-reference">
                    </div>

                    <div class="form-group col-md-6">
                        <label for="inputState" class="col-sm-4 col-form-label text-md-right">Description:</label>
                        <input type="text" class="input-default form-control" id="file" name="file-reference">
                    </div>
                </div>

                <div class="form-group row mb-0">
                    <div class="col-md-8 offset-md-5">
                        <button type="submit" class="btn btn-primary">Save</button>
                        <button type="reset" class="btn btn-primary">Cancel</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
@endsection