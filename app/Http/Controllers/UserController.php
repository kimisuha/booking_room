<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Auth;
use App\Clinfo;
use App\Clpay;
use App\Room;
use App\User;
use App\Clhistory;
use Clpay as GlobalClpay;


class UserController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    //a controller for view of webpage!
    protected function homepage_view()
    {
        $view = DB::table('room')->get();

        return view('userpage', compact('view'));
    }

    //a controller for user page view
    protected function use_view()
    {
        $view = DB::table('users')
            ->join('clinfo', 'clinfo.makh', '=', 'users.id')
            ->join('clhistory', 'clhistory.makh', '=', 'users.id')
            ->join('clpay', 'clpay.makh', '=', 'users.id')
            ->get([
                'clinfo.hotenkh',
                'clinfo.ngaysinhkh',
                'clinfo.sdtkh',
                'clinfo.emailkh',
                'clpay.sotkkh',
                'clpay.loaitkkh'
            ]);

        return view('user_page', compact('view'));
    }

    //return a view of set room page
    protected function BookRoomView()
    {
        return view('book-room');
    }

    //create new row
    protected function BookRoom(Request $request)
    {
        $room = Room::find($request->maphong);
        $user = new Clhistory();

        $room->tinhtrang = 'hasUser';
        $room->save();

        $user->maphong = $request->maphong;
        $user->makh = $request->makh;
        $user->tenphong = $room->tenphong;
        $user->tgsudung = $request->tgsudung;
        $user->ngaybd = $request->ngaybd;
        $user->htthanhtoan = $request->ht;
        $user->save();
    }

    //delete row
    protected function unset_room(Request $request)
    {
        /* DB::table('clhistory')
            ->where(
                [
                    'makh', '=', $request->makh,
                    'ngaybd', '=', $request->ngaybd,
                    'maphong', '=', $request->maphong
                ],
            )
            ->delete();
        return DB::table('room')
            ->join('clhistory', 'clhistory.maphong', '=', 'room.maphong')
            ->where('maphong', '=', $request->maphong)
            ->update([
                'room.tinhtrang' => false
            ]);*/

        $room = Room::find($request->maphong);
        $user = Clhistory::find($request->id);

        $room->tinhtrang = 'noUser';
        $room->save();

        $user->delete();
        $user->save();
    }

    //just print
    protected function get_the_bill(Request $request)
    {
        /*$bill = DB::table('clhistory')
            ->join('room', 'room.maphong', '=', 'clhistory.maphong')
            ->where('clhistory.makh', '=', $request->makh)
            ->get([
                'clhistory.makh',
                'room.maphong',
                'room.tenphong',
                'clhistory.ngaybd',
                'clhistory.tgsudung',
                'clhistory.tongtien',
                'clhistory.htthanhtoan'
            ]);*/

        $user = Clhistory::find($request->id);
        $room = Room::find($request->maphong);

        if ($user != null) {
            $data = $user->get('makh', 'maphong', 'ngaygd', 'tenphong', 'tgsudung', 'htthanhtoan');
            $price = $room->get('gia') * $user->get('tgsudung');

            return view('bill', compact('data', 'price'));
        }

        return view('path.error', compact('request'));
    }

    //update a row
    protected function update_normal_info(Request $request)
    {
        $user = Clinfo::find($request->id);
        $pay = Clpay::find($request->id);

        $user->sdtkh = $request->phone;
        $user->emailkh = $request->email;
        $user->save();

        $pay->sotkkh = $request->sotk;
        $pay->loaitkkh = $request->loaitk;
        $pay->save();

        /*foreach ($request->nbfields as $fields) {
            DB::table($fields->table)
                ->find($request->id)
                ->update([
                    $fields->column => $fields->value
                ]);
        }*/
    }

    protected function RemoveUserView()
    {
        if (Auth::check()) {
            $id = Auth::id();

            $user = DB::table('clinfo')
            ->join('clpay', 'clpay.makh', '=', 'clinfo.makh')
            ->where('clpay.makh', '=', $id)
            ->get()
            ->values();

            return view('RemoveUser', compact('user'));
        }
    }

    //delete a row in users table and more infomation in anothers table
    protected function RemoveUser(Request $request)
    {
        $user = User::find($request);
        $user->delete();
        $user->delete();

        return view('path.attention', compact('request'));
        
    }

    protected function CreateInfoView()
    {
        return view('CreateInfo');
    }

    //create new row in multitable
    protected function CreateInfo(Request $request)
    {
        if (Auth::check()) {
            $data = $request->all();
            $user = Auth::user();

            $clinfo = new Clinfo();


            $clinfo->makh = $user->id;
            $clinfo->hotenkh = $data['name'];
            $clinfo->ngaysinhkh = $data['dateborn'];
            $clinfo->socmkh = $data['peopleid'];
            $clinfo->sdtkh = $data['yourphone'];
            $clinfo->emailkh = $user->email;
            $clinfo->save();

            $clpay = new Clpay();
            $clpay->makh = $clinfo->makh;
            $clpay->sotkkh = $data['accountnumber'];
            $clpay->loaitkkh = $data['accounttype'];
            $clpay->save();

            return redirect('/');
        } else return redirect('/register');
    }

    /* protected function checkview()
    {
        if (Auth::check()) {
            $data = Auth::user()->id;
            return view('check', compact('data'));
        }
    }*/
}
