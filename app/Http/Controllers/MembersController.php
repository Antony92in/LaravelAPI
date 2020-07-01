<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Member;

class MembersController extends Controller
{	

	public function addMember(Request $req)
	{
		$member = new Member;

		$member->event_id = $req->event_id;

		$member->first_name = $req->first_name;

		$member->second_name = $req->second_name;

		$member->email = $req->email;

		$member->save();
	}

	public function allMembers()
	{
		$members = Member::all();

		$retmem = [];

		foreach ($members as $item) {
			$retmem[] = $item;
		}

		return $retmem;
	}


	public function upMember(Request $req)
	{
		$member = Member::find($req->id);

		$member->first_name = $req->first_name;

		$member->second_name = $req->second_name;

		$member->email = $req->email;

		$member->save();
	}

	public function deleteMember(Request $req)
	{
		$member = Member::find($req->id);

		$member->delete();
	}

	public function getMemberByEmail(Request $req)
	{
		$member = Member::where('email', $req->email)->first();

		return $member;
	}

	public function getMemberByEvent(Request $req)
	{
		$members = Member::where('event_id', $req->event_id)->get();

		return $members;
	}
}