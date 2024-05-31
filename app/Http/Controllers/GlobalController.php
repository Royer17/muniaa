<?php

namespace App\Http\Controllers;

use App\Service;
use App\Setting;
use App\InstitutionalDocument;
use App\LastDocument;
use Illuminate\Http\Request;
use Illuminate\Contracts\View\View;

class GlobalController extends Controller
{
    public function compose(View $view) {
        
        //$services = Service::wherePublished(1)->get();
        $setting = Setting::first();

        $services = Service::take(8)
            ->wherePublished(1)
            ->orderBy('id', 'DESC')
            ->get();

        $inst_documents = InstitutionalDocument::take(8)
            ->wherePublished(1)
            ->orderBy('id', 'DESC')
            ->get();

        $last_documents = LastDocument::take(8)
            ->orderBy('id', 'DESC')
            ->wherePublished(1)
            //->with('files')
            ->get();

        $view->with('services', $services)
                ->with('setting', $setting)
                ->with('inst_documents', $inst_documents)
                ->with('last_documents', $last_documents);

    }

}
