@extends('ProjectMgt::layouts.app')

@section('content')

{{--{{ trans('ProjectMgt::example.welcome') }}--}}

<div class="row page-titles">
    <div class="col-md-5 align-self-center">
        <h5 class="text-white">Planning and Investigation</h5> </div>
    <div class="col-md-7 align-self-center">
        <ol class="breadcrumb">
            <li class="breadcrumb-item text-white">{{--<a href="javascript:void(0)">--}}Planning and Investigation{{--</a>--}}</li>
            <li class="breadcrumb-item text-white active">Project Initiation</li>
        </ol>
    </div>
</div>

<div class="container-fluid">
    <div class="card">

        <div class="card-header">

            <ul class="card-header-menu ml-auto">
                <li>
                    <a href="#"><i class="fa fa-pencil-square-o"></i></a>
                </li>
                <li>
                    <a href="#"><i class="fa fa-file-pdf-o"></i></a>
                </li>
            </ul>

        </div>
        <form class="card-body">
  {{--          <div class="form-right text-right">
                <a class="btn btn-primary" href="{{ route('createProjectInitiation') }}">
                    <i class="fa fa-fw fa-plus"></i>Create
                </a>
            </div>--}}

            <div class="form-inline row">
                <div class="form-group col-md-6">
                    <label for="text" class="col-sm-4 col-form-label text-md-right">Project Name:</label>
                    <input type="text" class="input-default form-control" id="project-name">
                </div>
                <div class="form-group col-md-6">
                    <label for="inputState" class="col-sm-4 col-form-label text-md-right">File reference</label>
                    <input type="text" class="input-default form-control" id="file" name="file-reference">
                </div>
            </div>

            <div class="form-group row mb-0">
                <div class="col-md-8 offset-md-4">
                <button type="submit" class="btn btn-primary"> Search</button>
                <button type="reset" class="btn btn-primary">Cancel</button>
                </div>
            </div>
        </form>
    </div>

        <!-- Icon Cards-->
        <div class="card">
            <div class="card-header">
                <i class="fa fa-table"></i> Data Table Example</div>
            <div class="card-body">
                <div class="table-responsiv">
                    <table class="table table-bordered table-hover" id="dataTables-example">
                        <thead>
                        <tr>
                            <th>Project Name</th>
                            <th>File reference</th>
                            <th>Status</th>
                            <th>Edit</th>
                            <th>Approve/Reject</th>
                        </tr>
                        </thead>
                        <tbody>
                        <tr class="odd gradeX">
                            <td>Trident</td>
                            <td>Internet Explorer 4.0</td>
                            <td>Win 95+</td>
                            <td class="center">4</td>
                            <td class="center">X</td>
                        </tr>
                        <tr class="even gradeC">
                            <td>Trident</td>
                            <td>Internet Explorer 5.0</td>
                            <td>Win 95+</td>
                            <td class="center">5</td>
                            <td class="center">C</td>
                        </tr>
                        <tr class="odd gradeA">
                            <td>Trident</td>
                            <td>Internet Explorer 5.5</td>
                            <td>Win 95+</td>
                            <td class="center">5.5</td>
                            <td class="center">A</td>
                        </tr>
                        <tr class="even gradeA">
                            <td>Trident</td>
                            <td>Internet Explorer 6</td>
                            <td>Win 98+</td>
                            <td class="center">6</td>
                            <td class="center">A</td>
                        </tr>
                        <tr class="odd gradeA">
                            <td>Trident</td>
                            <td>Internet Explorer 7</td>
                            <td>Win XP SP2+</td>
                            <td class="center">7</td>
                            <td class="center">A</td>
                        </tr>
                        <tr class="even gradeA">
                            <td>Trident</td>
                            <td>AOL browser (AOL desktop)</td>
                            <td>Win XP</td>
                            <td class="center">6</td>
                            <td class="center">A</td>
                        </tr>
                        <tr class="gradeA">
                            <td>Gecko</td>
                            <td>Firefox 1.0</td>
                            <td>Win 98+ / OSX.2+</td>
                            <td class="center">1.7</td>
                            <td class="center">A</td>
                        </tr>
                        <tr class="gradeA">
                            <td>Gecko</td>
                            <td>Firefox 1.5</td>
                            <td>Win 98+ / OSX.2+</td>
                            <td class="center">1.8</td>
                            <td class="center">A</td>
                        </tr>
                        <tr class="gradeA">
                            <td>Gecko</td>
                            <td>Firefox 2.0</td>
                            <td>Win 98+ / OSX.2+</td>
                            <td class="center">1.8</td>
                            <td class="center">A</td>
                        </tr>
                        <tr class="gradeA">
                            <td>Gecko</td>
                            <td>Firefox 3.0</td>
                            <td>Win 2k+ / OSX.3+</td>
                            <td class="center">1.9</td>
                            <td class="center">A</td>
                        </tr>
                        <tr class="gradeA">
                            <td>Gecko</td>
                            <td>Camino 1.0</td>
                            <td>OSX.2+</td>
                            <td class="center">1.8</td>
                            <td class="center">A</td>
                        </tr>
                        <tr class="gradeA">
                            <td>Gecko</td>
                            <td>Camino 1.5</td>
                            <td>OSX.3+</td>
                            <td class="center">1.8</td>
                            <td class="center">A</td>
                        </tr>
                        <tr class="gradeA">
                            <td>Gecko</td>
                            <td>Netscape 7.2</td>
                            <td>Win 95+ / Mac OS 8.6-9.2</td>
                            <td class="center">1.7</td>
                            <td class="center">A</td>
                        </tr>
                        <tr class="gradeA">
                            <td>Gecko</td>
                            <td>Netscape Browser 8</td>
                            <td>Win 98SE+</td>
                            <td class="center">1.7</td>
                            <td class="center">A</td>
                        </tr>
                        <tr class="gradeA">
                            <td>Gecko</td>
                            <td>Netscape Navigator 9</td>
                            <td>Win 98+ / OSX.2+</td>
                            <td class="center">1.8</td>
                            <td class="center">A</td>
                        </tr>
                        <tr class="gradeA">
                            <td>Gecko</td>
                            <td>Mozilla 1.0</td>
                            <td>Win 95+ / OSX.1+</td>
                            <td class="center">1</td>
                            <td class="center">A</td>
                        </tr>

                        </tbody>
                    </table>
                </div>
            </div>
        <div class="card-footer small">Updated yesterday at 11:59 PM</div>

    </div>

</div>

@endsection