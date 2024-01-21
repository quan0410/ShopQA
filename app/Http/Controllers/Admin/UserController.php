<?php
declare(strict_types=1);
namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Http\Request;
use function Symfony\Component\String\u;

class UserController extends Controller
{
    public function index()
    {
        $users = User::paginate(10);
        return view('admin.users.index',compact('users'));
    }

    public function create()
    {
        return view('admin.users.create');
    }

    public function store(Request $request)
    {
        $data = $request->validate([
            'name' => ['required','min:2'],
            'email' => ['required','email','unique:users'],
            'password' => ['required'],
            'phone' => ['numeric','min:10']
        ]);
        $data['password'] = Hash::make($request['password']);
        $data['address'] = $request['address'];
        $data['permissions'] = [
            'super' =>  false,
            'admin' => $request['permission_admin'] ?? false,
            'brand' => $request['permission_brand'] ?? false,
            'category' => $request['permission_category'] ?? false,
            'product' => $request['permission_product'] ?? false,
            'sale' => $request['permission_sale'] ?? false,
            'blog' => $request['permission_blog'] ?? false,
            'order' => $request['permission_order'] ?? false,
        ];
        User::create($data);
        return redirect(route('admin.user.index'));

    }

    public function edit(User $user)
    {
        return view('admin.users.edit',compact('user'));
    }

    public function update(Request $request,User $user)
    {
        $data = $request->validate([
            'name' => ['required','min:2'],
            'email' => ['required','email'],
            'phone' => ['numeric','min:10']
        ]);
        if ($request['password']){
            $data['password'] = Hash::make($request['password']);
        }
        $data['address'] = $request['address'];
        $data['permissions'] = [
            'super' => false,
            'admin' => $request['permission_admin'] ?? false,
            'brand' => $request['permission_brand'] ?? false,
            'category' => $request['permission_category'] ?? false,
            'product' => $request['permission_product'] ?? false,
            'sale' => $request['permission_sale'] ?? false,
            'blog' => $request['permission_blog'] ?? false,
            'order' => $request['permission_order'] ?? false,
        ];
        $user->update($data);
        return redirect(route('admin.user.index'));
    }

    public function destroy(User $user)
    {
        $user->delete();
        return redirect(route('admin.user.index'));
    }
}
