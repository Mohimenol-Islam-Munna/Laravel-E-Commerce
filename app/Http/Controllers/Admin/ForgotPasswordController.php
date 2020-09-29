<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Http\JsonResponse;
use Illuminate\Support\Facades\Password;
use Illuminate\Validation\ValidationException;




class ForgotPasswordController extends Controller
{
    
    public function showLinkRequestForm()
    {
        return view('admin.passwords.email');
    }





    public function sendResetLinkEmail(Request $request)
    {
        $this->validateEmail($request);

        
        $response = $this->broker()->sendResetLink(
            $this->credentials($request)
        );

        return $response == Password::RESET_LINK_SENT
                    ? $this->sendResetLinkResponse($request, $response)
                    : $this->sendResetLinkFailedResponse($request, $response);
    }



    
     protected function validateEmail(Request $request)
    {
        $request->validate(['email' => 'required|email']);
    }

    
    protected function credentials(Request $request)
    {
        return $request->only('email');
    }

   
    protected function sendResetLinkResponse(Request $request, $response)
    {
        return $request->wantsJson()
                    ? new JsonResponse(['message' => trans($response)], 200)
                    : back()->with('status', trans($response));
    }

    
    protected function sendResetLinkFailedResponse(Request $request, $response)
    {
        if ($request->wantsJson()) {
            throw ValidationException::withMessages([
                'email' => [trans($response)],
            ]);
        }

        return back()
                ->withInput($request->only('email'))
                ->withErrors(['email' => trans($response)]);
    }

    
    public function broker()
    {
        return Password::broker('admins');
    }
}
