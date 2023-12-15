<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class AdminController extends Controller
{

    //For Components 
    public function home()
    {
        return view('admin.components.home');
    }
    public function login()
    {
        return view('admin.components.login');
    }
    public function registration()
    {
        return view('admin.components.registration');
    }
    public function googlemap()
    {
        return view('admin.components.google-maps');
    }

    //For Charts
    public function chartjs()
    {
        return view('admin.components.charts.chartjs');
    }
    public function flotchart()
    {
        return view('admin.components.charts.flot-chart');
    }
    public function morris()
    {
        return view('admin.components.charts.morris');
    }
    public function xcharts()
    {
        return view('admin.components.charts.x-chart');
    }

    //For DataTables
    public function basictable()
    {
        return view('admin.components.data-tables.basictable');
    }
    public function dynamictable()
    {
        return view('admin.components.data-tables.dynamic-table');
    }
    public function editabletable()
    {
        return view('admin.components.data-tables.editable-table');
    }
    public function responsivetable()
    {
        return view('admin.components.data-tables.responsive-table');
    }

    //For Extra

    public function error404()
    {
        return view('admin.components.extra.404');
    }
    public function error500()
    {
        return view('admin.components.extra.500');
    }
    public function editprofile()
    {
        return view('admin.components.extra.edit-profile');
    }
    public function faq()
    {
        return view('admin.components.extra.faq');
    }
    public function profile()
    {
        return view('admin.components.extra.profile');
    }

    //For Components
    public function calender()
    {
        return view('admin.components.components.calender');
    }
    public function todo()
    {
        return view('admin.components.components.to-do');
    }
}
