<li class="nav-item {{ Request::is('*') ? 'active' : '' }}">
    <a class="nav-link" href="{{ route('dashboard.index') }}">
        <i class="nav-icon icon-cursor"></i>
        <span>Dashboard</span>
    </a>
</li>
<li class="nav-item {{ Request::is('customers*') ? 'active' : '' }}">
    <a class="nav-link" href="{{ route('customers.index') }}">
        <i class="nav-icon icon-cursor"></i>
        <span>Customers</span>
    </a>
</li>
<li class="nav-item {{ Request::is('produks*') ? 'active' : '' }}">
    <a class="nav-link" href="{{ route('produks.index') }}">
        <i class="nav-icon icon-cursor"></i>
        <span>Produks</span>
    </a>
</li>
<li class="nav-item {{ Request::is('invoices*') ? 'active' : '' }}">
    <a class="nav-link" href="{{ route('invoices.index') }}">
        <i class="nav-icon icon-cursor"></i>
        <span>Invoices</span>
    </a>
</li>
<li class="nav-item {{ Request::is('transaksis*') ? 'active' : '' }}">
    <a class="nav-link" href="{{ route('transaksis.index') }}">
        <i class="nav-icon icon-cursor"></i>
        <span>Transaksis</span>
    </a>
</li>
<li class="nav-item {{ Request::is('reports*') ? 'active' : '' }}">
    <a class="nav-link" href="{{ route('reports.index') }}">
        <i class="nav-icon icon-cursor"></i>
        <span>Reports</span>
    </a>
</li>
