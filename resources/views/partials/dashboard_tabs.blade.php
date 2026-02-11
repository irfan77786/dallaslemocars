<style>
@media (max-width: 768px) {
    .desktopTabs {
        display: none !important;
    }
}

@media (min-width: 768px) {
    .desktopTabs {
        display: flex;
        justify-content: center;
        margin-right: 32px !important;
        gap: 10px;
        flex-wrap: nowrap;     /* prevents going to next line */
    }
    .desktopTabs .nav-item a {
        white-space: nowrap;   /* prevents text wrap */
        padding: 10px 20px;
        display: flex;
        align-items: center;
        justify-content: center;
    }

    .desktopTabs {
        display: flex;
        justify-content: center;
        flex-wrap: wrap;        /* keeps layout stable if screen shrinks */
        gap: 10px;              /* equal spacing */
    }

    .desktopTabs .nav-item {
        list-style: none;
    }
}
</style>
<ul class="mb-4 desktopTabs" id="dashboardTabs" role="tablist" style="border-bottom:0; margin-top:35px;">
    <li class="nav-item">
        <a class="btn @if(Route::is('dashboard')) btn-primary @else btn-primary-transparent-hover @endif" href="{{ route('dashboard') }}">
            <i class="fas fa-car mr-2"></i> Rides
        </a>
    </li>

    <li class="nav-item">
        <a class="btn @if(Route::is('users')) btn-primary @else btn-primary-transparent-hover @endif" href="{{ route('users') }}">
            <i class="fas fa-users mr-2"></i> Users
        </a>
    </li>

    <li class="nav-item">
        <a class="btn @if(Route::is('cards.index')) btn-primary @else btn-primary-transparent-hover @endif" href="{{ route('cards.index') }}">
            <i class="fas fa-credit-card mr-2"></i> Payment Methods
        </a>
    </li>

    <li class="nav-item">
        <a class="btn @if(Route::is('invoices.index')) btn-primary @else btn-primary-transparent-hover @endif" href="{{ route('invoices.index') }}">
            <i class="fas fa-file-alt mr-2"></i> Invoices
        </a>
    </li>

    <li class="nav-item">
        <a class="btn @if(Route::is('profile.edit')) btn-primary @else btn-primary-transparent-hover @endif" href="{{ route('profile.edit') }}">
            <i class="fas fa-user-circle mr-2"></i> Account Info
        </a>
    </li>

    <li class="nav-item">
        <a class="btn @if(Route::is('storedLocations.index')) btn-primary @else btn-primary-transparent-hover @endif" href="{{ route('storedLocations.index') }}">
            <i class="fas fa-map-marker-alt mr-2"></i> Stored Locations
        </a>
    </li>
</ul>
