@extends('layouts.layout')
@section('content')

@section('title')
@lang('index.menu_about_title')
@endsection

@section('desc')
@lang('desc.about') - DORA
@endsection

@section('keywords')Разработка сайтов, СММ продвижение, Создание сайтов, Продвижение соц сетях, Разработка интернет магазинов в ташкенте, разработка логотипов в ташкенте, разработка телеграм ботов, создание телеграм ботов, брендинг в ташкенте, сео продвижение, seo продвижение сайтов в ташкенте, контекстная реклама, срм системы в ташкенте, программа для автоматизации, битрикс24, разработчики сайтов, рекламные ролики, видеосъемка в ташкенте, рекламные компании, веб студия, онлайн реклама, нейминг в ташкенте, разработка мобильных приложении, amocrm, амосрм, мой склад, складской учет, программа для торговли@endsection

<!-- start breadcrumb area -->
<div class="rts-breadcrumb-area breadcrumb-bg bg_image">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-12 breadcrumb-1">
                <h1 class="title text-center" data-sal-delay="150" data-sal="slide-up" data-sal-duration="800">@lang('index.menu_about_title')</h1>
            </div>
        </div>
    </div>
</div>
<!-- end breadcrumb area -->

<!-- about us area start -->
<div class="rts-about-us-area rts-section-gap">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-7">
                <div class="thumbnail" data-sal-delay="150" data-sal="slide-up" data-sal-duration="800">
                    <img src="assets/images/about-us/01.jpg" alt="creative_about">
                </div>
            </div>
            <div class="col-lg-5">
                <div class="about-right-one-area">
                    <div class="title-area">
                        <span data-sal-delay="150" data-sal="slide-up" data-sal-duration="800">@lang('index.about_p')</span>
                        <h3 class="title" data-sal-delay="200" data-sal="slide-up" data-sal-duration="800">
                            @lang('index.about_title')
                        </h3>
                    </div>
                    <p class="disc" data-sal-delay="250" data-sal="slide-up" data-sal-duration="800">
                        @lang('index.about_desc')
                    </p>
                  
                    <div class="button-area" data-sal-delay="300" data-sal="slide-up" data-sal-duration="800">
                        <a href="assets/about_dora_ru.pdf" class="rts-btn btn-primary" download>@lang('index.download') <i class="fa-solid fa-download"></i></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- about us area end -->



<!-- cta section start -->
<div class="rts-cta-section-start rts-section-gap cta-bg-h4">
    <div class="container">
        <div class="row">
            <div class="title-area text-center">
                <span data-sal-delay="150" data-sal="slide-up" data-sal-duration="800">@lang('index.about_projects_p')</span>
                <h3 class="title" data-sal-delay="250" data-sal="slide-up" data-sal-duration="800">@lang('index.about_projects_title')</h3>
                <div class="button-area" data-sal-delay="300" data-sal="slide-up" data-sal-duration="800">
                    <a href="{{route('portfolio')}}" class="rts-btn btn-primary">@lang('index.about_projects_button') <i class="fa-solid fa-angles-right"></i></a>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- cta section end -->

<x-teams />


@endsection