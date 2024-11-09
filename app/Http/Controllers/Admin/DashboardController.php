<?php

namespace App\Http\Controllers\Admin;

use Illuminate\View\View;

class DashboardController extends BaseController
{
    public function index(): View
    {
        $title = __('locale.name_control_panel');

        return view('admin.dashboard.index', [
            'title' => $title,
        ]);
    }

}
