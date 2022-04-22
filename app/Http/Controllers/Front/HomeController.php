<?php

namespace App\Http\Controllers\Front;


use App\Models\Property;
use App\Models\Service;
use App\Models\Slider;

class HomeController extends BaseController
{
    public function index()
    {
        $sliders = Slider::all();
        $featured_properties = Property::where('featured', 1)->get()->take(7);
        $services = Service::all()->take(3);
        $recent_properties = Property::orderBy('id')->get()->take(3);

        return view('home')
            ->with('settings', $this->settingsService->getAllSettings())
            ->with('sliders', $sliders)
            ->with('featured_properties', $featured_properties)
            ->with('services', $services)
            ->with('recent_properties', $recent_properties);
    }
}
