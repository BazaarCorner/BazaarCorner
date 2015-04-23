<div class="row leftpanel">
    <ul class="nav nav-pills nav-stacked">
        <li class="parent text-capitalize">
            <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                <i class="fa  fa-user"></i>
                <span class="title">My Account</span>
            </a>
            <ul class="children">
                <li class="active">
                    <a href="{{route("profile")}}">
                        <span class="title text-capitalize">
                            Account Settings
                        </span>
                    </a>
                </li>
            </ul>
        </li>
        @if ($user->is_merchant == true || $user->is_reseller == true)
        <li class="parent text-uppercase">
            <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                <i class="fa fa-book"></i>
                <span class="title">My Catalog</span>
            </a>
            <ul class="children">
<!--                <li>
                    <a href="/member/catalog">
                        <span class="title text-capitalize">Dashboard</span>
                    </a>
                </li>-->
                <li>
                    <a href="/member/catalog/product">
                        <span class="title text-capitalize">Manage Products</span>
                    </a>
                </li>
                <li>
                    <a href="/member/catalog/brand">
                        <span class="title text-capitalize">Manage Brands</span>
                    </a>
                </li>
            </ul>
        </li>
        @endif
    </ul>
</div>