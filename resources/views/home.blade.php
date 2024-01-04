<x-app-layout>
    {{-- <x-slot name="header">
        <x-navigation/>
    </x-slot> --}}
<!-- ============================ Hero Banner  Start================================== -->
<div class="hero_banner image-cover image_bottom h2_bg">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-6 col-md-6 col-sm-12">
                <div class="text-left simple-search-wrap">
                    <div class="hero_search-2">
                        <div class="elsio_tag">LISGUISRTICA MG</div>
                        <h1 class="mb-4 banner_title">Bienvenu</h1>
                        <p class="mb-4 font-lg">Trouvez les cours en ligne les plus passionnants</p>
                        <div class="mt-5 inline_btn">
                            <a href="#cours" class="text-white btn theme-bg btn-md">Commencer</a>
                            <a href="#" class="btn text-dark pl-sm-0"><span class="esli_vd">
                                <i class="fa fa-play"></i></span>Comment ça fonctionne?</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-6 col-md-6 col-sm-12">
                <div class="side_block">
                    <img src="assets/img/side-1.png" class="img-fluid" alt="" />
                </div>
            </div>
        </div>
    </div>
</div>
<!-- ============================ Hero Banner End ================================== -->
@include('pages.cours_liste')
@include('pages.category_cours')
</x-app-layout>
