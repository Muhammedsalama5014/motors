<section class="elgazal-mainmenu-area">
    <div class="container">
        <div class="row">
            <div class="col-lg-9">
                <div class="mainmenu">
                    <nav>
                        <ul id="elgazal_navigation">
                            <li class="active"><a href="{{route('home')}}">home</a></li>
                            <li><a href="{{route('about')}}">about</a></li>
                            <li><a href="{{route('fleats')}}">Our Fleet</a></li>
                            <li><a href="{{route('deals')}}">Deals</a></li>
                            <li><a href="{{route('contact')}}">contact</a></li>
                        </ul>
                    </nav>
                </div>
            </div>
            <div class="col-lg-3 col-sm-12">
                <div class="main-search-right">
                    <!-- Responsive Menu Start -->
                    <div class="elgazal-responsive-menu"></div>
                    <!-- Responsive Menu Start -->
                    <!-- Search Box Start -->
                    <div class="search-box">
                          <form action="{{ route('car.search') }}" method="get">
                                    @csrf
                            <input type="search" placeholder="Search" name='name'>
                            <button type="submit"><i class="fa fa-search"></i></button>
                        </form>
                    </div>
                    <!-- Search Box End -->

                </div>
            </div>
        </div>
    </div>
</section>