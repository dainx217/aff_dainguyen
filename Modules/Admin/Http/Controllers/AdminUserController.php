<?php

namespace Modules\Admin\Http\Controllers;

use App\Models\User;
use App\Models\Cart\Uni_Order;
use Illuminate\Contracts\Support\Renderable;
use Illuminate\Http\Request;
use Carbon\Carbon;
use Illuminate\Support\Str;
use Illuminate\Routing\Controller;

class AdminUserController extends AdminController
{
    public function index()
    {
        $users = User::orderByDesc('id')->where('status',1)->paginate(20);
       
        $viewData = [
            'users' => $users
        ];
        return view('admin::pages.user.index', $viewData);
    }
    public function create()
    {
        return view('admin::pages.user.create');
    }
    public function store(Request $request)
    {
        $data = $request->except(['save', '_token']);
        $data['password'] = bcrypt($request->password);
        $data['created_at'] = Carbon::now();
        $data['admin_id'] = get_data_user('admins');
        $data['code_share'] = Str::random(10);
        $shortlinkID = User::insertGetId($data);

        if ($shortlinkID) {
            $this->showMessagesSuccess();
            return redirect()->route('get_admin.user.index');
        }
        $this->showMessagesError();
        return  redirect()->back();
    }
  
    public function edit($id)
    {
        $users = User::find($id);
        $g_status = User::getStatusGlobal();
        // dd($g_status);
        $viewData = [
            'users' => $users,
            'g_status' => $g_status
        ];
        return view('admin::pages.user.update', $viewData);
    }

    public function update(Request $request, $id)
    {
        $users = User::find($id);
        $data = $request->except(['save', '_token']);
        $data['password'] = bcrypt($request->password);
        $data['created_at'] = Carbon::now();
        $users->fill($data)->save();
        $this->showMessagesSuccess();
        return redirect()->route('get_admin.user.index');
    }
   
    public function indexmovetrash()
    {
        $users = User::orderByDesc('id')->where('status', '=', 2)->paginate(20);
        $viewData = [
            'users' => $users
        ];
        return view('admin::pages.user.indexmovetrash', $viewData);
    }
    public function movetrash($id)
    {
        $users = User::findOrFail($id);
        $users->status = 2;
        $users->save();
        $this->showMessagesSuccess('Khóa tài khoản thành công');
        return redirect()->route('get_admin.user.index');
    }
    public function delete(Request $request, $id)
    {
        if ($request->ajax()) {
            $users = User::find($id);
            if ($users) {
                
                Uni_Order::where('user_id', $id)->delete();
                $users->delete();
            }
            return response()->json([
                'status' => 200,
                'message' => 'Xoá dữ liệu thành công'
            ]);
        }
        return redirect()->to('/');
    }
   
}
