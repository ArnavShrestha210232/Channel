<!--sidebar start-->
<aside>
    <div id="sidebar" class="nav-collapse ">
        <!-- sidebar menu start-->
        <ul class="sidebar-menu" id="nav-accordion">
            <li>
                <a class="active" href="{{ route('admin.dashboard') }}">
                    <i class="fa fa-dashboard"></i>
                    <span>Dashboard</span>
                </a>
            </li>

            {{-- <li class="sub-menu">
                <a href="javascript:;">
                    <i class="fa fa-laptop"></i>
                    <span>Layouts</span>
                </a>
                <ul class="sub">
                    <li><a href="boxed_page.html">Boxed Page</a></li>
                    <li><a href="horizontal_menu.html">Horizontal Menu</a></li>
                    <li><a href="header-color.html">Different Color Top bar</a></li>
                    <li><a href="mega_menu.html">Mega Menu</a></li>
                    <li><a href="language_switch_bar.html">Language Switch Bar</a></li>
                    <li><a href="email_template.html" target="_blank">Email Template</a></li>
                </ul>
            </li> --}}

            {{-- <li class="sub-menu">
                <a href="javascript:;">
                    <i class="fa fa-book"></i>
                    <span>UI Elements</span>
                </a>
                <ul class="sub">
                    <li><a href="general.html">General</a></li>
                    <li><a href="buttons.html">Buttons</a></li>
                    <li><a href="modal.html">Modal</a></li>
                    <li><a href="toastr.html">Toastr Notifications</a></li>
                    <li><a href="widget.html">Widget</a></li>
                    <li><a href="slider.html">Slider</a></li>
                    <li><a href="nestable.html">Nestable</a></li>
                    <li><a href="font_awesome.html">Font Awesome</a></li>
                </ul>
            </li> --}}

            <li class="sub-menu">
                <a href="javascript:;">
                    <i class="fa fa-cogs"></i>
                    <span>Profile Settings</span>
                </a>
                <ul class="sub">
                    <li><a href="{{ route('sliders.index') }}">Home Slider</a></li>
                    <li><a href="calendar.html">Calendar</a></li>
                    <li><a href="gallery.html">Gallery</a></li>
                    <li><a href="todo_list.html">Todo List</a></li>
                    <li><a href="draggable_portlet.html">Draggable Portlet</a></li>
                    <li><a href="tree.html">Tree View</a></li>
                </ul>
            </li>
            <li class="sub-menu">
                <a href="javascript:;">
                    <i class="fa fa-tasks"></i>
                    <span>Components</span>
                </a>
                <ul class="sub">

                    <li><a href="{{ route('calender') }}">Calender</a></li>
                    <li><a href="{{ route('todo') }}">To-do</a></li>

                </ul>
            </li>
            <li class="sub-menu">
                <a href="javascript:;">
                    <i class="fa fa-th"></i>
                    <span>Data Tables</span>
                </a>
                <ul class="sub">
                    <li><a href="{{ route('basictable') }}">Basic Table</a></li>
                    <li><a href="{{ route('responsivetable') }}">Responsive Table</a></li>
                    <li><a href="{{ route('dynamictable') }}">Dynamic Table</a></li>
                    <li><a href="{{ route('editabletable') }}">Editable Table</a></li>
                </ul>
            </li>
            {{-- <li class="sub-menu">
                <a href="javascript:;">
                    <i class=" fa fa-envelope"></i>
                    <span>Mail</span>
                </a>
                <ul class="sub">
                    <li><a href="inbox.html">Inbox</a></li>
                    <li><a href="inbox_details.html">Inbox Details</a></li>
                </ul>
            </li> --}}
            <li class="sub-menu">
                <a href="javascript:;">
                    <i class=" fa fa-bar-chart-o"></i>
                    <span>Charts</span>
                </a>
                <ul class="sub">
                    <li><a href="{{ route('morris') }}">Morris</a></li>
                    <li><a href="{{ route('chartjs') }}">Chartjs</a></li>
                    <li><a href="{{ route('flotchart') }}">Flot Charts</a></li>
                    <li><a href="{{ route('xcharts') }}">xCharts</a></li>
                </ul>
            </li>
            <li class="sub-menu">
                <a href="javascript:;">
                    <i class="fa fa-shopping-cart"></i>
                    <span>Shop</span>
                </a>
                <ul class="sub">
                    <li><a href="product_list.html">List View</a></li>
                    <li><a href="product_details.html">Details View</a></li>
                </ul>
            </li>
            <li>
                <a href="{{ route('googlemap') }}">
                    <i class="fa fa-map-marker"></i>
                    <span>Google Maps </span>
                </a>
            </li>
            {{-- <li class="sub-menu">
                <a href="javascript:;">
                    <i class="fa fa-comments-o"></i>
                    <span>Chat Room</span>
                </a>
                <ul class="sub">
                    <li><a href="lobby.html">Lobby</a></li>
                    <li><a href="chat_room.html"> Chat Room</a></li>
                </ul>
            </li> --}}
            <li class="sub-menu">
                <a href="javascript:;">
                    <i class="fa fa-glass"></i>
                    <span>Extra</span>
                </a>
                <ul class="sub">


                    <li><a href="{{ route('profile') }}">Profile</a></li>

                    <li><a href="{{ route('faq') }}">FAQ</a></li>
                    <li><a href="{{ route('error404') }}">404 Error</a></li>
                    <li><a href="{{ route('error500') }}">500 Error</a></li>
                </ul>
            </li>
            <li>
                <a href="{{ route('login') }}">
                    <i class="fa fa-user"></i>
                    <span>Login Page</span>
                </a>
            </li>
            <li>
                <a href="{{ route('registration') }}">
                    <i class="fa fa-user"></i>
                    <span>Registration Page</span>
                </a>
            </li>

            <!--multi level menu start-->
            {{-- <li class="sub-menu">
                <a href="javascript:;">
                    <i class="fa fa-sitemap"></i>
                    <span>Multi level Menu</span>
                </a>
                <ul class="sub">
                    <li><a href="javascript:;">Menu Item 1</a></li>
                    <li class="sub-menu">
                        <a href="boxed_page.html">Menu Item 2</a>
                        <ul class="sub">
                            <li><a href="javascript:;">Menu Item 2.1</a></li>
                            <li class="sub-menu">
                                <a href="javascript:;">Menu Item 3</a>
                                <ul class="sub">
                                    <li><a href="javascript:;">Menu Item 3.1</a></li>
                                    <li><a href="javascript:;">Menu Item 3.2</a></li>
                                </ul>
                            </li>
                        </ul>
                    </li>
                </ul>
            </li> --}}
            <!--multi level menu end-->

        </ul>
        <!-- sidebar menu end-->
    </div>
</aside>
<!--sidebar end-->
