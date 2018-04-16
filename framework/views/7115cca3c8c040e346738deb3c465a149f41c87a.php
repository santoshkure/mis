<?php $__env->startSection('content'); ?>
  <div class="content-wrapper">
      <div class="container-fluid">
          <!-- Breadcrumbs-->
          <ol class="breadcrumb">
              <li class="breadcrumb-item">
                  <a href="#">Dashboard</a>
              </li>
              <li class="breadcrumb-item active">My Dashboard</li>
              <li class="breadcrumb-item active"><a href="admin">Admin</a></li>
          </ol>
          <!-- Icon Cards-->


          <div class="row">
              <div class="col-xl-3 col-sm-4 mb-3">
                  <div class="card o-hidden h-100">
                      <a class="card-body1 color-blue" href="pm">
                          <div class="card-body-icon">
                              <i class="fa fa-fw fa-wpforms"></i>
                          </div>
                          <div class="ra-1">Project Management Module</div>
                      </a>

                  </div>
              </div>


              <div class="col-xl-3 col-sm-4 mb-3">
                  <div class="card o-hidden h-100">
                      <a class="card-body1 color-green" href="civil">
                          <div class="card-body-icon">
                              <i class="fa fa-fw fa-building"></i>
                          </div>
                          <div class="ra-1">Civil Works Management Module</div>
                      </a>

                  </div>
              </div>

              <div class="col-xl-3 col-sm-4 mb-3">
                  <div class="card o-hidden h-100">
                      <a class="card-body1 color-red" href="soft">
                          <div class="card-body-icon">
                              <i class="fa fa-fw fa-comments"></i>
                          </div>
                          <div class="ra-1">Soft Component Management Module</div>
                      </a>

                  </div>
              </div>

              <div class="col-xl-3 col-sm-4 mb-3">
                  <div class="card o-hidden h-100">
                      <a class="card-body1 color-yellow" href="ancillary">
                          <div class="card-body-icon">
                              <i class="fa fa-fw fa-question"></i>
                          </div>
                          <div class="ra-1">Ancillary Package Management Module</div>
                      </a>

                  </div>
              </div>


              <div class="col-xl-3 col-sm-4 mb-3">
                  <div class="card o-hidden h-100">
                      <a class="card-body1 color-cyan" href="consultancy">
                          <div class="card-body-icon">
                              <i class="fa fa-fw fa-street-view"></i>
                          </div>
                          <div class="ra-1">Consultancy Services Management Module</div>
                      </a>

                  </div>
              </div>

              <div class="col-xl-3 col-sm-4 mb-3">
                  <div class="card o-hidden h-100">
                      <a class="card-body1 color-blue" href="gis">
                          <div class="card-body-icon">
                              <i class="fa fa-fw fa-map-marker"></i>
                          </div>
                          <div class="ra-1">GIS Interface Module</div>
                      </a>

                  </div>
              </div>


              <div class="col-xl-3 col-sm-4 mb-3">
                  <div class="card o-hidden h-100">
                      <a class="card-body1 color-lightgreen" href="refrence">
                          <div class="card-body-icon">
                              <i class="fa fa-fw fa-book"></i>
                          </div>
                          <div class="ra-1">Reference Registry Module</div>
                      </a>

                  </div>
              </div>


              <div class="col-xl-3 col-sm-4 mb-3">
                  <div class="card o-hidden h-100">
                      <a class="card-body1 color-purple" href="resource">
                          <div class="card-body-icon">
                              <i class="fa fa-fw fa-university"></i>
                          </div>
                          <div class="ra-1">Resources Center module</div>
                      </a>

                  </div>
              </div>

          </div>

      </div>
  </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>