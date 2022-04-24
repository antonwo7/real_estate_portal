<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use App\Services\PagesService;
use App\Services\SettingsService;
use Illuminate\Http\Request;

class PageController extends Controller
{
    public $settingsService, $pagesService;

    public function __construct(SettingsService $settingsService, PagesService $pagesService)
    {
        $this->settingsService = $settingsService;
        $this->pagesService = $pagesService;
    }

    public function index($slug)
    {
        $page = $this->pagesService->getPageBySlug($slug);

        return view('page')
            ->with('page', $page)
            ->with('page_meta', $page->getPageMeta())
            ->with('menu', $this->pagesService->getMenuPages())
            ->with('settings', $this->settingsService->getAllSettings());
    }
}
