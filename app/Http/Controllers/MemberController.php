<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Member;

class MemberController extends Controller
{
    public function index()
    {
        return view('index')->with('members', Member::all());
    }

    public function addmember()
    {
        return view('addmember');
    }

    

    public function store(Request $request)
    {
        $member = new Member;

        $member->name          = $request->name;
        $member->email         = $request->input( 'email' );
        $member->membership_expiration          = $request->date;
        $member->save();

        return redirect()->route('index')->with('success', 'New Member added successfully!');
    }

    public function show($id)
    {
        

        return view('show')->with('member', $member);
    }

    public function editmember($id)
    {

        $member = Member::find($id);

        return view('editmember')->with('member', $member);
        
    }

    public function updatemember(Request $request)
    {
        $member = Member::find($request->id);
        
       if($member){
        $member->name          = $request->name;
        $member->email         = $request->input( 'email' );
        

        $member->save();

        return redirect()->route('index')->with('success', 'Member Info updated successfully!');
        }
   }

   public function destroy($id)
   {
       $member = Member::find($id);
       $member->delete();

       return redirect()->route('index')->with('success', 'Member deleted successfully!');
   }
}
