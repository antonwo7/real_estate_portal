<?php

namespace App\Http\Controllers\Front;

use App\Classes\FilterClass;
use App\Http\Controllers\Controller;
use App\Models\Property;
use App\Models\PropertyType;
use App\Models\Type;
use App\Services\PagesService;
use App\Services\PropertyService;
use App\Services\SettingsService;
use App\Traits\PageMetaTrait;
use Illuminate\Http\Request;

class PropertyController extends Controller
{
    use PageMetaTrait;

    public $settingsService, $pagesService;

    public function __construct(SettingsService $settingsService, PagesService $pagesService)
    {
        $this->settingsService = $settingsService;
        $this->pagesService = $pagesService;
    }

    public function show($propertySlug, PropertyService $propertyService)
    {
        $sidebarFilter = new FilterClass();

        $sidebarTypes = Type::all();

        $property = $propertyService->getPropertyBySlug($propertySlug);
        $sidebarRecentProperties = Property::all()->take(3);

        return view('property')
            ->with('page_title', $property->title)
            ->with('page_meta_title', $property->meta_title)
            ->with('page_meta_keywords', $property->meta_keywords)
            ->with('page_meta_description', $property->meta_description)
            ->with('page_meta', $property->getPageMeta())
            ->with('menu', $this->pagesService->getMenuPages())
            ->with('settings', $this->settingsService->getAllSettings())
            ->with('sidebarFilter', $sidebarFilter)
            ->with('sidebarTypes', $sidebarTypes)
            ->with('sidebarRecentProperties', $sidebarRecentProperties)
            ->with('property', $property);
    }
}
