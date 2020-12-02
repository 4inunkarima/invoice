<li class="nav-item {{ Request::is('*') ? 'active' : '' }}">
    <a class="nav-link" href="{{ route('dashboard.index') }}">
        <i class="nav-icon icon-folder"></i>
        <span>{{ __('menu.dashboard') }}</span>
    </a>
</li>
<li class="nav-item {{ Request::is('customers*') ? 'active' : '' }}">
    <a class="nav-link" href="{{ route('customers.index') }}">
        <i class="nav-icon icon-people"></i>
        <span>{{ __('menu.customer')}}</span>
    </a>
</li>
<li class="nav-item {{ Request::is('produks*') ? 'active' : '' }}">
    <a class="nav-link" href="{{ route('produks.index') }}">
        <i class="nav-icon icon-layers"></i>
        <span>{{ __('menu.produk') }}</span>
    </a>
</li>
<li class="nav-item {{ Request::is('invoices*') ? 'active' : '' }}">
    <a class="nav-link" href="{{ route('invoices.index') }}">
        <i class="nav-icon icon-share-alt"></i>
        <span>{{ __('menu.invoice') }}</span>
    </a>
</li>
<li class="nav-item {{ Request::is('transaksis*') ? 'active' : '' }}">
    <a class="nav-link" href="{{ route('transaksis.index') }}">
        <i class="nav-icon icon-credit-card"></i>
        <span>{{ __('menu.transaksi') }}</span>
    </a>
</li>
<li class="nav-item {{ Request::is('reports*') ? 'active' : '' }}">
    <a class="nav-link" href="{{ route('reports.index') }}">
        <i class="nav-icon icon-note"></i>
        <span>{{ __('menu.report') }}</span>
    </a>
</li>
<li class="nav-item dropdown">
  <a class="nav-link" class="dropdown-toggle" href="#" data-toggle="dropdown" aria-expanded="false" aria-haspopup="true">
       <i class="nav-icon icon-wrench"></i>
       <span>{{ __('menu.setting') }}</span>
  </a>
  <div class="dropdown-menu" aria-labelledby="navbarDropdown">
    <a class="dropdown-item" href="{{ route('statusPembayarans.index') }}">{{ __('menu.payment_status') }}</a>
    <a class="dropdown-item" class="dropdown-toggle" href="#" data-toggle="dropdown" aria-expanded="false" aria-haspopup="true">
            <!-- <i class="nav-icon icon-bell"></i> -->
            <span>{{ __('menu.switch_language') }}</span>
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
            <a class="dropdown-item <?php echo e(app()->getLocale() == 'en' ? 'active' : ''); ?>" href="{{ route('localization.switch', 'en') }}" >{{ __('menu.english') }}</a>
            <a class="dropdown-item <?php echo e(app()->getLocale() == 'id' ? 'active' : ''); ?>" href="{{ route('localization.switch', 'id') }}" >{{ __('menu.indonesian') }}</a>
    </div>
    <!-- <a class="dropdown-item" href="#">One more item</a> -->
  </div>
</li>