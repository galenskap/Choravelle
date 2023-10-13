{{-- This file is used for menu items by any Backpack v6 theme --}}
<li class="nav-item"><a class="nav-link" href="{{ backpack_url('dashboard') }}"><i class="la la-home nav-icon"></i> {{ trans('backpack::base.dashboard') }}</a></li>

<x-backpack::menu-item title="Songs" icon="la la-question" :link="backpack_url('song')" />
<x-backpack::menu-item title="Years" icon="la la-question" :link="backpack_url('year')" />
<x-backpack::menu-item title="Groups" icon="la la-question" :link="backpack_url('group')" />
<x-backpack::menu-item title="Users" icon="la la-question" :link="backpack_url('user')" />