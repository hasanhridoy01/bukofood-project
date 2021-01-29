<!-- Sidebar -->
<div class="sidebar" id="sidebar">
    <div class="sidebar-inner slimscroll">
        <div id="sidebar-menu" class="sidebar-menu">
            <ul>
                <li class="menu-title">
                    <span>Main</span>
                </li>
                <li class="">
                    <a href="{{ route('home') }}"><i class="fe fe-home"></i> <span>Dashboard</span></a>
                </li>

                <li class="submenu">
                    <a href="#"><i class="fe fe-document"></i> <span> All Products</span> <span class="menu-arrow"></span></a>
                   <ul style="display: none;">
                        <li><a href="{{ route('product-add.index') }}">Products</a></li>
                        <li><a href="{{ route('category-add.index') }}">Categoris</a></li>
                        <li><a href="{{ route('tag-add.index') }}">Tags</a></li>
                    </ul>
                </li>

                <li class="submenu">
                    <a href="#"><i class="fe fe-document"></i> <span> Settings</span> <span class="menu-arrow"></span></a>
                   <ul style="display: none;">
                        <li><a href="{{ route('sldier.add') }}">Slider</a></li>
                        <li><a href="{{ route('member.add') }}">Member</a></li>
                        <li><a href="{{ route('patner.index') }}">Patner</a></li>
                        <li><a href="{{ route('social.add') }}">Social</a></li>
                        <li><a href="{{ route('copy.index') }}">CopyRight</a></li>
                    </ul>
                </li>

            </ul>
        </div>
    </div>
</div>
<!-- /Sidebar -->
