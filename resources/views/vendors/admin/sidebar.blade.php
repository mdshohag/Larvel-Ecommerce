<aside class="main-sidebar">
    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">

        <!-- sidebar menu: : style can be found in sidebar.less -->
        <ul class="sidebar-menu">
            <li class="header">{{ trans('labels.navigation') }}</li>
            <li class="treeview">
                <a href="#">
                    <i class="fa fa-dashboard"></i> <span>{{ trans('labels.header_dashboard') }}</span>
                </a>
            </li>
            <li class="treeview">
                <a href="#">
                    <i class="fa fa-hdd-o" aria-hidden="true"></i> <span>Manufaturer</span> <i class="fa fa-angle-left pull-right"></i>
                </a>
                        <ul class="treeview-menu">
                          <li class="treeview">
                          <a href="{{ URL::to('admin/vendor/brands/add') }}">
                                  <i class="fa fa-circle-o" aria-hidden="true"></i> <span> Add Manufaturer</span>
                              </a>
                          </li>
                          <li class="treeview ">
                              <a href="{{ URL::to('admin/vendor/brands/display') }}">
                                  <i class="fa fa-circle-o" aria-hidden="true"></i> <span> Manage Manufaturer</span>
                              </a>
                          </li>
                        </ul>
            </li>
            <li class="treeview">
                <a href="#">
                    <i class="fa fa-hdd-o" aria-hidden="true"></i> <span>Product</span> <i class="fa fa-angle-left pull-right"></i>
                </a>
                <ul class="treeview-menu">
                    <li class="treeview">
                        <a href="{{ URL::to('admin/vendor/products/add')}}">
                            <i class="fa fa-circle-o" aria-hidden="true"></i> <span> Add Product</span>
                        </a>
                    </li>

                    <li class="treeview ">
                        <a href="{{ URL::to('admin/vendor/products/display')}}">
                            <i class="fa fa-circle-o" aria-hidden="true"></i> <span> Manage Product</span>
                        </a>
                    </li>
                </ul>
            </li>
        </ul>
    </section>
    <!-- /.sidebar -->
</aside>

  