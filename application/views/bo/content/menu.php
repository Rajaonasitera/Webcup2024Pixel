    <!-- Sidebar wrapper start -->
    <nav class="sidebar-wrapper">   
       <!-- Sidebar brand starts -->
        <div class="sidebar-brand">
          <a href="index.html" class="logo">
            <img src="<?php echo base_url() ?>assets/bo/images/logo.svg" alt="Max Free Admin Dashboard" />
          </a>
        </div>
        <!-- Sidebar brand starts -->

        <!-- Sidebar menu starts -->
        <div class="sidebar-menu">
            <div class="sidebarMenuScroll">
                <ul>
                    <li class="active">
                        <a href="<?php echo site_url("bo/dashController/getDashBoard") ?>">
                            <i class="bi bi-bar-chart-line"></i>
                            <span class="menu-text">Dashboards</span>
                        </a>
                    </li>

                    <li>
                        <a href="<?php echo site_url("bo/menuController/listeVentes") ?>">
                            <i class="bi bi-cart-check"></i>
                            <span class="menu-text">Vente</span>
                        </a>
                    </li>

                    <li>
                        <a href="<?php echo site_url("bo/menuController/listeClients") ?>">
                            <i class="bi bi-people"></i>
                            <span class="menu-text">Clients</span>
                        </a>
                    </li>

                    <li>
                        <a href="<?php echo site_url("bo/menuController/listeService") ?>">
                            <i class="bi bi-handbag"></i>
                            <span class="menu-text">Services</span>
                        </a>
                    </li>
                </ul>
            </div>
        </div>
        <!-- Sidebar menu ends -->
    </nav>