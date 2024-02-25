<!DOCTYPE html>
<html lang="en">
<!--begin::Head-->
@include('admin.header');

<!--end::Head-->
<!--begin::Body-->

<body class="layout-fixed sidebar-expand-lg bg-body-tertiary">
  <!--begin::App Wrapper-->
  <div class="app-wrapper">
    <!--begin::Header-->
    <nav class="app-header navbar navbar-expand bg-body">
      <!--begin::Container-->
      <div class="container-fluid">


        <!--begin::End Navbar Links-->
        <ul class="navbar-nav ms-auto">
          <!--begin::Navbar Search-->



          <!--begin::Notifications Dropdown Menu-->

          <!--end::Notifications Dropdown Menu-->

          <!--begin::User Menu Dropdown-->
          <li class="nav-item dropdown user-menu">
            <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">
              <span class="d-none d-md-inline">{{ Auth::user()->name }}</span>
            </a>
            <ul class="dropdown-menu dropdown-menu-lg dropdown-menu-end">
              <!--begin::User Image-->

              <!--end::Menu Body-->
              <!--begin::Menu Footer-->
              <li class="user-footer">
                <a href="/profile" class="btn btn-default btn-flat">Configurações</a>
                <form method="post" action="/logout">
                  @csrf
                  <button type="submit" class="btn btn-default btn-flat">Sair</button>
                </form>
              </li>
              <!--end::Menu Footer-->
            </ul>
          </li>
          <!--end::User Menu Dropdown-->
        </ul>
        <!--end::End Navbar Links-->
      </div>
      <!--end::Container-->
    </nav>
    <!--end::Header-->
    <!--begin::Sidebar-->
    <aside class=" app-sidebar bg-body-secondary shadow" data-bs-theme="dark">
      <!--begin::Sidebar Brand-->
      <div class="sidebar-brand">
        <!--begin::Brand Link-->
        <a href="index.html" class="brand-link">
          <!--begin::Brand Image-->
          <img src="{{URL('img/admin/AdminLTELogo.png')}}" alt="AdminLTE Logo" class="brand-image opacity-75 shadow" />
          <!--end::Brand Image-->
          <!--begin::Brand Text-->
          <span class="brand-text fw-light">AdminLTE 4</span>
          <!--end::Brand Text-->
        </a>
        <!--end::Brand Link-->
      </div>
      <!--end::Sidebar Brand-->
      <!--begin::Sidebar Wrapper-->
      <div class="sidebar-wrapper">
        <nav class="mt-2">
          <!--begin::Sidebar Menu-->
          <ul class="nav sidebar-menu flex-column" data-lte-toggle="treeview" role="menu" data-accordion="false">
            <li class="nav-item menu-open">
              <a href="javascript:;" class="nav-link active">
                <i class="nav-icon fa-solid fa-gauge-high"></i>
                <p>
                  Dashboard
                  <i class="nav-arrow fa-solid fa-angle-right"></i>
                </p>
              </a>
              <ul class="nav nav-treeview">
                <li class="nav-item">
                  <a href="../index.html" class="nav-link active">
                    <i class="nav-icon fa-regular fa-circle"></i>
                    <p>Dashboard v1</p>
                  </a>
                </li>
                <li class="nav-item">
                  <a href="dist/pages/index2.html" class="nav-link">
                    <i class="nav-icon fa-regular fa-circle"></i>
                    <p>Dashboard v2</p>
                  </a>
                </li>
                <li class="nav-item">
                  <a href="dist/pages/index3.html" class="nav-link">
                    <i class="nav-icon fa-regular fa-circle"></i>
                    <p>Dashboard v3</p>
                  </a>
                </li>
              </ul>
            </li>
            <li class="nav-item">
              <a href="javascript:;" class="nav-link">
                <i class="nav-icon fa-solid fa-box-open"></i>
                <p>
                  Widgets
                  <i class="nav-arrow fa-solid fa-angle-right"></i>
                </p>
              </a>
              <ul class="nav nav-treeview">
                <li class="nav-item">
                  <a href="dist/pages/widgets/small-box.html" class="nav-link">
                    <i class="nav-icon fa-regular fa-circle"></i>
                    <p>Small Box</p>
                  </a>
                </li>
                <li class="nav-item">
                  <a href="dist/pages/widgets/info-box.html" class="nav-link">
                    <i class="nav-icon fa-regular fa-circle"></i>
                    <p>info Box</p>
                  </a>
                </li>
                <li class="nav-item">
                  <a href="dist/pages/widgets/cards.html" class="nav-link">
                    <i class="nav-icon fa-regular fa-circle"></i>
                    <p>Cards</p>
                  </a>
                </li>
              </ul>
            </li>
            <li class="nav-item">
              <a href="javascript:;" class="nav-link">
                <i class="nav-icon fa-solid fa-copy"></i>
                <p>
                  Layout Options
                  <span class="nav-badge badge text-bg-secondary opacity-75 me-3">6</span>
                  <i class="nav-arrow fa-solid fa-angle-right"></i>
                </p>
              </a>
              <ul class="nav nav-treeview">
                <li class="nav-item">
                  <a href="dist/pages/layout/unfixed-sidebar.html" class="nav-link">
                    <i class="nav-icon fa-regular fa-circle"></i>
                    <p>Unfixed Sidebar</p>
                  </a>
                </li>
                <li class="nav-item">
                  <a href="dist/pages/layout/fixed-sidebar.html" class="nav-link">
                    <i class="nav-icon fa-regular fa-circle"></i>
                    <p>Fixed Sidebar</p>
                  </a>
                </li>
                <li class="nav-item">
                  <a href="dist/pages/layout/sidebar-mini.html" class="nav-link">
                    <i class="nav-icon fa-regular fa-circle"></i>
                    <p>Sidebar Mini</p>
                  </a>
                </li>
                <li class="nav-item">
                  <a href="dist/pages/layout/collapsed-sidebar.html" class="nav-link">
                    <i class="nav-icon fa-regular fa-circle"></i>
                    <p>Sidebar Mini <small>+ Collapsed</small></p>
                  </a>
                </li>
                <li class="nav-item">
                  <a href="dist/pages/layout/logo-switch.html" class="nav-link">
                    <i class="nav-icon fa-regular fa-circle"></i>
                    <p>Sidebar Mini <small>+ Logo Switch</small></p>
                  </a>
                </li>
                <li class="nav-item">
                  <a href="dist/pages/layout/layout-rtl.html" class="nav-link">
                    <i class="nav-icon fa-regular fa-circle"></i>
                    <p>Layout RTL</p>
                  </a>
                </li>
              </ul>
            </li>
            <li class="nav-item">
              <a href="javascript:;" class="nav-link">
                <i class="nav-icon fa-solid fa-tree"></i>
                <p>
                  UI Elements
                  <i class="nav-arrow fa-solid fa-angle-right"></i>
                </p>
              </a>
              <ul class="nav nav-treeview">
                <li class="nav-item">
                  <a href="dist/pages//UI/timeline.html" class="nav-link">
                    <i class="nav-icon fa-regular fa-circle"></i>
                    <p>Timeline</p>
                  </a>
                </li>
              </ul>
            </li>
            <li class="nav-item">
              <a href="javascript:;" class="nav-link">
                <i class="nav-icon fa-solid fa-pen-to-square"></i>
                <p>
                  Forms
                  <i class="nav-arrow fa-solid fa-angle-right"></i>
                </p>
              </a>
              <ul class="nav nav-treeview">
                <li class="nav-item">
                  <a href="dist/pages/forms/general.html" class="nav-link">
                    <i class="nav-icon fa-regular fa-circle"></i>
                    <p>General Elements</p>
                  </a>
                </li>
              </ul>
            </li>
            <li class="nav-item">
              <a href="javascript:;" class="nav-link">
                <i class="nav-icon fa-solid fa-table"></i>
                <p>
                  Tables
                  <i class="nav-arrow fa-solid fa-angle-right"></i>
                </p>
              </a>
              <ul class="nav nav-treeview">
                <li class="nav-item">
                  <a href="{{ url('/tabelas') }}" class="nav-link">
                    <i class="nav-icon fa-regular fa-circle"></i>
                    <p>Simple Tables</p>
                  </a>
                </li>
              </ul>
            </li>

            <li class="nav-header">EXAMPLES</li>
            <li class="nav-item">
              <a href="javascript:;" class="nav-link">
                <i class="nav-icon fa-solid fa-arrow-right-to-bracket"></i>
                <p>
                  Login & Register
                  <i class="nav-arrow fa-solid fa-angle-right"></i>
                </p>
              </a>
              <ul class="nav nav-treeview">
                <li class="nav-item">
                  <a href="dist/pages/examples/login.html" class="nav-link">
                    <i class="nav-icon fa-regular fa-circle"></i>
                    <p>Login v1</p>
                  </a>
                </li>
                <li class="nav-item">
                  <a href="dist/pages/examples/register.html" class="nav-link">
                    <i class="nav-icon fa-regular fa-circle"></i>
                    <p>Register v1</p>
                  </a>
                </li>
              </ul>
            </li>

            <li class="nav-header">DOCUMENTATIONS</li>
            <li class="nav-item">
              <a href="dist/pages/docs/introduction.html" class="nav-link">
                <i class="nav-icon fa-solid fa-download"></i>
                <p>Installation</p>
              </a>
            </li>
            <li class="nav-item">
              <a href="dist/pages/docs/layout.html" class="nav-link">
                <i class="nav-icon fa-solid fa-grip"></i>
                <p>Layout</p>
              </a>
            </li>
            <li class="nav-item">
              <a href="dist/pages/docs/color-mode.html" class="nav-link">
                <i class="nav-icon fa-solid fa-star-half-stroke"></i>
                <p>Color Mode</p>
              </a>
            </li>
            <li class="nav-item">
              <a href="javascript:;" class="nav-link">
                <i class="nav-icon fa-solid fa-swatchbook"></i>
                <p>
                  Components
                  <i class="nav-arrow fa-solid fa-angle-right"></i>
                </p>
              </a>
              <ul class="nav nav-treeview">
                <li class="nav-item">
                  <a href="../docs/components/main-header.html" class="nav-link">
                    <i class="nav-icon fa-regular fa-circle"></i>
                    <p>Main Header</p>
                  </a>
                </li>
                <li class="nav-item">
                  <a href="dist/pages/docs/components/main-sidebar.html" class="nav-link">
                    <i class="nav-icon fa-regular fa-circle"></i>
                    <p>Main Sidebar</p>
                  </a>
                </li>
              </ul>
            </li>
            <li class="nav-item">
              <a href="dist/pages/docs/browser-support.html" class="nav-link">
                <i class="nav-icon fa-solid fa-edge"></i>
                <p>Browser Support</p>
              </a>
            </li>

            <li class="nav-header">MULTI LEVEL EXAMPLE</li>
            <li class="nav-item">
              <a href="javascript:;" class="nav-link">
                <i class="nav-icon fa-solid fa-circle"></i>
                <p>Level 1</p>
              </a>
            </li>
            <li class="nav-item">
              <a href="javascript:;" class="nav-link">
                <i class="nav-icon fa-solid fa-circle"></i>
                <p>
                  Level 1
                  <i class="nav-arrow fa-solid fa-angle-right"></i>
                </p>
              </a>
              <ul class="nav nav-treeview">
                <li class="nav-item">
                  <a href="javascript:;" class="nav-link">
                    <i class="nav-icon fa-regular fa-circle"></i>
                    <p>Level 2</p>
                  </a>
                </li>
                <li class="nav-item">
                  <a href="javascript:;" class="nav-link">
                    <i class="nav-icon fa-regular fa-circle"></i>
                    <p>
                      Level 2
                      <i class="nav-arrow fa-solid fa-angle-right"></i>
                    </p>
                  </a>
                  <ul class="nav nav-treeview">
                    <li class="nav-item">
                      <a href="javascript:;" class="nav-link">
                        <i class="nav-icon fa-regular fa-dot-circle"></i>
                        <p>Level 3</p>
                      </a>
                    </li>
                    <li class="nav-item">
                      <a href="javascript:;" class="nav-link">
                        <i class="nav-icon fa-regular fa-dot-circle"></i>
                        <p>Level 3</p>
                      </a>
                    </li>
                    <li class="nav-item">
                      <a href="javascript:;" class="nav-link">
                        <i class="nav-icon fa-regular fa-dot-circle"></i>
                        <p>Level 3</p>
                      </a>
                    </li>
                  </ul>
                </li>
                <li class="nav-item">
                  <a href="javascript:;" class="nav-link">
                    <i class="nav-icon fa-regular fa-circle"></i>
                    <p>Level 2</p>
                  </a>
                </li>
              </ul>
            </li>
            <li class="nav-item">
              <a href="javascript:;" class="nav-link">
                <i class="nav-icon fa-solid fa-circle"></i>
                <p>Level 1</p>
              </a>
            </li>

            <li class="nav-header">LABELS</li>
            <li class="nav-item">
              <a href="javascript:;" class="nav-link">
                <i class="nav-icon fa-regular fa-circle text-danger"></i>
                <p class="text">Important</p>
              </a>
            </li>
            <li class="nav-item">
              <a href="javascript:;" class="nav-link">
                <i class="nav-icon fa-regular fa-circle text-warning"></i>
                <p>Warning</p>
              </a>
            </li>
            <li class="nav-item">
              <a href="javascript:;" class="nav-link">
                <i class="nav-icon fa-regular fa-circle text-info"></i>
                <p>Informational</p>
              </a>
            </li>
          </ul>
          <!--end::Sidebar Menu-->
        </nav>
      </div>
      <!--end::Sidebar Wrapper-->
    </aside>
    <!--end::Sidebar-->
    <!--begin::App Main-->
    <main class="app-main">
      <!--begin::App Content Header-->
      <div class="app-content-header">
        <!--begin::Container-->
        <div class="container-fluid">
          <!--begin::Row-->
          <div class="row">
            <div class="col-sm-6">
              <h3 class="mb-0">Dashboard</h3>
            </div>
            <div class="col-sm-6">
              <ol class="breadcrumb float-sm-end">
                <li class="breadcrumb-item"><a href="#">Home</a></li>
                <li class="breadcrumb-item active" aria-current="page">
                  Dashboard
                </li>
              </ol>
            </div>
          </div>
          <!--end::Row-->
        </div>
        <!--end::Container-->
      </div>
      <!--end::App Content Header-->
      <!--begin::App Content-->
      <div class="app-content">
        <!--begin::Container-->
        <div class="container-fluid">
          <!--begin::Row-->
          <div class="row">
            <!--begin::Col-->
            <div class="col-lg-3 col-6">
              <!--begin::Small Box Widget 1-->
              <div class="small-box text-bg-primary">
                <div class="inner">
                  <h3><?php echo $dados['users'] ?></h3>

                  <p>Usuários </p>
                </div>
                <svg class="small-box-icon" fill="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg" aria-hidden="true">
                  <path d="M2.25 2.25a.75.75 0 000 1.5h1.386c.17 0 .318.114.362.278l2.558 9.592a3.752 3.752 0 00-2.806 3.63c0 .414.336.75.75.75h15.75a.75.75 0 000-1.5H5.378A2.25 2.25 0 017.5 15h11.218a.75.75 0 00.674-.421 60.358 60.358 0 002.96-7.228.75.75 0 00-.525-.965A60.864 60.864 0 005.68 4.509l-.232-.867A1.875 1.875 0 003.636 2.25H2.25zM3.75 20.25a1.5 1.5 0 113 0 1.5 1.5 0 01-3 0zM16.5 20.25a1.5 1.5 0 113 0 1.5 1.5 0 01-3 0z"></path>
                </svg>
                <a href="<?= url('/lista'); ?>" class="small-box-footer">
                  Exibir usuários <i class="fa-solid fa-arrow-circle-right"></i>
                </a>
              </div>
              <!--end::Small Box Widget 1-->
            </div>
            <!--end::Col-->
            <div class="col-lg-3 col-6">
              <!--begin::Small Box Widget 2-->
              <div class="small-box text-bg-success">
                <div class="inner">
                  <h3>53<sup class="fs-5">%</sup></h3>

                  <p>Bounce Rate</p>
                </div>
                <svg class="small-box-icon" fill="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg" aria-hidden="true">
                  <path d="M18.375 2.25c-1.035 0-1.875.84-1.875 1.875v15.75c0 1.035.84 1.875 1.875 1.875h.75c1.035 0 1.875-.84 1.875-1.875V4.125c0-1.036-.84-1.875-1.875-1.875h-.75zM9.75 8.625c0-1.036.84-1.875 1.875-1.875h.75c1.036 0 1.875.84 1.875 1.875v11.25c0 1.035-.84 1.875-1.875 1.875h-.75a1.875 1.875 0 01-1.875-1.875V8.625zM3 13.125c0-1.036.84-1.875 1.875-1.875h.75c1.036 0 1.875.84 1.875 1.875v6.75c0 1.035-.84 1.875-1.875 1.875h-.75A1.875 1.875 0 013 19.875v-6.75z"></path>
                </svg>
                <a href="#" class="small-box-footer">
                  More info <i class="fa-solid fa-arrow-circle-right"></i>
                </a>
              </div>
              <!--end::Small Box Widget 2-->
            </div>
            <!--end::Col-->
            <div class="col-lg-3 col-6">
              <!--begin::Small Box Widget 3-->
              <div class="small-box text-bg-warning">
                <div class="inner">
                  <h3>44</h3>

                  <p>User Registrations</p>
                </div>
                <svg class="small-box-icon" fill="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg" aria-hidden="true">
                  <path d="M6.25 6.375a4.125 4.125 0 118.25 0 4.125 4.125 0 01-8.25 0zM3.25 19.125a7.125 7.125 0 0114.25 0v.003l-.001.119a.75.75 0 01-.363.63 13.067 13.067 0 01-6.761 1.873c-2.472 0-4.786-.684-6.76-1.873a.75.75 0 01-.364-.63l-.001-.122zM19.75 7.5a.75.75 0 00-1.5 0v2.25H16a.75.75 0 000 1.5h2.25v2.25a.75.75 0 001.5 0v-2.25H22a.75.75 0 000-1.5h-2.25V7.5z"></path>
                </svg>
                <a href="#" class="small-box-footer">
                  More info <i class="fa-solid fa-arrow-circle-right"></i>
                </a>
              </div>
              <!--end::Small Box Widget 3-->
            </div>
            <!--end::Col-->
            <div class="col-lg-3 col-6">
              <!--begin::Small Box Widget 4-->
              <div class="small-box text-bg-danger">
                <div class="inner">
                  <h3>65</h3>

                  <p>Unique Visitors</p>
                </div>
                <svg class="small-box-icon" fill="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg" aria-hidden="true">
                  <path clip-rule="evenodd" fill-rule="evenodd" d="M2.25 13.5a8.25 8.25 0 018.25-8.25.75.75 0 01.75.75v6.75H18a.75.75 0 01.75.75 8.25 8.25 0 01-16.5 0z"></path>
                  <path clip-rule="evenodd" fill-rule="evenodd" d="M12.75 3a.75.75 0 01.75-.75 8.25 8.25 0 018.25 8.25.75.75 0 01-.75.75h-7.5a.75.75 0 01-.75-.75V3z"></path>
                </svg>
                <a href="#" class="small-box-footer">
                  More info <i class="fa-solid fa-arrow-circle-right"></i>
                </a>
              </div>
              <!--end::Small Box Widget 4-->
            </div>
            <!--end::Col-->
          </div>
          <!--end::Row-->
          <!--begin::Row-->
          <div class="row">
            <!-- Start col -->
            <div class="col-lg-7 connectedSortable">
              <div class="card">
                <div class="card-header">
                  <h3 class="card-title">Sales Value</h3>
                </div>

                <div class="card-body">
                  <div id="revenue-chart"></div>
                </div>
              </div>
              <!-- /.card -->

              <!-- DIRECT CHAT -->
              <div class="card direct-chat direct-chat-primary">
                <div class="card-header">
                  <h3 class="card-title">Mensagens recebidas</h3>


                </div>
                <!-- /.card-header -->
                <div class="card-body">
                  <!-- Conversations are loaded here -->
                  <div class="direct-chat-messages">

                    <!-- Message. Default to the start -->
                    <div class="direct-chat-msg">
                      <div class="direct-chat-infos clearfix">
                        <span class="direct-chat-name float-start">
                          Nome de quem enviou
                        </span>
                        <span class="direct-chat-timestamp float-end">
                          23 de Fevereiro de 2024
                        </span>
                      </div>
                      <!-- /.direct-chat-infos -->
                      <img class="direct-chat-img" src="{{URL('img/user.png')}}" alt="message user image" />
                      <!-- /.direct-chat-img -->
                      <div class="direct-chat-text">
                        Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old. Richard McClintock, a Latin professor at Hampden-Sydney College in Virginia, looked up one of the more obscure Latin words, consectetur, from a Lorem Ipsum passage, and going through the cites of the word in classical literature, discovered the undoubtable source. Lorem Ipsum comes from sections 1.10.32 and 1.10.33 of "de Finibus Bonorum et Malorum" (The Extremes of Good and Evil) by Cicero, written in 45 BC. This book is a treatise on the theory of ethics, very popular during the Renaissance. The first line of Lorem Ipsum, "Lorem ipsum dolor sit amet..", comes from a line in section 1.10.32.

                        The standard chunk of Lorem Ipsum used since the 1500s is reproduced below for those interested. Sections 1.10.32 and 1.10.33 from "de Finibus Bonorum et Malorum" by Cicero are also reproduced in their exact original form, accompanied by English versions from the 1914 translation by H. Rackham.
                      </div>
                      <!-- /.direct-chat-text -->
                    </div>
                    <!-- /.direct-chat-msg -->

                    <!-- Message to the end -->

                    <!-- /.direct-chat-msg -->
                  </div>
                  <!-- /.direct-chat-messages-->

                  <!-- Contacts are loaded here -->
                  <div class="direct-chat-contacts">
                    <ul class="contacts-list">
                      <li>
                        <a href="#">
                          <img class="contacts-list-img" src="{{URL('img/admin/user1-128x128.jpg')}}" alt="User Avatar" />

                          <div class="contacts-list-info">
                            <span class="contacts-list-name">
                              Count Dracula
                              <small class="contacts-list-date float-end">
                                2/28/2023
                              </small>
                            </span>
                            <span class="contacts-list-msg">
                              How have you been? I was...
                            </span>
                          </div>
                          <!-- /.contacts-list-info -->
                        </a>
                      </li>
                      <!-- End Contact Item -->
                      <li>
                        <a href="#">
                          <img class="contacts-list-img" src="{{URL('img/admin/user7-128x128.jpg')}}" alt="User Avatar" />

                          <div class="contacts-list-info">
                            <span class="contacts-list-name">
                              Sarah Doe
                              <small class="contacts-list-date float-end">
                                2/23/2023
                              </small>
                            </span>
                            <span class="contacts-list-msg">
                              I will be waiting for...
                            </span>
                          </div>
                          <!-- /.contacts-list-info -->
                        </a>
                      </li>
                      <!-- End Contact Item -->
                      <li>
                        <a href="#">
                          <img class="contacts-list-img" src="{{URL('img/admin/user3-128x128.jpg')}}" alt="User Avatar" />

                          <div class="contacts-list-info">
                            <span class="contacts-list-name">
                              Nadia Jolie
                              <small class="contacts-list-date float-end">
                                2/20/2023
                              </small>
                            </span>
                            <span class="contacts-list-msg">
                              I'll call you back at...
                            </span>
                          </div>
                          <!-- /.contacts-list-info -->
                        </a>
                      </li>
                      <!-- End Contact Item -->
                      <li>
                        <a href="#">
                          <img class="contacts-list-img" src="{{URL('img/admin/user5-128x128.jpg')}}" alt="User Avatar" />

                          <div class="contacts-list-info">
                            <span class="contacts-list-name">
                              Nora S. Vans
                              <small class="contacts-list-date float-end">
                                2/10/2023
                              </small>
                            </span>
                            <span class="contacts-list-msg">
                              Where is your new...
                            </span>
                          </div>
                          <!-- /.contacts-list-info -->
                        </a>
                      </li>
                      <!-- End Contact Item -->
                      <li>
                        <a href="#">
                          <img class="contacts-list-img" src="{{URL('img/admin/user6-128x128.jpg')}}" alt="User Avatar" />

                          <div class="contacts-list-info">
                            <span class="contacts-list-name">
                              John K.
                              <small class="contacts-list-date float-end">
                                1/27/2023
                              </small>
                            </span>
                            <span class="contacts-list-msg">
                              Can I take a look at...
                            </span>
                          </div>
                          <!-- /.contacts-list-info -->
                        </a>
                      </li>
                      <!-- End Contact Item -->
                      <li>
                        <a href="#">
                          <img class="contacts-list-img" src="{{URL('img/admin/user8-128x128.jpg')}}" alt="User Avatar" />

                          <div class="contacts-list-info">
                            <span class="contacts-list-name">
                              Kenneth M.
                              <small class="contacts-list-date float-end">
                                1/4/2023
                              </small>
                            </span>
                            <span class="contacts-list-msg">
                              Never mind I found...
                            </span>
                          </div>
                          <!-- /.contacts-list-info -->
                        </a>
                      </li>
                      <!-- End Contact Item -->
                    </ul>
                    <!-- /.contacts-list -->
                  </div>
                  <!-- /.direct-chat-pane -->
                </div>

              </div>
              <!-- /.direct-chat -->
            </div>
            <!-- /.Start col -->

            <!-- Start col -->
            <div class="col-lg-5 connectedSortable">
              <div class="card text-white bg-primary bg-gradient border-primary">
                <div class="card-header border-0">
                  <h3 class="card-title">Sales Value</h3>
                  <div class="card-tools">
                    <button type="button" class="btn btn-primary btn-sm" data-lte-toggle="card-collapse">
                      <i class="fa-solid fa-plus"></i>
                    </button>
                  </div>
                </div>
                <div class="card-body">
                  <div id="world-map" style="height: 220px"></div>
                </div>
                <div class="card-footer border-0">
                  <!--begin::Row-->
                  <div class="row">
                    <div class="col-4 text-center">
                      <div id="sparkline-1"></div>
                      <div class="text-white">Visitors</div>
                    </div>
                    <div class="col-4 text-center">
                      <div id="sparkline-2"></div>
                      <div class="text-white">Online</div>
                    </div>
                    <div class="col-4 text-center">
                      <div id="sparkline-3"></div>
                      <div class="text-white">Sales</div>
                    </div>
                  </div>
                  <!--end::Row-->
                </div>
              </div>
            </div>
            <!-- /.Start col -->
          </div>
          <!-- /.row (main row) -->
        </div>
        <!--end::Container-->
      </div>
      <!--end::App Content-->
    </main>
    <!--end::App Main-->
    <!--begin::Footer-->
    @include('admin.footer');
    <!--end::Footer-->
  </div>
  <!--end::App Wrapper-->
  <!--begin::Script-->
  <!--begin::Third Party Plugin(OverlayScrollbars)-->
  <script src="https://cdn.jsdelivr.net/npm/overlayscrollbars@2.1.0/browser/overlayscrollbars.browser.es6.min.js" integrity="sha256-NRZchBuHZWSXldqrtAOeCZpucH/1n1ToJ3C8mSK95NU=" crossorigin="anonymous"></script>
  <!--end::Third Party Plugin(OverlayScrollbars)--><!--begin::Required Plugin(popperjs for Bootstrap 5)-->
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.7/dist/umd/popper.min.js" integrity="sha384-zYPOMqeu1DAVkHiLqWBUTcbYfZ8osu1Nd6Z89ify25QV9guujx43ITvfi12/QExE" crossorigin="anonymous"></script>
  <!--end::Required Plugin(popperjs for Bootstrap 5)--><!--begin::Required Plugin(Bootstrap 5)-->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.min.js" integrity="sha384-Y4oOpwW3duJdCWv5ly8SCFYWqFDsfob/3GkgExXKV4idmbt98QcxXYs9UoXAB7BZ" crossorigin="anonymous"></script>
  <!--end::Required Plugin(Bootstrap 5)--><!--begin::Required Plugin(AdminLTE)-->
  <script src="{{ asset('js/admin/adminlte.js') }}"></script>

  <!--end::Required Plugin(AdminLTE)--><!--begin::OverlayScrollbars Configure-->
  <script>
    const SELECTOR_SIDEBAR_WRAPPER = ".sidebar-wrapper";
    const Default = {
      scrollbarTheme: "os-theme-light",
      scrollbarAutoHide: "leave",
      scrollbarClickScroll: true,
    };

    document.addEventListener("DOMContentLoaded", function() {
      const sidebarWrapper = document.querySelector(SELECTOR_SIDEBAR_WRAPPER);
      if (
        sidebarWrapper &&
        typeof OverlayScrollbarsGlobal?.OverlayScrollbars !== "undefined"
      ) {
        OverlayScrollbarsGlobal.OverlayScrollbars(sidebarWrapper, {
          scrollbars: {
            theme: Default.scrollbarTheme,
            autoHide: Default.scrollbarAutoHide,
            clickScroll: Default.scrollbarClickScroll,
          },
        });
      }
    });
  </script>
  <!--end::OverlayScrollbars Configure-->

  <!-- OPTIONAL SCRIPTS -->

  <!-- sortablejs -->
  <script src="https://cdn.jsdelivr.net/npm/sortablejs@1.15.0/Sortable.min.js" integrity="sha256-ipiJrswvAR4VAx/th+6zWsdeYmVae0iJuiR+6OqHJHQ=" crossorigin="anonymous"></script>

  <!-- sortablejs -->
  <script>
    const connectedSortables =
      document.querySelectorAll(".connectedSortable");
    connectedSortables.forEach((connectedSortable) => {
      let sortable = new Sortable(connectedSortable, {
        group: "shared",
      });
    });

    const cardHeaders = document.querySelectorAll(
      ".connectedSortable .card-header"
    );
    cardHeaders.forEach((cardHeader) => {
      cardHeader.style.cursor = "move";
    });
  </script>

  <!-- apexcharts -->
  <script src="https://cdn.jsdelivr.net/npm/apexcharts@3.37.1/dist/apexcharts.min.js" integrity="sha256-+vh8GkaU7C9/wbSLIcwq82tQ2wTf44aOHA8HlBMwRI8=" crossorigin="anonymous"></script>

  <!-- ChartJS -->
  <script>
    // NOTICE!! DO NOT USE ANY OF THIS JAVASCRIPT
    // IT'S ALL JUST JUNK FOR DEMO
    // ++++++++++++++++++++++++++++++++++++++++++

    const sales_chart_options = {
      series: [{
          name: "Digital Goods",
          data: [28, 48, 40, 19, 86, 27, 90],
        },
        {
          name: "Electronics",
          data: [65, 59, 80, 81, 56, 55, 40],
        },
      ],
      chart: {
        height: 300,
        type: "area",
        toolbar: {
          show: false,
        },
      },
      legend: {
        show: false,
      },
      colors: ["#0d6efd", "#20c997"],
      dataLabels: {
        enabled: false,
      },
      stroke: {
        curve: "smooth",
      },
      xaxis: {
        type: "datetime",
        categories: [
          "2023-01-01",
          "2023-02-01",
          "2023-03-01",
          "2023-04-01",
          "2023-05-01",
          "2023-06-01",
          "2023-07-01",
        ],
      },
      tooltip: {
        x: {
          format: "MMMM yyyy",
        },
      },
    };

    const sales_chart = new ApexCharts(
      document.querySelector("#revenue-chart"),
      sales_chart_options
    );
    sales_chart.render();
  </script>

  <!-- jsvectormap -->
  <script src="https://cdn.jsdelivr.net/npm/jsvectormap@1.5.3/dist/js/jsvectormap.min.js" integrity="sha256-/t1nN2956BT869E6H4V1dnt0X5pAQHPytli+1nTZm2Y=" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/jsvectormap@1.5.3/dist/maps/world.js" integrity="sha256-XPpPaZlU8S/HWf7FZLAncLg2SAkP8ScUTII89x9D3lY=" crossorigin="anonymous"></script>

  <!-- jsvectormap -->
  <script>
    const visitorsData = {
      US: 398, // USA
      SA: 400, // Saudi Arabia
      CA: 1000, // Canada
      DE: 500, // Germany
      FR: 760, // France
      CN: 300, // China
      AU: 700, // Australia
      BR: 600, // Brazil
      IN: 800, // India
      GB: 320, // Great Britain
      RU: 3000, // Russia
    };

    // World map by jsVectorMap
    const map = new jsVectorMap({
      selector: "#world-map",
      map: "world",
    });

    // Sparkline charts
    const option_sparkline1 = {
      series: [{
        data: [1000, 1200, 920, 927, 931, 1027, 819, 930, 1021],
      }, ],
      chart: {
        type: "area",
        height: 50,
        sparkline: {
          enabled: true,
        },
      },
      stroke: {
        curve: "straight",
      },
      fill: {
        opacity: 0.3,
      },
      yaxis: {
        min: 0,
      },
      colors: ["#DCE6EC"],
    };

    const sparkline1 = new ApexCharts(
      document.querySelector("#sparkline-1"),
      option_sparkline1
    );
    sparkline1.render();

    const option_sparkline2 = {
      series: [{
        data: [515, 519, 520, 522, 652, 810, 370, 627, 319, 630, 921],
      }, ],
      chart: {
        type: "area",
        height: 50,
        sparkline: {
          enabled: true,
        },
      },
      stroke: {
        curve: "straight",
      },
      fill: {
        opacity: 0.3,
      },
      yaxis: {
        min: 0,
      },
      colors: ["#DCE6EC"],
    };

    const sparkline2 = new ApexCharts(
      document.querySelector("#sparkline-2"),
      option_sparkline2
    );
    sparkline2.render();

    const option_sparkline3 = {
      series: [{
        data: [15, 19, 20, 22, 33, 27, 31, 27, 19, 30, 21],
      }, ],
      chart: {
        type: "area",
        height: 50,
        sparkline: {
          enabled: true,
        },
      },
      stroke: {
        curve: "straight",
      },
      fill: {
        opacity: 0.3,
      },
      yaxis: {
        min: 0,
      },
      colors: ["#DCE6EC"],
    };

    const sparkline3 = new ApexCharts(
      document.querySelector("#sparkline-3"),
      option_sparkline3
    );
    sparkline3.render();
  </script>
  <!--end::Script-->
</body>
<!--end::Body-->

</html>