<header>
<nav class="navbar navbar-expand-xl navbar-dark fixed-top">
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#my-nav">
                <svg class="ham hamRotate ham1" viewBox="27 13 70 70" width="40" onclick="this.classList.toggle('active')">
                    <path
                          class="line top"
                          d="m 30,33 h 40 c 0,0 9.044436,-0.654587 9.044436,-8.508902 0,-7.854315 -8.024349,-11.958003 -14.89975,-10.85914 -6.875401,1.098863 -13.637059,4.171617 -13.637059,16.368042 v 40" />
                    <path
                          class="line middle"
                          d="m 30,50 h 40" />
                    <path
                          class="line bottom"
                          d="m 30,67 h 40 c 12.796276,0 15.357889,-11.717785 15.357889,-26.851538 0,-15.133752 -4.786586,-27.274118 -16.667516,-27.274118 -11.88093,0 -18.499247,6.994427 -18.435284,17.125656 l 0.252538,40" />
                </svg>
            </button>
            <a href="{{route('home')}}" class="navbar-brand ml-auto">
                <img src="/img/svg/header_logo.svg" alt="">
            </a>
            <div class="navigationsButtons d-sm-flex d-flex ml-auto">
                <a href="#" class="mapPosition">
                    <img src="/img/svg/header_markerIcon.svg" alt="">
                </a>
                <a href="#" class="orderCounter">
                    <img src="/img/svg/header_orderIcon.svg" alt="">
                </a>
                <a href="#" class="search">
                    <img src="/img/svg/header_searchIcon.svg" alt="">
                </a>
            </div>
            <div class="collapse navbar-collapse justify-content-end" id="my-nav">
                <ul class="navbar-nav text-left">
                    <li class="nav-item listElement1 dropdown navbar-text">
                        <a href="{{ route('panels') }}" class="nav-link dropdown-toggle" id="navbardrop" data-toggle="dropdown">ПРОДУКЦИЯ</a>
                        <div class="dropdown-menu">
                            <a href="{{ route('panels') }}" class="dropdown-item listElement1Dropdown_element1 listElement1Dropdown_element">Панели</a>
                            <a href="{{ route('product', ['panno','']) }}" class="dropdown-item listElement1Dropdown_element2 listElement1Dropdown_element">Панно</a> -->
                        </div>
                    </li>
                    <li class="nav-item listElement2 dropdown navbar-text">
                        <a href="#" class="nav-link dropdown-toggle" id="navbardrop2" data-toggle="dropdown">КОЛЛЕКЦИИ</a>
                        <div class="dropdown-menu dropDownMenu2_page3">
                            <a href="{{ route('colection', ['basic']) }}" class="dropdown-item listElement2Dropdown_element1 listElement1Dropdown_element">
                                <img src="/img/jpg/nav/dropdownItem1_page3.jpg" alt="">
                                КЛАССИКА
                            </a>
                            <a href="{{ route('colection', ['italy']) }}" class="dropdown-item listElement2Dropdown_element2 listElement1Dropdown_element">
                                <img src="/img/jpg/nav/dropdownItem2_page3.jpg" alt="">
                                ИТАЛИЯ
                            </a>
                            <a href="{{ route('colection', ['norge']) }}" class="dropdown-item listElement2Dropdown_element3 listElement1Dropdown_element">
                                <img src="/img/jpg/nav/dropdownItem3_page3.jpg" alt="">
                                НОРВЕГИЯ
                            </a>
                            <a href="{{ route('colection', ['cuba']) }}" class="dropdown-item listElement2Dropdown_element4 listElement1Dropdown_element">
                                <img src="/img/jpg/nav/dropdownItem4_page3.jpg" alt="">
                                КУБА
                            </a>
                        </div>
                    </li>
                    <li class="nav-item listElement3 navbar-text">
                        <a href="{{route('cases')}}" class="nav-link">ГОТОВЫЕ РЕШЕНИЯ</a>
                    </li>
                    <li class="nav-item listElement4 navbar-text">
                        <a href="{{ route('assembling') }}" class="nav-link">МОНТАЖ</a>
                    </li>
                    <li class="nav-item listElement5 navbar-text">
                        <a href="{{ route('catalog') }}" class="nav-link">КАТАЛОГ</a>
                    </li>
                    <li class="nav-item listElement6 text-center navbar-text">
                        <a href="tel:+73512201022" class="nav-link">
                            <img src="/img/svg/header_phoneIcon.svg" alt="">
                            +7(351)220-10-22
                        </a>
                    </li>
                    <li class="nav-item listElement7">
                        <a href="#" class="nav-link">
                            <img src="/img/svg/header_orderIcon.svg" alt="">
                        </a>
                    </li>
                    <li class="nav-item listElement8 text-center" style="display: flex; margin: 0px auto;">
                        <!-- <a href="#" class="nav-link">
                            <img src="/img/svg/header_facebookIcon.svg" alt="">
                        </a>
                        <a href="#" class="nav-link">
                            <img src="/img/svg/header_youtubeIcon.svg" alt="">
                        </a> -->
                        <a href="https://www.instagram.com/plydex174" class="nav-link">
                            <img src="/img/svg/header_instaIcon.svg" alt="">
                        </a>
                    </li>
                    <!-- <li class="nav-item listElement9">
                        <a href="#" class="nav-link">
                            <img src="/img/svg/header_searchIcon.svg" alt="">
                        </a>
                    </li> -->
                    <!-- <li class="nav-item listElement10 dropdown navbar-text">
                        <a href="#" class="nav-link dropdown-toggle" id="navbardrop3" data-toggle="dropdown">RU</a>
                        <div class="dropdown-menu dropdown-menu-right text-center">
                            <a href="#" class="dropdown-item listElement1Dropdown_element1 listElement1Dropdown_element">PL</a>
                            <a href="#" class="dropdown-item listElement1Dropdown_element2 listElement1Dropdown_element">EN</a>
                            <a href="#" class="dropdown-item listElement1Dropdown_element3 listElement1Dropdown_element">UA</a>
                            <a href="#" class="dropdown-item listElement1Dropdown_element4 listElement1Dropdown_element">RO</a>
                            <a href="#" class="dropdown-item listElement1Dropdown_element5 listElement1Dropdown_element">DE</a>
                            <a href="#" class="dropdown-item listElement1Dropdown_element6 listElement1Dropdown_element">SE</a>
                        </div>
                    </li> -->
                </ul>
            </div>
        </nav>
</header>