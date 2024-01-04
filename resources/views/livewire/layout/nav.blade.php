<?php

use App\Livewire\Actions\Logout;
use Livewire\Volt\Component;

new class extends Component
{
    /**
     * Log the current user out of the application.
     */
    public function logout(Logout $logout): void
    {
        $logout();

        $this->redirect('/', navigate: true);
    }
};
?>
<nav id="navigation" class="navigation navigation-landscape">
    <div class="nav-header">
        <a class="nav-brand" href="#">
            <img src="assets/img/logo.png" class="logo" alt="" />
        </a>
        <div class="nav-toggle"></div>
        <div class="mobile_nav">
            <ul>
                <li class="account-drop">
                    <a href="javascript:void(0);" class="crs_yuo12" data-toggle="dropdown" aria-haspopup="true"
                        aria-expanded="false">
                        <span class="embos_45"><i class="fas fa-bell"></i><i class="embose_count red">0</i></span>
                    </a>
                    <div class="dropdown-menu pull-right animated flipInX">
                        <div class="drp_menu_headr bg-warning">
                            <h4>0 Notifications</h4>
                        </div>
                        <div class="ground-list ground-hover-list">
                            {{-- Here notifications --}}
                        </div>
                    </div>
                </li>

                <li>
                    <div class="btn-group account-drop">
                        <a href="javascript:void(0);" class="crs_yuo12 btn btn-order-by-filt" data-toggle="dropdown"
                            aria-haspopup="true" aria-expanded="false">
                            <img src="assets/img/user-5.jpg" class="avater-img" alt="">
                        </a>
                        <div class="dropdown-menu pull-right animated flipInX">
                            <div class="drp_menu_headr">
                                <h4>Hi, {{ auth()->user()->name }}<</h4>
                            </div>
                            <ul>
                                <li>
                                    <a href="/account" wire:navigate>
                                        <i class="fa fa-tachometer-alt"></i>Mon compte
                                    </a>
                                </li>
                                <li><a href="#!" wire:click="logout"><i class="fa fa-unlock-alt"></i>Déconnexion</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </li>
            </ul>
        </div>
    </div>
    <div class="nav-menus-wrapper" style="transition-property: none;">
        <ul class="nav-menu">
           @if(Route::is('home'))
                <li><a href="#cours">Cours</a></li>
                <li><a href="#categories">Catégories</a></li>
            @else
                <li><a href="/home#cours">Cours</a></li>
                <li><a href="/home#categories">Catégories</a></li>
            @endif
        </ul>

        <ul class="nav-menu nav-menu-social align-to-right">
            <li class="account-drop">
                <a href="javascript:void(0);" class="crs_yuo12" data-toggle="dropdown" aria-haspopup="true"
                    aria-expanded="false">
                    <span class="embos_45"><i class="fas fa-bell"></i><i class="embose_count red">0</i></span>
                </a>
                <div class="dropdown-menu pull-right animated flipInX">
                    <div class="drp_menu_headr bg-warning">
                        <h4>0 Notifications</h4>
                    </div>
                    <div class="ground-list ground-hover-list">
                        {{-- Here notifications --}}
                    </div>
                </div>
            </li>
            <li>
                <div class="btn-group account-drop">
                    <a href="javascript:void(0);" class="crs_yuo12 btn btn-order-by-filt" data-toggle="dropdown"
                        aria-haspopup="true" aria-expanded="false">
                        <img src="assets/img/user-5.jpg" class="avater-img" alt="">
                    </a>
                    <div class="dropdown-menu pull-right animated flipInX">
                        <div class="drp_menu_headr">
                            <h4>Hi, {{ auth()->user()->name }}</h4>
                        </div>
                        <ul>
                            <li><a href="/account"><i class="fa fa-tachometer-alt"></i>Mon compte</a></li>
                            <li><a href="#!" wire:click="logout"><i class="fa fa-unlock-alt"></i>Déconnexion</a></li>
                        </ul>
                    </div>
                </div>
            </li>
        </ul>
    </div>
</nav>
