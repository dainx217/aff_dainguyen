<?php

namespace Modules\Admin\Http\Controllers;

use Illuminate\Contracts\Support\Renderable;
use Illuminate\Http\Request;
use App\Models\Education\Course;
use App\Models\Uni_Contact;
use App\Models\Uni_Store;
use App\Models\Cart\Uni_Order;
use App\Models\User;
use App\Models\Cart\Uni_Order_Nap;
use Carbon\Carbon;
use Illuminate\Routing\Controller;

class AdminDashboardController extends Controller
{
    
    public function index()
    {
        return view('admin::pages.dashboard.index', );
    }
    
    
}
