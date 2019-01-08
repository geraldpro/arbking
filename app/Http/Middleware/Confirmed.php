<?php

namespace App\Http\Middleware;

use Closure;
use Config;
use Illuminate\Support\Facades\Auth;
use URL;
class Confirmed
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next)
    {
        $user = Auth::user();
        if($user->confirmed == Config::get('constants.confirmation_status.pending')){
            $baseUrl = URL::to("/");
            $link = $baseUrl . "/user/reconfirm";
            $html = '<a href=' . $link . '> click to send a new verification email </a>';
            // $html = "&lt a href=\"" . $link ."\"> click to send a new verification email &lt /a>";
            // $request->session()->flash('fail', 'You need to confirm your account to start trading check your email account for the confirmation email or ' .$html );
            return redirect(Config::get('constants.role_name.' . $user->role->id) . '/dashboard')->withFail('You need to confirm your account to access this functionality check your email account for the confirmation email or ' .$html );
        }
        return $next($request);
    }
}
