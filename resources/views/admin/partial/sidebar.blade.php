<!-- ============================================================== -->
<!-- Left Sidebar - style you can find in sidebar.scss  -->
<!-- ============================================================== -->
<aside class="left-sidebar" data-sidebarbg="skin5" style="background-color: #468848;">
    <!-- Sidebar scroll-->
    <div class="scroll-sidebar">
        <!-- Sidebar navigation-->
        <nav class="sidebar-nav" style="background-color: #468848;">
            <ul id="sidebarnav">
                <li class="sidebar-item" style="background-color: #468848;">
                    <a class="sidebar-link waves-effect waves-dark sidebar-link" href="{{url('/view_category')}}"
                        aria-expanded="false">
                        <i class="mdi mdi-format-list-bulleted-type"></i>
                        <span class="hide-menu">Kategori User</span>
                    </a>
                </li>
                <li class="sidebar-item" style="background-color: #468848;">
                    <a class="sidebar-link waves-effect waves-dark sidebar-link" href="{{url('/view_user')}}"
                        aria-expanded="false">
                        <i class="mdi mdi-format-list-bulleted-type"></i>
                        <span class="hide-menu">Kelola User</span>
                    </a>
                </li>
                <li class="sidebar-item" style="background-color: #468848;">
                    <a class="sidebar-link waves-effect waves-dark sidebar-link" href="{{url('/view_goatvest')}}"
                        aria-expanded="false">
                        <i class="mdi mdi-format-list-bulleted-type"></i>
                        <span class="hide-menu">Kelola Investor</span>
                    </a>
                </li>

                <li class="sidebar-item" style="background-color: #468848;">
                    <a class="sidebar-link waves-effect waves-dark sidebar-link" href="{{url('/view_mitra')}}"
                        aria-expanded="false">
                        <i class="mdi mdi-format-list-bulleted-type"></i>
                        <span class="hide-menu">Kelola Mitra</span>
                    </a>
                </li>

                <li class="sidebar-item" style="background-color: #468848;">
                    <a class="sidebar-link waves-effect waves-dark sidebar-link" href="{{ route('admin.kurir.view') }}" aria-expanded="false">
                        <i class="mdi mdi-format-list-bulleted-type"></i>
                        <span class="hide-menu">Kelola Kurir</span>
                    </a>
                </li>

            </ul>
        </nav>
        <!-- End Sidebar navigation -->
    </div>
    <!-- End Sidebar scroll-->
</aside>
<!-- ============================================================== -->
<!-- End Left Sidebar - style you can find in sidebar.scss  -->
<!-- ============================================================== -->
