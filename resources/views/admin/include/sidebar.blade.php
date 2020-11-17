<div class="nav-left-sidebar sidebar-dark">
            <div class="menu-list">
                <nav class="navbar navbar-expand-lg navbar-light">
                    <a class="d-xl-none d-lg-none" href="#">Dashboard</a>
                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse" id="navbarNav">
                        <ul class="navbar-nav flex-column">
                            <li class="nav-divider">s
                                Menu
                            </li>
                            <li class="nav-item ">
                                <a class="nav-link active" href="{{ url('admin/dashboard') }}">Dashboard </a>
                               
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#" data-toggle="collapse" aria-expanded="false" data-target="#submenu-2" aria-controls="submenu-2"><i class="fa fa-fw fa-rocket"></i>Category</a>
                                <div id="submenu-2" class="collapse submenu" style="">
                                    <ul class="nav flex-column">
                                        <li class="nav-item">
                                            <a class="nav-link" href="{{ route('add.category') }}">Add New Category </a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" href="{{ route('category.manage') }}">Category Manage</a>
                                        </li>
                                   
                                    </ul>
                                </div>
                            </li>
                          




                            <li class="nav-item ">
                                <a class="nav-link" href="#" data-toggle="collapse" aria-expanded="false" data-target="#submenu-4" aria-controls="submenu-4"><i class="fab fa-fw fa-wpforms"></i>Product</a>
                                <div id="submenu-4" class="collapse submenu" style="">
                                    <ul class="nav flex-column">
                                        <li class="nav-item">
                                            <a class="nav-link" href="{{ route('add.products') }}">Add Product</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" href="{{ route('product.manage') }}">Product Manage </a>
                                        </li>
                                       
                                    </ul>
                                </div>
                            </li>


                            <li class="nav-item ">
                                <a class="nav-link" href="#" data-toggle="collapse" aria-expanded="false" data-target="#submenu-1" aria-controls="submenu-1"><i class="fab fa-fw fa-wpforms"></i>Order</a>
                                <div id="submenu-1" class="collapse submenu" style="">
                                    <ul class="nav flex-column">
                                        <li class="nav-item">
                                            <a class="nav-link" href="{{ route('adminorder.list') }}">Order List</a>
                                        </li>                                      
                                    </ul>
                                </div>
                            </li>
                          
                      
                          
                        </ul>
                    </div>
                </nav>
            </div>
        </div>