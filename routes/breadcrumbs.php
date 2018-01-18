<?php
// Home
Breadcrumbs::register('home', function($breadcrumbs)
{
    $breadcrumbs->push(trans('breadcrumbs.home'), route('home'));
});

// Home > About
Breadcrumbs::register('about', function($breadcrumbs)
{
    $breadcrumbs->parent('home');
    $breadcrumbs->push(trans('breadcrumbs.about'), route('about'));
});

// Home > Our-works
Breadcrumbs::register('our-works', function ($breadcrumbs) {
    $breadcrumbs->parent('home');
    $breadcrumbs->push(trans('breadcrumbs.our-works'), route('our-works.index'));
});

// Home > Our-works > [Category]
Breadcrumbs::register('category', function ($breadcrumbs, $currentMenu) {
    $breadcrumbs->parent('our-works');
    $breadcrumbs->push($currentMenu->title, route('our-works.show', $currentMenu->slug));
});

// Home > Our-works > [Category] > [Product]
Breadcrumbs::register('product', function($breadcrumbs, $product)
{
    $breadcrumbs->parent('category', $product->menu);
    $breadcrumbs->push($product->title, route('product.show', $product->slug));
});

// Home > Accessories
Breadcrumbs::register('accessories', function ($breadcrumbs) {
    $breadcrumbs->parent('home');
    $breadcrumbs->push(trans('breadcrumbs.accessories'), route('accessories.index'));
});

// Home > Accessories > [Gallery]
Breadcrumbs::register('gallery', function ($breadcrumbs, $currentMenu) {
    $breadcrumbs->parent('accessories');
    $breadcrumbs->push($currentMenu->title, route('accessories.show', $currentMenu->slug));
});

// Home > Contacts
Breadcrumbs::register('contacts', function($breadcrumbs)
{
    $breadcrumbs->parent('home');
    $breadcrumbs->push(trans('breadcrumbs.contacts'), route('contacts'));
});