<?php
namespace App\Http\Controllers;
use Socialite;
use App\User;
use Auth;
class FacebookController extends Controller
{
    public function redirectToFacebook(){
        return Socialite::driver('facebook')->redirect();
    }
    public function handleFacebookCallback(){
        try{
            $user = Socialite::driver('facebook')->user();
        }catch (Exception $e) {
            return redirect('auth/facebook');
        }
        $authUser = $this->findOrCreateUser($user);

        Auth::login($authUser, true);

        return redirect()->route('home');
    }
    private function findOrCreateUser($facebookUser){
        $authUser = User::where('social_id', $facebookUser->id)->first();

        if ($authUser){
            return $authUser;
        }

        return User::create([
            'name' => $facebookUser->name,
            'social_id' => $facebookUser->id,
            'avatar' => $facebookUser->avatar,
            'email' => $facebookUser->email,
            

        ]);
    }
}