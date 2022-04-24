<?php

namespace App\Http\Controllers\Front;

use App\Http\Requests\Subscription\StoreRequest;
use App\Models\Subscription;

class SubscriptionController extends BaseController
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
