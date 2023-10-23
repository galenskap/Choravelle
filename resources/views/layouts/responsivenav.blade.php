
<!-- Responsive Navigation Menu -->
<div :class="{'block': open, 'hidden': ! open}" class="hidden sm:hidden">
    <div class="pt-2 pb-3 space-y-1">
        <x-responsive-nav-link :href="route('homepage')" :active="request()->routeIs('homepage')">
            Accueil
        </x-responsive-nav-link>
        <x-responsive-nav-link :href="route('homepage')" :active="request()->routeIs('homepage')">
            Le Choeur
        </x-responsive-nav-link>
        <x-responsive-nav-link :href="route('partotheque')" :active="request()->routeIs('partotheque')">
            Espace choristes
        </x-responsive-nav-link>
    </div>

    <!-- Responsive Settings Options -->
    @auth 
        @include('layouts.responsivenav-private')
    @endauth
</div>
