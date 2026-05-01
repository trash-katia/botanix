<!DOCTYPE html>
<html lang="es">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Botanix</title>
    <!-- plugins:css -->
    <link rel="stylesheet" href="public/assets/vendors/mdi/css/materialdesignicons.min.css">
    <link rel="stylesheet" href="public/assets/vendors/flag-icon-css/css/flag-icon.min.css">
    <link rel="stylesheet" href="public/assets/vendors/css/vendor.bundle.base.css">
    <!-- endinject -->
    <!-- Plugin css for this page -->
    <link rel="stylesheet" href="public/assets/vendors/datatables.net-bs4/dataTables.bootstrap4.css">
    <!-- End plugin css for this page -->
    <!-- inject:css -->
    <!-- endinject -->
    <!-- Layout styles -->
    <link rel="stylesheet" href="public/assets/css/demo_4/style.css">
    <!-- End layout styles -->
    <link rel="shortcut icon" href="public/assets/images/favicon.png" />
  </head>
  <body>
    <div class="container-scroller">
      <!-- partial:../../partials/_horizontal-navbar.html -->
      <div class="horizontal-menu">
        <nav class="navbar top-navbar col-lg-12 col-12 p-0">
          <div class="container">
            <div class="text-center navbar-brand-wrapper d-flex align-items-center justify-content-center">
              <a class="navbar-brand brand-logo" href="../../index.html"><img src="public/assets/images/logobotanix.png" width="120" height="80" alt="logo" /></a>
              <a class="navbar-brand brand-logo-mini" href="../../index.html"><img src="public/assets/images/logo-mini.svg" alt="logo" /></a>
            </div>
            <div class="navbar-menu-wrapper d-flex align-items-center justify-content-end">
              
              <ul class="navbar-nav navbar-nav-right">
                <li class="nav-item  dropdown d-none d-md-flex">
                  <a class="nav-link dropdown-toggle" id="reportDropdown" href="#" data-toggle="dropdown" aria-expanded="false"> Reportes </a>
                  <div class="dropdown-menu navbar-dropdown" aria-labelledby="reportDropdown">
                    <a class="dropdown-item" href="#">
                      <i class="mdi mdi-file-pdf mr-2"></i>PDF </a>
                    <div class="dropdown-divider"></div>
                    <a class="dropdown-item" href="#">
                      <i class="mdi mdi-file-excel mr-2"></i>Excel </a>
                    <div class="dropdown-divider"></div>
                    <a class="dropdown-item" href="#">
                      <i class="mdi mdi-file-word mr-2"></i>doc </a>
                  </div>
                </li>
                
                
                <li class="nav-item nav-profile dropdown">
                  <a class="nav-link dropdown-toggle" id="profileDropdown" href="#" data-toggle="dropdown" aria-expanded="false">
                    <div class="nav-profile-img">
                      <img src="public/assets/images/faces/face28.png" alt="image">
                    </div>
                    <div class="nav-profile-text">
                      <p class="mb-1">Jesus Arellano</p>
                    </div>
                  </a>
                  <div class="dropdown-menu navbar-dropdown dropdown-menu-right p-0 border-0 font-size-sm" aria-labelledby="profileDropdown" data-x-placement="bottom-end">
                    <div class="p-3 text-center bg-info">
                      <img class="img-avatar img-avatar48 img-avatar-thumb" src="public/assets/images/faces/face28.png" alt="">
                    </div>
                    <div class="p-2">
                      <h5 class="dropdown-header text-uppercase pl-2 text-light">Opciones de Usuario</h5>
                      
                      <a class="dropdown-item py-1 d-flex align-items-center justify-content-between" href="#">
                        <span>Profile</span>
                        <span class="p-0">
                          <span class="badge badge-success">1</span>
                          <i class="mdi mdi-account-outline ml-1"></i>
                        </span>
                      </a>
                      
                      <div role="separator" class="dropdown-divider"></div>
                      <h5 class="dropdown-header text-uppercase  pl-2 text-light mt-2">Acciones</h5>
                      
                      <a class="dropdown-item py-1 d-flex align-items-center justify-content-between" href="?menu=login">
                        <span>Cerrar Sesión</span>
                        <i class="mdi mdi-logout ml-1"></i>
                      </a>
                    </div>
                  </div>
                </li>
                
                <li class="nav-item dropdown">
                  <a class="nav-link count-indicator dropdown-toggle" id="notificationDropdown" href="#" data-toggle="dropdown">
                    <i class="mdi mdi-bell-outline"></i>
                    <span class="count-symbol bg-danger"></span>
                  </a>
                  <div class="dropdown-menu dropdown-menu-right navbar-dropdown preview-list" aria-labelledby="notificationDropdown">
                    <h6 class="p-3 mb-0 bg-info text-white py-4">Notificaciones</h6>
                    <div class="dropdown-divider"></div>
                    <a class="dropdown-item preview-item">
                      <div class="preview-thumbnail">
                        <div class="preview-icon bg-success">
                          <i class="mdi mdi-calendar"></i>
                        </div>
                      </div>
                      <div class="preview-item-content d-flex align-items-start flex-column justify-content-center">
                        <h6 class="preview-subject font-weight-normal mb-1">Pedido de Karla</h6>
                        <p class="text-gray ellipsis mb-0"> Karla Flores solciita un pedido</p>
                      </div>
                    </a>
                    <div class="dropdown-divider"></div>
                    <a class="dropdown-item preview-item">
                      <div class="preview-thumbnail">
                        <div class="preview-icon bg-warning">
                          <i class="mdi mdi-settings"></i>
                        </div>
                      </div>
                      <div class="preview-item-content d-flex align-items-start flex-column justify-content-center">
                        <h6 class="preview-subject font-weight-normal mb-1">Estatus de especie</h6>
                        <p class="text-gray ellipsis mb-0"> Se ha actualizado la etapa de crecimiento </p>
                      </div>
                    </a>
                    <div class="dropdown-divider"></div>
                    <a class="dropdown-item preview-item">
                      <div class="preview-thumbnail">
                        <div class="preview-icon bg-info">
                          <i class="mdi mdi-link-variant"></i>
                        </div>
                      </div>
                      <div class="preview-item-content d-flex align-items-start flex-column justify-content-center">
                        <h6 class="preview-subject font-weight-normal mb-1">Pedido Entregado</h6>
                        <p class="text-gray ellipsis mb-0"> El pedido ha lelgado a su destino</p>
                      </div>
                    </a>
                    <div class="dropdown-divider"></div>
                    <h6 class="p-3 mb-0 text-center">Ver todas las notificaciones</h6>
                  </div>
                </li>
              </ul>
              <button class="navbar-toggler navbar-toggler-right d-lg-none align-self-center" type="button" data-toggle="horizontal-menu-toggle">
                <span class="mdi mdi-menu"></span>
              </button>
            </div>
          </div>
        </nav>
        <nav class="bottom-navbar">
          <div class="container">
            <ul class="nav page-navigation">
              <li class="nav-item">
                <a class="nav-link" href="../../index.html">
                  <i class="mdi mdi-chart-line menu-icon"></i>
                  <span class="menu-title">Dashboard</span>
                </a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="../../pages/layout/rtl-layout.html">
                  <i class="mdi mdi-account-box-outline menu-icon"></i>
                  <span class="menu-title">Usuarios</span>
                </a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="../../pages/samples/widgets.html">
                  <i class="mdi mdi-cart-outline menu-icon"></i>
                  <span class="menu-title">Pedidos</span>
                </a>
              </li>
              <li class="nav-item">
                <a href="#" class="nav-link">
                  <i class="mdi mdi-clipboard-text menu-icon"></i>
                  <span class="menu-title">Inventario</span>
                  <i class="menu-arrow"></i></a>
                <div class="submenu">
                  <ul class="submenu-item">
                    <li class="nav-item"><a class="nav-link" href="../../pages/forms/basic_elements.html">Plantas</a></li>
                    <li class="nav-item"><a class="nav-link" href="../../pages/forms/advanced_elements.html">Seguimientos</a></li>
                    <li class="nav-item"><a class="nav-link" href="../../pages/forms/validation.html">Insumos</a></li>
    
                  </ul>
                </div>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="../../pages/layout/rtl-layout.html">
                  <i class="mdi mdi-book-open-page-variant menu-icon"></i>
                  <span class="menu-title">Catálogo</span>
                </a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="../../pages/layout/rtl-layout.html">
                  <i class="mdi mdi-cash-multiple menu-icon"></i>
                  <span class="menu-title">Ventas</span>
                </a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="../../pages/layout/rtl-layout.html">
                  <i class="mdi mdi-brightness-5 menu-icon"></i>
                  <span class="menu-title">Configuraciones</span>
                </a>
              </li>
            </ul>
          </div>
        </nav>
      </div>
      <!-- partial -->
      <div class="container-fluid page-body-wrapper">
        <div class="main-panel">
          <div class="content-wrapper">
            <div class="page-header">
              <h3 class="page-title"> Data table </h3>
              <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                  <li class="breadcrumb-item"><a href="#">Tables</a></li>
                  <li class="breadcrumb-item active" aria-current="page">Data table</li>
                </ol>
              </nav>
            </div>
            <div class="card">
              <div class="card-body">
                <h4 class="card-title">Data table</h4>
                <div class="row">
                  <div class="col-12">
                    <table id="order-listing" class="table">
                      <thead>
                        <tr>
                          <th>Order #</th>
                          <th>Purchased On</th>
                          <th>Customer</th>
                          <th>Ship to</th>
                          <th>Base Price</th>
                          <th>Purchased Price</th>
                          <th>Status</th>
                          <th>Actions</th>
                        </tr>
                      </thead>
                      <tbody>
                        <tr>
                          <td>1</td>
                          <td>2012/08/03</td>
                          <td>Edinburgh</td>
                          <td>New York</td>
                          <td>$1500</td>
                          <td>$3200</td>
                          <td>
                            <label class="badge badge-info">On hold</label>
                          </td>
                          <td>
                            <button class="btn btn-outline-primary">View</button>
                          </td>
                        </tr>
                        <tr>
                          <td>2</td>
                          <td>2015/04/01</td>
                          <td>Doe</td>
                          <td>Brazil</td>
                          <td>$4500</td>
                          <td>$7500</td>
                          <td>
                            <label class="badge badge-danger">Pending</label>
                          </td>
                          <td>
                            <button class="btn btn-outline-primary">View</button>
                          </td>
                        </tr>
                        <tr>
                          <td>3</td>
                          <td>2010/11/21</td>
                          <td>Sam</td>
                          <td>Tokyo</td>
                          <td>$2100</td>
                          <td>$6300</td>
                          <td>
                            <label class="badge badge-success">Closed</label>
                          </td>
                          <td>
                            <button class="btn btn-outline-primary">View</button>
                          </td>
                        </tr>
                        <tr>
                          <td>4</td>
                          <td>2016/01/12</td>
                          <td>Sam</td>
                          <td>Tokyo</td>
                          <td>$2100</td>
                          <td>$6300</td>
                          <td>
                            <label class="badge badge-success">Closed</label>
                          </td>
                          <td>
                            <button class="btn btn-outline-primary">View</button>
                          </td>
                        </tr>
                        <tr>
                          <td>5</td>
                          <td>2017/12/28</td>
                          <td>Sam</td>
                          <td>Tokyo</td>
                          <td>$2100</td>
                          <td>$6300</td>
                          <td>
                            <label class="badge badge-success">Closed</label>
                          </td>
                          <td>
                            <button class="btn btn-outline-primary">View</button>
                          </td>
                        </tr>
                        <tr>
                          <td>6</td>
                          <td>2000/10/30</td>
                          <td>Sam</td>
                          <td>Tokyo</td>
                          <td>$2100</td>
                          <td>$6300</td>
                          <td>
                            <label class="badge badge-info">On-hold</label>
                          </td>
                          <td>
                            <button class="btn btn-outline-primary">View</button>
                          </td>
                        </tr>
                        <tr>
                          <td>7</td>
                          <td>2011/03/11</td>
                          <td>Cris</td>
                          <td>Tokyo</td>
                          <td>$2100</td>
                          <td>$6300</td>
                          <td>
                            <label class="badge badge-success">Closed</label>
                          </td>
                          <td>
                            <button class="btn btn-outline-primary">View</button>
                          </td>
                        </tr>
                        <tr>
                          <td>8</td>
                          <td>2015/06/25</td>
                          <td>Tim</td>
                          <td>Italy</td>
                          <td>$6300</td>
                          <td>$2100</td>
                          <td>
                            <label class="badge badge-info">On-hold</label>
                          </td>
                          <td>
                            <button class="btn btn-outline-primary">View</button>
                          </td>
                        </tr>
                        <tr>
                          <td>9</td>
                          <td>2016/11/12</td>
                          <td>John</td>
                          <td>Tokyo</td>
                          <td>$2100</td>
                          <td>$6300</td>
                          <td>
                            <label class="badge badge-success">Closed</label>
                          </td>
                          <td>
                            <button class="btn btn-outline-primary">View</button>
                          </td>
                        </tr>
                        <tr>
                          <td>10</td>
                          <td>2003/12/26</td>
                          <td>Tom</td>
                          <td>Germany</td>
                          <td>$1100</td>
                          <td>$2300</td>
                          <td>
                            <label class="badge badge-danger">Pending</label>
                          </td>
                          <td>
                            <button class="btn btn-outline-primary">View</button>
                          </td>
                        </tr>
                      </tbody>
                    </table>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <!-- content-wrapper ends -->
          <!-- partial:../../partials/_footer.html -->
          <footer class="footer">
            <div class="footer-inner-wraper">
              <div class="d-sm-flex justify-content-center justify-content-sm-between">
                <span class="text-muted text-center text-sm-left d-block d-sm-inline-block">Copyright © 2026. Todos los derechos reservados.</span>
                <span class="float-none float-sm-right d-block mt-1 mt-sm-0 text-center">Anayeli Rivera Sanchez y Misael García Zenon </span>
              </div>
            </div>
          </footer>
          <!-- partial -->
        </div>
        <!-- main-panel ends -->
      </div>
      <!-- page-body-wrapper ends -->
    </div>
    <!-- container-scroller -->
    <!-- plugins:js -->
    <script src="public/assets/vendors/js/vendor.bundle.base.js"></script>
    <!-- endinject -->
    <!-- Plugin js for this page -->
    <script src="public/assets/vendors/datatables.net/jquery.dataTables.js"></script>
    <script src="public/assets/vendors/datatables.net-bs4/dataTables.bootstrap4.js"></script>
    <!-- End plugin js for this page -->
    <!-- inject:js -->
    <script src="public/assets/js/off-canvas.js"></script>
    <script src="public/assets/js/hoverable-collapse.js"></script>
    <script src="public/assets/js/misc.js"></script>
    <script src="public/assets/js/settings.js"></script>
    <script src="public/assets/js/todolist.js"></script>
    <!-- endinject -->
    <!-- Custom js for this page -->
    <script src="public/assets/js/data-table.js"></script>
    <!-- End custom js for this page -->
  </body>
</html>