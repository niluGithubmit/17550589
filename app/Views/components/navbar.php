    <!--Left Menu Button-->
    <div id="wrapper">
        <!-- Sidebar -->
        <nav class="navbar navbar-inverse navbar-fixed-top" id="sidebar-wrapper">
            <ul class="nav sidebar-nav">
                <li class="fixed-top"><i class="mdi-navigation-arrow-back back-icon"></i></li>
                <li class="profile-box">
                    <div class="sidebar-brand">
                        <img src="<?= base_url().'/images/userprofile.png'?>" class="img-responsive profile" alt="userprofile">
                        <a href="#" class="profile-name">
                            <?= $ownerData['owner_name'] ?>
                        </a>
                        <a href="#" class="user">
                            <?= $ownerData['email'] ?>
                        </a>
                    </div>

                </li>
            </ul>
            <div>
                <h3 class="plan-types">Choose Category</h3>
            </div>
            <ul class="nav sidebar-nav">
                <li></li>
                <li>
                    <a href="<?= base_url().'/spare-parts'?>" class="plan-a">Spare Parts</a>
                </li>
                <li>
                    <a href="automotive_gridlist.html" class="plan-a">Automotive</a>
                </li>
                <li>
                    <a href="restaurant_gridlist.html" class="plan-a">Restaurant</a>
                </li>
                <li>
                    <a href="job_gridlist.html" class="plan-a">Jobs</a>
                </li>
                <li>
                    <a href="shopping_gridlist.html" class="plan-a">Shopping</a>
                </li>
                <li>
                    <a href="hotels_travel_gridlist.html" class="plan-a">Hotels &amp; Travel</a>
                </li>
                <li>
                    <a href="pets_gridlist.html" class="plan-a">Pets</a>
                </li>
                <li class="search-div-pad">
                    <a href="services_gridlist.html" class="plan-a">Services</a>
                </li>
            </ul>
            <h3 class="drop-search">Search</h3>
            <div class="bar-adj">
                <div class="form-group label-floating is-empty typeandsearch">
                    <label for="typeforemail" class="control-label">Type and hit Enter...</label>
                    <input type="text" id="typeforemail" class="form-control">
                    <span class="material-input"></span></div>
            </div>
            <i class="mdi-navigation-arrow-back back-icon"></i>
        </nav>
        <!-- /#page-content-wrapper -->
    </div>
    <!--wrapper -->
    <!--Left Menu Button end-->
    <!--header section-->
    <header>
        <div class="container">
            <nav class="navbar navbar-default">
                <!-- Brand and toggle get grouped for better mobile display -->
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#nav-links" aria-expanded="false">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a id="nav-expander" class="hamburger is-closed" data-toggle="offcanvas">
                        <i class="mdi-navigation-menu menu-icon"></i>
                    </a>
                    <a href='"index-2.html"'>
                        <img src="<?= base_url().'/images/logo.png'?>" alt="logo" class="global-logo ">
                    </a>
                </div>
                <!-- Collect the nav links, forms, and other content for toggling -->
                <div class="collapse navbar-collapse" id="nav-links">
                    <ul class="nav navbar-nav">
                        <li class="active">
                            <a href="index-2.html">Home</a>
                        </li>
                        <li class="dropdown mega-dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown">Pages</a>
                            <ul class="dropdown-menu mega-dropdown-menu row text-center">
                                <li class="col-sm-3">
                                    <ul>
                                        <li class="dropdown-header">Categories</li>
                                        <li>
                                            <a href="real_estate_gridlist.html">Real Estates</a>
                                        </li>
                                        <li>
                                            <a href="automotive_gridlist.html">Automotive</a>
                                        </li>
                                        <li>
                                            <a href="restaurant_gridlist.html">Restaurant</a>
                                        </li>
                                        <li>
                                            <a href="job_gridlist.html">Jobs</a>
                                        </li>
                                        <li>
                                            <a href="shopping_gridlist.html">Shopping</a>
                                        </li>
                                        <li>
                                            <a href="hotels_travel_gridlist.html">Hotels & Travel</a>
                                        </li>
                                        <li>
                                            <a href="pets_gridlist.html">Pets</a>
                                        </li>
                                        <li>
                                            <a href="services_gridlist.html">Services</a>
                                        </li>
                                    </ul>
                                </li>
                                <li class="col-sm-3">
                                    <ul>
                                        <li class="dropdown-header">About Us</li>
                                        <li>
                                            <a href="about.html#company">About Our Company</a>
                                        </li>
                                        <li>
                                            <a href="about.html#features">Features</a>
                                        </li>
                                        <li>
                                            <a href="about.html#catalog">Agents</a>
                                        </li>
                                        <li>
                                            <a href="about.html#customer">Customers</a>
                                        </li>
                                        <li>
                                            <a href="about.html#pricing">Pricing Plans</a>
                                        </li>
                                    </ul>
                                </li>
                                <li class="col-sm-3">
                                    <ul>
                                        <li class="dropdown-header">Short Codes</li>
                                        <li>
                                            <a href="styles.html#typography">Typography</a>
                                        </li>
                                        <li>
                                            <a href="styles.html#section">Colors of section</a>
                                        </li>
                                        <li>
                                            <a href="styles.html#button">Buttons</a>
                                        </li>
                                        <li>
                                            <a href="styles.html#elements">Form Elements</a>
                                        </li>
                                        <li>
                                            <a href="not_found.html">404 page</a>
                                        </li>
                                    </ul>
                                </li>
                                <li class="col-sm-3">
                                    <ul>
                                        <li class="dropdown-header">Contacts</li>
                                        <li>
                                            <a href="contacts.html#contact">Contact Information</a>
                                        </li>
                                        <li>
                                            <a href="contacts.html#network">Social Networks</a>
                                        </li>
                                    </ul>
                                </li>
                            </ul>
                        </li>
                        <li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown" data-target="#">Categories</a>
                            <ul class="dropdown-menu">
                                <li>
                                    <a href="real_estate_gridlist.html">Real Estates</a>
                                </li>
                                <li>
                                    <a href="automotive_gridlist.html">Automotive</a>
                                </li>
                                <li>
                                    <a href="restaurant_gridlist.html">Restaurant</a>
                                </li>
                                <li>
                                    <a href="job_gridlist.html">Jobs</a>
                                </li>
                                <li>
                                    <a href="shopping_gridlist.html">Shopping</a>
                                </li>
                                <li>
                                    <a href="hotels_travel_gridlist.html">Hotels & Travel</a>
                                </li>
                                <li>
                                    <a href="pets_gridlist.html">Pets</a>
                                </li>
                                <li>
                                    <a href='<?= base_url()."/services/1"; ?>'>Services</a>
                                    
                                </li>
                            </ul>
                        </li>
                        <li>
                            <a href='<?= base_url()."/services"; ?>'>Services</a>
                        </li>
                        <li>
                            <a href="contacts.html">Contact Us</a>
                        </li>
                        <li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown" data-target="#">Users</a>
                            <ul class="dropdown-menu">
                                <li>
                                    <a href='<?= base_url()."/users"; ?>'>View Users</a>
                                </li>
                                <li>
                                    <a href='<?= base_url().'/register' ?>'>Add User</a>
                                </li>
                            </ul>
                        </li>
                    </ul>
                    <ul class="nav navbar-nav navbar-right">
                       
                        <li class="dropdown hidden-xs">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><i class="mdi-navigation-more-vert menu-icon2"></i></a>
                            <ul class="menu toggle-menu-possition">
                                <li class="drop li-h">
                                    <a href="#" class="icon-centent"><i class="mdi-social-person menu-i"></i>My Account</a>
                                </li>
                                <li class="drop li-h">
                                    <a href="#" class="icon-centent"><i class="material-icons menu-i">favorite</i>Favorites (6)
                                    </a>
                                </li>
                                <li class="drop li-h">
                                    <a href="<?= base_url().'/profile' ?>" class="icon-centent"><i class="material-icons menu-i">layers</i>profile</a>
                                </li>
                                <li class="drop li-h">
                                    <a href="#" class="icon-centent"><i class="mdi-image-brightness-5 menu-i"></i>Settings</a>
                                </li>
                                <li class="drop li-h">
                                    <a href='<?= base_url()."/logout"; ?>' class="icon-centent"><i class="mdi-navigation-arrow-back menu-i"></i>LOGOUT</a>
                                </li>
                            </ul>
                        </li>
                    </ul>
                </div>
                <!-- /.navbar-collapse -->
            </nav>
        </div>
    </header>