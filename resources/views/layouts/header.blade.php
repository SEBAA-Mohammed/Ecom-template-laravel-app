<header id="header" class="header-area style-01 layout-03">
    <div class="header-top bg-main hidden-xs">
        <div class="container">
            <div class="top-bar left">
                <ul class="horizontal-menu">
                    <li><a href="#"><i class="fa fa-envelope" aria-hidden="true"></i>mohammedsebaa2610@gmail.com</a>
                    </li>
                    <li><a href="#">Free Shipping for all Order of $99</a></li>
                </ul>
            </div>
            <div class="top-bar right">
                <ul class="social-list">
                    <li><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
                    <li><a href="https://www.facebook.com/share/WT7Exq79uhoqkBJM/?mibextid=qi2Omg" target="_blank"><i
                                class="fa fa-facebook" aria-hidden="true"></i></a></li>
                    <li><a href="#"><i class="fa fa-pinterest" aria-hidden="true"></i></a></li>
                </ul>
                <ul class="horizontal-menu">

                    <li><a href="/login" class="login-link"><i class="biolife-icon icon-login"></i>Login/Register</a>
                    </li>
                </ul>
                <!-- <ul class="horizontal-menu">
                    @auth
                            <form action="{{ route('home') }}" method="POST">
                                @csrf
                                <li>
                                    <button class="login-link">Logout</button>
                                </li>
                            </form>
@else
    <li><a href="/login" class="login-link"><i class="biolife-icon icon-login"></i>Login/Register</a>
                            </li>
                    @endauth
                </ul> -->
            </div>
        </div>
    </div>
    <div class="header-middle biolife-sticky-object ">
        <div class="container">
            <div class="row">
                <div class="col-lg-3 col-md-2 col-md-6 col-xs-6">
                    <a href="{{ route('home') }}" class="biolife-logo"><img src="assets/images/organic-3.png"
                            alt="biolife logo" width="135" height="34"></a>
                </div>
                <div class="col-lg-6 col-md-7 hidden-sm hidden-xs">
                    <div class="primary-menu">
                        <ul class="menu biolife-menu clone-main-menu clone-primary-menu" id="primary-menu"
                            data-menuname="main menu">
                            <li class="menu-item"><a href="/">Home</a></li>

                            <li class="menu-item"><a href="/produits">Products</a></li>
                            <li class="menu-item"><a href="/contact">Contact</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-3 col-md-3 col-md-6 col-xs-6">
                    <div class="biolife-cart-info">
                        <div class="mobile-search">
                            <a href="javascript:void(0)" class="open-searchbox"><i
                                    class="biolife-icon icon-search"></i></a>
                            <div class="mobile-search-content">
                                <form action="#" class="form-search" name="mobile-seacrh" method="get">
                                    <a href="#" class="btn-close"><span
                                            class="biolife-icon icon-close-menu"></span></a>
                                    <input type="text" name="s" class="input-text" value=""
                                        placeholder="Search here...">
                                    <select name="category">
                                        <option value="-1" selected>All Categories</option>
                                        <option value="vegetables">Vegetables</option>
                                        <option value="fresh_berries">Fresh Berries</option>
                                        <option value="ocean_foods">Ocean Foods</option>
                                        <option value="butter_eggs">Butter & Eggs</option>
                                        <option value="fastfood">Fastfood</option>
                                        <option value="fresh_meat">Fresh Meat</option>
                                        <option value="fresh_onion">Fresh Onion</option>
                                        <option value="papaya_crisps">Papaya & Crisps</option>
                                        <option value="oatmeal">Oatmeal</option>
                                    </select>
                                    <button type="submit" class="btn-submit">go</button>
                                </form>
                            </div>
                        </div>

                        <livewire:carte />

                        <div class="mobile-menu-toggle">
                            <a class="btn-toggle" data-object="open-mobile-menu" href="javascript:void(0)">
                                <span></span>
                                <span></span>
                                <span></span>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="header-bottom hidden-sm hidden-xs">
        <div class="container">
            <div class="row">
                <div class="col-lg-3 col-md-4">
                    <div class="vertical-menu vertical-category-block">
                        <div class="block-title">
                            <span class="menu-icon">
                                <span class="line-1"></span>
                                <span class="line-2"></span>
                                <span class="line-3"></span>
                            </span>
                            <span class="menu-title">All departments</span>
                            <span class="angle" data-tgleclass="fa fa-caret-down"><i class="fa fa-caret-up"
                                    aria-hidden="true"></i></span>
                        </div>
                        <div class="wrap-menu">
                            <ul class="menu clone-main-menu">
                                @foreach ($familles as $famille)
                                    @if ($famille->sousFamilles->isNotEmpty())
                                        <li class="menu-item menu-item-has-children has-megamenu">
                                            <a href="#" class="menu-name"
                                                data-title="{{ $famille->libelle }}"><i
                                                    class="biolife-icon icon-fruits"></i>{{ $famille->libelle }}</a>
                                            <div class="wrap-megamenu lg-width-900 md-width-640">
                                                <div class="mega-content">
                                                    <div class="row">
                                                        <div
                                                            class="col-lg-3 col-md-4 col-sm-12 xs-margin-bottom-25 md-margin-bottom-0">
                                                            <div class="wrap-custom-menu vertical-menu">
                                                                <ul class="menu">

                                                                    @foreach ($famille->sousFamilles as $sousFamille)
                                                                        <li><a
                                                                                href="#">{{ $sousFamille->libelle }}</a>
                                                                        </li>
                                                                    @endforeach
                                                                </ul>
                                                            </div>
                                                        </div>
                                                        <div
                                                            class="col-lg-6 col-md-4 col-sm-12 lg-padding-left-50 xs-margin-bottom-25 md-margin-bottom-0">
                                                            <div class="biolife-products-block max-width-270">
                                                                <img src="{{ $famille->image }}" width="161"
                                                                    height="136" alt="organic">

                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="row">
                                                        <div class="col-lg-12 col-md-12 col-sm-12 md-margin-top-9">
                                                            <div class="biolife-brand">
                                                                <ul class="brands">
                                                                    <li><a href="#"><img
                                                                                src="assets/images/megamenu/brand-organic.png"
                                                                                width="161" height="136"
                                                                                alt="organic"></a></li>
                                                                    <li><a href="#"><img
                                                                                src="assets/images/megamenu/brand-explore.png"
                                                                                width="160" height="136"
                                                                                alt="explore"></a></li>
                                                                    <li><a href="#"><img
                                                                                src="assets/images/megamenu/brand-organic-2.png"
                                                                                width="99" height="136"
                                                                                alt="organic 2"></a></li>
                                                                    <li><a href="#"><img
                                                                                src="assets/images/megamenu/brand-eco-teas.png"
                                                                                width="164" height="136"
                                                                                alt="eco teas"></a></li>
                                                                </ul>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </li>
                                    @else
                                        <li class="menu-item"><a href="#" class="menu-title"><i
                                                    class="biolife-icon icon-fresh-juice"></i>{{ $famille->libelle }}</a>
                                        </li>
                                    @endif
                                @endforeach


                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-lg-9 col-md-8 padding-top-2px">
                    <div class="header-search-bar layout-01">
                        <form action="#" class="form-search" name="desktop-seacrh" method="get">
                            <input type="text" name="s" class="input-text" value=""
                                placeholder="Search here...">
                            <button type="submit" class="btn-submit"><i
                                    class="biolife-icon icon-search"></i></button>
                        </form>
                    </div>
                    <div class="live-info">
                        <p class="telephone"><i class="fa fa-phone" aria-hidden="true"></i><b
                                class="phone-number">(+212) 762 416 046</b></p>
                        <p class="working-time">Mon-Fri: 8:30am-7:30pm <br> Sat-Sun: 9:30am-4:30pm</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</header>
