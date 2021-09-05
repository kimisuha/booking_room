<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;

use Illuminate\Http\Request;
use App\User;
use App\Room;
use App\Clinfo;
use App\Clpay;
use App\Clhistory;

class AdminController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    //set a room with handle request
    function SetRoomView()
    {
        return view('SetRoom');
    }

    function SetRoom(Request $request)
    {
        $room = Room::where('maphong', '=', $request->maphong)->first();
        $user = User::where('id', '=', $request->id)->first();

        if ($room && $user) {
            $room->tinhtrang = 'hasUser';
            $room->save();

            $client = new Clhistory();

            $client->makh = $request->id;
            $client->tenkh = $request->name;
            $client->maphong = $request->maphong;
            $client->tenphong = $request->tenphong;
            $client->sophong = $room->sophong;
            $client->ngaygd = date('Y-m-d H:i:s');
            $client->ngaybd = $request->ngaybd;
            $client->tgsd = $request->tgsudng;
            $client->tongtien = $room->gia * $request->tgsudng;
            $client->httt = $request->ht;
            $client->save();

            return redirect('/admin');
        } else
            return redirect('/admin/set-room');
    }

    //remove a room
    function UnsetRoomView()
    {
        return view('UnsetRoomView');
    }

    function UnsetRoom(Request $request)
    {
        $room = Room::where('maphong', '=', $request->maphong)
            ->first();

        if (strcmp($request->tinhtrang, 'hasUser')) {
            $room->tinhtrang = 'noUser';
            $room->save();

            $client = Clhistory::where('maphong', '=', $request->maphong)->first();
            $client->delete();

            return redirect('/admin');
        }

        return redirect('/admin/unset-room');
    }

    function StatusView()
    {
        return view('StatusView');
    }

    //access status of room
    function Status(Request $request)
    {
        $room = Room::find($request->maphong);
        if ($room) {
            $room->tinhtrang = 'Crash';
            $room->save();

            return redirect('/admin');
        } else
            return redirect('/admin/status-room');
    }

    function AddNewView()
    {
        return view('NewRoom');
    }

    //add a new room for list
    function AddNew(Request $request)
    {
        $room = new Room();

        $room->tenphong = $request->name;
        $room->sophong = $request->roomN;
        $room->tinhtrang = 'noUser';
        $room->loai = $request->select;
        $room->gia = $request->price;

        $room->save();
        return $room;
    }

    function DelRoomView()
    {
        return view('DelRoom');
    }

    //remove a room from list
    function DelRoom(Request $request)
    {
        $room = Room::where('maphong', '=', $request->maphong);
        if (!$room) {
            $room->delete();
            return redirect('/admin');
        } else {
            $data = $request;
            return view('DelRoomError', compact('data'));
        }
    }

    function GetBillView()
    {
        return view('GetBill');
    }

    //make the bill
    function GetBill(Request $request)
    {
        //$user = Clhistory::where('makh', '=', $request->id)->first();
        //$user->get();
        $user = DB::table('clhistory')
            ->where('makh', '=', $request->id)
            ->get()
            ->first();

        if ($user) {
            return view('bill', compact('user'));
        }

        return view('bill', compact('request'));
    }

    function DelUserView()
    {
        return view('path.delete-form');
    }

    function DelUser(Request $request)
    {
        if ($request->id != null) {
            $user = User::where('id', '=', $request->id);
            $user->delete();

            $clinfo = Clinfo::where('makh', '=', $request->id);
            $clinfo->delete();

            $clpay = Clpay::where('makh', '=', $request->id);
            $clpay->delete();

            $clhs = Clhistory::where('makh', '=', $request->id);
            if ($clhs != null) {
                $clhs->delete();
            }

            return redirect('/admin');
        }
    }

    //get all info in table room and user
    function adminView()
    {
        $user = User::all();
        $room = Room::all();

        return view('admin', compact('user', 'room'));
    }
}
