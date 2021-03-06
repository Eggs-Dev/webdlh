<div class="topbar">
    <!--begin::Notifications-->
    <div class="dropdown">
        <!--begin::Toggle-->
        <div class="topbar-item mr-5" data-toggle="dropdown" data-offset="10px,0px">
            <div class="btn btn-icon btn-clean btn-dropdown btn-lg mr-1 pulse pulse-primary">
                <span class="text-muted font-weight-bold font-size-base d-none d-md-inline mr-1">Hi,</span>
                <span class="text-dark-50 font-weight-bolder font-size-base d-none d-md-inline mr-3">Admin</span>
                <span class="symbol symbol-35 symbol-light-success">
                    <span class="symbol-label font-size-h5 font-weight-bold">A</span>
                </span>
                {{-- <span class="svg-icon svg-icon-xl svg-icon-primary">
                    <!--begin::Svg Icon | path:assets/media/svg/icons/Code/Compiling.svg-->
                    <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
                        <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                            <rect x="0" y="0" width="24" height="24" />
                            <path d="M2.56066017,10.6819805 L4.68198052,8.56066017 C5.26776695,7.97487373 6.21751442,7.97487373 6.80330086,8.56066017 L8.9246212,10.6819805 C9.51040764,11.267767 9.51040764,12.2175144 8.9246212,12.8033009 L6.80330086,14.9246212 C6.21751442,15.5104076 5.26776695,15.5104076 4.68198052,14.9246212 L2.56066017,12.8033009 C1.97487373,12.2175144 1.97487373,11.267767 2.56066017,10.6819805 Z M14.5606602,10.6819805 L16.6819805,8.56066017 C17.267767,7.97487373 18.2175144,7.97487373 18.8033009,8.56066017 L20.9246212,10.6819805 C21.5104076,11.267767 21.5104076,12.2175144 20.9246212,12.8033009 L18.8033009,14.9246212 C18.2175144,15.5104076 17.267767,15.5104076 16.6819805,14.9246212 L14.5606602,12.8033009 C13.9748737,12.2175144 13.9748737,11.267767 14.5606602,10.6819805 Z" fill="#000000" opacity="0.3" />
                            <path d="M8.56066017,16.6819805 L10.6819805,14.5606602 C11.267767,13.9748737 12.2175144,13.9748737 12.8033009,14.5606602 L14.9246212,16.6819805 C15.5104076,17.267767 15.5104076,18.2175144 14.9246212,18.8033009 L12.8033009,20.9246212 C12.2175144,21.5104076 11.267767,21.5104076 10.6819805,20.9246212 L8.56066017,18.8033009 C7.97487373,18.2175144 7.97487373,17.267767 8.56066017,16.6819805 Z M8.56066017,4.68198052 L10.6819805,2.56066017 C11.267767,1.97487373 12.2175144,1.97487373 12.8033009,2.56066017 L14.9246212,4.68198052 C15.5104076,5.26776695 15.5104076,6.21751442 14.9246212,6.80330086 L12.8033009,8.9246212 C12.2175144,9.51040764 11.267767,9.51040764 10.6819805,8.9246212 L8.56066017,6.80330086 C7.97487373,6.21751442 7.97487373,5.26776695 8.56066017,4.68198052 Z" fill="#000000" />
                        </g>
                    </svg>
                    <!--end::Svg Icon-->
                </span>
                <span class="pulse-ring"></span> --}}
            </div>
        </div>
        <!--end::Toggle-->
        <!--begin::Dropdown-->
        <div class="dropdown-menu p-0 m-0 dropdown-menu-right dropdown-menu-anim-up dropdown-menu-lg">
            <form>
                <!--begin::Header-->
                <div class="d-flex flex-column pt-12 bgi-size-cover bgi-no-repeat rounded-top" style="background-color:rgb(243, 243, 243)">
                    <!--begin::Title-->
                    <!--begin::Content-->
                    <div class="offcanvas-content pr-5 mr-n5">
                        <!--begin::Header-->
                        <div class="d-flex align-items-center">
                            <div class="symbol symbol-100 mr-5 ml-5">
                                {{-- <div class="symbol-label" style="background-image:url('{{ asset('assets/media/users/300_21.jpg')}}')"></div> --}}
                                <div class="symbol-label" style="background-image:url('{{ Auth::user()->imgpath }}')"></div>
                                <i class="symbol-badge bg-success"></i>
                            </div>
                            <div class="d-flex flex-column align-items-center">
                                <a href="#" class="font-weight-bold font-size-h5 text-dark-75 text-hover-primary">{{ Auth::user()->name }}</a>
                                <div class="text-muted mt-1">{{ Auth::user()->jabatan }}</div>
                                <div class="navi mt-2">
                                    <a href="#" class="navi-item">
                                        <span class="navi-link p-0 pb-2">
                                            <span class="navi-icon mr-1">
                                                <span class="svg-icon svg-icon-lg svg-icon-primary">
                                                    <!--begin::Svg Icon | path:assets/media/svg/icons/Communication/Mail-notification.svg-->
                                                    <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
                                                        <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                                            <rect x="0" y="0" width="24" height="24" />
                                                            <path d="M21,12.0829584 C20.6747915,12.0283988 20.3407122,12 20,12 C16.6862915,12 14,14.6862915 14,18 C14,18.3407122 14.0283988,18.6747915 14.0829584,19 L5,19 C3.8954305,19 3,18.1045695 3,17 L3,8 C3,6.8954305 3.8954305,6 5,6 L19,6 C20.1045695,6 21,6.8954305 21,8 L21,12.0829584 Z M18.1444251,7.83964668 L12,11.1481833 L5.85557487,7.83964668 C5.4908718,7.6432681 5.03602525,7.77972206 4.83964668,8.14442513 C4.6432681,8.5091282 4.77972206,8.96397475 5.14442513,9.16035332 L11.6444251,12.6603533 C11.8664074,12.7798822 12.1335926,12.7798822 12.3555749,12.6603533 L18.8555749,9.16035332 C19.2202779,8.96397475 19.3567319,8.5091282 19.1603533,8.14442513 C18.9639747,7.77972206 18.5091282,7.6432681 18.1444251,7.83964668 Z" fill="#000000" />
                                                            <circle fill="#000000" opacity="0.3" cx="19.5" cy="17.5" r="2.5" />
                                                        </g>
                                                    </svg>
                                                    <!--end::Svg Icon-->
                                                </span>
                                            </span>
                                            <span class="navi-text text-muted text-hover-primary">{{ Auth::user()->email }}</span>
                                        </span>
                                    </a>
                                    <a href="{{ url('/logout') }} "class="btn btn-sm btn-light-primary font-weight-bolder py-2 px-5">Sign Out</a>
                                    <!-- <form class="form-ad" action="{{ route('logout') }}" method="post" >
                                        @csrf
                                        <button type="submit" href="" class="btn btn-sm btn-light-primary font-weight-bolder py-2 px-5">Sign Out</button>
                                    </form> -->

                                </div>
                            </div>
                        </div>
                        <!--end::Header-->
                        <!--begin::Nav-->
                        <div class="navi navi-spacer-x-0 p-0">
                            <!--begin::Item-->
                            <a href="custom/apps/user/profile-1/personal-information.html" class="navi-item">
                                <div class="navi-link">
                                    <div class="symbol symbol-40 bg-light mr-3">
                                        <div class="symbol-label">
                                            <span class="svg-icon svg-icon-md svg-icon-success">
                                                <!--begin::Svg Icon | path:assets/media/svg/icons/General/Notification2.svg-->
                                                <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
                                                    <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                                        <rect x="0" y="0" width="24" height="24" />
                                                        <path d="M13.2070325,4 C13.0721672,4.47683179 13,4.97998812 13,5.5 C13,8.53756612 15.4624339,11 18.5,11 C19.0200119,11 19.5231682,10.9278328 20,10.7929675 L20,17 C20,18.6568542 18.6568542,20 17,20 L7,20 C5.34314575,20 4,18.6568542 4,17 L4,7 C4,5.34314575 5.34314575,4 7,4 L13.2070325,4 Z" fill="#000000" />
                                                        <circle fill="#000000" opacity="0.3" cx="18.5" cy="5.5" r="2.5" />
                                                    </g>
                                                </svg>
                                                <!--end::Svg Icon-->
                                            </span>
                                        </div>
                                    </div>
                                    <div class="navi-text">
                                        <div class="font-weight-bold">My Profile</div>
                                        <div class="text-muted">Account settings and more
                                        <span class="label label-light-danger label-inline font-weight-bold">update</span></div>
                                    </div>
                                </div>
                            </a>
                            <!--end:Item-->
                        </div>
                        <!--end::Nav-->
                    </div>
                    <!--end::Tabs-->
                </div>
                <!--end::Header-->
            </form>
        </div>
        <!--end::Dropdown-->
    </div>
</div>
