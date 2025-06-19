 {{-- <div class="sidebar border border-right col-md-3 col-lg-2 p-0 bg-body-tertiary">
     <div class="offcanvas-md offcanvas-end bg-body-tertiary" tabindex="-1" id="sidebarMenu" aria-labelledby="sidebarMenuLabel">
         <div class="offcanvas-header">
             <h5 class="offcanvas-title" id="sidebarMenuLabel">Company name</h5>
             <button type="button" class="btn-close" data-bs-dismiss="offcanvas" data-bs-target="#sidebarMenu"
                 aria-label="Close">
            </button>
         </div>
         <div class="offcanvas-body d-md-flex flex-column p-0 pt-lg-3 overflow-y-auto">
             <ul class="nav flex-column">
                 <li class="nav-item">
                     <a class="nav-link d-flex align-items-center gap-2 active" aria-current="page" href="#">
                         <svg class="bi">
                             <use xlink:href="#house-fill" />
                         </svg>
                         Dashboard
                     </a>
                 </li>
                 <li class="nav-item">
                     <a class="nav-link d-flex align-items-center gap-2" href="#">
                         <svg class="bi">
                             <use xlink:href="#file-earmark" />
                         </svg>
                         Venda
                     </a>
                 </li>
                 <li class="nav-item">
                     <a class="nav-link d-flex align-items-center gap-2" href="#">
                         <svg class="bi">
                             <use xlink:href="#cart" />
                         </svg>
                         Produto
                     </a>
                 </li>
                 <li class="nav-item">
                     <a class="nav-link d-flex align-items-center gap-2" href="#">
                         <svg class="bi">
                             <use xlink:href="#people" />
                         </svg>
                         Clientes
                     </a>
                 </li>

             </ul>


             <ul class="nav flex-column mb-auto">
                 <li class="nav-item">
                     <a class="nav-link d-flex align-items-center gap-2" href="#">
                         <svg class="bi">
                             <use xlink:href="#gear-wide-connected" />
                         </svg>
                         Settings
                     </a>
                 </li>
                 <li class="nav-item">
                     <a class="nav-link d-flex align-items-center gap-2" href="#">
                         <svg class="bi">
                             <use xlink:href="#door-closed" />
                         </svg>
                         Sign out
                     </a>
                 </li>
             </ul>
         </div>
     </div>
 </div>  --}}


 <div class="col-auto col-md-3 col-xl-2 px-sm-2 px-0 bg-dark">
    <div class="d-flex flex-column align-items-center align-items-sm-start px-3 pt-2 text-white min-vh-100">
        <ul class="nav nav-pills flex-column mb-sm-auto mb-0 align-items-center align-items-sm-start" id="menu">
            <li class="nav-item">
                <a href="#" class="nav-link align-middle px-0">
                    <i class="fa-solid fa-house"></i> <span class="ms-1 d-none d-sm-inline">Home</span>
                </a>
            </li>
            
            <li>
                <a href="{{ route('dashboard.index') }}" class="nav-link px-0 align-middle">
                   <i class="fa-solid fa-display"></i>  <span class="ms-1 d-none d-sm-inline">Dashboard</span> </a>
            </li>
                
            <li>
                <a href="{{ route('vendas.index') }}" class="nav-link px-0 align-middle">
                    <i class="fa-solid fa-cart-shopping"></i> <span class="ms-1 d-none d-sm-inline">Venda</span> </a>
            </li>
            
            <li>
                <a href="{{ route('produtos.index') }}" class="nav-link px-0 align-middle">
                    <i class="fa-solid fa-box-open"></i> <span class="ms-1 d-none d-sm-inline">Produto</span> </a>
            </li>
 
            <li>
                <a href="{{ route('clientes.index') }}" class="nav-link px-0 align-middle">
                    <i class="fa-solid fa-users"></i> <span class="ms-1 d-none d-sm-inline">Clientes</span> </a>
            </li>

            <li>
                <a href="#" class="nav-link px-0 align-middle">
                    <i class="fa-solid fa-right-to-bracket"></i> <span class="ms-1 d-none d-sm-inline">Login</span> </a>
            </li>
        </ul>

    </div>
</div>
