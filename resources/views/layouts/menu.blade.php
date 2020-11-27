<li class="nav-item {{ Request::is('*') ? 'active' : '' }}">
    <a class="nav-link" href="{{ route('dashboard.index') }}">
        <i class="nav-icon icon-folder"></i>
        <span>Dashboard</span>
    </a>
</li>
<li class="nav-item {{ Request::is('customers*') ? 'active' : '' }}">
    <a class="nav-link" href="{{ route('customers.index') }}">
        <i class="nav-icon icon-people"></i>
        <span>Customer</span>
    </a>
</li>
<li class="nav-item {{ Request::is('produks*') ? 'active' : '' }}">
    <a class="nav-link" href="{{ route('produks.index') }}">
        <i class="nav-icon icon-layers"></i>
        <span>Produk</span>
    </a>
</li>
<li class="nav-item {{ Request::is('invoices*') ? 'active' : '' }}">
    <a class="nav-link" href="{{ route('invoices.index') }}">
        <i class="nav-icon icon-share-alt"></i>
        <span>Invoice</span>
    </a>
</li>
<li class="nav-item {{ Request::is('transaksis*') ? 'active' : '' }}">
    <a class="nav-link" href="{{ route('transaksis.index') }}">
        <i class="nav-icon icon-credit-card"></i>
        <span>Transaksi</span>
    </a>
</li>
<li class="nav-item {{ Request::is('reports*') ? 'active' : '' }}">
    <a class="nav-link" href="{{ route('reports.index') }}">
        <i class="nav-icon icon-note"></i>
        <span>Report</span>
    </a>
</li>
<li class="nav-item dropdown">
  <a class="nav-link" class="dropdown-toggle" data-toggle="dropdown" aria-expanded="false">
       <i class="nav-icon icon-wrench"></i>
       <span>Setting</span>
  </a>
  <div class="dropdown-menu" aria-labelledby="dropdownMenuLink">
    <a class="dropdown-item" href="{{ route('statusPembayarans.index') }}">Status Pembayaran</a>
    <a class="dropdown-item" href="#">Another Item</a>
    <a class="dropdown-item" href="#">One more item</a>
  </div>
</li>
