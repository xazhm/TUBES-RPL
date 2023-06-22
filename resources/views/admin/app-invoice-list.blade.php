<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta
      name="viewport"
      content="width=device-width, initial-scale=1, maximum-scale=1, shrink-to-fit=no"
    />
    <title>
      Invoice List | CORK - Multipurpose Bootstrap Dashboard Template
    </title>
    <link rel="icon" type="image/x-icon" href="assets/src/assets/img/favicon.ico" />
    <link
      href="assets/layouts/vertical-dark-menu/css/light/loader.css"
      rel="stylesheet"
      type="text/css"
    />
    <link
      href="assets/layouts/vertical-dark-menu/css/dark/loader.css"
      rel="stylesheet"
      type="text/css"
    />
    <script src="assets/layouts/vertical-dark-menu/loader.js"></script>
    <!-- BEGIN GLOBAL MANDATORY STYLES -->
    <link
      href="https://fonts.googleapis.com/css?family=Nunito:400,600,700"
      rel="stylesheet"
    />
    <link
      href="assets/src/bootstrap/css/bootstrap.min.css"
      rel="stylesheet"
      type="text/css"
    />
    <link
      href="assets/layouts/vertical-dark-menu/css/light/plugins.css"
      rel="stylesheet"
      type="text/css"
    />
    <link
      href="assets/layouts/vertical-dark-menu/css/dark/plugins.css"
      rel="stylesheet"
      type="text/css"
    />
    <!-- END GLOBAL MANDATORY STYLES -->

    <!--  BEGIN CUSTOM STYLE FILE  -->
    <link
      rel="stylesheet"
      type="text/css"
      href="assets/src/plugins/src/table/datatable/datatables.css"
    />

    <link
      rel="stylesheet"
      type="text/css"
      href="assets/src/plugins/css/light/table/datatable/dt-global_style.css"
    />
    <link
      href="assets/src/assets/css/light/apps/invoice-list.css"
      rel="stylesheet"
      type="text/css"
    />

    <link
      rel="stylesheet"
      type="text/css"
      href="assets/src/plugins/css/dark/table/datatable/dt-global_style.css"
    />
    <link
      href="assets/src/assets/css/dark/apps/invoice-list.css"
      rel="stylesheet"
      type="text/css"
    />
    <!--  END CUSTOM STYLE FILE  -->
  </head>
  <body>
    <!-- BEGIN LOADER -->
    <div id="load_screen">
      <div class="loader">
        <div class="loader-content">
          <div class="spinner-grow align-self-center"></div>
        </div>
      </div>
    </div>
    <!--  END LOADER -->

    <!--  BEGIN NAVBAR  -->
    <div class="header-container container-xxl">
      <header class="header navbar navbar-expand-sm expand-header">
        <ul class="navbar-item theme-brand flex-row text-center">
          <li class="nav-item theme-logo">
            <a href="index.html">
              <img
                src="assets/src/assets/img/logo2.svg"
                class="navbar-logo"
                alt="logo"
              />
            </a>
          </li>
          <li class="nav-item theme-text">
            <a href="index.html" class="nav-link"> CORK </a>
          </li>
        </ul>

        <div class="search-animated toggle-search">
          <svg
            xmlns="http://www.w3.org/2000/svg"
            width="24"
            height="24"
            viewBox="0 0 24 24"
            fill="none"
            stroke="currentColor"
            stroke-width="2"
            stroke-linecap="round"
            stroke-linejoin="round"
            class="feather feather-search"
          >
            <circle cx="11" cy="11" r="8"></circle>
            <line x1="21" y1="21" x2="16.65" y2="16.65"></line>
          </svg>
          <form
            class="form-inline search-full form-inline search"
            role="search"
          >
            <div class="search-bar">
              <input
                type="text"
                class="form-control search-form-control ml-lg-auto"
                placeholder="Search..."
              />
              <svg
                xmlns="http://www.w3.org/2000/svg"
                width="24"
                height="24"
                viewBox="0 0 24 24"
                fill="none"
                stroke="currentColor"
                stroke-width="2"
                stroke-linecap="round"
                stroke-linejoin="round"
                class="feather feather-x search-close"
              >
                <line x1="18" y1="6" x2="6" y2="18"></line>
                <line x1="6" y1="6" x2="18" y2="18"></line>
              </svg>
            </div>
          </form>
          <span class="badge badge-secondary">Ctrl + /</span>
        </div>

        <ul class="navbar-item flex-row ms-lg-auto ms-0 action-area">
          <li class="nav-item dropdown language-dropdown">
            <a
              href="javascript:void(0);"
              class="nav-link dropdown-toggle"
              id="language-dropdown"
              data-bs-toggle="dropdown"
              aria-haspopup="true"
              aria-expanded="false"
            >
              <img
                src="assets/src/assets/img/1x1/us.svg"
                class="flag-width"
                alt="flag"
              />
            </a>
            <div
              class="dropdown-menu position-absolute"
              aria-labelledby="language-dropdown"
            >
              <a class="dropdown-item d-flex" href="javascript:void(0);"
                ><img
                  src="assets/src/assets/img/1x1/us.svg"
                  class="flag-width"
                  alt="flag"
                />
                <span class="align-self-center">&nbsp;English</span></a
              >
              <a class="dropdown-item d-flex" href="javascript:void(0);"
                ><img
                  src="assets/src/assets/img/1x1/tr.svg"
                  class="flag-width"
                  alt="flag"
                />
                <span class="align-self-center">&nbsp;Turkish</span></a
              >
              <a class="dropdown-item d-flex" href="javascript:void(0);"
                ><img
                  src="assets/src/assets/img/1x1/br.svg"
                  class="flag-width"
                  alt="flag"
                />
                <span class="align-self-center">&nbsp;Portuguese</span></a
              >
              <a class="dropdown-item d-flex" href="javascript:void(0);"
                ><img
                  src="assets/src/assets/img/1x1/in.svg"
                  class="flag-width"
                  alt="flag"
                />
                <span class="align-self-center">&nbsp;Hindi</span></a
              >
              <a class="dropdown-item d-flex" href="javascript:void(0);"
                ><img
                  src="assets/src/assets/img/1x1/de.svg"
                  class="flag-width"
                  alt="flag"
                />
                <span class="align-self-center">&nbsp;German</span></a
              >
            </div>
          </li>

          <li class="nav-item theme-toggle-item">
            <a href="javascript:void(0);" class="nav-link theme-toggle">
              <svg
                xmlns="http://www.w3.org/2000/svg"
                width="24"
                height="24"
                viewBox="0 0 24 24"
                fill="none"
                stroke="currentColor"
                stroke-width="2"
                stroke-linecap="round"
                stroke-linejoin="round"
                class="feather feather-moon dark-mode"
              >
                <path
                  d="M21 12.79A9 9 0 1 1 11.21 3 7 7 0 0 0 21 12.79z"
                ></path>
              </svg>
              <svg
                xmlns="http://www.w3.org/2000/svg"
                width="24"
                height="24"
                viewBox="0 0 24 24"
                fill="none"
                stroke="currentColor"
                stroke-width="2"
                stroke-linecap="round"
                stroke-linejoin="round"
                class="feather feather-sun light-mode"
              >
                <circle cx="12" cy="12" r="5"></circle>
                <line x1="12" y1="1" x2="12" y2="3"></line>
                <line x1="12" y1="21" x2="12" y2="23"></line>
                <line x1="4.22" y1="4.22" x2="5.64" y2="5.64"></line>
                <line x1="18.36" y1="18.36" x2="19.78" y2="19.78"></line>
                <line x1="1" y1="12" x2="3" y2="12"></line>
                <line x1="21" y1="12" x2="23" y2="12"></line>
                <line x1="4.22" y1="19.78" x2="5.64" y2="18.36"></line>
                <line x1="18.36" y1="5.64" x2="19.78" y2="4.22"></line>
              </svg>
            </a>
          </li>

          <li class="nav-item dropdown notification-dropdown">
            <a
              href="javascript:void(0);"
              class="nav-link dropdown-toggle"
              id="notificationDropdown"
              data-bs-toggle="dropdown"
              aria-haspopup="true"
              aria-expanded="false"
            >
              <svg
                xmlns="http://www.w3.org/2000/svg"
                width="24"
                height="24"
                viewBox="0 0 24 24"
                fill="none"
                stroke="currentColor"
                stroke-width="2"
                stroke-linecap="round"
                stroke-linejoin="round"
                class="feather feather-bell"
              >
                <path d="M18 8A6 6 0 0 0 6 8c0 7-3 9-3 9h18s-3-2-3-9"></path>
                <path d="M13.73 21a2 2 0 0 1-3.46 0"></path></svg
              ><span class="badge badge-success"></span>
            </a>

            <div
              class="dropdown-menu position-absolute"
              aria-labelledby="notificationDropdown"
            >
              <div class="drodpown-title message">
                <h6 class="d-flex justify-content-between">
                  <span class="align-self-center">Messages</span>
                  <span class="badge badge-primary">9 Unread</span>
                </h6>
              </div>
              <div class="notification-scroll">
                <div class="dropdown-item">
                  <div class="media server-log">
                    <img
                      src="assets/src/assets/img/profile-16.jpeg"
                      class="img-fluid me-2"
                      alt="avatar"
                    />
                    <div class="media-body">
                      <div class="data-info">
                        <h6 class="">Kara Young</h6>
                        <p class="">1 hr ago</p>
                      </div>

                      <div class="icon-status">
                        <svg
                          xmlns="http://www.w3.org/2000/svg"
                          width="24"
                          height="24"
                          viewBox="0 0 24 24"
                          fill="none"
                          stroke="currentColor"
                          stroke-width="2"
                          stroke-linecap="round"
                          stroke-linejoin="round"
                          class="feather feather-x"
                        >
                          <line x1="18" y1="6" x2="6" y2="18"></line>
                          <line x1="6" y1="6" x2="18" y2="18"></line>
                        </svg>
                      </div>
                    </div>
                  </div>
                </div>

                <div class="dropdown-item">
                  <div class="media">
                    <img
                      src="assets/src/assets/img/profile-15.jpeg"
                      class="img-fluid me-2"
                      alt="avatar"
                    />
                    <div class="media-body">
                      <div class="data-info">
                        <h6 class="">Daisy Anderson</h6>
                        <p class="">8 hrs ago</p>
                      </div>

                      <div class="icon-status">
                        <svg
                          xmlns="http://www.w3.org/2000/svg"
                          width="24"
                          height="24"
                          viewBox="0 0 24 24"
                          fill="none"
                          stroke="currentColor"
                          stroke-width="2"
                          stroke-linecap="round"
                          stroke-linejoin="round"
                          class="feather feather-x"
                        >
                          <line x1="18" y1="6" x2="6" y2="18"></line>
                          <line x1="6" y1="6" x2="18" y2="18"></line>
                        </svg>
                      </div>
                    </div>
                  </div>
                </div>

                <div class="dropdown-item">
                  <div class="media file-upload">
                    <img
                      src="assets/src/assets/img/profile-21.jpeg"
                      class="img-fluid me-2"
                      alt="avatar"
                    />
                    <div class="media-body">
                      <div class="data-info">
                        <h6 class="">Oscar Garner</h6>
                        <p class="">14 hrs ago</p>
                      </div>

                      <div class="icon-status">
                        <svg
                          xmlns="http://www.w3.org/2000/svg"
                          width="24"
                          height="24"
                          viewBox="0 0 24 24"
                          fill="none"
                          stroke="currentColor"
                          stroke-width="2"
                          stroke-linecap="round"
                          stroke-linejoin="round"
                          class="feather feather-x"
                        >
                          <line x1="18" y1="6" x2="6" y2="18"></line>
                          <line x1="6" y1="6" x2="18" y2="18"></line>
                        </svg>
                      </div>
                    </div>
                  </div>
                </div>

                <div class="drodpown-title notification mt-2">
                  <h6 class="d-flex justify-content-between">
                    <span class="align-self-center">Notifications</span>
                    <span class="badge badge-secondary">16 New</span>
                  </h6>
                </div>

                <div class="dropdown-item">
                  <div class="media server-log">
                    <svg
                      xmlns="http://www.w3.org/2000/svg"
                      width="24"
                      height="24"
                      viewBox="0 0 24 24"
                      fill="none"
                      stroke="currentColor"
                      stroke-width="2"
                      stroke-linecap="round"
                      stroke-linejoin="round"
                      class="feather feather-server"
                    >
                      <rect
                        x="2"
                        y="2"
                        width="20"
                        height="8"
                        rx="2"
                        ry="2"
                      ></rect>
                      <rect
                        x="2"
                        y="14"
                        width="20"
                        height="8"
                        rx="2"
                        ry="2"
                      ></rect>
                      <line x1="6" y1="6" x2="6" y2="6"></line>
                      <line x1="6" y1="18" x2="6" y2="18"></line>
                    </svg>
                    <div class="media-body">
                      <div class="data-info">
                        <h6 class="">Server Rebooted</h6>
                        <p class="">45 min ago</p>
                      </div>

                      <div class="icon-status">
                        <svg
                          xmlns="http://www.w3.org/2000/svg"
                          width="24"
                          height="24"
                          viewBox="0 0 24 24"
                          fill="none"
                          stroke="currentColor"
                          stroke-width="2"
                          stroke-linecap="round"
                          stroke-linejoin="round"
                          class="feather feather-x"
                        >
                          <line x1="18" y1="6" x2="6" y2="18"></line>
                          <line x1="6" y1="6" x2="18" y2="18"></line>
                        </svg>
                      </div>
                    </div>
                  </div>
                </div>

                <div class="dropdown-item">
                  <div class="media file-upload">
                    <svg
                      xmlns="http://www.w3.org/2000/svg"
                      width="24"
                      height="24"
                      viewBox="0 0 24 24"
                      fill="none"
                      stroke="currentColor"
                      stroke-width="2"
                      stroke-linecap="round"
                      stroke-linejoin="round"
                      class="feather feather-file-text"
                    >
                      <path
                        d="M14 2H6a2 2 0 0 0-2 2v16a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V8z"
                      ></path>
                      <polyline points="14 2 14 8 20 8"></polyline>
                      <line x1="16" y1="13" x2="8" y2="13"></line>
                      <line x1="16" y1="17" x2="8" y2="17"></line>
                      <polyline points="10 9 9 9 8 9"></polyline>
                    </svg>
                    <div class="media-body">
                      <div class="data-info">
                        <h6 class="">Kelly Portfolio.pdf</h6>
                        <p class="">670 kb</p>
                      </div>

                      <div class="icon-status">
                        <svg
                          xmlns="http://www.w3.org/2000/svg"
                          width="24"
                          height="24"
                          viewBox="0 0 24 24"
                          fill="none"
                          stroke="currentColor"
                          stroke-width="2"
                          stroke-linecap="round"
                          stroke-linejoin="round"
                          class="feather feather-x"
                        >
                          <line x1="18" y1="6" x2="6" y2="18"></line>
                          <line x1="6" y1="6" x2="18" y2="18"></line>
                        </svg>
                      </div>
                    </div>
                  </div>
                </div>

                <div class="dropdown-item">
                  <div class="media">
                    <svg
                      xmlns="http://www.w3.org/2000/svg"
                      width="24"
                      height="24"
                      viewBox="0 0 24 24"
                      fill="none"
                      stroke="currentColor"
                      stroke-width="2"
                      stroke-linecap="round"
                      stroke-linejoin="round"
                      class="feather feather-heart"
                    >
                      <path
                        d="M20.84 4.61a5.5 5.5 0 0 0-7.78 0L12 5.67l-1.06-1.06a5.5 5.5 0 0 0-7.78 7.78l1.06 1.06L12 21.23l7.78-7.78 1.06-1.06a5.5 5.5 0 0 0 0-7.78z"
                      ></path>
                    </svg>
                    <div class="media-body">
                      <div class="data-info">
                        <h6 class="">Licence Expiring Soon</h6>
                        <p class="">8 hrs ago</p>
                      </div>

                      <div class="icon-status">
                        <svg
                          xmlns="http://www.w3.org/2000/svg"
                          width="24"
                          height="24"
                          viewBox="0 0 24 24"
                          fill="none"
                          stroke="currentColor"
                          stroke-width="2"
                          stroke-linecap="round"
                          stroke-linejoin="round"
                          class="feather feather-x"
                        >
                          <line x1="18" y1="6" x2="6" y2="18"></line>
                          <line x1="6" y1="6" x2="18" y2="18"></line>
                        </svg>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </li>

          <li
            class="nav-item dropdown user-profile-dropdown order-lg-0 order-1"
          >
            <a
              href="javascript:void(0);"
              class="nav-link dropdown-toggle user"
              id="userProfileDropdown"
              data-bs-toggle="dropdown"
              aria-haspopup="true"
              aria-expanded="false"
            >
              <div class="avatar-container">
                <div class="avatar avatar-sm avatar-indicators avatar-online">
                  <img
                    alt="avatar"
                    src="assets/src/assets/img/profile-30.png"
                    class="rounded-circle"
                  />
                </div>
              </div>
            </a>

            <div
              class="dropdown-menu position-absolute"
              aria-labelledby="userProfileDropdown"
            >
              <div class="user-profile-section">
                <div class="media mx-auto">
                  <div class="emoji me-2">&#x1F44B;</div>
                  <div class="media-body">
                    <h5>Shaun Park</h5>
                    <p>Project Leader</p>
                  </div>
                </div>
              </div>
              <div class="dropdown-item">
                <a href="user-profile.html">
                  <svg
                    xmlns="http://www.w3.org/2000/svg"
                    width="24"
                    height="24"
                    viewBox="0 0 24 24"
                    fill="none"
                    stroke="currentColor"
                    stroke-width="2"
                    stroke-linecap="round"
                    stroke-linejoin="round"
                    class="feather feather-user"
                  >
                    <path d="M20 21v-2a4 4 0 0 0-4-4H8a4 4 0 0 0-4 4v2"></path>
                    <circle cx="12" cy="7" r="4"></circle>
                  </svg>
                  <span>Profile</span>
                </a>
              </div>
              <div class="dropdown-item">
                <a href="app-mailbox.html">
                  <svg
                    xmlns="http://www.w3.org/2000/svg"
                    width="24"
                    height="24"
                    viewBox="0 0 24 24"
                    fill="none"
                    stroke="currentColor"
                    stroke-width="2"
                    stroke-linecap="round"
                    stroke-linejoin="round"
                    class="feather feather-inbox"
                  >
                    <polyline
                      points="22 12 16 12 14 15 10 15 8 12 2 12"
                    ></polyline>
                    <path
                      d="M5.45 5.11L2 12v6a2 2 0 0 0 2 2h16a2 2 0 0 0 2-2v-6l-3.45-6.89A2 2 0 0 0 16.76 4H7.24a2 2 0 0 0-1.79 1.11z"
                    ></path>
                  </svg>
                  <span>Inbox</span>
                </a>
              </div>
              <div class="dropdown-item">
                <a href="auth-boxed-lockscreen.html">
                  <svg
                    xmlns="http://www.w3.org/2000/svg"
                    width="24"
                    height="24"
                    viewBox="0 0 24 24"
                    fill="none"
                    stroke="currentColor"
                    stroke-width="2"
                    stroke-linecap="round"
                    stroke-linejoin="round"
                    class="feather feather-lock"
                  >
                    <rect
                      x="3"
                      y="11"
                      width="18"
                      height="11"
                      rx="2"
                      ry="2"
                    ></rect>
                    <path d="M7 11V7a5 5 0 0 1 10 0v4"></path>
                  </svg>
                  <span>Lock Screen</span>
                </a>
              </div>
              <div class="dropdown-item">
                <a href="auth-boxed-signin.html">
                  <svg
                    xmlns="http://www.w3.org/2000/svg"
                    width="24"
                    height="24"
                    viewBox="0 0 24 24"
                    fill="none"
                    stroke="currentColor"
                    stroke-width="2"
                    stroke-linecap="round"
                    stroke-linejoin="round"
                    class="feather feather-log-out"
                  >
                    <path d="M9 21H5a2 2 0 0 1-2-2V5a2 2 0 0 1 2-2h4"></path>
                    <polyline points="16 17 21 12 16 7"></polyline>
                    <line x1="21" y1="12" x2="9" y2="12"></line>
                  </svg>
                  <span>Log Out</span>
                </a>
              </div>
            </div>
          </li>
        </ul>
      </header>
    </div>
    <!--  END NAVBAR  -->

    <!--  BEGIN MAIN CONTAINER  -->
    <div class="main-container" id="container">
      <div class="overlay"></div>
      <div class="cs-overlay"></div>
      <div class="search-overlay"></div>

      <!--  BEGIN SIDEBAR  -->
      <div class="sidebar-wrapper sidebar-theme">
        <nav id="sidebar">
          <div class="navbar-nav theme-brand flex-row text-center">
            <div class="nav-logo">
              <div class="nav-item theme-logo">
                <a href="./index.html">
                  <img
                    src="assets/src/assets/img/logo.svg"
                    class="navbar-logo"
                    alt="logo"
                  />
                </a>
              </div>
              <div class="nav-item theme-text">
                <a href="./index.html" class="nav-link"> CORK </a>
              </div>
            </div>
            <div class="nav-item sidebar-toggle">
              <div class="btn-toggle sidebarCollapse">
                <svg
                  xmlns="http://www.w3.org/2000/svg"
                  width="24"
                  height="24"
                  viewBox="0 0 24 24"
                  fill="none"
                  stroke="currentColor"
                  stroke-width="2"
                  stroke-linecap="round"
                  stroke-linejoin="round"
                  class="feather feather-chevrons-left"
                >
                  <polyline points="11 17 6 12 11 7"></polyline>
                  <polyline points="18 17 13 12 18 7"></polyline>
                </svg>
              </div>
            </div>
          </div>
          <div class="shadow-bottom"></div>
          <ul class="list-unstyled menu-categories" id="accordionExample">
            <li class="menu active">
              <a
                href="#dashboard"
                data-bs-toggle="collapse"
                aria-expanded="true"
                class="dropdown-toggle"
              >
                <div class="">
                  <svg
                    xmlns="http://www.w3.org/2000/svg"
                    width="24"
                    height="24"
                    viewBox="0 0 24 24"
                    fill="none"
                    stroke="currentColor"
                    stroke-width="2"
                    stroke-linecap="round"
                    stroke-linejoin="round"
                    class="feather feather-home"
                  >
                    <path
                      d="M3 9l9-7 9 7v11a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2z"
                    ></path>
                    <polyline points="9 22 9 12 15 12 15 22"></polyline>
                  </svg>
                  <span>Dashboard</span>
                </div>
                <div>
                  <svg
                    xmlns="http://www.w3.org/2000/svg"
                    width="24"
                    height="24"
                    viewBox="0 0 24 24"
                    fill="none"
                    stroke="currentColor"
                    stroke-width="2"
                    stroke-linecap="round"
                    stroke-linejoin="round"
                    class="feather feather-chevron-right"
                  >
                    <polyline points="9 18 15 12 9 6"></polyline>
                  </svg>
                </div>
              </a>
              <ul
                class="collapse submenu list-unstyled show"
                id="dashboard"
                data-bs-parent="#accordionExample"
              >
                <li class="active">
                  <a href="./index2.html"> Sales </a>
                </li>
              </ul>
            </li>

            <li class="menu menu-heading">
              <div class="heading">
                <svg
                  xmlns="http://www.w3.org/2000/svg"
                  width="24"
                  height="24"
                  viewBox="0 0 24 24"
                  fill="none"
                  stroke="currentColor"
                  stroke-width="2"
                  stroke-linecap="round"
                  stroke-linejoin="round"
                  class="feather feather-minus"
                >
                  <line x1="5" y1="12" x2="19" y2="12"></line></svg
                ><span>APPLICATIONS</span>
              </div>
            </li>
            <li class="menu">
              <a
                href="#apps"
                data-bs-toggle="collapse"
                aria-expanded="false"
                class="dropdown-toggle"
              >
                <div class="">
                  <svg
                    xmlns="http://www.w3.org/2000/svg"
                    width="24"
                    height="24"
                    viewBox="0 0 24 24"
                    fill="none"
                    stroke="currentColor"
                    stroke-width="2"
                    stroke-linecap="round"
                    stroke-linejoin="round"
                    class="feather feather-cpu"
                  >
                    <rect
                      x="4"
                      y="4"
                      width="16"
                      height="16"
                      rx="2"
                      ry="2"
                    ></rect>
                    <rect x="9" y="9" width="6" height="6"></rect>
                    <line x1="9" y1="1" x2="9" y2="4"></line>
                    <line x1="15" y1="1" x2="15" y2="4"></line>
                    <line x1="9" y1="20" x2="9" y2="23"></line>
                    <line x1="15" y1="20" x2="15" y2="23"></line>
                    <line x1="20" y1="9" x2="23" y2="9"></line>
                    <line x1="20" y1="14" x2="23" y2="14"></line>
                    <line x1="1" y1="9" x2="4" y2="9"></line>
                    <line x1="1" y1="14" x2="4" y2="14"></line>
                  </svg>
                  <span>Apps</span>
                </div>
                <div>
                  <svg
                    xmlns="http://www.w3.org/2000/svg"
                    width="24"
                    height="24"
                    viewBox="0 0 24 24"
                    fill="none"
                    stroke="currentColor"
                    stroke-width="2"
                    stroke-linecap="round"
                    stroke-linejoin="round"
                    class="feather feather-chevron-right"
                  >
                    <polyline points="9 18 15 12 9 6"></polyline>
                  </svg>
                </div>
              </a>
              <ul
                class="collapse submenu list-unstyled"
                id="apps"
                data-bs-parent="#accordionExample"
              >
                <li>
                  <a
                    href="#invoice"
                    data-bs-toggle="collapse"
                    aria-expanded="false"
                    class="dropdown-toggle collapsed"
                    >Invoice
                    <svg
                      xmlns="http://www.w3.org/2000/svg"
                      width="24"
                      height="24"
                      viewBox="0 0 24 24"
                      fill="none"
                      stroke="currentColor"
                      stroke-width="2"
                      stroke-linecap="round"
                      stroke-linejoin="round"
                      class="feather feather-chevron-right"
                    >
                      <polyline points="9 18 15 12 9 6"></polyline>
                    </svg>
                  </a>
                  <ul
                    class="collapse list-unstyled sub-submenu"
                    id="invoice"
                    data-bs-parent="#apps"
                  >
                    <li>
                      <a href="./app-invoice-list.html"> List </a>
                    </li>
                    <li>
                      <a href="./app-invoice-preview.html"> Preview </a>
                    </li>
                    <li>
                      <a href="./app-invoice-add.html"> Add </a>
                    </li>
                    <li>
                      <a href="./app-invoice-edit.html"> Edit </a>
                    </li>
                  </ul>
                </li>
                <li>
                  <a
                    href="#ecommerce"
                    data-bs-toggle="collapse"
                    aria-expanded="false"
                    class="dropdown-toggle collapsed"
                    >Ecommerce
                    <svg
                      xmlns="http://www.w3.org/2000/svg"
                      width="24"
                      height="24"
                      viewBox="0 0 24 24"
                      fill="none"
                      stroke="currentColor"
                      stroke-width="2"
                      stroke-linecap="round"
                      stroke-linejoin="round"
                      class="feather feather-chevron-right"
                    >
                      <polyline points="9 18 15 12 9 6"></polyline>
                    </svg>
                  </a>
                  <ul
                    class="collapse list-unstyled sub-submenu"
                    id="ecommerce"
                    data-bs-parent="#apps"
                  >
                    <li>
                      <a href="./app-ecommerce-product-shop.html"> Shop </a>
                    </li>
                    <li>
                      <a href="./app-ecommerce-product.html"> Product </a>
                    </li>
                    <li>
                      <a href="./app-ecommerce-product-list.html"> List </a>
                    </li>
                    <li>
                      <a href="./app-ecommerce-product-add.html"> Create </a>
                    </li>
                    <li>
                      <a href="./app-ecommerce-product-edit.html"> Edit </a>
                    </li>
                  </ul>
                </li>
              </ul>
            </li>

            <li class="menu">
              <a
                href="./charts-apex.html"
                aria-expanded="false"
                class="dropdown-toggle"
              >
                <div class="">
                  <svg
                    xmlns="http://www.w3.org/2000/svg"
                    width="24"
                    height="24"
                    viewBox="0 0 24 24"
                    fill="none"
                    stroke="currentColor"
                    stroke-width="2"
                    stroke-linecap="round"
                    stroke-linejoin="round"
                    class="feather feather-pie-chart"
                  >
                    <path d="M21.21 15.89A10 10 0 1 1 8 2.83"></path>
                    <path d="M22 12A10 10 0 0 0 12 2v10z"></path>
                  </svg>
                  <span>Charts</span>
                </div>
              </a>
            </li>

            <li class="menu">
              <a
                href="#authentication"
                data-bs-toggle="collapse"
                aria-expanded="false"
                class="dropdown-toggle"
              >
                <div class="">
                  <svg
                    xmlns="http://www.w3.org/2000/svg"
                    width="24"
                    height="24"
                    viewBox="0 0 24 24"
                    fill="none"
                    stroke="currentColor"
                    stroke-width="2"
                    stroke-linecap="round"
                    stroke-linejoin="round"
                    class="feather feather-lock"
                  >
                    <rect
                      x="3"
                      y="11"
                      width="18"
                      height="11"
                      rx="2"
                      ry="2"
                    ></rect>
                    <path d="M7 11V7a5 5 0 0 1 10 0v4"></path>
                  </svg>
                  <span>Authentication</span>
                </div>
                <div>
                  <svg
                    xmlns="http://www.w3.org/2000/svg"
                    width="24"
                    height="24"
                    viewBox="0 0 24 24"
                    fill="none"
                    stroke="currentColor"
                    stroke-width="2"
                    stroke-linecap="round"
                    stroke-linejoin="round"
                    class="feather feather-chevron-right"
                  >
                    <polyline points="9 18 15 12 9 6"></polyline>
                  </svg>
                </div>
              </a>
              <ul
                class="collapse submenu list-unstyled"
                id="authentication"
                data-bs-parent="#accordionExample"
              >
                <li>
                  <a href="./auth-boxed-signin.html" target="_blank">
                    Sign In
                  </a>
                </li>
                <li>
                  <a href="./auth-boxed-signup.html" target="_blank">
                    Sign Up
                  </a>
                </li>
                <li>
                  <a href="./auth-boxed-lockscreen.html" target="_blank">
                    Unlock
                  </a>
                </li>
                <li>
                  <a href="./auth-boxed-password-reset.html" target="_blank">
                    Reset
                  </a>
                </li>
                <li>
                  <a
                    href="./auth-boxed-2-step-verification.html"
                    target="_blank"
                  >
                    2 Step
                  </a>
                </li>
                <li>
                  <a href="./auth-cover-signin.html" target="_blank">
                    Sign In Cover
                  </a>
                </li>
                <li>
                  <a href="./auth-cover-signup.html" target="_blank">
                    Sign Up Cover
                  </a>
                </li>
                <li>
                  <a href="./auth-cover-lockscreen.html" target="_blank">
                    Unlock Cover
                  </a>
                </li>
                <li>
                  <a href="./auth-cover-password-reset.html" target="_blank">
                    Reset Cover
                  </a>
                </li>
              </ul>
            </li>
          </ul>
        </nav>
      </div>
      <!--  END SIDEBAR  -->

      <!--  BEGIN CONTENT AREA  -->
      <div id="content" class="main-content">
        <div class="layout-px-spacing">
          <div class="middle-content container-xxl p-0">
            <!--  BEGIN BREADCRUMBS  -->
            <div class="secondary-nav">
              <div class="breadcrumbs-container" data-page-heading="Analytics">
                <header class="header navbar navbar-expand-sm">
                  <a
                    href="javascript:void(0);"
                    class="btn-toggle sidebarCollapse"
                    data-placement="bottom"
                  >
                    <svg
                      xmlns="http://www.w3.org/2000/svg"
                      width="24"
                      height="24"
                      viewBox="0 0 24 24"
                      fill="none"
                      stroke="currentColor"
                      stroke-width="2"
                      stroke-linecap="round"
                      stroke-linejoin="round"
                      class="feather feather-menu"
                    >
                      <line x1="3" y1="12" x2="21" y2="12"></line>
                      <line x1="3" y1="6" x2="21" y2="6"></line>
                      <line x1="3" y1="18" x2="21" y2="18"></line>
                    </svg>
                  </a>
                  <div class="d-flex breadcrumb-content">
                    <div class="page-header">
                      <div class="page-title"></div>

                      <nav class="breadcrumb-style-one" aria-label="breadcrumb">
                        <ol class="breadcrumb">
                          <li class="breadcrumb-item"><a href="#">App</a></li>
                          <li class="breadcrumb-item">
                            <a href="#">Invoice</a>
                          </li>
                          <li
                            class="breadcrumb-item active"
                            aria-current="page"
                          >
                            List
                          </li>
                        </ol>
                      </nav>
                    </div>
                  </div>
                  <ul
                    class="navbar-nav flex-row ms-auto breadcrumb-action-dropdown"
                  >
                    <li class="nav-item more-dropdown">
                      <div class="dropdown custom-dropdown-icon">
                        <a
                          class="dropdown-toggle btn"
                          href="#"
                          role="button"
                          id="customDropdown"
                          data-bs-toggle="dropdown"
                          aria-haspopup="true"
                          aria-expanded="false"
                        >
                          <span>Settings</span>
                          <svg
                            xmlns="http://www.w3.org/2000/svg"
                            width="24"
                            height="24"
                            viewBox="0 0 24 24"
                            fill="none"
                            stroke="currentColor"
                            stroke-width="2"
                            stroke-linecap="round"
                            stroke-linejoin="round"
                            class="feather feather-chevron-down custom-dropdown-arrow"
                          >
                            <polyline points="6 9 12 15 18 9"></polyline>
                          </svg>
                        </a>

                        <div
                          class="dropdown-menu dropdown-menu-right"
                          aria-labelledby="customDropdown"
                        >
                          <a
                            class="dropdown-item"
                            data-value="Settings"
                            data-icon='<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-settings"><circle cx="12" cy="12" r="3"></circle><path d="M19.4 15a1.65 1.65 0 0 0 .33 1.82l.06.06a2 2 0 0 1 0 2.83 2 2 0 0 1-2.83 0l-.06-.06a1.65 1.65 0 0 0-1.82-.33 1.65 1.65 0 0 0-1 1.51V21a2 2 0 0 1-2 2 2 2 0 0 1-2-2v-.09A1.65 1.65 0 0 0 9 19.4a1.65 1.65 0 0 0-1.82.33l-.06.06a2 2 0 0 1-2.83 0 2 2 0 0 1 0-2.83l.06-.06a1.65 1.65 0 0 0 .33-1.82 1.65 1.65 0 0 0-1.51-1H3a2 2 0 0 1-2-2 2 2 0 0 1 2-2h.09A1.65 1.65 0 0 0 4.6 9a1.65 1.65 0 0 0-.33-1.82l-.06-.06a2 2 0 0 1 0-2.83 2 2 0 0 1 2.83 0l.06.06a1.65 1.65 0 0 0 1.82.33H9a1.65 1.65 0 0 0 1-1.51V3a2 2 0 0 1 2-2 2 2 0 0 1 2 2v.09a1.65 1.65 0 0 0 1 1.51 1.65 1.65 0 0 0 1.82-.33l.06-.06a2 2 0 0 1 2.83 0 2 2 0 0 1 0 2.83l-.06.06a1.65 1.65 0 0 0-.33 1.82V9a1.65 1.65 0 0 0 1.51 1H21a2 2 0 0 1 2 2 2 2 0 0 1-2 2h-.09a1.65 1.65 0 0 0-1.51 1z"></path></svg>'
                            href="javascript:void(0);"
                          >
                            <svg
                              xmlns="http://www.w3.org/2000/svg"
                              width="24"
                              height="24"
                              viewBox="0 0 24 24"
                              fill="none"
                              stroke="currentColor"
                              stroke-width="2"
                              stroke-linecap="round"
                              stroke-linejoin="round"
                              class="feather feather-settings"
                            >
                              <circle cx="12" cy="12" r="3"></circle>
                              <path
                                d="M19.4 15a1.65 1.65 0 0 0 .33 1.82l.06.06a2 2 0 0 1 0 2.83 2 2 0 0 1-2.83 0l-.06-.06a1.65 1.65 0 0 0-1.82-.33 1.65 1.65 0 0 0-1 1.51V21a2 2 0 0 1-2 2 2 2 0 0 1-2-2v-.09A1.65 1.65 0 0 0 9 19.4a1.65 1.65 0 0 0-1.82.33l-.06.06a2 2 0 0 1-2.83 0 2 2 0 0 1 0-2.83l.06-.06a1.65 1.65 0 0 0 .33-1.82 1.65 1.65 0 0 0-1.51-1H3a2 2 0 0 1-2-2 2 2 0 0 1 2-2h.09A1.65 1.65 0 0 0 4.6 9a1.65 1.65 0 0 0-.33-1.82l-.06-.06a2 2 0 0 1 0-2.83 2 2 0 0 1 2.83 0l.06.06a1.65 1.65 0 0 0 1.82.33H9a1.65 1.65 0 0 0 1-1.51V3a2 2 0 0 1 2-2 2 2 0 0 1 2 2v.09a1.65 1.65 0 0 0 1 1.51 1.65 1.65 0 0 0 1.82-.33l.06-.06a2 2 0 0 1 2.83 0 2 2 0 0 1 0 2.83l-.06.06a1.65 1.65 0 0 0-.33 1.82V9a1.65 1.65 0 0 0 1.51 1H21a2 2 0 0 1 2 2 2 2 0 0 1-2 2h-.09a1.65 1.65 0 0 0-1.51 1z"
                              ></path>
                            </svg>
                            Settings
                          </a>

                          <a
                            class="dropdown-item"
                            data-value="Mail"
                            data-icon='<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-mail"><path d="M4 4h16c1.1 0 2 .9 2 2v12c0 1.1-.9 2-2 2H4c-1.1 0-2-.9-2-2V6c0-1.1.9-2 2-2z"></path><polyline points="22,6 12,13 2,6"></polyline></svg>'
                            href="javascript:void(0);"
                          >
                            <svg
                              xmlns="http://www.w3.org/2000/svg"
                              width="24"
                              height="24"
                              viewBox="0 0 24 24"
                              fill="none"
                              stroke="currentColor"
                              stroke-width="2"
                              stroke-linecap="round"
                              stroke-linejoin="round"
                              class="feather feather-mail"
                            >
                              <path
                                d="M4 4h16c1.1 0 2 .9 2 2v12c0 1.1-.9 2-2 2H4c-1.1 0-2-.9-2-2V6c0-1.1.9-2 2-2z"
                              ></path>
                              <polyline points="22,6 12,13 2,6"></polyline>
                            </svg>
                            Mail
                          </a>

                          <a
                            class="dropdown-item"
                            data-value="Print"
                            data-icon='<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-printer"><polyline points="6 9 6 2 18 2 18 9"></polyline><path d="M6 18H4a2 2 0 0 1-2-2v-5a2 2 0 0 1 2-2h16a2 2 0 0 1 2 2v5a2 2 0 0 1-2 2h-2"></path><rect x="6" y="14" width="12" height="8"></rect></svg>'
                            href="javascript:void(0);"
                          >
                            <svg
                              xmlns="http://www.w3.org/2000/svg"
                              width="24"
                              height="24"
                              viewBox="0 0 24 24"
                              fill="none"
                              stroke="currentColor"
                              stroke-width="2"
                              stroke-linecap="round"
                              stroke-linejoin="round"
                              class="feather feather-printer"
                            >
                              <polyline points="6 9 6 2 18 2 18 9"></polyline>
                              <path
                                d="M6 18H4a2 2 0 0 1-2-2v-5a2 2 0 0 1 2-2h16a2 2 0 0 1 2 2v5a2 2 0 0 1-2 2h-2"
                              ></path>
                              <rect x="6" y="14" width="12" height="8"></rect>
                            </svg>
                            Print
                          </a>

                          <a
                            class="dropdown-item"
                            data-value="Download"
                            data-icon='<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-download"><path d="M21 15v4a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2v-4"></path><polyline points="7 10 12 15 17 10"></polyline><line x1="12" y1="15" x2="12" y2="3"></line></svg>'
                            href="javascript:void(0);"
                          >
                            <svg
                              xmlns="http://www.w3.org/2000/svg"
                              width="24"
                              height="24"
                              viewBox="0 0 24 24"
                              fill="none"
                              stroke="currentColor"
                              stroke-width="2"
                              stroke-linecap="round"
                              stroke-linejoin="round"
                              class="feather feather-download"
                            >
                              <path
                                d="M21 15v4a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2v-4"
                              ></path>
                              <polyline points="7 10 12 15 17 10"></polyline>
                              <line x1="12" y1="15" x2="12" y2="3"></line>
                            </svg>
                            Download
                          </a>

                          <a
                            class="dropdown-item"
                            data-value="Share"
                            data-icon='<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-share-2"><circle cx="18" cy="5" r="3"></circle><circle cx="6" cy="12" r="3"></circle><circle cx="18" cy="19" r="3"></circle><line x1="8.59" y1="13.51" x2="15.42" y2="17.49"></line><line x1="15.41" y1="6.51" x2="8.59" y2="10.49"></line></svg>'
                            href="javascript:void(0);"
                          >
                            <svg
                              xmlns="http://www.w3.org/2000/svg"
                              width="24"
                              height="24"
                              viewBox="0 0 24 24"
                              fill="none"
                              stroke="currentColor"
                              stroke-width="2"
                              stroke-linecap="round"
                              stroke-linejoin="round"
                              class="feather feather-share-2"
                            >
                              <circle cx="18" cy="5" r="3"></circle>
                              <circle cx="6" cy="12" r="3"></circle>
                              <circle cx="18" cy="19" r="3"></circle>
                              <line
                                x1="8.59"
                                y1="13.51"
                                x2="15.42"
                                y2="17.49"
                              ></line>
                              <line
                                x1="15.41"
                                y1="6.51"
                                x2="8.59"
                                y2="10.49"
                              ></line>
                            </svg>
                            Share
                          </a>
                        </div>
                      </div>
                    </li>
                  </ul>
                </header>
              </div>
            </div>
            <!--  END BREADCRUMBS  -->

            <div class="row" id="cancel-row">
              <div
                class="col-xl-12 col-lg-12 col-sm-12 layout-top-spacing layout-spacing"
              >
                <div class="widget-content widget-content-area br-8">
                  <table
                    id="invoice-list"
                    class="table dt-table-hover"
                    style="width: 100%"
                  >
                    <thead>
                      <tr>
                        <th class="checkbox-column">Record no.</th>
                        <th>Invoice Id</th>
                        <th>Name</th>
                        <th>Email</th>
                        <th>Status</th>
                        <th>Amount</th>
                        <th>Date</th>
                        <th>Actions</th>
                      </tr>
                    </thead>
                    <tbody>
                      <tr>
                        <td class="checkbox-column">1</td>
                        <td>
                          <a href="./app-invoice-preview.html"
                            ><span class="inv-number">#098424</span></a
                          >
                        </td>
                        <td>
                          <div class="d-flex">
                            <div class="usr-img-frame me-2 rounded-circle">
                              <img
                                alt="avatar"
                                class="img-fluid rounded-circle"
                                src="assets/src/assets/img/profile-12.jpeg"
                              />
                            </div>
                            <p class="align-self-center mb-0 user-name">
                              Alma Clarke
                            </p>
                          </div>
                        </td>
                        <td>
                          <span class="inv-email"
                            ><svg
                              xmlns="http://www.w3.org/2000/svg"
                              width="24"
                              height="24"
                              viewBox="0 0 24 24"
                              fill="none"
                              stroke="currentColor"
                              stroke-width="2"
                              stroke-linecap="round"
                              stroke-linejoin="round"
                              class="feather feather-mail"
                            >
                              <path
                                d="M4 4h16c1.1 0 2 .9 2 2v12c0 1.1-.9 2-2 2H4c-1.1 0-2-.9-2-2V6c0-1.1.9-2 2-2z"
                              ></path>
                              <polyline points="22,6 12,13 2,6"></polyline>
                            </svg>
                            alma.clarke@gmail.com</span
                          >
                        </td>
                        <td>
                          <span class="badge badge-light-success inv-status"
                            >Paid</span
                          >
                        </td>
                        <td><span class="inv-amount">$234.40</span></td>
                        <td>
                          <span class="inv-date"
                            ><svg
                              xmlns="http://www.w3.org/2000/svg"
                              width="24"
                              height="24"
                              viewBox="0 0 24 24"
                              fill="none"
                              stroke="currentColor"
                              stroke-width="2"
                              stroke-linecap="round"
                              stroke-linejoin="round"
                              class="feather feather-calendar"
                            >
                              <rect
                                x="3"
                                y="4"
                                width="18"
                                height="18"
                                rx="2"
                                ry="2"
                              ></rect>
                              <line x1="16" y1="2" x2="16" y2="6"></line>
                              <line x1="8" y1="2" x2="8" y2="6"></line>
                              <line x1="3" y1="10" x2="21" y2="10"></line>
                            </svg>
                            10 Feb
                          </span>
                        </td>
                        <td>
                          <a
                            class="badge badge-light-primary text-start me-2 action-edit"
                            href="javascript:void(0);"
                            ><svg
                              xmlns="http://www.w3.org/2000/svg"
                              width="24"
                              height="24"
                              viewBox="0 0 24 24"
                              fill="none"
                              stroke="currentColor"
                              stroke-width="2"
                              stroke-linecap="round"
                              stroke-linejoin="round"
                              class="feather feather-edit-3"
                            >
                              <path d="M12 20h9"></path>
                              <path
                                d="M16.5 3.5a2.121 2.121 0 0 1 3 3L7 19l-4 1 1-4L16.5 3.5z"
                              ></path></svg
                          ></a>
                          <a
                            class="badge badge-light-danger text-start action-delete"
                            href="javascript:void(0);"
                            ><svg
                              xmlns="http://www.w3.org/2000/svg"
                              width="24"
                              height="24"
                              viewBox="0 0 24 24"
                              fill="none"
                              stroke="currentColor"
                              stroke-width="2"
                              stroke-linecap="round"
                              stroke-linejoin="round"
                              class="feather feather-trash"
                            >
                              <polyline points="3 6 5 6 21 6"></polyline>
                              <path
                                d="M19 6v14a2 2 0 0 1-2 2H7a2 2 0 0 1-2-2V6m3 0V4a2 2 0 0 1 2-2h4a2 2 0 0 1 2 2v2"
                              ></path></svg
                          ></a>
                        </td>
                      </tr>
                      <tr>
                        <td class="checkbox-column">1</td>
                        <td>
                          <a href="./app-invoice-preview.html"
                            ><span class="inv-number">#095841</span></a
                          >
                        </td>
                        <td>
                          <div class="d-flex">
                            <div class="usr-img-frame me-2 rounded-circle">
                              <img
                                alt="avatar"
                                class="img-fluid rounded-circle"
                                src="assets/src/assets/img/profile-8.jpeg"
                              />
                            </div>
                            <p class="align-self-center mb-0 user-name">
                              Kelly Young
                            </p>
                          </div>
                        </td>
                        <td>
                          <span class="inv-email"
                            ><svg
                              xmlns="http://www.w3.org/2000/svg"
                              width="24"
                              height="24"
                              viewBox="0 0 24 24"
                              fill="none"
                              stroke="currentColor"
                              stroke-width="2"
                              stroke-linecap="round"
                              stroke-linejoin="round"
                              class="feather feather-mail"
                            >
                              <path
                                d="M4 4h16c1.1 0 2 .9 2 2v12c0 1.1-.9 2-2 2H4c-1.1 0-2-.9-2-2V6c0-1.1.9-2 2-2z"
                              ></path>
                              <polyline points="22,6 12,13 2,6"></polyline>
                            </svg>
                            youngkelly@hotmail.com</span
                          >
                        </td>
                        <td>
                          <span class="badge badge-light-warning inv-status"
                            >Pending</span
                          >
                        </td>
                        <td><span class="inv-amount">$49.00</span></td>
                        <td>
                          <span class="inv-date"
                            ><svg
                              xmlns="http://www.w3.org/2000/svg"
                              width="24"
                              height="24"
                              viewBox="0 0 24 24"
                              fill="none"
                              stroke="currentColor"
                              stroke-width="2"
                              stroke-linecap="round"
                              stroke-linejoin="round"
                              class="feather feather-calendar"
                            >
                              <rect
                                x="3"
                                y="4"
                                width="18"
                                height="18"
                                rx="2"
                                ry="2"
                              ></rect>
                              <line x1="16" y1="2" x2="16" y2="6"></line>
                              <line x1="8" y1="2" x2="8" y2="6"></line>
                              <line x1="3" y1="10" x2="21" y2="10"></line>
                            </svg>
                            06 Feb
                          </span>
                        </td>
                        <td>
                          <a
                            class="badge badge-light-primary text-start me-2 action-edit"
                            href="javascript:void(0);"
                            ><svg
                              xmlns="http://www.w3.org/2000/svg"
                              width="24"
                              height="24"
                              viewBox="0 0 24 24"
                              fill="none"
                              stroke="currentColor"
                              stroke-width="2"
                              stroke-linecap="round"
                              stroke-linejoin="round"
                              class="feather feather-edit-3"
                            >
                              <path d="M12 20h9"></path>
                              <path
                                d="M16.5 3.5a2.121 2.121 0 0 1 3 3L7 19l-4 1 1-4L16.5 3.5z"
                              ></path></svg
                          ></a>
                          <a
                            class="badge badge-light-danger text-start action-delete"
                            href="javascript:void(0);"
                            ><svg
                              xmlns="http://www.w3.org/2000/svg"
                              width="24"
                              height="24"
                              viewBox="0 0 24 24"
                              fill="none"
                              stroke="currentColor"
                              stroke-width="2"
                              stroke-linecap="round"
                              stroke-linejoin="round"
                              class="feather feather-trash"
                            >
                              <polyline points="3 6 5 6 21 6"></polyline>
                              <path
                                d="M19 6v14a2 2 0 0 1-2 2H7a2 2 0 0 1-2-2V6m3 0V4a2 2 0 0 1 2-2h4a2 2 0 0 1 2 2v2"
                              ></path></svg
                          ></a>
                        </td>
                      </tr>

                      <tr>
                        <td class="checkbox-column">1</td>
                        <td>
                          <a href="./app-invoice-preview.html"
                            ><span class="inv-number">#091768</span></a
                          >
                        </td>
                        <td>
                          <div class="d-flex">
                            <div class="usr-img-frame me-2 rounded-circle">
                              <img
                                alt="avatar"
                                class="img-fluid rounded-circle"
                                src="assets/src/assets/img/profile-7.jpeg"
                              />
                            </div>
                            <p class="align-self-center mb-0 user-name">
                              Vincent Carpenter
                            </p>
                          </div>
                        </td>
                        <td>
                          <span class="inv-email"
                            ><svg
                              xmlns="http://www.w3.org/2000/svg"
                              width="24"
                              height="24"
                              viewBox="0 0 24 24"
                              fill="none"
                              stroke="currentColor"
                              stroke-width="2"
                              stroke-linecap="round"
                              stroke-linejoin="round"
                              class="feather feather-mail"
                            >
                              <path
                                d="M4 4h16c1.1 0 2 .9 2 2v12c0 1.1-.9 2-2 2H4c-1.1 0-2-.9-2-2V6c0-1.1.9-2 2-2z"
                              ></path>
                              <polyline points="22,6 12,13 2,6"></polyline>
                            </svg>
                            vincentcarpenter@gmail.com</span
                          >
                        </td>
                        <td>
                          <span class="badge badge-light-success inv-status"
                            >Paid</span
                          >
                        </td>
                        <td><span class="inv-amount">$400</span></td>
                        <td>
                          <span class="inv-date"
                            ><svg
                              xmlns="http://www.w3.org/2000/svg"
                              width="24"
                              height="24"
                              viewBox="0 0 24 24"
                              fill="none"
                              stroke="currentColor"
                              stroke-width="2"
                              stroke-linecap="round"
                              stroke-linejoin="round"
                              class="feather feather-calendar"
                            >
                              <rect
                                x="3"
                                y="4"
                                width="18"
                                height="18"
                                rx="2"
                                ry="2"
                              ></rect>
                              <line x1="16" y1="2" x2="16" y2="6"></line>
                              <line x1="8" y1="2" x2="8" y2="6"></line>
                              <line x1="3" y1="10" x2="21" y2="10"></line>
                            </svg>
                            30 Jan
                          </span>
                        </td>
                        <td>
                          <a
                            class="badge badge-light-primary text-start me-2 action-edit"
                            href="javascript:void(0);"
                            ><svg
                              xmlns="http://www.w3.org/2000/svg"
                              width="24"
                              height="24"
                              viewBox="0 0 24 24"
                              fill="none"
                              stroke="currentColor"
                              stroke-width="2"
                              stroke-linecap="round"
                              stroke-linejoin="round"
                              class="feather feather-edit-3"
                            >
                              <path d="M12 20h9"></path>
                              <path
                                d="M16.5 3.5a2.121 2.121 0 0 1 3 3L7 19l-4 1 1-4L16.5 3.5z"
                              ></path></svg
                          ></a>
                          <a
                            class="badge badge-light-danger text-start action-delete"
                            href="javascript:void(0);"
                            ><svg
                              xmlns="http://www.w3.org/2000/svg"
                              width="24"
                              height="24"
                              viewBox="0 0 24 24"
                              fill="none"
                              stroke="currentColor"
                              stroke-width="2"
                              stroke-linecap="round"
                              stroke-linejoin="round"
                              class="feather feather-trash"
                            >
                              <polyline points="3 6 5 6 21 6"></polyline>
                              <path
                                d="M19 6v14a2 2 0 0 1-2 2H7a2 2 0 0 1-2-2V6m3 0V4a2 2 0 0 1 2-2h4a2 2 0 0 1 2 2v2"
                              ></path></svg
                          ></a>
                        </td>
                      </tr>

                      <tr>
                        <td class="checkbox-column">1</td>
                        <td>
                          <a href="./app-invoice-preview.html"
                            ><span class="inv-number">#089472</span></a
                          >
                        </td>
                        <td>
                          <div class="d-flex">
                            <div class="usr-img-frame me-2 rounded-circle">
                              <img
                                alt="avatar"
                                class="img-fluid rounded-circle"
                                src="assets/src/assets/img/profile-1.jpeg"
                              />
                            </div>
                            <p class="align-self-center mb-0 user-name">
                              Andy King
                            </p>
                          </div>
                        </td>
                        <td>
                          <span class="inv-email"
                            ><svg
                              xmlns="http://www.w3.org/2000/svg"
                              width="24"
                              height="24"
                              viewBox="0 0 24 24"
                              fill="none"
                              stroke="currentColor"
                              stroke-width="2"
                              stroke-linecap="round"
                              stroke-linejoin="round"
                              class="feather feather-mail"
                            >
                              <path
                                d="M4 4h16c1.1 0 2 .9 2 2v12c0 1.1-.9 2-2 2H4c-1.1 0-2-.9-2-2V6c0-1.1.9-2 2-2z"
                              ></path>
                              <polyline points="22,6 12,13 2,6"></polyline>
                            </svg>
                            kingandy07@company.com</span
                          >
                        </td>
                        <td>
                          <span class="badge badge-light-success inv-status"
                            >Paid</span
                          >
                        </td>
                        <td><span class="inv-amount">$149.00</span></td>
                        <td>
                          <span class="inv-date"
                            ><svg
                              xmlns="http://www.w3.org/2000/svg"
                              width="24"
                              height="24"
                              viewBox="0 0 24 24"
                              fill="none"
                              stroke="currentColor"
                              stroke-width="2"
                              stroke-linecap="round"
                              stroke-linejoin="round"
                              class="feather feather-calendar"
                            >
                              <rect
                                x="3"
                                y="4"
                                width="18"
                                height="18"
                                rx="2"
                                ry="2"
                              ></rect>
                              <line x1="16" y1="2" x2="16" y2="6"></line>
                              <line x1="8" y1="2" x2="8" y2="6"></line>
                              <line x1="3" y1="10" x2="21" y2="10"></line>
                            </svg>
                            28 Jan
                          </span>
                        </td>
                        <td>
                          <a
                            class="badge badge-light-primary text-start me-2 action-edit"
                            href="javascript:void(0);"
                            ><svg
                              xmlns="http://www.w3.org/2000/svg"
                              width="24"
                              height="24"
                              viewBox="0 0 24 24"
                              fill="none"
                              stroke="currentColor"
                              stroke-width="2"
                              stroke-linecap="round"
                              stroke-linejoin="round"
                              class="feather feather-edit-3"
                            >
                              <path d="M12 20h9"></path>
                              <path
                                d="M16.5 3.5a2.121 2.121 0 0 1 3 3L7 19l-4 1 1-4L16.5 3.5z"
                              ></path></svg
                          ></a>
                          <a
                            class="badge badge-light-danger text-start action-delete"
                            href="javascript:void(0);"
                            ><svg
                              xmlns="http://www.w3.org/2000/svg"
                              width="24"
                              height="24"
                              viewBox="0 0 24 24"
                              fill="none"
                              stroke="currentColor"
                              stroke-width="2"
                              stroke-linecap="round"
                              stroke-linejoin="round"
                              class="feather feather-trash"
                            >
                              <polyline points="3 6 5 6 21 6"></polyline>
                              <path
                                d="M19 6v14a2 2 0 0 1-2 2H7a2 2 0 0 1-2-2V6m3 0V4a2 2 0 0 1 2-2h4a2 2 0 0 1 2 2v2"
                              ></path></svg
                          ></a>
                        </td>
                      </tr>

                      <tr>
                        <td class="checkbox-column">1</td>
                        <td>
                          <a href="./app-invoice-preview.html"
                            ><span class="inv-number">#087916</span></a
                          >
                        </td>
                        <td>
                          <div class="d-flex">
                            <div class="usr-img-frame me-2 rounded-circle">
                              <img
                                alt="avatar"
                                class="img-fluid rounded-circle"
                                src="assets/src/assets/img/profile-15.jpeg"
                              />
                            </div>
                            <p class="align-self-center mb-0 user-name">
                              Mary McDonald
                            </p>
                          </div>
                        </td>
                        <td>
                          <span class="inv-email"
                            ><svg
                              xmlns="http://www.w3.org/2000/svg"
                              width="24"
                              height="24"
                              viewBox="0 0 24 24"
                              fill="none"
                              stroke="currentColor"
                              stroke-width="2"
                              stroke-linecap="round"
                              stroke-linejoin="round"
                              class="feather feather-mail"
                            >
                              <path
                                d="M4 4h16c1.1 0 2 .9 2 2v12c0 1.1-.9 2-2 2H4c-1.1 0-2-.9-2-2V6c0-1.1.9-2 2-2z"
                              ></path>
                              <polyline points="22,6 12,13 2,6"></polyline>
                            </svg>
                            maryDonald007@gamil.com</span
                          >
                        </td>
                        <td>
                          <span class="badge badge-light-warning inv-status"
                            >Pending</span
                          >
                        </td>
                        <td><span class="inv-amount">$79.00</span></td>
                        <td>
                          <span class="inv-date"
                            ><svg
                              xmlns="http://www.w3.org/2000/svg"
                              width="24"
                              height="24"
                              viewBox="0 0 24 24"
                              fill="none"
                              stroke="currentColor"
                              stroke-width="2"
                              stroke-linecap="round"
                              stroke-linejoin="round"
                              class="feather feather-calendar"
                            >
                              <rect
                                x="3"
                                y="4"
                                width="18"
                                height="18"
                                rx="2"
                                ry="2"
                              ></rect>
                              <line x1="16" y1="2" x2="16" y2="6"></line>
                              <line x1="8" y1="2" x2="8" y2="6"></line>
                              <line x1="3" y1="10" x2="21" y2="10"></line>
                            </svg>
                            25 Jan
                          </span>
                        </td>
                        <td>
                          <a
                            class="badge badge-light-primary text-start me-2 action-edit"
                            href="javascript:void(0);"
                            ><svg
                              xmlns="http://www.w3.org/2000/svg"
                              width="24"
                              height="24"
                              viewBox="0 0 24 24"
                              fill="none"
                              stroke="currentColor"
                              stroke-width="2"
                              stroke-linecap="round"
                              stroke-linejoin="round"
                              class="feather feather-edit-3"
                            >
                              <path d="M12 20h9"></path>
                              <path
                                d="M16.5 3.5a2.121 2.121 0 0 1 3 3L7 19l-4 1 1-4L16.5 3.5z"
                              ></path></svg
                          ></a>
                          <a
                            class="badge badge-light-danger text-start action-delete"
                            href="javascript:void(0);"
                            ><svg
                              xmlns="http://www.w3.org/2000/svg"
                              width="24"
                              height="24"
                              viewBox="0 0 24 24"
                              fill="none"
                              stroke="currentColor"
                              stroke-width="2"
                              stroke-linecap="round"
                              stroke-linejoin="round"
                              class="feather feather-trash"
                            >
                              <polyline points="3 6 5 6 21 6"></polyline>
                              <path
                                d="M19 6v14a2 2 0 0 1-2 2H7a2 2 0 0 1-2-2V6m3 0V4a2 2 0 0 1 2-2h4a2 2 0 0 1 2 2v2"
                              ></path></svg
                          ></a>
                        </td>
                      </tr>

                      <tr>
                        <td class="checkbox-column">1</td>
                        <td>
                          <a href="./app-invoice-preview.html"
                            ><span class="inv-number">#086773</span></a
                          >
                        </td>
                        <td>
                          <div class="d-flex">
                            <div class="usr-img-frame me-2 rounded-circle">
                              <img
                                alt="avatar"
                                class="img-fluid rounded-circle"
                                src="assets/src/assets/img/profile-14.jpeg"
                              />
                            </div>
                            <p class="align-self-center mb-0 user-name">
                              Nia Hillyer
                            </p>
                          </div>
                        </td>
                        <td>
                          <span class="inv-email"
                            ><svg
                              xmlns="http://www.w3.org/2000/svg"
                              width="24"
                              height="24"
                              viewBox="0 0 24 24"
                              fill="none"
                              stroke="currentColor"
                              stroke-width="2"
                              stroke-linecap="round"
                              stroke-linejoin="round"
                              class="feather feather-mail"
                            >
                              <path
                                d="M4 4h16c1.1 0 2 .9 2 2v12c0 1.1-.9 2-2 2H4c-1.1 0-2-.9-2-2V6c0-1.1.9-2 2-2z"
                              ></path>
                              <polyline points="22,6 12,13 2,6"></polyline>
                            </svg>
                            niahillyer666@comapny.com</span
                          >
                        </td>
                        <td>
                          <span class="badge badge-light-warning inv-status"
                            >Pending</span
                          >
                        </td>
                        <td><span class="inv-amount">$59.21</span></td>
                        <td>
                          <span class="inv-date"
                            ><svg
                              xmlns="http://www.w3.org/2000/svg"
                              width="24"
                              height="24"
                              viewBox="0 0 24 24"
                              fill="none"
                              stroke="currentColor"
                              stroke-width="2"
                              stroke-linecap="round"
                              stroke-linejoin="round"
                              class="feather feather-calendar"
                            >
                              <rect
                                x="3"
                                y="4"
                                width="18"
                                height="18"
                                rx="2"
                                ry="2"
                              ></rect>
                              <line x1="16" y1="2" x2="16" y2="6"></line>
                              <line x1="8" y1="2" x2="8" y2="6"></line>
                              <line x1="3" y1="10" x2="21" y2="10"></line>
                            </svg>
                            20 Jan
                          </span>
                        </td>
                        <td>
                          <a
                            class="badge badge-light-primary text-start me-2 action-edit"
                            href="javascript:void(0);"
                            ><svg
                              xmlns="http://www.w3.org/2000/svg"
                              width="24"
                              height="24"
                              viewBox="0 0 24 24"
                              fill="none"
                              stroke="currentColor"
                              stroke-width="2"
                              stroke-linecap="round"
                              stroke-linejoin="round"
                              class="feather feather-edit-3"
                            >
                              <path d="M12 20h9"></path>
                              <path
                                d="M16.5 3.5a2.121 2.121 0 0 1 3 3L7 19l-4 1 1-4L16.5 3.5z"
                              ></path></svg
                          ></a>
                          <a
                            class="badge badge-light-danger text-start action-delete"
                            href="javascript:void(0);"
                            ><svg
                              xmlns="http://www.w3.org/2000/svg"
                              width="24"
                              height="24"
                              viewBox="0 0 24 24"
                              fill="none"
                              stroke="currentColor"
                              stroke-width="2"
                              stroke-linecap="round"
                              stroke-linejoin="round"
                              class="feather feather-trash"
                            >
                              <polyline points="3 6 5 6 21 6"></polyline>
                              <path
                                d="M19 6v14a2 2 0 0 1-2 2H7a2 2 0 0 1-2-2V6m3 0V4a2 2 0 0 1 2-2h4a2 2 0 0 1 2 2v2"
                              ></path></svg
                          ></a>
                        </td>
                      </tr>

                      <tr>
                        <td class="checkbox-column">1</td>
                        <td>
                          <a href="./app-invoice-preview.html"
                            ><span class="inv-number">#086643</span></a
                          >
                        </td>
                        <td>
                          <div class="d-flex">
                            <div class="usr-img-frame me-2 rounded-circle">
                              <img
                                alt="avatar"
                                class="img-fluid rounded-circle"
                                src="assets/src/assets/img/profile-11.jpeg"
                              />
                            </div>
                            <p class="align-self-center mb-0 user-name">
                              Amy Diaz
                            </p>
                          </div>
                        </td>
                        <td>
                          <span class="inv-email"
                            ><svg
                              xmlns="http://www.w3.org/2000/svg"
                              width="24"
                              height="24"
                              viewBox="0 0 24 24"
                              fill="none"
                              stroke="currentColor"
                              stroke-width="2"
                              stroke-linecap="round"
                              stroke-linejoin="round"
                              class="feather feather-mail"
                            >
                              <path
                                d="M4 4h16c1.1 0 2 .9 2 2v12c0 1.1-.9 2-2 2H4c-1.1 0-2-.9-2-2V6c0-1.1.9-2 2-2z"
                              ></path>
                              <polyline points="22,6 12,13 2,6"></polyline>
                            </svg>
                            amy968@gmail.com</span
                          >
                        </td>
                        <td>
                          <span class="badge badge-light-success inv-status"
                            >Paid</span
                          >
                        </td>
                        <td><span class="inv-amount">$100.00</span></td>
                        <td>
                          <span class="inv-date"
                            ><svg
                              xmlns="http://www.w3.org/2000/svg"
                              width="24"
                              height="24"
                              viewBox="0 0 24 24"
                              fill="none"
                              stroke="currentColor"
                              stroke-width="2"
                              stroke-linecap="round"
                              stroke-linejoin="round"
                              class="feather feather-calendar"
                            >
                              <rect
                                x="3"
                                y="4"
                                width="18"
                                height="18"
                                rx="2"
                                ry="2"
                              ></rect>
                              <line x1="16" y1="2" x2="16" y2="6"></line>
                              <line x1="8" y1="2" x2="8" y2="6"></line>
                              <line x1="3" y1="10" x2="21" y2="10"></line>
                            </svg>
                            14 Jan
                          </span>
                        </td>
                        <td>
                          <a
                            class="badge badge-light-primary text-start me-2 action-edit"
                            href="javascript:void(0);"
                            ><svg
                              xmlns="http://www.w3.org/2000/svg"
                              width="24"
                              height="24"
                              viewBox="0 0 24 24"
                              fill="none"
                              stroke="currentColor"
                              stroke-width="2"
                              stroke-linecap="round"
                              stroke-linejoin="round"
                              class="feather feather-edit-3"
                            >
                              <path d="M12 20h9"></path>
                              <path
                                d="M16.5 3.5a2.121 2.121 0 0 1 3 3L7 19l-4 1 1-4L16.5 3.5z"
                              ></path></svg
                          ></a>
                          <a
                            class="badge badge-light-danger text-start action-delete"
                            href="javascript:void(0);"
                            ><svg
                              xmlns="http://www.w3.org/2000/svg"
                              width="24"
                              height="24"
                              viewBox="0 0 24 24"
                              fill="none"
                              stroke="currentColor"
                              stroke-width="2"
                              stroke-linecap="round"
                              stroke-linejoin="round"
                              class="feather feather-trash"
                            >
                              <polyline points="3 6 5 6 21 6"></polyline>
                              <path
                                d="M19 6v14a2 2 0 0 1-2 2H7a2 2 0 0 1-2-2V6m3 0V4a2 2 0 0 1 2-2h4a2 2 0 0 1 2 2v2"
                              ></path></svg
                          ></a>
                        </td>
                      </tr>

                      <tr>
                        <td class="checkbox-column">1</td>
                        <td>
                          <a href="./app-invoice-preview.html"
                            ><span class="inv-number">#084743</span></a
                          >
                        </td>
                        <td>
                          <div class="d-flex">
                            <div class="usr-img-frame me-2 rounded-circle">
                              <img
                                alt="avatar"
                                class="img-fluid rounded-circle"
                                src="assets/src/assets/img/profile-18.jpeg"
                              />
                            </div>
                            <p class="align-self-center mb-0 user-name">
                              Donna Rogers
                            </p>
                          </div>
                        </td>
                        <td>
                          <span class="inv-email"
                            ><svg
                              xmlns="http://www.w3.org/2000/svg"
                              width="24"
                              height="24"
                              viewBox="0 0 24 24"
                              fill="none"
                              stroke="currentColor"
                              stroke-width="2"
                              stroke-linecap="round"
                              stroke-linejoin="round"
                              class="feather feather-mail"
                            >
                              <path
                                d="M4 4h16c1.1 0 2 .9 2 2v12c0 1.1-.9 2-2 2H4c-1.1 0-2-.9-2-2V6c0-1.1.9-2 2-2z"
                              ></path>
                              <polyline points="22,6 12,13 2,6"></polyline>
                            </svg>
                            donnaRogers@hotmail.com</span
                          >
                        </td>
                        <td>
                          <span class="badge badge-light-success inv-status"
                            >Paid</span
                          >
                        </td>
                        <td><span class="inv-amount">$405.15</span></td>
                        <td>
                          <span class="inv-date"
                            ><svg
                              xmlns="http://www.w3.org/2000/svg"
                              width="24"
                              height="24"
                              viewBox="0 0 24 24"
                              fill="none"
                              stroke="currentColor"
                              stroke-width="2"
                              stroke-linecap="round"
                              stroke-linejoin="round"
                              class="feather feather-calendar"
                            >
                              <rect
                                x="3"
                                y="4"
                                width="18"
                                height="18"
                                rx="2"
                                ry="2"
                              ></rect>
                              <line x1="16" y1="2" x2="16" y2="6"></line>
                              <line x1="8" y1="2" x2="8" y2="6"></line>
                              <line x1="3" y1="10" x2="21" y2="10"></line>
                            </svg>
                            03 Jan
                          </span>
                        </td>
                        <td>
                          <a
                            class="badge badge-light-primary text-start me-2 action-edit"
                            href="javascript:void(0);"
                            ><svg
                              xmlns="http://www.w3.org/2000/svg"
                              width="24"
                              height="24"
                              viewBox="0 0 24 24"
                              fill="none"
                              stroke="currentColor"
                              stroke-width="2"
                              stroke-linecap="round"
                              stroke-linejoin="round"
                              class="feather feather-edit-3"
                            >
                              <path d="M12 20h9"></path>
                              <path
                                d="M16.5 3.5a2.121 2.121 0 0 1 3 3L7 19l-4 1 1-4L16.5 3.5z"
                              ></path></svg
                          ></a>
                          <a
                            class="badge badge-light-danger text-start action-delete"
                            href="javascript:void(0);"
                            ><svg
                              xmlns="http://www.w3.org/2000/svg"
                              width="24"
                              height="24"
                              viewBox="0 0 24 24"
                              fill="none"
                              stroke="currentColor"
                              stroke-width="2"
                              stroke-linecap="round"
                              stroke-linejoin="round"
                              class="feather feather-trash"
                            >
                              <polyline points="3 6 5 6 21 6"></polyline>
                              <path
                                d="M19 6v14a2 2 0 0 1-2 2H7a2 2 0 0 1-2-2V6m3 0V4a2 2 0 0 1 2-2h4a2 2 0 0 1 2 2v2"
                              ></path></svg
                          ></a>
                        </td>
                      </tr>

                      <tr>
                        <td class="checkbox-column">1</td>
                        <td>
                          <a href="./app-invoice-preview.html"
                            ><span class="inv-number">#082693</span></a
                          >
                        </td>
                        <td>
                          <div class="d-flex">
                            <div class="usr-img-frame me-2 rounded-circle">
                              <img
                                alt="avatar"
                                class="img-fluid rounded-circle"
                                src="assets/src/assets/img/profile-24.jpeg"
                              />
                            </div>
                            <p class="align-self-center mb-0 user-name">
                              Grace Roberts
                            </p>
                          </div>
                        </td>
                        <td>
                          <span class="inv-email"
                            ><svg
                              xmlns="http://www.w3.org/2000/svg"
                              width="24"
                              height="24"
                              viewBox="0 0 24 24"
                              fill="none"
                              stroke="currentColor"
                              stroke-width="2"
                              stroke-linecap="round"
                              stroke-linejoin="round"
                              class="feather feather-mail"
                            >
                              <path
                                d="M4 4h16c1.1 0 2 .9 2 2v12c0 1.1-.9 2-2 2H4c-1.1 0-2-.9-2-2V6c0-1.1.9-2 2-2z"
                              ></path>
                              <polyline points="22,6 12,13 2,6"></polyline>
                            </svg>
                            graceRoberts@company.com</span
                          >
                        </td>
                        <td>
                          <span class="badge badge-light-success inv-status"
                            >Paid</span
                          >
                        </td>
                        <td><span class="inv-amount">$344.00</span></td>
                        <td>
                          <span class="inv-date"
                            ><svg
                              xmlns="http://www.w3.org/2000/svg"
                              width="24"
                              height="24"
                              viewBox="0 0 24 24"
                              fill="none"
                              stroke="currentColor"
                              stroke-width="2"
                              stroke-linecap="round"
                              stroke-linejoin="round"
                              class="feather feather-calendar"
                            >
                              <rect
                                x="3"
                                y="4"
                                width="18"
                                height="18"
                                rx="2"
                                ry="2"
                              ></rect>
                              <line x1="16" y1="2" x2="16" y2="6"></line>
                              <line x1="8" y1="2" x2="8" y2="6"></line>
                              <line x1="3" y1="10" x2="21" y2="10"></line>
                            </svg>
                            31 Dec
                          </span>
                        </td>
                        <td>
                          <a
                            class="badge badge-light-primary text-start me-2 action-edit"
                            href="javascript:void(0);"
                            ><svg
                              xmlns="http://www.w3.org/2000/svg"
                              width="24"
                              height="24"
                              viewBox="0 0 24 24"
                              fill="none"
                              stroke="currentColor"
                              stroke-width="2"
                              stroke-linecap="round"
                              stroke-linejoin="round"
                              class="feather feather-edit-3"
                            >
                              <path d="M12 20h9"></path>
                              <path
                                d="M16.5 3.5a2.121 2.121 0 0 1 3 3L7 19l-4 1 1-4L16.5 3.5z"
                              ></path></svg
                          ></a>
                          <a
                            class="badge badge-light-danger text-start action-delete"
                            href="javascript:void(0);"
                            ><svg
                              xmlns="http://www.w3.org/2000/svg"
                              width="24"
                              height="24"
                              viewBox="0 0 24 24"
                              fill="none"
                              stroke="currentColor"
                              stroke-width="2"
                              stroke-linecap="round"
                              stroke-linejoin="round"
                              class="feather feather-trash"
                            >
                              <polyline points="3 6 5 6 21 6"></polyline>
                              <path
                                d="M19 6v14a2 2 0 0 1-2 2H7a2 2 0 0 1-2-2V6m3 0V4a2 2 0 0 1 2-2h4a2 2 0 0 1 2 2v2"
                              ></path></svg
                          ></a>
                        </td>
                      </tr>

                      <tr>
                        <td class="checkbox-column">1</td>
                        <td>
                          <a href="./app-invoice-preview.html"
                            ><span class="inv-number">#081681</span></a
                          >
                        </td>
                        <td>
                          <div class="d-flex">
                            <div class="usr-img-frame me-2 rounded-circle">
                              <img
                                alt="avatar"
                                class="img-fluid rounded-circle"
                                src="assets/src/assets/img/profile-32.jpeg"
                              />
                            </div>
                            <p class="align-self-center mb-0 user-name">
                              James Taylor
                            </p>
                          </div>
                        </td>
                        <td>
                          <span class="inv-email"
                            ><svg
                              xmlns="http://www.w3.org/2000/svg"
                              width="24"
                              height="24"
                              viewBox="0 0 24 24"
                              fill="none"
                              stroke="currentColor"
                              stroke-width="2"
                              stroke-linecap="round"
                              stroke-linejoin="round"
                              class="feather feather-mail"
                            >
                              <path
                                d="M4 4h16c1.1 0 2 .9 2 2v12c0 1.1-.9 2-2 2H4c-1.1 0-2-.9-2-2V6c0-1.1.9-2 2-2z"
                              ></path>
                              <polyline points="22,6 12,13 2,6"></polyline>
                            </svg>
                            jamestaylor468@gmail.com</span
                          >
                        </td>
                        <td>
                          <span class="badge badge-light-warning inv-status"
                            >Pending</span
                          >
                        </td>
                        <td><span class="inv-amount">$20.00</span></td>
                        <td>
                          <span class="inv-date"
                            ><svg
                              xmlns="http://www.w3.org/2000/svg"
                              width="24"
                              height="24"
                              viewBox="0 0 24 24"
                              fill="none"
                              stroke="currentColor"
                              stroke-width="2"
                              stroke-linecap="round"
                              stroke-linejoin="round"
                              class="feather feather-calendar"
                            >
                              <rect
                                x="3"
                                y="4"
                                width="18"
                                height="18"
                                rx="2"
                                ry="2"
                              ></rect>
                              <line x1="16" y1="2" x2="16" y2="6"></line>
                              <line x1="8" y1="2" x2="8" y2="6"></line>
                              <line x1="3" y1="10" x2="21" y2="10"></line>
                            </svg>
                            27 Dec
                          </span>
                        </td>
                        <td>
                          <a
                            class="badge badge-light-primary text-start me-2 action-edit"
                            href="javascript:void(0);"
                            ><svg
                              xmlns="http://www.w3.org/2000/svg"
                              width="24"
                              height="24"
                              viewBox="0 0 24 24"
                              fill="none"
                              stroke="currentColor"
                              stroke-width="2"
                              stroke-linecap="round"
                              stroke-linejoin="round"
                              class="feather feather-edit-3"
                            >
                              <path d="M12 20h9"></path>
                              <path
                                d="M16.5 3.5a2.121 2.121 0 0 1 3 3L7 19l-4 1 1-4L16.5 3.5z"
                              ></path></svg
                          ></a>
                          <a
                            class="badge badge-light-danger text-start action-delete"
                            href="javascript:void(0);"
                            ><svg
                              xmlns="http://www.w3.org/2000/svg"
                              width="24"
                              height="24"
                              viewBox="0 0 24 24"
                              fill="none"
                              stroke="currentColor"
                              stroke-width="2"
                              stroke-linecap="round"
                              stroke-linejoin="round"
                              class="feather feather-trash"
                            >
                              <polyline points="3 6 5 6 21 6"></polyline>
                              <path
                                d="M19 6v14a2 2 0 0 1-2 2H7a2 2 0 0 1-2-2V6m3 0V4a2 2 0 0 1 2-2h4a2 2 0 0 1 2 2v2"
                              ></path></svg
                          ></a>
                        </td>
                      </tr>

                      <tr>
                        <td class="checkbox-column">1</td>
                        <td>
                          <a href="./app-invoice-preview.html"
                            ><span class="inv-number">#081452</span></a
                          >
                        </td>
                        <td>
                          <div class="d-flex">
                            <div class="usr-img-frame me-2 rounded-circle">
                              <img
                                alt="avatar"
                                class="img-fluid rounded-circle"
                                src="assets/src/assets/img/profile-30.png"
                              />
                            </div>
                            <p class="align-self-center mb-0 user-name">
                              Alexander Gray
                            </p>
                          </div>
                        </td>
                        <td>
                          <span class="inv-email"
                            ><svg
                              xmlns="http://www.w3.org/2000/svg"
                              width="24"
                              height="24"
                              viewBox="0 0 24 24"
                              fill="none"
                              stroke="currentColor"
                              stroke-width="2"
                              stroke-linecap="round"
                              stroke-linejoin="round"
                              class="feather feather-mail"
                            >
                              <path
                                d="M4 4h16c1.1 0 2 .9 2 2v12c0 1.1-.9 2-2 2H4c-1.1 0-2-.9-2-2V6c0-1.1.9-2 2-2z"
                              ></path>
                              <polyline points="22,6 12,13 2,6"></polyline>
                            </svg>
                            alexGray3188@gmail.com</span
                          >
                        </td>
                        <td>
                          <span class="badge badge-light-success inv-status"
                            >Paid</span
                          >
                        </td>
                        <td><span class="inv-amount">$1044.00</span></td>
                        <td>
                          <span class="inv-date"
                            ><svg
                              xmlns="http://www.w3.org/2000/svg"
                              width="24"
                              height="24"
                              viewBox="0 0 24 24"
                              fill="none"
                              stroke="currentColor"
                              stroke-width="2"
                              stroke-linecap="round"
                              stroke-linejoin="round"
                              class="feather feather-calendar"
                            >
                              <rect
                                x="3"
                                y="4"
                                width="18"
                                height="18"
                                rx="2"
                                ry="2"
                              ></rect>
                              <line x1="16" y1="2" x2="16" y2="6"></line>
                              <line x1="8" y1="2" x2="8" y2="6"></line>
                              <line x1="3" y1="10" x2="21" y2="10"></line>
                            </svg>
                            20 Dec
                          </span>
                        </td>
                        <td>
                          <a
                            class="badge badge-light-primary text-start me-2 action-edit"
                            href="javascript:void(0);"
                            ><svg
                              xmlns="http://www.w3.org/2000/svg"
                              width="24"
                              height="24"
                              viewBox="0 0 24 24"
                              fill="none"
                              stroke="currentColor"
                              stroke-width="2"
                              stroke-linecap="round"
                              stroke-linejoin="round"
                              class="feather feather-edit-3"
                            >
                              <path d="M12 20h9"></path>
                              <path
                                d="M16.5 3.5a2.121 2.121 0 0 1 3 3L7 19l-4 1 1-4L16.5 3.5z"
                              ></path></svg
                          ></a>
                          <a
                            class="badge badge-light-danger text-start action-delete"
                            href="javascript:void(0);"
                            ><svg
                              xmlns="http://www.w3.org/2000/svg"
                              width="24"
                              height="24"
                              viewBox="0 0 24 24"
                              fill="none"
                              stroke="currentColor"
                              stroke-width="2"
                              stroke-linecap="round"
                              stroke-linejoin="round"
                              class="feather feather-trash"
                            >
                              <polyline points="3 6 5 6 21 6"></polyline>
                              <path
                                d="M19 6v14a2 2 0 0 1-2 2H7a2 2 0 0 1-2-2V6m3 0V4a2 2 0 0 1 2-2h4a2 2 0 0 1 2 2v2"
                              ></path></svg
                          ></a>
                        </td>
                      </tr>

                      <tr>
                        <td class="checkbox-column">1</td>
                        <td>
                          <a href="./app-invoice-preview.html"
                            ><span class="inv-number">#081451</span></a
                          >
                        </td>
                        <td>
                          <div class="d-flex">
                            <div class="usr-img-frame me-2 rounded-circle">
                              <img
                                alt="avatar"
                                class="img-fluid rounded-circle"
                                src="assets/src/assets/img/profile-28.jpeg"
                              />
                            </div>
                            <p class="align-self-center mb-0 user-name">
                              Laurie Fox
                            </p>
                          </div>
                        </td>
                        <td>
                          <span class="inv-email"
                            ><svg
                              xmlns="http://www.w3.org/2000/svg"
                              width="24"
                              height="24"
                              viewBox="0 0 24 24"
                              fill="none"
                              stroke="currentColor"
                              stroke-width="2"
                              stroke-linecap="round"
                              stroke-linejoin="round"
                              class="feather feather-mail"
                            >
                              <path
                                d="M4 4h16c1.1 0 2 .9 2 2v12c0 1.1-.9 2-2 2H4c-1.1 0-2-.9-2-2V6c0-1.1.9-2 2-2z"
                              ></path>
                              <polyline points="22,6 12,13 2,6"></polyline>
                            </svg>
                            lauriefox@company.com</span
                          >
                        </td>
                        <td>
                          <span class="badge badge-light-success inv-status"
                            >Paid</span
                          >
                        </td>
                        <td><span class="inv-amount">$2275.45</span></td>
                        <td>
                          <span class="inv-date"
                            ><svg
                              xmlns="http://www.w3.org/2000/svg"
                              width="24"
                              height="24"
                              viewBox="0 0 24 24"
                              fill="none"
                              stroke="currentColor"
                              stroke-width="2"
                              stroke-linecap="round"
                              stroke-linejoin="round"
                              class="feather feather-calendar"
                            >
                              <rect
                                x="3"
                                y="4"
                                width="18"
                                height="18"
                                rx="2"
                                ry="2"
                              ></rect>
                              <line x1="16" y1="2" x2="16" y2="6"></line>
                              <line x1="8" y1="2" x2="8" y2="6"></line>
                              <line x1="3" y1="10" x2="21" y2="10"></line>
                            </svg>
                            15 Dec
                          </span>
                        </td>
                        <td>
                          <a
                            class="badge badge-light-primary text-start me-2 action-edit"
                            href="javascript:void(0);"
                            ><svg
                              xmlns="http://www.w3.org/2000/svg"
                              width="24"
                              height="24"
                              viewBox="0 0 24 24"
                              fill="none"
                              stroke="currentColor"
                              stroke-width="2"
                              stroke-linecap="round"
                              stroke-linejoin="round"
                              class="feather feather-edit-3"
                            >
                              <path d="M12 20h9"></path>
                              <path
                                d="M16.5 3.5a2.121 2.121 0 0 1 3 3L7 19l-4 1 1-4L16.5 3.5z"
                              ></path></svg
                          ></a>
                          <a
                            class="badge badge-light-danger text-start action-delete"
                            href="javascript:void(0);"
                            ><svg
                              xmlns="http://www.w3.org/2000/svg"
                              width="24"
                              height="24"
                              viewBox="0 0 24 24"
                              fill="none"
                              stroke="currentColor"
                              stroke-width="2"
                              stroke-linecap="round"
                              stroke-linejoin="round"
                              class="feather feather-trash"
                            >
                              <polyline points="3 6 5 6 21 6"></polyline>
                              <path
                                d="M19 6v14a2 2 0 0 1-2 2H7a2 2 0 0 1-2-2V6m3 0V4a2 2 0 0 1 2-2h4a2 2 0 0 1 2 2v2"
                              ></path></svg
                          ></a>
                        </td>
                      </tr>

                      <tr>
                        <td class="checkbox-column">1</td>
                        <td>
                          <a href="./app-invoice-preview.html"
                            ><span class="inv-number">#098425</span></a
                          >
                        </td>
                        <td>
                          <div class="d-flex">
                            <div class="usr-img-frame me-2 rounded-circle">
                              <img
                                alt="avatar"
                                class="img-fluid rounded-circle"
                                src="assets/src/assets/img/profile-4.jpeg"
                              />
                            </div>
                            <p class="align-self-center mb-0 user-name">
                              Felicia Terry
                            </p>
                          </div>
                        </td>
                        <td>
                          <span class="inv-email"
                            ><svg
                              xmlns="http://www.w3.org/2000/svg"
                              width="24"
                              height="24"
                              viewBox="0 0 24 24"
                              fill="none"
                              stroke="currentColor"
                              stroke-width="2"
                              stroke-linecap="round"
                              stroke-linejoin="round"
                              class="feather feather-mail"
                            >
                              <path
                                d="M4 4h16c1.1 0 2 .9 2 2v12c0 1.1-.9 2-2 2H4c-1.1 0-2-.9-2-2V6c0-1.1.9-2 2-2z"
                              ></path>
                              <polyline points="22,6 12,13 2,6"></polyline>
                            </svg>
                            feliciaterry@gmail.com</span
                          >
                        </td>
                        <td>
                          <span class="badge badge-light-success inv-status"
                            >Paid</span
                          >
                        </td>
                        <td><span class="inv-amount">$234.40</span></td>
                        <td>
                          <span class="inv-date"
                            ><svg
                              xmlns="http://www.w3.org/2000/svg"
                              width="24"
                              height="24"
                              viewBox="0 0 24 24"
                              fill="none"
                              stroke="currentColor"
                              stroke-width="2"
                              stroke-linecap="round"
                              stroke-linejoin="round"
                              class="feather feather-calendar"
                            >
                              <rect
                                x="3"
                                y="4"
                                width="18"
                                height="18"
                                rx="2"
                                ry="2"
                              ></rect>
                              <line x1="16" y1="2" x2="16" y2="6"></line>
                              <line x1="8" y1="2" x2="8" y2="6"></line>
                              <line x1="3" y1="10" x2="21" y2="10"></line>
                            </svg>
                            10 Feb
                          </span>
                        </td>
                        <td>
                          <a
                            class="badge badge-light-primary text-start me-2 action-edit"
                            href="javascript:void(0);"
                            ><svg
                              xmlns="http://www.w3.org/2000/svg"
                              width="24"
                              height="24"
                              viewBox="0 0 24 24"
                              fill="none"
                              stroke="currentColor"
                              stroke-width="2"
                              stroke-linecap="round"
                              stroke-linejoin="round"
                              class="feather feather-edit-3"
                            >
                              <path d="M12 20h9"></path>
                              <path
                                d="M16.5 3.5a2.121 2.121 0 0 1 3 3L7 19l-4 1 1-4L16.5 3.5z"
                              ></path></svg
                          ></a>
                          <a
                            class="badge badge-light-danger text-start action-delete"
                            href="javascript:void(0);"
                            ><svg
                              xmlns="http://www.w3.org/2000/svg"
                              width="24"
                              height="24"
                              viewBox="0 0 24 24"
                              fill="none"
                              stroke="currentColor"
                              stroke-width="2"
                              stroke-linecap="round"
                              stroke-linejoin="round"
                              class="feather feather-trash"
                            >
                              <polyline points="3 6 5 6 21 6"></polyline>
                              <path
                                d="M19 6v14a2 2 0 0 1-2 2H7a2 2 0 0 1-2-2V6m3 0V4a2 2 0 0 1 2-2h4a2 2 0 0 1 2 2v2"
                              ></path></svg
                          ></a>
                        </td>
                      </tr>
                      <tr>
                        <td class="checkbox-column">1</td>
                        <td>
                          <a href="./app-invoice-preview.html"
                            ><span class="inv-number">#098445</span></a
                          >
                        </td>
                        <td>
                          <div class="d-flex">
                            <div class="usr-img-frame me-2 rounded-circle">
                              <img
                                alt="avatar"
                                class="img-fluid rounded-circle"
                                src="assets/src/assets/img/profile-9.jpeg"
                              />
                            </div>
                            <p class="align-self-center mb-0 user-name">
                              Carol Mack
                            </p>
                          </div>
                        </td>
                        <td>
                          <span class="inv-email"
                            ><svg
                              xmlns="http://www.w3.org/2000/svg"
                              width="24"
                              height="24"
                              viewBox="0 0 24 24"
                              fill="none"
                              stroke="currentColor"
                              stroke-width="2"
                              stroke-linecap="round"
                              stroke-linejoin="round"
                              class="feather feather-mail"
                            >
                              <path
                                d="M4 4h16c1.1 0 2 .9 2 2v12c0 1.1-.9 2-2 2H4c-1.1 0-2-.9-2-2V6c0-1.1.9-2 2-2z"
                              ></path>
                              <polyline points="22,6 12,13 2,6"></polyline>
                            </svg>
                            carolmack@hotmail.com</span
                          >
                        </td>
                        <td>
                          <span class="badge badge-light-warning inv-status"
                            >Pending</span
                          >
                        </td>
                        <td><span class="inv-amount">$49.00</span></td>
                        <td>
                          <span class="inv-date"
                            ><svg
                              xmlns="http://www.w3.org/2000/svg"
                              width="24"
                              height="24"
                              viewBox="0 0 24 24"
                              fill="none"
                              stroke="currentColor"
                              stroke-width="2"
                              stroke-linecap="round"
                              stroke-linejoin="round"
                              class="feather feather-calendar"
                            >
                              <rect
                                x="3"
                                y="4"
                                width="18"
                                height="18"
                                rx="2"
                                ry="2"
                              ></rect>
                              <line x1="16" y1="2" x2="16" y2="6"></line>
                              <line x1="8" y1="2" x2="8" y2="6"></line>
                              <line x1="3" y1="10" x2="21" y2="10"></line>
                            </svg>
                            06 Feb
                          </span>
                        </td>
                        <td>
                          <a
                            class="badge badge-light-primary text-start me-2 action-edit"
                            href="javascript:void(0);"
                            ><svg
                              xmlns="http://www.w3.org/2000/svg"
                              width="24"
                              height="24"
                              viewBox="0 0 24 24"
                              fill="none"
                              stroke="currentColor"
                              stroke-width="2"
                              stroke-linecap="round"
                              stroke-linejoin="round"
                              class="feather feather-edit-3"
                            >
                              <path d="M12 20h9"></path>
                              <path
                                d="M16.5 3.5a2.121 2.121 0 0 1 3 3L7 19l-4 1 1-4L16.5 3.5z"
                              ></path></svg
                          ></a>
                          <a
                            class="badge badge-light-danger text-start action-delete"
                            href="javascript:void(0);"
                            ><svg
                              xmlns="http://www.w3.org/2000/svg"
                              width="24"
                              height="24"
                              viewBox="0 0 24 24"
                              fill="none"
                              stroke="currentColor"
                              stroke-width="2"
                              stroke-linecap="round"
                              stroke-linejoin="round"
                              class="feather feather-trash"
                            >
                              <polyline points="3 6 5 6 21 6"></polyline>
                              <path
                                d="M19 6v14a2 2 0 0 1-2 2H7a2 2 0 0 1-2-2V6m3 0V4a2 2 0 0 1 2-2h4a2 2 0 0 1 2 2v2"
                              ></path></svg
                          ></a>
                        </td>
                      </tr>

                      <tr>
                        <td class="checkbox-column">1</td>
                        <td>
                          <a href="./app-invoice-preview.html"
                            ><span class="inv-number">#099825</span></a
                          >
                        </td>
                        <td>
                          <div class="d-flex">
                            <div class="usr-img-frame me-2 rounded-circle">
                              <img
                                alt="avatar"
                                class="img-fluid rounded-circle"
                                src="assets/src/assets/img/profile-21.jpeg"
                              />
                            </div>
                            <p class="align-self-center mb-0 user-name">
                              Ian Munoz
                            </p>
                          </div>
                        </td>
                        <td>
                          <span class="inv-email"
                            ><svg
                              xmlns="http://www.w3.org/2000/svg"
                              width="24"
                              height="24"
                              viewBox="0 0 24 24"
                              fill="none"
                              stroke="currentColor"
                              stroke-width="2"
                              stroke-linecap="round"
                              stroke-linejoin="round"
                              class="feather feather-mail"
                            >
                              <path
                                d="M4 4h16c1.1 0 2 .9 2 2v12c0 1.1-.9 2-2 2H4c-1.1 0-2-.9-2-2V6c0-1.1.9-2 2-2z"
                              ></path>
                              <polyline points="22,6 12,13 2,6"></polyline>
                            </svg>
                            ianMunoz@gmail.com</span
                          >
                        </td>
                        <td>
                          <span class="badge badge-light-success inv-status"
                            >Paid</span
                          >
                        </td>
                        <td><span class="inv-amount">$400</span></td>
                        <td>
                          <span class="inv-date"
                            ><svg
                              xmlns="http://www.w3.org/2000/svg"
                              width="24"
                              height="24"
                              viewBox="0 0 24 24"
                              fill="none"
                              stroke="currentColor"
                              stroke-width="2"
                              stroke-linecap="round"
                              stroke-linejoin="round"
                              class="feather feather-calendar"
                            >
                              <rect
                                x="3"
                                y="4"
                                width="18"
                                height="18"
                                rx="2"
                                ry="2"
                              ></rect>
                              <line x1="16" y1="2" x2="16" y2="6"></line>
                              <line x1="8" y1="2" x2="8" y2="6"></line>
                              <line x1="3" y1="10" x2="21" y2="10"></line>
                            </svg>
                            10 Feb
                          </span>
                        </td>
                        <td>
                          <a
                            class="badge badge-light-primary text-start me-2 action-edit"
                            href="javascript:void(0);"
                            ><svg
                              xmlns="http://www.w3.org/2000/svg"
                              width="24"
                              height="24"
                              viewBox="0 0 24 24"
                              fill="none"
                              stroke="currentColor"
                              stroke-width="2"
                              stroke-linecap="round"
                              stroke-linejoin="round"
                              class="feather feather-edit-3"
                            >
                              <path d="M12 20h9"></path>
                              <path
                                d="M16.5 3.5a2.121 2.121 0 0 1 3 3L7 19l-4 1 1-4L16.5 3.5z"
                              ></path></svg
                          ></a>
                          <a
                            class="badge badge-light-danger text-start action-delete"
                            href="javascript:void(0);"
                            ><svg
                              xmlns="http://www.w3.org/2000/svg"
                              width="24"
                              height="24"
                              viewBox="0 0 24 24"
                              fill="none"
                              stroke="currentColor"
                              stroke-width="2"
                              stroke-linecap="round"
                              stroke-linejoin="round"
                              class="feather feather-trash"
                            >
                              <polyline points="3 6 5 6 21 6"></polyline>
                              <path
                                d="M19 6v14a2 2 0 0 1-2 2H7a2 2 0 0 1-2-2V6m3 0V4a2 2 0 0 1 2-2h4a2 2 0 0 1 2 2v2"
                              ></path></svg
                          ></a>
                        </td>
                      </tr>

                      <tr>
                        <td class="checkbox-column">1</td>
                        <td>
                          <a href="./app-invoice-preview.html"
                            ><span class="inv-number">#099835</span></a
                          >
                        </td>
                        <td>
                          <div class="d-flex">
                            <div class="usr-img-frame me-2 rounded-circle">
                              <img
                                alt="avatar"
                                class="img-fluid rounded-circle"
                                src="assets/src/assets/img/profile-34.jpeg"
                              />
                            </div>
                            <p class="align-self-center mb-0 user-name">
                              Devin Cole
                            </p>
                          </div>
                        </td>
                        <td>
                          <span class="inv-email"
                            ><svg
                              xmlns="http://www.w3.org/2000/svg"
                              width="24"
                              height="24"
                              viewBox="0 0 24 24"
                              fill="none"
                              stroke="currentColor"
                              stroke-width="2"
                              stroke-linecap="round"
                              stroke-linejoin="round"
                              class="feather feather-mail"
                            >
                              <path
                                d="M4 4h16c1.1 0 2 .9 2 2v12c0 1.1-.9 2-2 2H4c-1.1 0-2-.9-2-2V6c0-1.1.9-2 2-2z"
                              ></path>
                              <polyline points="22,6 12,13 2,6"></polyline>
                            </svg>
                            devincole46@company.com</span
                          >
                        </td>
                        <td>
                          <span class="badge badge-light-success inv-status"
                            >Paid</span
                          >
                        </td>
                        <td><span class="inv-amount">$149.00</span></td>
                        <td>
                          <span class="inv-date"
                            ><svg
                              xmlns="http://www.w3.org/2000/svg"
                              width="24"
                              height="24"
                              viewBox="0 0 24 24"
                              fill="none"
                              stroke="currentColor"
                              stroke-width="2"
                              stroke-linecap="round"
                              stroke-linejoin="round"
                              class="feather feather-calendar"
                            >
                              <rect
                                x="3"
                                y="4"
                                width="18"
                                height="18"
                                rx="2"
                                ry="2"
                              ></rect>
                              <line x1="16" y1="2" x2="16" y2="6"></line>
                              <line x1="8" y1="2" x2="8" y2="6"></line>
                              <line x1="3" y1="10" x2="21" y2="10"></line>
                            </svg>
                            20 Feb
                          </span>
                        </td>
                        <td>
                          <a
                            class="badge badge-light-primary text-start me-2 action-edit"
                            href="javascript:void(0);"
                            ><svg
                              xmlns="http://www.w3.org/2000/svg"
                              width="24"
                              height="24"
                              viewBox="0 0 24 24"
                              fill="none"
                              stroke="currentColor"
                              stroke-width="2"
                              stroke-linecap="round"
                              stroke-linejoin="round"
                              class="feather feather-edit-3"
                            >
                              <path d="M12 20h9"></path>
                              <path
                                d="M16.5 3.5a2.121 2.121 0 0 1 3 3L7 19l-4 1 1-4L16.5 3.5z"
                              ></path></svg
                          ></a>
                          <a
                            class="badge badge-light-danger text-start action-delete"
                            href="javascript:void(0);"
                            ><svg
                              xmlns="http://www.w3.org/2000/svg"
                              width="24"
                              height="24"
                              viewBox="0 0 24 24"
                              fill="none"
                              stroke="currentColor"
                              stroke-width="2"
                              stroke-linecap="round"
                              stroke-linejoin="round"
                              class="feather feather-trash"
                            >
                              <polyline points="3 6 5 6 21 6"></polyline>
                              <path
                                d="M19 6v14a2 2 0 0 1-2 2H7a2 2 0 0 1-2-2V6m3 0V4a2 2 0 0 1 2-2h4a2 2 0 0 1 2 2v2"
                              ></path></svg
                          ></a>
                        </td>
                      </tr>

                      <tr>
                        <td class="checkbox-column">1</td>
                        <td>
                          <a href="./app-invoice-preview.html"
                            ><span class="inv-number">#099859</span></a
                          >
                        </td>
                        <td>
                          <div class="d-flex">
                            <div class="usr-img-frame me-2 rounded-circle">
                              <img
                                alt="avatar"
                                class="img-fluid rounded-circle"
                                src="assets/src/assets/img/profile-31.jpeg"
                              />
                            </div>
                            <p class="align-self-center mb-0 user-name">
                              Nina Flores
                            </p>
                          </div>
                        </td>
                        <td>
                          <span class="inv-email"
                            ><svg
                              xmlns="http://www.w3.org/2000/svg"
                              width="24"
                              height="24"
                              viewBox="0 0 24 24"
                              fill="none"
                              stroke="currentColor"
                              stroke-width="2"
                              stroke-linecap="round"
                              stroke-linejoin="round"
                              class="feather feather-mail"
                            >
                              <path
                                d="M4 4h16c1.1 0 2 .9 2 2v12c0 1.1-.9 2-2 2H4c-1.1 0-2-.9-2-2V6c0-1.1.9-2 2-2z"
                              ></path>
                              <polyline points="22,6 12,13 2,6"></polyline>
                            </svg>
                            ninaFlores207@gamil.com</span
                          >
                        </td>
                        <td>
                          <span class="badge badge-light-warning inv-status"
                            >Pending</span
                          >
                        </td>
                        <td><span class="inv-amount">$79.00</span></td>
                        <td>
                          <span class="inv-date"
                            ><svg
                              xmlns="http://www.w3.org/2000/svg"
                              width="24"
                              height="24"
                              viewBox="0 0 24 24"
                              fill="none"
                              stroke="currentColor"
                              stroke-width="2"
                              stroke-linecap="round"
                              stroke-linejoin="round"
                              class="feather feather-calendar"
                            >
                              <rect
                                x="3"
                                y="4"
                                width="18"
                                height="18"
                                rx="2"
                                ry="2"
                              ></rect>
                              <line x1="16" y1="2" x2="16" y2="6"></line>
                              <line x1="8" y1="2" x2="8" y2="6"></line>
                              <line x1="3" y1="10" x2="21" y2="10"></line>
                            </svg>
                            01 Mar
                          </span>
                        </td>
                        <td>
                          <a
                            class="badge badge-light-primary text-start me-2 action-edit"
                            href="javascript:void(0);"
                            ><svg
                              xmlns="http://www.w3.org/2000/svg"
                              width="24"
                              height="24"
                              viewBox="0 0 24 24"
                              fill="none"
                              stroke="currentColor"
                              stroke-width="2"
                              stroke-linecap="round"
                              stroke-linejoin="round"
                              class="feather feather-edit-3"
                            >
                              <path d="M12 20h9"></path>
                              <path
                                d="M16.5 3.5a2.121 2.121 0 0 1 3 3L7 19l-4 1 1-4L16.5 3.5z"
                              ></path></svg
                          ></a>
                          <a
                            class="badge badge-light-danger text-start action-delete"
                            href="javascript:void(0);"
                            ><svg
                              xmlns="http://www.w3.org/2000/svg"
                              width="24"
                              height="24"
                              viewBox="0 0 24 24"
                              fill="none"
                              stroke="currentColor"
                              stroke-width="2"
                              stroke-linecap="round"
                              stroke-linejoin="round"
                              class="feather feather-trash"
                            >
                              <polyline points="3 6 5 6 21 6"></polyline>
                              <path
                                d="M19 6v14a2 2 0 0 1-2 2H7a2 2 0 0 1-2-2V6m3 0V4a2 2 0 0 1 2-2h4a2 2 0 0 1 2 2v2"
                              ></path></svg
                          ></a>
                        </td>
                      </tr>

                      <tr>
                        <td class="checkbox-column">1</td>
                        <td>
                          <a href="./app-invoice-preview.html"
                            ><span class="inv-number">#099989</span></a
                          >
                        </td>
                        <td>
                          <div class="d-flex">
                            <div class="usr-img-frame me-2 rounded-circle">
                              <img
                                alt="avatar"
                                class="img-fluid rounded-circle"
                                src="assets/src/assets/img/profile-33.jpeg"
                              />
                            </div>
                            <p class="align-self-center mb-0 user-name">
                              Leah Romero
                            </p>
                          </div>
                        </td>
                        <td>
                          <span class="inv-email"
                            ><svg
                              xmlns="http://www.w3.org/2000/svg"
                              width="24"
                              height="24"
                              viewBox="0 0 24 24"
                              fill="none"
                              stroke="currentColor"
                              stroke-width="2"
                              stroke-linecap="round"
                              stroke-linejoin="round"
                              class="feather feather-mail"
                            >
                              <path
                                d="M4 4h16c1.1 0 2 .9 2 2v12c0 1.1-.9 2-2 2H4c-1.1 0-2-.9-2-2V6c0-1.1.9-2 2-2z"
                              ></path>
                              <polyline points="22,6 12,13 2,6"></polyline>
                            </svg>
                            leahRomero61@comapny.com</span
                          >
                        </td>
                        <td>
                          <span class="badge badge-light-warning inv-status"
                            >Pending</span
                          >
                        </td>
                        <td><span class="inv-amount">$59.21</span></td>
                        <td>
                          <span class="inv-date"
                            ><svg
                              xmlns="http://www.w3.org/2000/svg"
                              width="24"
                              height="24"
                              viewBox="0 0 24 24"
                              fill="none"
                              stroke="currentColor"
                              stroke-width="2"
                              stroke-linecap="round"
                              stroke-linejoin="round"
                              class="feather feather-calendar"
                            >
                              <rect
                                x="3"
                                y="4"
                                width="18"
                                height="18"
                                rx="2"
                                ry="2"
                              ></rect>
                              <line x1="16" y1="2" x2="16" y2="6"></line>
                              <line x1="8" y1="2" x2="8" y2="6"></line>
                              <line x1="3" y1="10" x2="21" y2="10"></line>
                            </svg>
                            06 Mar
                          </span>
                        </td>
                        <td>
                          <a
                            class="badge badge-light-primary text-start me-2 action-edit"
                            href="javascript:void(0);"
                            ><svg
                              xmlns="http://www.w3.org/2000/svg"
                              width="24"
                              height="24"
                              viewBox="0 0 24 24"
                              fill="none"
                              stroke="currentColor"
                              stroke-width="2"
                              stroke-linecap="round"
                              stroke-linejoin="round"
                              class="feather feather-edit-3"
                            >
                              <path d="M12 20h9"></path>
                              <path
                                d="M16.5 3.5a2.121 2.121 0 0 1 3 3L7 19l-4 1 1-4L16.5 3.5z"
                              ></path></svg
                          ></a>
                          <a
                            class="badge badge-light-danger text-start action-delete"
                            href="javascript:void(0);"
                            ><svg
                              xmlns="http://www.w3.org/2000/svg"
                              width="24"
                              height="24"
                              viewBox="0 0 24 24"
                              fill="none"
                              stroke="currentColor"
                              stroke-width="2"
                              stroke-linecap="round"
                              stroke-linejoin="round"
                              class="feather feather-trash"
                            >
                              <polyline points="3 6 5 6 21 6"></polyline>
                              <path
                                d="M19 6v14a2 2 0 0 1-2 2H7a2 2 0 0 1-2-2V6m3 0V4a2 2 0 0 1 2-2h4a2 2 0 0 1 2 2v2"
                              ></path></svg
                          ></a>
                        </td>
                      </tr>

                      <tr>
                        <td class="checkbox-column">1</td>
                        <td>
                          <a href="./app-invoice-preview.html"
                            ><span class="inv-number">#101261</span></a
                          >
                        </td>
                        <td>
                          <div class="d-flex">
                            <div class="usr-img-frame me-2 rounded-circle">
                              <img
                                alt="avatar"
                                class="img-fluid rounded-circle"
                                src="assets/src/assets/img/profile-22.jpeg"
                              />
                            </div>
                            <p class="align-self-center mb-0 user-name">
                              Kelli Myers
                            </p>
                          </div>
                        </td>
                        <td>
                          <span class="inv-email"
                            ><svg
                              xmlns="http://www.w3.org/2000/svg"
                              width="24"
                              height="24"
                              viewBox="0 0 24 24"
                              fill="none"
                              stroke="currentColor"
                              stroke-width="2"
                              stroke-linecap="round"
                              stroke-linejoin="round"
                              class="feather feather-mail"
                            >
                              <path
                                d="M4 4h16c1.1 0 2 .9 2 2v12c0 1.1-.9 2-2 2H4c-1.1 0-2-.9-2-2V6c0-1.1.9-2 2-2z"
                              ></path>
                              <polyline points="22,6 12,13 2,6"></polyline>
                            </svg>
                            kelli968@gmail.com</span
                          >
                        </td>
                        <td>
                          <span class="badge badge-light-success inv-status"
                            >Paid</span
                          >
                        </td>
                        <td><span class="inv-amount">$100.00</span></td>
                        <td>
                          <span class="inv-date"
                            ><svg
                              xmlns="http://www.w3.org/2000/svg"
                              width="24"
                              height="24"
                              viewBox="0 0 24 24"
                              fill="none"
                              stroke="currentColor"
                              stroke-width="2"
                              stroke-linecap="round"
                              stroke-linejoin="round"
                              class="feather feather-calendar"
                            >
                              <rect
                                x="3"
                                y="4"
                                width="18"
                                height="18"
                                rx="2"
                                ry="2"
                              ></rect>
                              <line x1="16" y1="2" x2="16" y2="6"></line>
                              <line x1="8" y1="2" x2="8" y2="6"></line>
                              <line x1="3" y1="10" x2="21" y2="10"></line>
                            </svg>
                            10 Mar
                          </span>
                        </td>
                        <td>
                          <a
                            class="badge badge-light-primary text-start me-2 action-edit"
                            href="javascript:void(0);"
                            ><svg
                              xmlns="http://www.w3.org/2000/svg"
                              width="24"
                              height="24"
                              viewBox="0 0 24 24"
                              fill="none"
                              stroke="currentColor"
                              stroke-width="2"
                              stroke-linecap="round"
                              stroke-linejoin="round"
                              class="feather feather-edit-3"
                            >
                              <path d="M12 20h9"></path>
                              <path
                                d="M16.5 3.5a2.121 2.121 0 0 1 3 3L7 19l-4 1 1-4L16.5 3.5z"
                              ></path></svg
                          ></a>
                          <a
                            class="badge badge-light-danger text-start action-delete"
                            href="javascript:void(0);"
                            ><svg
                              xmlns="http://www.w3.org/2000/svg"
                              width="24"
                              height="24"
                              viewBox="0 0 24 24"
                              fill="none"
                              stroke="currentColor"
                              stroke-width="2"
                              stroke-linecap="round"
                              stroke-linejoin="round"
                              class="feather feather-trash"
                            >
                              <polyline points="3 6 5 6 21 6"></polyline>
                              <path
                                d="M19 6v14a2 2 0 0 1-2 2H7a2 2 0 0 1-2-2V6m3 0V4a2 2 0 0 1 2-2h4a2 2 0 0 1 2 2v2"
                              ></path></svg
                          ></a>
                        </td>
                      </tr>

                      <tr>
                        <td class="checkbox-column">1</td>
                        <td>
                          <a href="./app-invoice-preview.html"
                            ><span class="inv-number">#102261</span></a
                          >
                        </td>
                        <td>
                          <div class="d-flex">
                            <div class="usr-img-frame me-2 rounded-circle">
                              <img
                                alt="avatar"
                                class="img-fluid rounded-circle"
                                src="assets/src/assets/img/profile-2.jpeg"
                              />
                            </div>
                            <p class="align-self-center mb-0 user-name">
                              Susan Norton
                            </p>
                          </div>
                        </td>
                        <td>
                          <span class="inv-email"
                            ><svg
                              xmlns="http://www.w3.org/2000/svg"
                              width="24"
                              height="24"
                              viewBox="0 0 24 24"
                              fill="none"
                              stroke="currentColor"
                              stroke-width="2"
                              stroke-linecap="round"
                              stroke-linejoin="round"
                              class="feather feather-mail"
                            >
                              <path
                                d="M4 4h16c1.1 0 2 .9 2 2v12c0 1.1-.9 2-2 2H4c-1.1 0-2-.9-2-2V6c0-1.1.9-2 2-2z"
                              ></path>
                              <polyline points="22,6 12,13 2,6"></polyline>
                            </svg>
                            susanNorton@hotmail.com</span
                          >
                        </td>
                        <td>
                          <span class="badge badge-light-success inv-status"
                            >Paid</span
                          >
                        </td>
                        <td><span class="inv-amount">$405.15</span></td>
                        <td>
                          <span class="inv-date"
                            ><svg
                              xmlns="http://www.w3.org/2000/svg"
                              width="24"
                              height="24"
                              viewBox="0 0 24 24"
                              fill="none"
                              stroke="currentColor"
                              stroke-width="2"
                              stroke-linecap="round"
                              stroke-linejoin="round"
                              class="feather feather-calendar"
                            >
                              <rect
                                x="3"
                                y="4"
                                width="18"
                                height="18"
                                rx="2"
                                ry="2"
                              ></rect>
                              <line x1="16" y1="2" x2="16" y2="6"></line>
                              <line x1="8" y1="2" x2="8" y2="6"></line>
                              <line x1="3" y1="10" x2="21" y2="10"></line>
                            </svg>
                            15 Mar
                          </span>
                        </td>
                        <td>
                          <a
                            class="badge badge-light-primary text-start me-2 action-edit"
                            href="javascript:void(0);"
                            ><svg
                              xmlns="http://www.w3.org/2000/svg"
                              width="24"
                              height="24"
                              viewBox="0 0 24 24"
                              fill="none"
                              stroke="currentColor"
                              stroke-width="2"
                              stroke-linecap="round"
                              stroke-linejoin="round"
                              class="feather feather-edit-3"
                            >
                              <path d="M12 20h9"></path>
                              <path
                                d="M16.5 3.5a2.121 2.121 0 0 1 3 3L7 19l-4 1 1-4L16.5 3.5z"
                              ></path></svg
                          ></a>
                          <a
                            class="badge badge-light-danger text-start action-delete"
                            href="javascript:void(0);"
                            ><svg
                              xmlns="http://www.w3.org/2000/svg"
                              width="24"
                              height="24"
                              viewBox="0 0 24 24"
                              fill="none"
                              stroke="currentColor"
                              stroke-width="2"
                              stroke-linecap="round"
                              stroke-linejoin="round"
                              class="feather feather-trash"
                            >
                              <polyline points="3 6 5 6 21 6"></polyline>
                              <path
                                d="M19 6v14a2 2 0 0 1-2 2H7a2 2 0 0 1-2-2V6m3 0V4a2 2 0 0 1 2-2h4a2 2 0 0 1 2 2v2"
                              ></path></svg
                          ></a>
                        </td>
                      </tr>
                    </tbody>
                  </table>
                </div>
              </div>
            </div>
          </div>
        </div>

        <!--  BEGIN FOOTER  -->
        <div class="footer-wrapper mt-0">
          <div class="footer-section f-section-1">
            <p class="">
              Copyright © <span class="dynamic-year">2022</span>
              <a target="_blank" href="https://designreset.com/cork-admin/"
                >DesignReset</a
              >, All rights reserved.
            </p>
          </div>
          <div class="footer-section f-section-2">
            <p class="">
              Coded with
              <svg
                xmlns="http://www.w3.org/2000/svg"
                width="24"
                height="24"
                viewBox="0 0 24 24"
                fill="none"
                stroke="currentColor"
                stroke-width="2"
                stroke-linecap="round"
                stroke-linejoin="round"
                class="feather feather-heart"
              >
                <path
                  d="M20.84 4.61a5.5 5.5 0 0 0-7.78 0L12 5.67l-1.06-1.06a5.5 5.5 0 0 0-7.78 7.78l1.06 1.06L12 21.23l7.78-7.78 1.06-1.06a5.5 5.5 0 0 0 0-7.78z"
                ></path>
              </svg>
            </p>
          </div>
        </div>
        <!--  END FOOTER  -->
      </div>
      <!--  END CONTENT AREA  -->
    </div>
    <!-- END MAIN CONTAINER -->

    <!-- BEGIN GLOBAL MANDATORY SCRIPTS -->
    <script src="assets/src/plugins/src/global/vendors.min.js"></script>
    <script src="assets/src/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="assets/src/plugins/src/perfect-scrollbar/perfect-scrollbar.min.js"></script>
    <script src="assets/src/plugins/src/mousetrap/mousetrap.min.js"></script>
    <script src="assets/src/plugins/src/waves/waves.min.js"></script>
    <script src="assets/layouts/vertical-dark-menu/app.js"></script>
    <script src="assets/src/assets/js/custom.js"></script>
    <!-- END GLOBAL MANDATORY SCRIPTS -->
    <script src="assets/src/plugins/src/table/datatable/datatables.js"></script>
    <script src="assets/src/plugins/src/table/datatable/button-ext/dataTables.buttons.min.js"></script>
    <script src="assets/src/assets/js/apps/invoice-list.js"></script>
  </body>
</html>
