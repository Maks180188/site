<li class="nav-item">
    <a href="{{ route('vendors.index') }}"
       class="nav-link {{ Request::is('vendors*') ? 'active' : '' }}">
        <p>Vendors</p>
    </a>
</li>


<li class="nav-item">
    <a href="{{ route('medicines.index') }}"
       class="nav-link {{ Request::is('medicines*') ? 'active' : '' }}">
        <p>Medicines</p>
    </a>
</li>


<li class="nav-item">
    <a href="{{ route('substances.index') }}"
       class="nav-link {{ Request::is('substances*') ? 'active' : '' }}">
        <p>Substances</p>
    </a>
</li>


