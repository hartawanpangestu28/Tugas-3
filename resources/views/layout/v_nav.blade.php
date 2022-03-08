<ul class="sidebar-menu" data-widget="tree">
        <li class="header">MAIN NAVIGATION</li>
        <li class="{{request()-> is('/') ? 'active' : ''}}"><a href="/"><i class="fa fa-home"></i> <span>Home</span></a></li>
        <li class="{{request()-> is('produk') ? 'active' : ''}}"><a href="/produk"><i class="fa fa-dashboard"></i> <span>Produk</span></a></li>
        <li class="{{request()-> is('pemesanan') ? 'active' : ''}}"><a href="/pemesanan"><i class="fa fa-dashboard"></i> <span>Pemesanan</span></a></li>
        <li class="{{request()-> is('pelanggan') ? 'active' : ''}}"><a href="/pelanggan"><i class="fa fa-dashboard"></i> <span>Pelanggan</span></a></li>
        <li class="treeview">
      
      </ul>