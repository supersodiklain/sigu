<aside>
	<div id="sidebar"  class="nav-collapse ">
		<ul class="sidebar-menu" id="nav-accordion">
			<li >
				<a class="{{ (Request::path() == 'daftar') ? 'active' : '' }}" href="{{ URL::to('/daftar') }}">
					<i class="fa fa-th-list"></i>
					<span>Daftar Universitas</span>
				</a>
			</li>
			<li >
				<a class="{{ (Request::path() == 'cari') ? 'active' : '' }}" href="{{ URL::to('/cari') }}">
					<i class="fa fa-search"></i>
					<span>Cari Prodi</span>
				</a>
			</li>
		</ul>
	</div>

</aside>