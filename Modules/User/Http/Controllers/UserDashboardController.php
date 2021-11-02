<?php

namespace Modules\User\Http\Controllers;

use App\Models\Cart\Transaction;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Psy\Util\Str;
use Sentry;
use Mail;
use App\Models\Favourite;
use Carbon\Carbon;

// use Illuminate\Routing\Controller;
class UserDashboardController extends Controller
{


    public function index()
    {
       
        return view('user::pages.dashboard.index');
    }


}
