<?php

namespace App\Http\Controllers\Front;


use App\Models\Location;
use App\Models\News;
use App\Models\Property;
use App\Models\Service;
use App\Models\Slider;
use App\Models\Testimonial;
use App\Models\User;

class HomeController extends InnerController
{
    public function index($slug = null)
    {
        $page = $this->pagesService->getPageBySlug('index');

        $sliders = Slider::all();
        $featured_properties = Property::where('featured', 1)->get()->take(7);
        $services = Service::all()->take(3);
        $recent_properties = Property::orderBy('id')->get()->take(3);

        $popular_locations = Location::all()->take(6)->sortByDesc(function($location){
            return $location->getPropertiesCount();
        });

        $agents = User::whereHas('role', function($q){
            $q->where('slug', 'agent');
        })->get();

        $testimonials = Testimonial::all()->take(10);
        $news = News::all()->take(4);

        return view('home')
            ->with('page_title', $page->title)
            ->with('page_content', $page->content)
            ->with('page_meta_title', $page->meta_title)
            ->with('page_meta_keywords', $page->meta_keywords)
            ->with('page_meta_description', $page->meta_description)
            ->with('page_meta', $page->getPageMeta())
            ->with('menu', $this->pagesService->getMenuPages())
            ->with('settings', $this->settingsService->getAllSettings())
            ->with('sliders', $sliders)
            ->with('featured_properties', $featured_properties)
            ->with('services', $services)
            ->with('recent_properties', $recent_properties)
            ->with('popular_locations', $popular_locations)
            ->with('agents', $agents)
            ->with('testimonials', $testimonials)
            ->with('news', $news);
    }
}
