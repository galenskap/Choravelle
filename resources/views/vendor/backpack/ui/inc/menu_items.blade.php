{{-- This file is used for menu items by any Backpack v6 theme --}}
<li class="nav-item"><a class="nav-link" href="{{ backpack_url('dashboard') }}"><i class="la la-home nav-icon"></i> Administration</a></li>

<x-backpack::menu-item title="Chansons" icon="la la-music" :link="backpack_url('song')" />
<x-backpack::menu-item title="Saisons" icon="la la-calendar" :link="backpack_url('year')" />
<x-backpack::menu-item title="Pupitres" icon="la la-group" :link="backpack_url('group')" />
<x-backpack::menu-item title="Membres" icon="la la-user" :link="backpack_url('user')" />
<x-backpack::menu-item title="Fichiers" icon="la la-archive" :link="backpack_url('file')" />