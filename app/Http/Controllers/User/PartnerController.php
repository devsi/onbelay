<?php

namespace App\Http\Controllers\User;

use Illuminate\Http\Request;
use App\Models\Request as PartnerRequest;
use App\Http\Requests\StoreRequest;
use App\Http\Controllers\Controller;

class PartnerController extends Controller
{
    /**
     * Show the partner request page
     */
    public function show()
    {
        $sidebar = 'profile-card';
        return view('user.partner-request', compact('sidebar'));
    }

    /**
     * Request a partner
     *
     * @param StoreRequest $request
     */
    public function submit(StoreRequest $request)
    {
        $properties = $request->validated();

        $date = $properties['date'];
        $time = $properties['time'];

        $carbon = new \Carbon\Carbon($date.' '.$time);

        $properties['title'] = '';
        $properties['user_id'] = \Auth::id();
        $properties['request_time'] = $carbon->format('Y-m-d H:i:s');
        $properties['discipline'] = array_sum($properties['discipline']);

        PartnerRequest::create($properties);

        return view('user.partner-request')->with('message', 'Your request has been submitted.');
    }
}