<nav id="sidebarMenu" class="col-md-3 col-lg-2 d-md-block bg-light sidebar collapse">
      <div class="position-sticky pt-3">
        <ul class="nav flex-column">
          <li class="nav-item">
            <a class="nav-link {{ ($active === "Dashboard") ? "active":"" }}" aria-current="page" href="/admin">
              Dashboard
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link {{ ($active === "Home") ? "active":"" }}" href="/home">
              Home
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link {{ ($active === "Profile") ? "active":"" }}" href="/profile">  
              Profile
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link {{ ($active === "Galery") ? "active":"" }}" href="/galery">
              Galery
            </a>
          </li> 
          <li class="nav-item">
            <a class="nav-link {{ ($active === "Buku Tamu") ? "active":"" }}" href="/bukutamu">
              Buku Tamu 
            </a>
          </li> 
        </ul>
        </ul>
      </div>
    </nav>