<div class="sidebar-wrapper" data-simplebar="true">
    <div class="sidebar-header">
        <div>
            <img src="assets/images/logo.png" class="logo-icon" alt="logo icon">
        </div>
        <div>
            <h4 class="logo-text">Certi$</h4>
        </div>
        {{-- <div class="toggle-icon ms-auto"><i class='bx bx-first-page'></i>
        </div> --}}
    </div>
    <!--navigation-->
    <ul class="metismenu" id="menu">
        <li>
            <a href="{{ url('index') }}" class="has-arrow">
                <div class="parent-icon"><i class='bx bx-home'></i>
                </div>
                <div class="menu-title">Dashboard</div>
            </a>

        </li>
        <li class="menu-label">Client</li>
        <li>
            <a href="{{ url('Add-user') }}">
                <div class="parent-icon"><i class='bx bx-right-arrow-alt'></i>
                </div>
                <div class="menu-title">Add Client</div>
            </a>
        </li>
        <li>
            <a href="{{ url('User-list') }}">
                <div class="parent-icon"><i class='bx bx-right-arrow-alt'></i>
                </div>
                <div class="menu-title">Client List</div>
            </a>
        </li>
        <li class="menu-label">Document</li>
    
        <li>
            <a href="{{ url('Doucment-list') }}">
                <div class="parent-icon"><i class='bx bx-right-arrow-alt'></i>
                </div>
                <div class="menu-title">Document List</div>
            </a>
        </li>
       
        
        <li class="menu-label">Categories</li>
        <li>
            <a href="{{ url('Add-category') }}">
                <div class="parent-icon"><i class='bx bx-right-arrow-alt'></i>
                </div>
                <div class="menu-title">Category</div>
            </a>
        </li>
        <li>
            <a href="{{ url('category-list') }}">
                <div class="parent-icon"><i class='bx bx-right-arrow-alt'></i>
                </div>
                <div class="menu-title">Category List</div>
            </a>
        </li>



        <li class="menu-label">Sub Categories</li>
        <li>
            <a href="{{ url('Sub-Category') }}">
                <div class="parent-icon"><i class='bx bx-right-arrow-alt'></i>
                </div>
                <div class="menu-title">Sub-Category</div>
            </a>
        </li>
        <li>
            <a href="{{ url('Sub-list') }}">
                <div class="parent-icon"><i class='bx bx-right-arrow-alt'></i>
                </div>
                <div class="menu-title">Sub-Category List</div>
            </a>
        </li>
        <li class="menu-label">Supliers</li>
        <li>
            <a href="{{ url('add-supplier') }}">
                <div class="parent-icon"><i class='bx bx-user'></i>
                </div>
                <div class="menu-title">Add Supplier</div>
            </a>
        </li>
        <li>
            <a href="{{ url('get-supplier') }}">
                <div class="parent-icon"><i class='bx bx-user'></i>
                </div>
                <div class="menu-title">Show Supplier</div>
            </a>
        </li>
        <li class="menu-label">Profile</li>
        <li>
            <a href="{{ url('admin-profile') }}">
                <div class="parent-icon"><i class='bx bx-briefcase-alt-2'></i>
                </div>
                <div class="menu-title">Profile</div>
            </a>
        </li>
        <li>
            {{-- <a href="{{ url('Edit-profile') }}">
            <div class="parent-icon"><i class='bx bx-briefcase-alt-2'></i>
            </div>
            <div class="menu-title">Edit-profile</div>
            </a> --}}


    </ul>
    <!--end navigation-->
</div>