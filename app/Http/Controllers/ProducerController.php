<?php

namespace App\Http\Controllers;

use App\Helpers\MailHelper;
use App\Models\ProducerFollow;
use App\Models\ProducerItem;
use App\Models\ProducerLocation;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;


class ProducerController extends Controller
{
    public function index()
    {
        $stores = ProducerLocation::all();
        return view('customer.producer.index', compact('stores'));
    }

    public function view($id)
    {
        $store = ProducerLocation::where('id', $id)->first();
        return view('customer.producer.view', compact('store'));
    }

    public function items($id)
    {
        $store = ProducerLocation::where('id', $id)->first();
        $items = ProducerItem::where('store_id', $id)->get();
        return view('customer.producer.items', compact('store', 'items'));
    }

    public function followProducer($id)
    {
        $check = ProducerFollow::where('producer_id', $id)->where('user_id', Auth::user()->id)->count();
        if ($check == 0) {
            $follow = new ProducerFollow();
            $follow->producer_id = $id;
            $follow->user_id = Auth::user()->id;
            $follow->save();
            return redirect()->back()->with('success', 'You are now following this producer');
        }

        return redirect()->back()->with('warning', 'You already follow this producer');
    }

    public function register() {
        return view('auth.register-producer');
    }

    public function registerSubmit(Request $request) {
        $name = $request->input('name');
        $email = $request->input('email');
        $password = $request->input('password');
        $confirmPassword = $request->input('password_confirmation');

        if (User::where('email', $email)->count() > 0) {
            return redirect()->back()
                ->with('warning', 'The provided email address is already in use.');
        } elseif ($password !== $confirmPassword) {
            return redirect()->back()
                ->with('warning', 'The provided passwords did not match. Please try again.');
        } else {
            $user = new User();
            $user->name = $name;
            $user->email = $email;
            $user->user_type = 'producer';
            $user->password = bcrypt($password);
            $user->save();
            Auth::loginUsingId($user->id);

            MailHelper::sendAccountConfirmation($user->id);

            return redirect()->route('dashboard')
                ->with('success', 'Producer account created, you will receive a confirmation email shortly');
        }
    }
}
