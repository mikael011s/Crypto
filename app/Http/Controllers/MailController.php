<?php

namespace App\Http\Controllers;

use App\Http\Requests\MailStoreRequest;
use App\Models\Mail;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class MailController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View|\Illuminate\Http\Response
     */
    public function index()
    {
        return view('admin.mails.index', ['mails' => Mail::all()]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param MailStoreRequest $request
     * @return RedirectResponse
     */
    public function store(MailStoreRequest $request)
    {
        Mail::create([
            'user_id' => Auth::id(),
            'name' => $request->post('name'),
            'message' => $request->post('text'),
        ]);

        return redirect()->back()->with(['success' => 'Письмо успешно отправлено! Ожидайте ответа.']);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Mail  $mail
     * @return \Illuminate\Http\Response
     */
    public function show(Mail $mail)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Mail  $mail
     * @return \Illuminate\Http\Response
     */
    public function edit(Mail $mail)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param Request $request
     * @param  \App\Models\Mail  $mail
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Mail $mail)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Mail  $mail
     * @return \Illuminate\Http\Response
     */
    public function destroy(Mail $mail)
    {
        //
    }
}
