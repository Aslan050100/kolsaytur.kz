<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;
use Illuminate\Routing\Route;
use App\Product;
use Artesaos\SEOTools\Facades\SEOMeta;
use Artesaos\SEOTools\Facades\OpenGraph;
use Artesaos\SEOTools\Facades\TwitterCard;
use Artesaos\SEOTools\Facades\JsonLd;
// OR
use Artesaos\SEOTools\Facades\SEOTools;
class AppController extends Controller
{

    public function index()
    {
        SEOTools::setTitle('Kolsaytur');
        SEOTools::setDescription('This is site for reserve hotel in Kolsay');
        SEOTools::opengraph()->setUrl('https://sirius.onmonday.kz/');
        SEOTools::setCanonical('https://sirius.onmonday.kz');
        SEOTools::opengraph()->addProperty('type', 'articles');
        SEOTools::twitter()->setSite('@aslan050100');
        SEOTools::jsonLd()->addImage('https://sirius.onmonday.kz/assets/image/logo.jpg');

        return view('app');
    }
    public function detail($id, $slug = '')
    {
        SEOTools::setTitle('Kolsaytur');
        SEOTools::setDescription('In this page you can reserve hotel in Kolsay');
        SEOTools::opengraph()->setUrl('https://sirius.onmonday.kz/');
        SEOTools::setCanonical('https://sirius.onmonday.kz');
        SEOTools::opengraph()->addProperty('type', 'articles');
        SEOTools::twitter()->setSite('@aslan050100');
        SEOTools::jsonLd()->addImage('https://sirius.onmonday.kz/assets/image/logo.jpg');
        $product = Product::findOrFail($id);

        return view('app')
            ->withProduct($product)
            ->withCanonical($product->url);
    }

}
