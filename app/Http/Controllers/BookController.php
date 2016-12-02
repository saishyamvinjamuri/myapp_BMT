<?php

namespace App\Http\Controllers;

use App\Book;
use App\Slot;
use App\User;
use Faker\Provider\DateTime;
use Illuminate\Http\Request;

use App\Http\Requests;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Session;


class BookController extends Controller
{

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Display a listing of the resource.
     *
     * dd($slot);
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        //get the user role type from users table, by using the user's email id
        $user_role = DB::table('users')
            -> where('email', '=', Auth::user()->email) -> value('role');

        //dd($user_role);
        //if user_role is admin then he can view all slots else only intended
        if( strcasecmp($user_role, 'user') == 0)
        {
            //the below sql operation ensures only the intended user slots are displayed
            $slots = DB::table('slots')
                -> where('email', '=', Auth::user()->email ) -> get();
            //dd($user_role);
            //passing all the slots in $slots object to a view
            return view('book.index')->with('slots', $slots);
        }
        elseif( strcasecmp($user_role, 'admin') == 0)
        {
            //dd($user_role);
            $slots = Slot::all();

            //passing all the slots in $slots object to a view
            return view('book.index')->with('slots', $slots);
        }

    }

    /**
     * Show the form for creating a new resource.
     *
     * renamed bookSlot with create
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('book.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //validating the fields

        $this -> validate($request, array(
                'bookedon' => 'required|after:today',
                'bookedfrom' => 'required',
        ));
        //dd($request);
        //storing values to the database
        $slot = new Slot(); //an instance to the model "Book"
        $auth = new Auth();

        //to eliminate the possibility to book slot on same day same time
        $toEliminateCollision = DB::table('slots')
                                    -> where([
                                        ['bookedfrom', '=', $request->bookedfrom],
                                        ['bookedon', '=', $request->bookedon],
                                    ])->count();

        //dd($request->bookedfrom);
        //store the values only if the $toEliminateCollisioin is '0'
        if($toEliminateCollision != 0)
        {
            //dd($request->bookedfrom);
            return view('slotFilled');
        }else{
            $slot->email = Auth::user()->email;
            $slot->bookedon = $request->bookedon;
            $slot->bookedfrom = $request->bookedfrom;

            $time = strtotime($slot->bookedfrom);
            $slot->bookedtill = date('H:i', strtotime('+20 minutes', $time));

            $slot->save();
            Session::flash('success','you have successfully booked your slot');
            //redirecting to view
            return redirect()->route('book.show', $slot->id);
        }

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $slot = Slot::find($id);
        return view('book.show')->with('slot',$slot);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //pulling up the requested id from database
        $slot = Slot::find($id);

        //passing the object $slot to the edit view
        return view('book.edit')->with('slot', $slot);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //validating the fields
        $this -> validate($request, array(
            'bookedon' => 'required|after:today',
            'bookedfrom' => 'required',
        ));
        //dd($request);
        //taking the update information from the edit page
        $slot = Slot::find($id);

        //to eliminate the possibility to book slot on same day same time
        $toEliminateCollisioin = DB::table('slots')
            -> where('bookedfrom', '=', $request->bookedfrom)->count();

        if($toEliminateCollisioin != 0)
        {
            return view('slotFilled');
        }else{
            //saving new timing to the database
            $slot->bookedon = $request->input('bookedon');
            $slot->bookedfrom = $request->input('bookedfrom');
            $time = strtotime($slot->bookedfrom);
            $slot->bookedtill = date("h:i", strtotime('+20 minutes' , $time));   //add(new \DateInterval('PT20M'));

            //commiting changes to database
            $slot->save();

            //displaying the updated information in show page
            return redirect()->route('book.show', $slot->id);
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //dd();
        //receive the $id from the edit page
        $slot = Slot::find($id);

        //delete the row from the database
        $slot->delete();
        //dd($slot);

        //display the updated information on the index page
        return redirect()->route('book.index');
    }
}
