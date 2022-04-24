<?php

namespace App\Services;


use App\Models\Page;

class PagesService
{
    public function getPageBySlug($slug)
    {
        return Page::where('slug', $slug)->get()->first();
    }

    public function getMenuPages()
    {
        return Page::where('in_menu', 1)->get();
    }
}
