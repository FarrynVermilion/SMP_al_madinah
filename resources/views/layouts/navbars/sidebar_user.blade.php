<div class="sidebar" data-color="orange">
    <!--
      Tip 1: You can change the color of the sidebar using: data-color="blue | green | orange | red | yellow"
  -->
    <div class="logo">
      <p class="simple-text logo-mini">
        {{ __('Welcome') }}
      </p>
      <p class="simple-text logo-normal">
        {{Auth::user()->name}}
      </p>
    </div>
    <div class="sidebar-wrapper" id="sidebar-wrapper">
      <ul class="nav">
        <li class="@if ($activePage == 'profile') active @endif">
            <a href="{{ route('profile.edit') }}">
            <i class="now-ui-icons users_single-02"></i>
            <p> {{ __("User Profile") }} </p>
            </a>
        </li>
      </ul>
    </div>
  </div>
