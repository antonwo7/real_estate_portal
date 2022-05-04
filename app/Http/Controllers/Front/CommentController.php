<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class CommentController extends Controller
{
    public function store(StoreRequest $request)
    {
        $data = $request->validated();

        try {
            $subscription = Subscription::where('email', $data['email'])->first();
            if(!$subscription){
                Subscription::create(['email' => $data['email']]);

                $result = 'success';
            }else{
                $result = 'exist';
            }

        }catch(\Exception $exception){
            $result = 'error';
        }

        return redirect('/')->with(['subscription' => $result]);
    }
}
