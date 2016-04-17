<?php

namespace App\Http\Controllers;

use App\CreatoriInvite;
use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class HomeController extends Controller
{
    /**
     * Show the welcome page (landing page).
     *
     * @return Response
     */
    public function welcome()
    {
        return view('pages.welcome');
    }

    /**
     * Show the about page.
     *
     * @return Response
     */
    public function about()
    {
        return view('pages.about');
    }

    /**
     * Show the contact page.
     *
     * @return Response
     */
    public function contact()
    {
        return view('pages.contact');
    }

    /**
     * Show the details about Belle-Idee.
     *
     * @return Response
     */
    public function idee()
    {
        return view('idee.tour');
    }

    /**
     * Show the form to create a new Creatori invite.
     *
     * @return Response
     */
    public function creatori()
    {
        return view('creatori.invite');
    }

    /**
     * Store a new invite request for Creatori.
     *
     * @param  Request  $request
     * @return Response
     */
    public function storeCreatoriInvite(Request $request)
    {
        $this->validate($request, [
            'email' => 'required|email|unique:creatori_invites',
        ]);

        $creatoriInvite = new CreatoriInvite($request->all());
        $creatoriInvite->save();

        return redirect ('/thankyou');
    }
    
    /**
     * Show the form to create a new Studenti invite.
     *
     * @return Response
     */
    public function studenti()
    {
        return view('studenti.invite');
    }

    /**
     * Store a new invite request for Studenti.
     *
     * @param  Request  $request
     * @return Response
     */
    public function storeStudentiInvite(Request $request)
    {
        $this->validate($request, [
            'email' => 'required|email|unique:creatori_invites',
        ]);

        $creatoriInvite = new CreatoriInvite($request->all());
        $creatoriInvite->save();
        
        return redirect ('/thankyou');
    }

    /**
     * Show the thank you page for requesting an invite.
     *
     * @return Response
     */
    public function thankyou()
    {
        return view('pages.thankyou');
    }


}
