   <!-- ! Sidebar -->
   <aside class="sidebar">
       <div class="sidebar-start">
           <div class="sidebar-head">
               <a href="{{url('/home')}}" class="logo-wrapper" title="Home">
                   <span class="sr-only">Home</span>
                   <span class="icon logo" aria-hidden="true"></span>
                   <div class="logo-text">
                       <span class="logo-title">Sumangal </span>
                       <span class="logo-subtitle">Dashboard</span>
                   </div>

               </a>
               <button class="sidebar-toggle transparent-btn" title="Menu" type="button">
                   <span class="sr-only">Toggle menu</span>
                   <span class="icon menu-toggle" aria-hidden="true"></span>
               </button>
           </div>
           <div class="sidebar-body">
               <ul class="sidebar-body-menu">
                   <li>
                       <a class="active" href="/home"><span class="icon home" aria-hidden="true"></span>Dashboard</a>
                   </li>
                   <li>
                       <a class="show-cat-btn" href="##">
                           <span class="icon document" aria-hidden="true"></span>Menu
                           <span class="category__btn transparent-btn" title="Open list">
                               <span class="sr-only">Open list</span>
                               <span class="icon arrow-down" aria-hidden="true"></span>
                           </span>
                       </a>
                       <ul class="cat-sub-menu">
                           <li>
                               <a href="{{ route('master_Entries') }}">Master Entries</a>
                           </li>
                           {{-- <li>
                               <a href="{{ route('transaction') }}">Transactions</a>
                           </li>
                           <li>
                               <a href="{{ route('reports') }}">Reports</a>
                           <li>
                               <a href="{{ route('admin') }}">Admin</a>
                           </li> --}}
                           <li>
                               <a href="{{ url('landownerdetails') }}">Land Owners Details</a>
                           </li>
                           <li>
                            <a href="{{ url('advisor_promotion') }}">Advisor's Promotion</a>
                        </li>
                           <li>
                               <a href="{{ url('receiptDetails') }}">Receipt Details</a>
                           </li>
                           {{-- <li>
                               <a href="{{ route('birthReport') }}">Birthday Report</a>
                           </li> --}}
                   </li>
               </ul>
               </li>
               <li>
                   <a class="show-cat-btn" href="##">
                       <span class="icon folder" aria-hidden="true"></span>Master
                       <span class="category__btn transparent-btn" title="Open list">
                           <span class="sr-only">Open list</span>
                           <span class="icon arrow-down" aria-hidden="true"></span>
                       </span>
                   </a>
                   <ul class="cat-sub-menu">
                       <li>
                           <a href="{{ Route('layout.index') }}">Layout Master</a>
                       </li>
                       <li>
                           <a href="{{ route('execative.exeIndex') }}">Executive Master</a>
                       </li>                      
                       {{-- <li>
                           <a href="categories.html">Registration</a>
                       </li> --}}
                   </ul>
               </li>
               <li>
                   <a class="show-cat-btn" href="##">
                       <span class="icon image" aria-hidden="true"></span>Admin
                       <span class="category__btn transparent-btn" title="Open list">
                           <span class="sr-only">Open list</span>
                           <span class="icon arrow-down" aria-hidden="true"></span>
                       </span>
                   </a>
                   <ul class="cat-sub-menu">
                    <li>
                        <a href="{{ url('monthly') }}">Monthly Business</a>
                    </li>
                       {{-- <li>
                           <a href="media-02.html">Set User Privileges</a>
                       </li>
                       <li>
                           <a href="media-02.html">Set User Privileges</a>
                       </li>
                       <li>
                           <a href="media-02.html">Change Password</a>
                       </li>
                       <li>
                           <a href="media-02.html">Error Handler</a>
                       </li>Elegant
                       <li>
                           <a href="media-02.html">TDS Master</a>
                       </li>
                       <li>
                           <a href="media-02.html">Master Setting</a>
                       </li>
                       <li>
                           <a href="media-02.html">Advisor's Advances</a>
                       </li>
                       <li>
                           <a href="media-02.html">Land Owner's Details</a>
                       </li>
                       <li>
                           <a href="media-02.html">Backup</a>
                       </li> --}}
                   </ul>
               </li>
               <li>
                   <a class="show-cat-btn" href="##">
                       <span class="icon paper" aria-hidden="true"></span>Reports
                       <span class="category__btn transparent-btn" title="Open list">
                           <span class="sr-only">Open list</span>
                           <span class="icon arrow-down" aria-hidden="true"></span>
                       </span>
                   </a>
                   <ul class="cat-sub-menu">
                    <li>
                        <a href="{{ url('daily_sales') }}">Daily Sales Reports</a>
                    </li>
                       <li>
                           <a href="{{ url('customers_details') }}">Customer's Details</a>
                       </li>
                   </ul>
               </li>
               {{-- <li>
                   <a href="comments.html">
                       <span class="icon message" aria-hidden="true"></span>
                       Comments
                   </a>
                   <span class="msg-counter">7</span>
               </li>
               </ul>
               <span class="system-menu__title">system</span>
               <ul class="sidebar-body-menu">
                   <li>
                       <a href="appearance.html"><span class="icon edit" aria-hidden="true"></span>Appearance</a>
                   </li>
                   <li>
                       <a class="show-cat-btn" href="##">
                           <span class="icon category" aria-hidden="true"></span>Extentions
                           <span class="category__btn transparent-btn" title="Open list">
                               <span class="sr-only">Open list</span>
                               <span class="icon arrow-down" aria-hidden="true"></span>
                           </span>
                       </a>
                       <ul class="cat-sub-menu">
                           <li>
                               <a href="extention-01.html">Extentions-01</a>
                           </li>
                           <li>
                               <a href="extention-02.html">Extentions-02</a>
                           </li>
                       </ul>
                   </li>
                   <li>
                       <a class="show-cat-btn" href="##">
                           <span class="icon user-3" aria-hidden="true"></span>Users
                           <span class="category__btn transparent-btn" title="Open list">
                               <span class="sr-only">Open list</span>
                               <span class="icon arrow-down" aria-hidden="true"></span>
                           </span>
                       </a>
                       <ul class="cat-sub-menu">
                           <li>
                               <a href="users-01.html">Users-01</a>
                           </li>
                           <li>
                               <a href="users-02.html">Users-02</a>
                           </li>
                       </ul>
                   </li>
                   <li>
                       <a href="##"><span class="icon setting" aria-hidden="true"></span>Settings</a>
                   </li>
               </ul> --}}
           </div>
       </div>
       <div class="sidebar-footer">
           <a href="##" class="sidebar-user">
               <span class="sidebar-user-img">
                   <picture>
                       <source srcset="./img/avatar/avatar-illustrated-01.webp" type="image/webp"><img
                           src="./img/avatar/avatar-illustrated-01.png" alt="{{ auth()->user()->name }}">
                   </picture>
               </span>
               <div class="sidebar-user-info">
                   <span class="sidebar-user__title">{{ auth()->user()->name }}</span>
                   <span class="sidebar-user__subtitle">Super Admin</span>
               </div>
           </a>
       </div>
   </aside>
   <div class="main-wrapper">
       <!-- ! Main nav -->
       <nav class="main-nav--bg">
           <div class="container main-nav">
               <div class="main-nav-start">
                   <div class="search-wrapper">
                       <i data-feather="search" aria-hidden="true" hidden></i>
                       <input type="text" placeholder="Enter keywords ..." required hidden>
                   </div>
               </div>
               <div class="main-nav-end">
                   <button class="sidebar-toggle transparent-btn" title="Menu" type="button">
                       <span class="sr-only">Toggle menu</span>
                       <span class="icon menu-toggle--gray" aria-hidden="true"></span>
                   </button>
                   {{-- <div class="lang-switcher-wrapper">
                       <button class="lang-switcher transparent-btn" type="button">
                           EN
                           <i data-feather="chevron-down" aria-hidden="true"></i>
                       </button>
                       <ul class="lang-menu dropdown">
                           <li><a href="##">English</a></li>
                           <li><a href="##">French</a></li>
                           <li><a href="##">Uzbek</a></li>
                       </ul>
                   </div> --}}
                   <button class="theme-switcher gray-circle-btn" type="button" title="Switch theme">
                       <span class="sr-only">Switch theme</span>
                       <i class="sun-icon" data-feather="sun" aria-hidden="true"></i>
                       <i class="moon-icon" data-feather="moon" aria-hidden="true"></i>
                   </button>
                   {{-- <div class="notification-wrapper">
                       <button class="gray-circle-btn dropdown-btn" title="To messages" type="button">
                           <span class="sr-only">To messages</span>
                           <span class="icon notification active" aria-hidden="true"></span>
                       </button>
                       <ul class="users-item-dropdown notification-dropdown dropdown">
                           <li>
                               <a href="##">
                                   <div class="notification-dropdown-icon info">
                                       <i data-feather="check"></i>
                                   </div>
                                   <div class="notification-dropdown-text">
                                       <span class="notification-dropdown__title">System just updated</span>
                                       <span class="notification-dropdown__subtitle">The system has been
                                           successfully upgraded. Read more
                                           here.</span>
                                   </div>
                               </a>
                           </li>
                           <li>
                               <a href="##">
                                   <div class="notification-dropdown-icon danger">
                                       <i data-feather="info" aria-hidden="true"></i>
                                   </div>
                                   <div class="notification-dropdown-text">
                                       <span class="notification-dropdown__title">The cache is full!</span>
                                       <span class="notification-dropdown__subtitle">Unnecessary caches take up a
                                           lot of memory space and
                                           interfere ...</span>
                                   </div>
                               </a>
                           </li>
                           <li>
                               <a href="##">
                                   <div class="notification-dropdown-icon info">
                                       <i data-feather="check" aria-hidden="true"></i>
                                   </div>
                                   <div class="notification-dropdown-text">
                                       <span class="notification-dropdown__title">New Subscriber here!</span>
                                       <span class="notification-dropdown__subtitle">A new subscriber has
                                           subscribed.</span>
                                   </div>
                               </a>
                           </li>
                           <li>
                               <a class="link-to-page" href="##">Go to Notifications page</a>
                           </li>
                       </ul>
                   </div> --}}
                   <div class="nav-user-wrapper">
                       <button href="##" class="nav-user-btn dropdown-btn" title="My profile" type="button">
                           <span class="sr-only">My profile</span>
                           <span class="nav-user-img">
                               <picture>
                                   <source srcset="./img/avatar/avatar-illustrated-02.webp" type="image/webp">
                                   <img src="./img/avatar/avatar-illustrated-02.png" alt="{{ auth()->user()->name }}">
                               </picture>
                           </span>
                       </button>
                       <ul class="users-item-dropdown nav-user-dropdown dropdown">
                           <li><a class="dropdown-item" href="{{ route('logout') }}"
                                   onclick="event.preventDefault();
                                         document.getElementById('logout-form').submit();">
                                   {{ __('Logout') }}
                               </a>

                               <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                   @csrf
                               </form>
                           </li>
                       </ul>
                   </div>
               </div>
           </div>
       </nav>
