     <!-- Page Sidebar Start-->
     <?php
     $about = \App\Models\About::find(1);
     $setting = \App\Models\Setting::find(1);
     ?>
        <div class="sidebar-wrapper">
            <div>
                <div class="logo-wrapper">
                    <a href="{{url('home')}}">
                        <img style="width:186px;height:86px" class="img-fluid for-light" src="{{ asset('assetssmart/images/header/logo.svg') }}" alt="">
                        <img class="img-fluid for-dark" src="{{ asset('assetssmart/images/header/logo.svg') }}" alt="">
                    </a>
                    <div class="back-btn"><i class="fa fa-angle-left"></i></div>
                </div>
                <div class="logo-icon-wrapper">
                    <a href="index.html">
                        <img class="img-fluid" src="assets/images/logo-icon.png" alt="">
                    </a>
                </div>
                <nav class="sidebar-main">
                    <div class="left-arrow" id="left-arrow"><i data-feather="arrow-left"></i></div>
                    <div id="sidebar-menu">
                        <ul class="sidebar-links" id="simple-bar">
                            <li class="back-btn">
                                <a href="#">
                                    <img class="img-fluid" src="assets/images/logo-icon.png" alt="">
                                </a>
                                <div class="mobile-back text-end">
                                    <span>Back</span>
                                    <i class="fa fa-angle-right ps-2" aria-hidden="true"></i>
                                </div>
                            </li>
                            <li style="margin-top: 40px" class="sidebar-list">
                                <a class="sidebar-link sidebar-title link-nav" href="{{route('About.edit' , $about)}}">
                                    <svg width="24" height="24" viewBox="0 0 24 24" fill="none"
                                         xmlns="http://www.w3.org/2000/svg">
                                        <g>
                                            <g>
                                                <path d="M7.30566 14.5743H16.8987" stroke="#130F26" stroke-width="1.5"
                                                      stroke-linecap="round" stroke-linejoin="round"></path>
                                                <path fill-rule="evenodd" clip-rule="evenodd"
                                                      d="M2.5 7.79836C2.5 5.35646 3.75 3.25932 6.122 2.77265C8.493 2.28503 10.295 2.4536 11.792 3.26122C13.29 4.06884 12.861 5.26122 14.4 6.13646C15.94 7.01265 18.417 5.69646 20.035 7.44217C21.729 9.26979 21.72 12.0755 21.72 13.8641C21.72 20.6603 17.913 21.1993 12.11 21.1993C6.307 21.1993 2.5 20.7288 2.5 13.8641V7.79836Z"
                                                      stroke="#130F26" stroke-width="1.5" stroke-linecap="round"
                                                      stroke-linejoin="round"></path>
                                            </g>
                                        </g>
                                    </svg>
                                    <span style=" font-family: 'Cairo', sans-serif !important;">About us</span></a>
                            </li>
                            <li style="" class="sidebar-list">
                                <a class="sidebar-link sidebar-title link-nav" href="{{route('Setting.edit' , $setting)}}">
                                    <svg width="24" height="24" viewBox="0 0 24 24" fill="none"
                                         xmlns="http://www.w3.org/2000/svg">
                                        <g>
                                            <g>
                                                <path d="M7.30566 14.5743H16.8987" stroke="#130F26" stroke-width="1.5"
                                                      stroke-linecap="round" stroke-linejoin="round"></path>
                                                <path fill-rule="evenodd" clip-rule="evenodd"
                                                      d="M2.5 7.79836C2.5 5.35646 3.75 3.25932 6.122 2.77265C8.493 2.28503 10.295 2.4536 11.792 3.26122C13.29 4.06884 12.861 5.26122 14.4 6.13646C15.94 7.01265 18.417 5.69646 20.035 7.44217C21.729 9.26979 21.72 12.0755 21.72 13.8641C21.72 20.6603 17.913 21.1993 12.11 21.1993C6.307 21.1993 2.5 20.7288 2.5 13.8641V7.79836Z"
                                                      stroke="#130F26" stroke-width="1.5" stroke-linecap="round"
                                                      stroke-linejoin="round"></path>
                                            </g>
                                        </g>
                                    </svg>
                                    <span style=" font-family: 'Cairo', sans-serif !important;">Site Data</span></a>
                            </li>




                            <li class="sidebar-list">
                                <a class="sidebar-link sidebar-title link-nav" href="{{route('Brands.index')}}">
                                    <svg width="24" height="24" viewBox="0 0 24 24" fill="none"
                                         xmlns="http://www.w3.org/2000/svg">
                                        <g>
                                            <g>
                                                <path d="M7.30566 14.5743H16.8987" stroke="#130F26" stroke-width="1.5"
                                                      stroke-linecap="round" stroke-linejoin="round"></path>
                                                <path fill-rule="evenodd" clip-rule="evenodd"
                                                      d="M2.5 7.79836C2.5 5.35646 3.75 3.25932 6.122 2.77265C8.493 2.28503 10.295 2.4536 11.792 3.26122C13.29 4.06884 12.861 5.26122 14.4 6.13646C15.94 7.01265 18.417 5.69646 20.035 7.44217C21.729 9.26979 21.72 12.0755 21.72 13.8641C21.72 20.6603 17.913 21.1993 12.11 21.1993C6.307 21.1993 2.5 20.7288 2.5 13.8641V7.79836Z"
                                                      stroke="#130F26" stroke-width="1.5" stroke-linecap="round"
                                                      stroke-linejoin="round"></path>
                                            </g>
                                        </g>
                                    </svg>
                                    <span style=" font-family: 'Cairo', sans-serif !important;">All Brands</span></a>
                            </li>
{{-- sssssssssssssssssssssssssssssssssss --}}
{{------------

                            <li class="sidebar-list">
                                <a class="sidebar-link sidebar-title link-nav" href="{{route('Branches.index')}}">
                                    <svg width="24" height="24" viewBox="0 0 24 24" fill="none"
                                         xmlns="http://www.w3.org/2000/svg">
                                        <g>
                                            <g>
                                                <path d="M7.30566 14.5743H16.8987" stroke="#130F26" stroke-width="1.5"
                                                      stroke-linecap="round" stroke-linejoin="round"></path>
                                                <path fill-rule="evenodd" clip-rule="evenodd"
                                                      d="M2.5 7.79836C2.5 5.35646 3.75 3.25932 6.122 2.77265C8.493 2.28503 10.295 2.4536 11.792 3.26122C13.29 4.06884 12.861 5.26122 14.4 6.13646C15.94 7.01265 18.417 5.69646 20.035 7.44217C21.729 9.26979 21.72 12.0755 21.72 13.8641C21.72 20.6603 17.913 21.1993 12.11 21.1993C6.307 21.1993 2.5 20.7288 2.5 13.8641V7.79836Z"
                                                      stroke="#130F26" stroke-width="1.5" stroke-linecap="round"
                                                      stroke-linejoin="round"></path>
                                            </g>
                                        </g>
                                    </svg>
                                    <span style=" font-family: 'Cairo', sans-serif !important;">All Branches</span></a>
                            </li>

------------}}
{{-- eeeeeeeeeeeeeeeeeeeeeeeeee --}}


{{-- Discount --}}

{{-------------

                      <li class="sidebar-list">
                                <a class="sidebar-link sidebar-title link-nav" href="{{route('Discounts.index')}}">
                                    <svg width="24" height="24" viewBox="0 0 24 24" fill="none"
                                         xmlns="http://www.w3.org/2000/svg">
                                        <g>
                                            <g>
                                                <path d="M7.30566 14.5743H16.8987" stroke="#130F26" stroke-width="1.5"
                                                      stroke-linecap="round" stroke-linejoin="round"></path>
                                                <path fill-rule="evenodd" clip-rule="evenodd"
                                                      d="M2.5 7.79836C2.5 5.35646 3.75 3.25932 6.122 2.77265C8.493 2.28503 10.295 2.4536 11.792 3.26122C13.29 4.06884 12.861 5.26122 14.4 6.13646C15.94 7.01265 18.417 5.69646 20.035 7.44217C21.729 9.26979 21.72 12.0755 21.72 13.8641C21.72 20.6603 17.913 21.1993 12.11 21.1993C6.307 21.1993 2.5 20.7288 2.5 13.8641V7.79836Z"
                                                      stroke="#130F26" stroke-width="1.5" stroke-linecap="round"
                                                      stroke-linejoin="round"></path>
                                            </g>
                                        </g>
                                    </svg>
                                    <span style=" font-family: 'Cairo', sans-serif !important;">All Discounts</span></a>
                            </li>


--------}}

                            {{-- Discount --}}


                            <li class="sidebar-list">
                                <a class="sidebar-link sidebar-title link-nav" href="{{route('Cats.index')}}">
                                    <svg width="24" height="24" viewBox="0 0 24 24" fill="none"
                                         xmlns="http://www.w3.org/2000/svg">
                                        <g>
                                            <g>
                                                <path d="M7.30566 14.5743H16.8987" stroke="#130F26" stroke-width="1.5"
                                                      stroke-linecap="round" stroke-linejoin="round"></path>
                                                <path fill-rule="evenodd" clip-rule="evenodd"
                                                      d="M2.5 7.79836C2.5 5.35646 3.75 3.25932 6.122 2.77265C8.493 2.28503 10.295 2.4536 11.792 3.26122C13.29 4.06884 12.861 5.26122 14.4 6.13646C15.94 7.01265 18.417 5.69646 20.035 7.44217C21.729 9.26979 21.72 12.0755 21.72 13.8641C21.72 20.6603 17.913 21.1993 12.11 21.1993C6.307 21.1993 2.5 20.7288 2.5 13.8641V7.79836Z"
                                                      stroke="#130F26" stroke-width="1.5" stroke-linecap="round"
                                                      stroke-linejoin="round"></path>
                                            </g>
                                        </g>
                                    </svg>
                                    <span style=" font-family: 'Cairo', sans-serif !important;">All Categories</span></a>
                            </li>
                            <li class="sidebar-list">
                                <a class="sidebar-link sidebar-title link-nav" href="{{route('Models.index')}}">
                                    <svg width="24" height="24" viewBox="0 0 24 24" fill="none"
                                         xmlns="http://www.w3.org/2000/svg">
                                        <g>
                                            <g>
                                                <path d="M7.30566 14.5743H16.8987" stroke="#130F26" stroke-width="1.5"
                                                      stroke-linecap="round" stroke-linejoin="round"></path>
                                                <path fill-rule="evenodd" clip-rule="evenodd"
                                                      d="M2.5 7.79836C2.5 5.35646 3.75 3.25932 6.122 2.77265C8.493 2.28503 10.295 2.4536 11.792 3.26122C13.29 4.06884 12.861 5.26122 14.4 6.13646C15.94 7.01265 18.417 5.69646 20.035 7.44217C21.729 9.26979 21.72 12.0755 21.72 13.8641C21.72 20.6603 17.913 21.1993 12.11 21.1993C6.307 21.1993 2.5 20.7288 2.5 13.8641V7.79836Z"
                                                      stroke="#130F26" stroke-width="1.5" stroke-linecap="round"
                                                      stroke-linejoin="round"></path>
                                            </g>
                                        </g>
                                    </svg>
                                    <span style=" font-family: 'Cairo', sans-serif !important;">All Models</span></a>
                            </li>
                            <li class="sidebar-list">
                                <a class="sidebar-link sidebar-title link-nav" href="{{route('Cars.index')}}">
                                    <svg width="24" height="24" viewBox="0 0 24 24" fill="none"
                                         xmlns="http://www.w3.org/2000/svg">
                                        <g>
                                            <g>
                                                <path d="M7.30566 14.5743H16.8987" stroke="#130F26" stroke-width="1.5"
                                                      stroke-linecap="round" stroke-linejoin="round"></path>
                                                <path fill-rule="evenodd" clip-rule="evenodd"
                                                      d="M2.5 7.79836C2.5 5.35646 3.75 3.25932 6.122 2.77265C8.493 2.28503 10.295 2.4536 11.792 3.26122C13.29 4.06884 12.861 5.26122 14.4 6.13646C15.94 7.01265 18.417 5.69646 20.035 7.44217C21.729 9.26979 21.72 12.0755 21.72 13.8641C21.72 20.6603 17.913 21.1993 12.11 21.1993C6.307 21.1993 2.5 20.7288 2.5 13.8641V7.79836Z"
                                                      stroke="#130F26" stroke-width="1.5" stroke-linecap="round"
                                                      stroke-linejoin="round"></path>
                                            </g>
                                        </g>
                                    </svg>
                                    <span style=" font-family: 'Cairo', sans-serif !important;">All Cars</span></a>
                            </li>


                            {{--------
                            <li class="sidebar-list">
                                <a class="sidebar-link sidebar-title link-nav" href="#">
                                    <svg width="24" height="24" viewBox="0 0 24 24" fill="none"
                                         xmlns="http://www.w3.org/2000/svg">
                                        <g>
                                            <g>
                                                <path d="M7.30566 14.5743H16.8987" stroke="#130F26" stroke-width="1.5"
                                                      stroke-linecap="round" stroke-linejoin="round"></path>
                                                <path fill-rule="evenodd" clip-rule="evenodd"
                                                      d="M2.5 7.79836C2.5 5.35646 3.75 3.25932 6.122 2.77265C8.493 2.28503 10.295 2.4536 11.792 3.26122C13.29 4.06884 12.861 5.26122 14.4 6.13646C15.94 7.01265 18.417 5.69646 20.035 7.44217C21.729 9.26979 21.72 12.0755 21.72 13.8641C21.72 20.6603 17.913 21.1993 12.11 21.1993C6.307 21.1993 2.5 20.7288 2.5 13.8641V7.79836Z"
                                                      stroke="#130F26" stroke-width="1.5" stroke-linecap="round"
                                                      stroke-linejoin="round"></path>
                                            </g>
                                        </g>
                                    </svg>
                                    <span style=" font-family: 'Cairo', sans-serif !important;">All Offers</span></a>
                            </li>
                            ------}}
                        {{--     <li class="sidebar-list">
                                <a class="sidebar-link sidebar-title link-nav" href="#">
                                    <svg width="24" height="24" viewBox="0 0 24 24" fill="none"
                                         xmlns="http://www.w3.org/2000/svg">
                                        <g>
                                            <g>
                                                <path d="M7.30566 14.5743H16.8987" stroke="#130F26" stroke-width="1.5"
                                                      stroke-linecap="round" stroke-linejoin="round"></path>
                                                <path fill-rule="evenodd" clip-rule="evenodd"
                                                      d="M2.5 7.79836C2.5 5.35646 3.75 3.25932 6.122 2.77265C8.493 2.28503 10.295 2.4536 11.792 3.26122C13.29 4.06884 12.861 5.26122 14.4 6.13646C15.94 7.01265 18.417 5.69646 20.035 7.44217C21.729 9.26979 21.72 12.0755 21.72 13.8641C21.72 20.6603 17.913 21.1993 12.11 21.1993C6.307 21.1993 2.5 20.7288 2.5 13.8641V7.79836Z"
                                                      stroke="#130F26" stroke-width="1.5" stroke-linecap="round"
                                                      stroke-linejoin="round"></path>
                                            </g>
                                        </g>
                                    </svg>
                                    <span style=" font-family: 'Cairo', sans-serif !important;">All Users</span></a>
                            </li> --}}
                            <li class="sidebar-list">
                                <a class="sidebar-link sidebar-title link-nav" href="{{route("Admins.index")}}">
                                    <svg width="24" height="24" viewBox="0 0 24 24" fill="none"
                                         xmlns="http://www.w3.org/2000/svg">
                                        <g>
                                            <g>
                                                <path d="M7.30566 14.5743H16.8987" stroke="#130F26" stroke-width="1.5"
                                                      stroke-linecap="round" stroke-linejoin="round"></path>
                                                <path fill-rule="evenodd" clip-rule="evenodd"
                                                      d="M2.5 7.79836C2.5 5.35646 3.75 3.25932 6.122 2.77265C8.493 2.28503 10.295 2.4536 11.792 3.26122C13.29 4.06884 12.861 5.26122 14.4 6.13646C15.94 7.01265 18.417 5.69646 20.035 7.44217C21.729 9.26979 21.72 12.0755 21.72 13.8641C21.72 20.6603 17.913 21.1993 12.11 21.1993C6.307 21.1993 2.5 20.7288 2.5 13.8641V7.79836Z"
                                                      stroke="#130F26" stroke-width="1.5" stroke-linecap="round"
                                                      stroke-linejoin="round"></path>
                                            </g>
                                        </g>
                                    </svg>
                                    <span style=" font-family: 'Cairo', sans-serif !important;">All Admins</span></a>
                            </li>


{{--------
                            <li class="sidebar-list">
                                <a class="sidebar-link sidebar-title link-nav" href="{{route('Brands.index')}}">
                                    <svg width="24" height="24" viewBox="0 0 24 24" fill="none"
                                         xmlns="http://www.w3.org/2000/svg">
                                        <g>
                                            <g>
                                                <path d="M7.30566 14.5743H16.8987" stroke="#130F26" stroke-width="1.5"
                                                      stroke-linecap="round" stroke-linejoin="round"></path>
                                                <path fill-rule="evenodd" clip-rule="evenodd"
                                                      d="M2.5 7.79836C2.5 5.35646 3.75 3.25932 6.122 2.77265C8.493 2.28503 10.295 2.4536 11.792 3.26122C13.29 4.06884 12.861 5.26122 14.4 6.13646C15.94 7.01265 18.417 5.69646 20.035 7.44217C21.729 9.26979 21.72 12.0755 21.72 13.8641C21.72 20.6603 17.913 21.1993 12.11 21.1993C6.307 21.1993 2.5 20.7288 2.5 13.8641V7.79836Z"
                                                      stroke="#130F26" stroke-width="1.5" stroke-linecap="round"
                                                      stroke-linejoin="round"></path>
                                            </g>
                                        </g>
                                    </svg>
                                    <span style=" font-family: 'Cairo', sans-serif !important;">All Brands</span></a>
                            </li>

------------}}
                            <li class="sidebar-list">
                                <a class="sidebar-link sidebar-title link-nav" href="{{route('request_car.index')}}">
                                    <svg width="24" height="24" viewBox="0 0 24 24" fill="none"
                                         xmlns="http://www.w3.org/2000/svg">
                                        <g>
                                            <g>
                                                <path fill-rule="evenodd" clip-rule="evenodd"
                                                      d="M21.4399 13.9939C18.7789 13.9939 18.7789 9.87952 21.4399 9.87952C21.4399 5.11236 21.4399 3.41089 12.0449 3.41089C2.6499 3.41089 2.6499 5.11236 2.6499 9.87952C5.3109 9.87952 5.3109 13.9939 2.6499 13.9939C2.6499 18.762 2.6499 20.4635 12.0449 20.4635C21.4399 20.4635 21.4399 18.762 21.4399 13.9939Z"
                                                      stroke="#130F26" stroke-width="1.5" stroke-linecap="round"
                                                      stroke-linejoin="round"></path>
                                                <path fill-rule="evenodd" clip-rule="evenodd"
                                                      d="M12.0449 9.17114C11.3619 9.17114 11.2969 10.2606 10.8909 10.6462C10.4839 11.0308 9.22087 10.5912 9.04487 11.2743C8.86987 11.9583 10.0069 12.1904 10.1479 12.7768C10.2879 13.3632 9.59387 14.1875 10.1869 14.5986C10.7809 15.0079 11.4199 14.0804 12.0449 14.0804C12.6699 14.0804 13.3089 15.0079 13.9029 14.5986C14.4969 14.1875 13.8019 13.3632 13.9419 12.7768C14.0829 12.1904 15.2199 11.9583 15.0449 11.2743C14.8689 10.5912 13.6059 11.0308 13.1989 10.6462C12.7929 10.2606 12.7279 9.17114 12.0449 9.17114Z"
                                                      stroke="#130F26" stroke-width="1.5" stroke-linecap="round"
                                                      stroke-linejoin="round"></path>
                                            </g>
                                        </g>
                                    </svg>
                                    <span style=" font-family: 'Cairo', sans-serif !important;">السيارات التي تم طلبها</span></a>
                            </li>
                            <li class="sidebar-list">
                                <a class="sidebar-link sidebar-title link-nav" href="{{route('contact.request')}}">
                                    <svg width="24" height="24" viewBox="0 0 24 24" fill="none"
                                         xmlns="http://www.w3.org/2000/svg">
                                        <g>
                                            <g>
                                                <path fill-rule="evenodd" clip-rule="evenodd"
                                                      d="M21.4399 13.9939C18.7789 13.9939 18.7789 9.87952 21.4399 9.87952C21.4399 5.11236 21.4399 3.41089 12.0449 3.41089C2.6499 3.41089 2.6499 5.11236 2.6499 9.87952C5.3109 9.87952 5.3109 13.9939 2.6499 13.9939C2.6499 18.762 2.6499 20.4635 12.0449 20.4635C21.4399 20.4635 21.4399 18.762 21.4399 13.9939Z"
                                                      stroke="#130F26" stroke-width="1.5" stroke-linecap="round"
                                                      stroke-linejoin="round"></path>
                                                <path fill-rule="evenodd" clip-rule="evenodd"
                                                      d="M12.0449 9.17114C11.3619 9.17114 11.2969 10.2606 10.8909 10.6462C10.4839 11.0308 9.22087 10.5912 9.04487 11.2743C8.86987 11.9583 10.0069 12.1904 10.1479 12.7768C10.2879 13.3632 9.59387 14.1875 10.1869 14.5986C10.7809 15.0079 11.4199 14.0804 12.0449 14.0804C12.6699 14.0804 13.3089 15.0079 13.9029 14.5986C14.4969 14.1875 13.8019 13.3632 13.9419 12.7768C14.0829 12.1904 15.2199 11.9583 15.0449 11.2743C14.8689 10.5912 13.6059 11.0308 13.1989 10.6462C12.7929 10.2606 12.7279 9.17114 12.0449 9.17114Z"
                                                      stroke="#130F26" stroke-width="1.5" stroke-linecap="round"
                                                      stroke-linejoin="round"></path>
                                            </g>
                                        </g>
                                    </svg>
                                    <span style=" font-family: 'Cairo', sans-serif !important;">طلبات التواصل</span></a>
                            </li>






                            {{-- xxxxxxxxxxxxxxxxxxxxxxxxxx
                              <li class="sidebar-list">
                                <a class="sidebar-link sidebar-title link-nav" href="{{route('contact.request')}}">
                                    <svg width="24" height="24" viewBox="0 0 24 24" fill="none"
                                         xmlns="http://www.w3.org/2000/svg">
                                        <g>
                                            <g>
                                                <path fill-rule="evenodd" clip-rule="evenodd"
                                                      d="M21.4399 13.9939C18.7789 13.9939 18.7789 9.87952 21.4399 9.87952C21.4399 5.11236 21.4399 3.41089 12.0449 3.41089C2.6499 3.41089 2.6499 5.11236 2.6499 9.87952C5.3109 9.87952 5.3109 13.9939 2.6499 13.9939C2.6499 18.762 2.6499 20.4635 12.0449 20.4635C21.4399 20.4635 21.4399 18.762 21.4399 13.9939Z"
                                                      stroke="#130F26" stroke-width="1.5" stroke-linecap="round"
                                                      stroke-linejoin="round"></path>
                                                <path fill-rule="evenodd" clip-rule="evenodd"
                                                      d="M12.0449 9.17114C11.3619 9.17114 11.2969 10.2606 10.8909 10.6462C10.4839 11.0308 9.22087 10.5912 9.04487 11.2743C8.86987 11.9583 10.0069 12.1904 10.1479 12.7768C10.2879 13.3632 9.59387 14.1875 10.1869 14.5986C10.7809 15.0079 11.4199 14.0804 12.0449 14.0804C12.6699 14.0804 13.3089 15.0079 13.9029 14.5986C14.4969 14.1875 13.8019 13.3632 13.9419 12.7768C14.0829 12.1904 15.2199 11.9583 15.0449 11.2743C14.8689 10.5912 13.6059 11.0308 13.1989 10.6462C12.7929 10.2606 12.7279 9.17114 12.0449 9.17114Z"
                                                      stroke="#130F26" stroke-width="1.5" stroke-linecap="round"
                                                      stroke-linejoin="round"></path>
                                            </g>
                                        </g>
                                    </svg>
                                    <span style=" font-family: 'Cairo', sans-serif !important;">طلبات التواصل </span></a>
                            </li>

--}}
                            {{--  xxxxxxxxxxxxxxxxxxxxxxxxxxxx
                            <li class="sidebar-list">
                                <a class="sidebar-link sidebar-title link-nav" href="{{route("Adminsetting.index")}}">
                                    <svg width="24" height="24" viewBox="0 0 24 24" fill="none"
                                         xmlns="http://www.w3.org/2000/svg">
                                        <g>
                                            <g>
                                                <path d="M11.1437 17.8829H4.67114" stroke="#130F26" stroke-width="1.5"
                                                      stroke-linecap="round" stroke-linejoin="round"></path>
                                                <path fill-rule="evenodd" clip-rule="evenodd"
                                                      d="M15.205 17.8839C15.205 19.9257 15.8859 20.6057 17.9267 20.6057C19.9676 20.6057 20.6485 19.9257 20.6485 17.8839C20.6485 15.8421 19.9676 15.1621 17.9267 15.1621C15.8859 15.1621 15.205 15.8421 15.205 17.8839Z"
                                                      stroke="#130F26" stroke-width="1.5" stroke-linecap="round"
                                                      stroke-linejoin="round"></path>
                                                <path d="M14.1765 7.39439H20.6481" stroke="#130F26" stroke-width="1.5"
                                                      stroke-linecap="round" stroke-linejoin="round"></path>
                                                <path fill-rule="evenodd" clip-rule="evenodd"
                                                      d="M10.1153 7.39293C10.1153 5.35204 9.43436 4.67114 7.39346 4.67114C5.35167 4.67114 4.67078 5.35204 4.67078 7.39293C4.67078 9.43472 5.35167 10.1147 7.39346 10.1147C9.43436 10.1147 10.1153 9.43472 10.1153 7.39293Z"
                                                      stroke="#130F26" stroke-width="1.5" stroke-linecap="round"
                                                      stroke-linejoin="round"></path>
                                            </g>
                                        </g>
                                    </svg>
                                    <span style=" font-family: 'Cairo', sans-serif !important;">الأعدادات</span></a>
                            </li>
                            ---}}
                        </ul>
                        <div class="sidebar-img-section">
                            <div class="sidebar-img-content">
                                <h4 style=" font-family: 'Cairo', sans-serif !important;">هل تحتاج المساعده؟</h4>
                                <a class="txt" href="mailto:">Raise ticket at ""</a>
                            </div>
                        </div>
                    </div>
                    <div class="right-arrow" id="right-arrow"><i data-feather="arrow-right"></i></div>
                </nav>
            </div>
        </div>
        <!-- Page Sidebar Ends-->
