<?php

namespace App\Http\Controllers\SocialLite;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests\StoreMessageRequest;
use App\Model\Listings;
use App\Model\SocialLite\Message;
use Illuminate\Support\Facades\Auth;
use App\User;

class MessageController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        dd('Run');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Listings $listing)
    {

        return view('SocialLite\Message\create', compact('listing'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreMessageRequest $request)
    {
        $message = Message::create([
            'send_user_id' => $request['send_user_id'], 'user_id' => Auth::id()
        ]);
        return redirect()->route('MainPage')->with('success', 'Собщение отправлено спасибо за внимание');
    }


    /**
     * show
     *получает собщения пользователя которые он получил и отслал перегонят в многомерный масив соеденяя т отдает на редеренг
     * @return void
     */
    public function show()
    {
        $messages = Message::where('user_id', '=', Auth::id())->get();
        $messageSent = Message::where('send_user_id', '=', Auth::id())->get();

        foreach ($messages as $message) {
            $message['get'] = true;
            $messageOne[$message['send_user_id']][] = $message;
        }
        foreach ($messageSent as $message) {
            $messageSentOne[$message['user_id']][] = [$message];
        }


        foreach ($messageOne as $key => $values) {
            foreach ($values as $value) {
                $frontendMessage[$key][] = $value;
            }
        }

        foreach ($messageSentOne as $key => $values) {
            foreach ($values as $value) {
                $frontendMessage[$key][] = $value;
            }
        }
        dd($frontendMessage);
        return view('SocialLite.Message.show', compact('frontendMessage'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
