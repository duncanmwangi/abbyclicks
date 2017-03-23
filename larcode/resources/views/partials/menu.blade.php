 <!-- sidebar menu: : style can be found in sidebar.less -->

      <ul class="sidebar-menu">

        <li class="header" style="    color: #000; font-size: 16px; font-weight: bold;">{{$user->user_type}} PANEL</li>





        @if($user->user_type=='ADMIN')

          @include('partials.admin-menu')

        @endif





        @if($user->user_type=='MANAGER')

          @include('partials.manager-menu')

        @endif





        @if($user->user_type=='ADVERTISER')

          @include('partials.advertiser-menu')

        @endif





        @if($user->user_type=='PUBLISHER')

          @include('partials.publisher-menu')

        @endif



      </ul>