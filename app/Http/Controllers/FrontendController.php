<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use stdClass;

class FrontendController extends Controller
{
    public $category_website;
    public $category_app;
    public $template_website;
    public $template_app;

    public function __construct()
    {
        $this->category_website = [
            ['id' => 1, 'name' => 'Blockchain Project', 'slug' => 'blockchain-project'],
            ['id' => 2, 'name' => 'Defi Service', 'slug' => 'defi-service'],
            ['id' => 3, 'name' => 'NFT Project', 'slug' => 'nft-project'],
            ['id' => 4, 'name' => 'P2E Game', 'slug' => 'p2e-game'],
            ['id' => 5, 'name' => 'Bussines', 'slug' => 'bussines'],
            ['id' => 6, 'name' => 'Online Store', 'slug' => 'online-store'],
            ['id' => 7, 'name' => 'Education', 'slug' => 'education'],
            ['id' => 8, 'name' => 'News & magazine', 'slug' => 'news-magazine'],
            ['id' => 9, 'name' => 'Marketplace', 'slug' => 'marketplace'],
            ['id' => 10, 'name' => 'Health & wellness', 'slug' => 'health-wellness'],
            ['id' => 11, 'name' => 'Restaurant and food', 'slug' => 'restaurant-food'],
            ['id' => 12, 'name' => 'Others', 'slug' => 'others']
        ];

        $this->category_app = [
            ['id' => 1, 'name' => 'Decentralized Finance', 'slug' => 'decentralized-finance'],
            ['id' => 2, 'name' => 'Crypto Wallet', 'slug' => 'crypto-wallet'],
            ['id' => 3, 'name' => 'NFT', 'slug' => 'nft'],
            ['id' => 4, 'name' => 'Game', 'slug' => 'game'],
            ['id' => 5, 'name' => 'Bussines', 'slug' => 'bussines'],
            ['id' => 6, 'name' => 'Online Store', 'slug' => 'online-store'],
            ['id' => 7, 'name' => 'Education', 'slug' => 'education'],
            ['id' => 8, 'name' => 'News & magazine', 'slug' => 'news-magazine'],
            ['id' => 9, 'name' => 'Marketplace', 'slug' => 'marketplace'],
            ['id' => 10, 'name' => 'Health & wellness', 'slug' => 'health-wellness'],
            ['id' => 11, 'name' => 'Restaurant and food', 'slug' => 'restaurant-food'],
            ['id' => 12, 'name' => 'Others', 'slug' => 'others']
        ];

        $this->template_website = [
            ['id' => 1, 'type' => 'light', 'name' => 'deep ocean', 'image' => '/img/template/light-1.png', 'color' => 'rgb(10, 168, 240)'],
            ['id' => 2, 'type' => 'light', 'name' => 'go-green', 'image' => '/img/template/light-2.png', 'color' => 'rgb(52, 198, 89)'],
            ['id' => 3, 'type' => 'light', 'name' => 'Cheerful Sunburst', 'image' => '/img/template/light-3.png', 'color' => 'rgb(225, 96, 100)'],
            ['id' => 4, 'type' => 'light', 'name' => 'dynamic orange', 'image' => '/img/template/light-4.png', 'color' => 'rgb(242, 159, 79)'],
            ['id' => 5, 'type' => 'light', 'name' => 'carbon mystique', 'image' => '/img/template/light-5.png', 'color' => 'rgb(0, 0, 0)'],
            ['id' => 6, 'type' => 'light', 'name' => 'techno grey', 'image' => '/img/template/light-6.png', 'color' => 'rgb(255, 255, 255)'],
            ['id' => 7, 'type' => 'dark', 'name' => 'deep ocean', 'image' => '/img/template/dark-1.png', 'color' => 'rgb(10, 168, 240)'],
            ['id' => 8, 'type' => 'dark', 'name' => 'go-green', 'image' => '/img/template/dark-2.png', 'color' => 'rgb(52, 198, 89)'],
            ['id' => 9, 'type' => 'dark', 'name' => 'Cheerful Sunburst', 'image' => '/img/template/dark-3.png', 'color' => 'rgb(225, 96, 100)'],
            ['id' => 10, 'type' => 'dark', 'name' => 'dynamic orange', 'image' => '/img/template/dark-4.png', 'color' => 'rgb(242, 159, 79)'],
            ['id' => 11, 'type' => 'dark', 'name' => 'carbon mystique', 'image' => '/img/template/dark-5.png', 'color' => 'rgb(137 126 126)'],
            ['id' => 12, 'type' => 'dark', 'name' => 'techno grey', 'image' => '/img/template/dark-6.png', 'color' => 'rgb(255, 255, 255)']
        ];

        $this->template_app = [
            ['id' => 1, 'name' => 'Clothing and Electronics', 'image' => '/img/apps/pict-1.png', 'color' => 'rgb(10, 168, 240)'],
            ['id' => 2, 'name' => 'Beauty Shop', 'image' => '/img/apps/pict-2.png', 'color' => 'rgb(10, 168, 240)'],
            ['id' => 3, 'name' => 'Home Goods Store', 'image' => '/img/apps/pict-3.png', 'color' => 'rgb(10, 168, 240)'],
            ['id' => 4, 'name' => 'Online Grocery Store', 'image' => '/img/apps/pict-4.png', 'color' => 'rgb(10, 168, 240)'],
            ['id' => 5, 'name' => 'Fashion Collection', 'image' => '/img/apps/pict-5.png', 'color' => 'rgb(10, 168, 240)'],
            ['id' => 6, 'name' => 'Electronics Store', 'image' => '/img/apps/pict-6.png', 'color' => 'rgb(10, 168, 240)'],
            ['id' => 7, 'name' => 'Online Store', 'image' => '/img/apps/pict-7.png', 'color' => 'rgb(10, 168, 240)'],
            ['id' => 8, 'name' => 'Sports & Outdoors', 'image' => '/img/apps/pict-8.png', 'color' => 'rgb(10, 168, 240)']
        ];
    }

    public function creator_website(Request $request)
    {
        $data = new stdClass();
        $data->category = $this->category_website;
        $data->template = $this->template_website;
        $data->step = 1;
        $view = 'pages.creator_website.step1';
        if($request->step == 1){
            $data->step = $request->step;
            $view = 'pages.creator_website.step'.$request->step;
        }elseif($request->step == 2){
            $data->step = $request->step;
            $view = 'pages.creator_website.step'.$request->step;
        }elseif($request->step == 3){
            $data->step = $request->step;
            $view = 'pages.creator_website.step'.$request->step;
        }elseif($request->step == 4){
            $data->step = $request->step;
            $view = 'pages.creator_website.step'.$request->step;
        }
        return view($view, compact('data'));
    }

    public function creator_app(Request $request)
    {
        $data = new stdClass();
        $data->category = $this->category_app;
        $data->template = $this->template_app;
        $data->step = 1;
        $view = 'pages.creator_app.step1';
        if($request->step == 1){
            $data->step = $request->step;
            $view = 'pages.creator_app.step'.$request->step;
        }elseif($request->step == 2){
            $data->step = $request->step;
            $view = 'pages.creator_app.step'.$request->step;
        }elseif($request->step == 3){
            $data->step = $request->step;
            $view = 'pages.creator_app.step'.$request->step;
        }elseif($request->step == 4){
            $data->step = $request->step;
            $data->type = $request->type;
            $view = 'pages.creator_app.step'.$request->step;
        }
        return view($view, compact('data'));
        //return view('pages.creator_app');
    }

    public function save_app(Request $request)
    {
        return redirect('/')->with('warning', $request->message);
    }
}
