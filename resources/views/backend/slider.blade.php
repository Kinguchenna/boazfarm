<nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
          <li class="nav-item menu-open">
            <a href="#" class="nav-link active">
              <i class="nav-icon fas fa-tachometer-alt"></i>
              <p>
                Dashboard
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="" class="nav-link active">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Products </p>
                </a>
              </li>
              <li class="nav-item">
                <a href="" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Crops </p>
                </a>
              </li>
              <li class="nav-item">
                <a href="" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Live Stock </p>
                </a>
              </li>
            </ul>
          </li>
          <li class="nav-item">
            <a href="" class="nav-link">
              <i class="nav-icon fas fa-th"></i>
              <p>
                Home Page
                <span class="right badge badge-danger">New</span>
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-copy"></i>
              <p>
                About 
                <i class="fas fa-angle-left right"></i>
                <span class="badge badge-info right">6</span>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href=" " class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>About Us Home </p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{route('addabout')}}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>About Us Page </p>
                </a>
              </li>
              <li class="nav-item">
                <a href=" " class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Team</p>
                </a>
              </li>
            
            </ul>
          </li>
          <li class="nav-item">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-chart-pie"></i>
              <p>
                Contact
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="{{route('addcontact')}}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Contact Page</p>
                </a>
              </li>
              
            </ul>
          </li>
          <li class="nav-item">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-tree"></i>
              <p>
                Blog
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="{{route('addblogpost')}}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Add blog</p>
                </a>
              </li>
              <li class="nav-item">
                <a href=" " class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>View</p>
                </a>
              </li>

               <li class="nav-item">
                <a href="{{route('addcategory')}}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Category</p>
                </a>
              </li>
          
            </ul>
          </li>
          <li class="nav-item">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-edit"></i>
              <p>
                Products
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href=" " class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Add </p>
                </a>
              </li>
              <li class="nav-item">
                <a href=" " class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>List </p>
                </a>
              </li>
        
            </ul>
          </li>
          <li class="nav-item">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-table"></i>
              <p>
                FAQs
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href=" " class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Add </p>
                </a>
              </li>
              <li class="nav-item">
                <a href=" " class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>List</p>
                </a>
              </li>
             
            </ul>
          </li>
          <li class="nav-header">USERS</li>
          <li class="nav-item">
            <a href=" " class="nav-link">
              <i class="nav-icon far fa-calendar-alt"></i>
              <p>
                Users
                <span class="badge badge-info right">2</span>
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href=" " class="nav-link">
              <i class="nav-icon far fa-image"></i>
              <p>
                Investors
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href=" " class="nav-link">
              <i class="nav-icon fas fa-columns"></i>
              <p>
                Admin 
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="#" class="nav-link">
              <i class="nav-icon far fa-envelope"></i>
              <p>
                Messages
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="{{route('allmessages')}}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>List</p>
                </a>
              </li>
              
            </ul>
          </li>
          <li class="nav-item">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-book"></i>
              <p>
                Enquiries
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              
             
              
              <li class="nav-item">
                <a href=" " class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>List </p>
                </a>
              </li>
            </ul>
          </li>
           
          <li class="nav-item">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-search"></i>
              <p>
                Search
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href=" " class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p> Search</p>
                </a>
              </li>
           
            </ul>
          </li> 
          <li class="nav-item">
            <a href="#" class="nav-link">
              <i class="nav-icon far fa-circle text-danger"></i>
              <p class="text">Logout</p>
            </a>
          </li>
          
         
        </ul>
      </nav>