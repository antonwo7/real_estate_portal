<?php

namespace App\Http\Controllers\Front;

use App\Classes\FilterClass;
use App\Http\Controllers\Controller;
use App\Services\PagesService;
use App\Services\SettingsService;
use Illuminate\Http\Request;

class InnerController extends Controller
{
    public $settingsService, $pagesService;

    public function __construct(SettingsService $settingsService, PagesService $pagesService)
    {
        $this->settingsService = $settingsService;
        $this->pagesService = $pagesService;
    }

    public function index($slug = null)
    {
        $page = $this->pagesService->getPageBySlug($slug);
        $filter = new FilterClass();

        return view('page')
            ->with('page_title', $page->title)
            ->with('page_content', $page->content)
            ->with('page_meta_title', $page->meta_title)
            ->with('page_meta_keywords', $page->meta_keywords)
            ->with('page_meta_description', $page->meta_description)
            ->with('page_meta', $page->getPageMeta())
            ->with('menu', $this->pagesService->getMenuPages())
            ->with('settings', $this->settingsService->getAllSettings())
            ->with('filter', $filter);
    }
}
