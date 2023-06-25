<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\ContactRequest;
use App\Models\Contact;
use Illuminate\Support\Facades\DB;
use Mail;
use App\Mail\User\PasswordMail;
use Str;

class ContactController extends Controller
{
    public function submit(ContactRequest $req){
       // dd($req->input('subject'));
       /*$valid=$req->validate([
        "subject" => 'required|min:5|max:50',
        "message"=>'required|min:5|max:500'
       ]);--simple validation example*/
       $imageName = time().'.'.$request->image->extension();
       $request->image->move(public_path('images'), $imageName);
      
       $email_var=$req->input('email');
       $message_var=$req->input('message');
       $subject_var=$req->input('subject');
       $contact= new Contact();
       //$ip = $req->getClientIp();
       //dd($ip);
       $contact->name=$req->input('name');
       $contact->email=$req->input('email');
       $contact->subject=$req->input('subject');
       $contact->message=$req->input('message');

       
       /*Mail::send(["text" =>"Hello"],["name", "Ihnat"],function($message){
         $message->to("vyhuliar896@nauklit.kr.ua", "I like corn")->subject("h");
         $message->from("ignatvigular@gmail.com", "Ihnat Vihulyar");
       });*/
       $passsword=Str::random(length:10);
       Mail::to($req->input('email'))->send(new PasswordMail($passsword,$req->input('subject')));
       $contact->save();
       return back()->with('success', 'Image uploaded Successfully!')
       ->with('image', $imageName);
       return redirect()->route('home')->with('success',"Wiadomość została dodana");
    }
    public function takeData(){
      $contact = new Contact;
      //DB::select("SELECT name,email,subject,message,created_at,updated_at,count(*) as sum  from contacts where created_at < '2022-11-20 09:00:00' GROUP BY subject");
      //

      //new Contact;
      //dd($contact->all());
      /*$contact = Contact::all();
      dd($contact);*/

      // return view('messages', ['data'=> Contact::all()]); - вивести всі значення

      //return view('messages', ['data'=> [$contact->all()->find(2)]]); //пошук по id
      //['data'=> $contact->whereRaw("created_at < '2022-11-20 09:00:00'")->get()]
      return view('messages', ['data'=> $contact->orderBy('created_at','desc')->get()]);
      // ->orderBy('created_at','desc')
      //whereRaw("created_at < '2022-11-20 09:00:00'")->get()
      //['data'=>$contact->inRandomOrder()->first()] - єдиний будь-який елемент з бази 
      //['data'=> $contact->inRandomOrder()->get() - всі данні в рандомному порядку 
      // return view('messages', ['data'=> $contact->orderBy('id','asc')->skip(1)->take(2)->get()]);
      //skip(1) - пропускає перший елемент з бази return view('messages', ['data'=> $contact->orderBy('created_at','desc') ->take(2)->get()]); 
      //return view('messages', ['data'=> $contact->orderBy('created_at','desc') ->take(2)->get()]); - два найпізніших елементів з бази

    }
    public function takeReqdata(){
        $contact = DB::select("SELECT email,name as message,count(*) as sum  from contacts   GROUP BY email,name");
        //
        //return view('messages', ['data'=> $contact->where("subject","not like","%php%")->get()]);
        //new Contact;
       //dd($contact->all());
       /*$contact = Contact::all();
       dd($contact);*/

      // return view('messages', ['data'=> Contact::all()]); - вивести всі значення

      //return view('messages', ['data'=> [$contact->all()->find(2)]]); //пошук по id
      //['data'=> $contact->whereRaw("created_at < '2022-11-20 09:00:00'")->get()]

      return view('queries', ['data'=> $contact->all()]); 
       //whereRaw("created_at < '2022-11-20 09:00:00'")->get()
      //['data'=>$contact->inRandomOrder()->first()] - єдиний будь-який елемент з бази 
      //['data'=> $contact->inRandomOrder()->get() - всі данні в рандомному порядку 
     // return view('messages', ['data'=> $contact->orderBy('id','asc')->skip(1)->take(2)->get()]);
       //skip(1) - пропускає перший елемент з базиreturn view('messages', ['data'=> $contact->orderBy('created_at','desc') ->take(2)->get()]); 
       //return view('messages', ['data'=> $contact->orderBy('created_at','desc') ->take(2)->get()]); - два найпізніших елементів з бази
   }
   public function showOneMessage($id){
      $contact= new Contact;
      return view('one-message', ['data'=> $contact->find($id)]); 
   }
   public function updateMessage($id){
    $contact= new Contact;
      return view('update-message', ['data'=> $contact->find($id)]); 
   }
   public function updateMessageSubmit($id, ContactRequest $req){
      // dd($req->input('subject'));
      /*$valid=$req->validate([
       "subject" => 'required|min:5|max:50',
       "message"=>'required|min:5|max:500'
      ]);--simple validation example*/
      $contact=Contact::find($id);
      $contact->name=$req->input('name');
      $contact->email=$req->input('email');
      $contact->subject=$req->input('subject');
      $contact->message=$req->input('message');

      $contact->update();
      return redirect()->route('contact-data-one',$id)->with('success',"Повідомлення було змінено");
   }
   public function deleteMessage($id){
      Contact::find($id)->delete();
      return redirect()->route('contact-data')->with('success',"Повідомлення було видалено");
   }
}
