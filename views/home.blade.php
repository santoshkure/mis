@extends('layouts.app')

@section('content')

<div class="row page-titles">
    <div class="col-md-5 align-self-center">
        <h3 class="text-primary">Dashboard</h3> </div>
    <div class="col-md-7 align-self-center">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="javascript:void(0)">Home</a></li>
            <li class="breadcrumb-item active">Dashboard</li>
        </ol>
    </div>
</div>

<div class="container-fluid module-list">
      <div class="row">
          <div class="col-xl-3 col-sm-4 mb-3">
              <div class="card o-hidden h-100">
                  <a class="card-body1 color-blue" href="pm">
                      <div class="card-body-icon">
                          <i class="fa fa-fw fa-wpforms color-primary"></i>
                      </div>
                      <div class="ra-1">Project Management Module</div>
                  </a>

              </div>
          </div>


          <div class="col-xl-3 col-sm-4 mb-3">
              <div class="card o-hidden h-100">
                  <a class="card-body1 color-green" href="civil">
                      <div class="card-body-icon">
                          <i class="fa fa-fw fa-building color-success"></i>
                      </div>
                      <div class="ra-1">Civil Works Management Module</div>
                  </a>

              </div>
          </div>

          <div class="col-xl-3 col-sm-4 mb-3">
              <div class="card o-hidden h-100">
                  <a class="card-body1 color-red" href="soft">
                      <div class="card-body-icon">
                          <i class="fa fa-fw fa-comments color-warning"></i>
                      </div>
                      <div class="ra-1">Soft Component Management Module</div>
                  </a>

              </div>
          </div>

          <div class="col-xl-3 col-sm-4 mb-3">
              <div class="card o-hidden h-100">
                  <a class="card-body1 color-yellow" href="ancillary">
                      <div class="card-body-icon">
                          <i class="fa fa-fw fa-question color-danger"></i>
                      </div>
                      <div class="ra-1">Ancillary Package Management Module</div>
                  </a>

              </div>
          </div>


          <div class="col-xl-3 col-sm-4 mb-3">
              <div class="card o-hidden h-100">
                  <a class="card-body1 color-cyan" href="consultancy">
                      <div class="card-body-icon">
                          <i class="fa fa-fw fa-street-view color-warning"></i>
                      </div>
                      <div class="ra-1">Consultancy Services Management Module</div>
                  </a>

              </div>
          </div>

          <div class="col-xl-3 col-sm-4 mb-3">
              <div class="card o-hidden h-100">
                  <a class="card-body1 color-blue" href="gis">
                      <div class="card-body-icon">
                          <i class="fa fa-fw fa-map-marker color-danger"></i>
                      </div>
                      <div class="ra-1">GIS Interface Module</div>
                  </a>

              </div>
          </div>


          <div class="col-xl-3 col-sm-4 mb-3">
              <div class="card o-hidden h-100">
                  <a class="card-body1 color-lightgreen" href="refrence">
                      <div class="card-body-icon">
                          <i class="fa fa-fw fa-book color-primary"></i>
                      </div>
                      <div class="ra-1">Reference Registry Module</div>
                  </a>

              </div>
          </div>


          <div class="col-xl-3 col-sm-4 mb-3">
              <div class="card o-hidden h-100">
                  <a class="card-body1 color-purple" href="resource">
                      <div class="card-body-icon">
                          <i class="fa fa-fw fa-university color-success"></i>
                      </div>
                      <div class="ra-1">Resources Center module</div>
                  </a>

              </div>
          </div>

      </div>
</div>
@endsection
