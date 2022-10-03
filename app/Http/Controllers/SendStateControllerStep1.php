<?php

namespace App\Http\Controllers;

use App\Models\Post;
use App\Models\StatesSend;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
class SendStateControllerStep1 extends Controller
{

  public function createStep1(Request $request){
    $state = $request->session()->get('state');
    return view('/states/step1', compact('state'));
    }

  public function postCreateStep1(Request $request)
   {
      
    $validatedData = $request->validate([
      'stat_lang' => 'required',
      'stat_type' => 'required',
      'short_name' => 'required',
      'category' => 'required',
      
     ]);
      
    if(empty($request->session()->get('state')))
    {
      $state = new StatesSend();
      $state->fill($validatedData);
      $request->session()->put('state', $state);
    }else{
      $state = $request->session()->get('state');
      $state->fill($validatedData);
      $request->session()->put('state', $state);
  }  return redirect('/states/step2');
}

  public function createStep2(Request $request){
    $state = $request->session()->get('state');
    return view('/states/step2', compact('state'));
 }

  public function postCreateStep2(Request $request){
    $validatedData = $request->validate([
      'institute_ru' => 'required',
      'institute_en' => 'required',
      'institute_uz' => 'required',
   ]);
   
  if(empty($request->session()->get('state')))
  {
    $state = new StatesSend();
    $state->fill($validatedData);
    $state->session()->put('state', $state);
  }else{
    $state = $request->session()->get('state');
    $state->fill($validatedData);
    $request->session()->put('state', $state);
} return redirect('/states/step4');
}

 
  public function createStep4(Request $request){
    $state = $request->session()->get('state');
    return view('/states/step4', compact('state'));}

  public function postCreateStep4(Request $request){
   $validatedData = $request->validate([
    'annotation' => 'required|max:300'
   ]);

  if(empty($request->session()->get('state')))
  {
    $state = new StatesSend();
    $state->fill($validatedData);
    $state->session()->put('state', $state);
  }else{
    $state = $request->session()->get('state');
    $state->fill($validatedData);
    $request->session()->put('state', $state);
} return redirect('/states/step5');
}
  public function createStep5(Request $request){
    $state = $request->session()->get('state');
    return view('/states/step5', compact('state'));
}
  public function postCreateStep5(Request $request){
    $validatedData = $request->validate([
      'key_words' => 'required',
    ]);
  if(empty($request->session()->get('state')))
  {
    $state = new StatesSend();
    $state->fill($validatedData);
    $state->session()->put('state', $state);
  }else{
    $state = $request->session()->get('state');
    $state->fill($validatedData);
    $request->session()->put('state', $state);
} return redirect('/states/step6');
}
  public function createStep6(Request $request){
    $state = $request->session()->get('state');
    return view('/states/step6', compact('state'));
}
  public function postCreateStep6(Request $request){
    $validatedData = $request->validate([  
     'files'  => 'nullable|mimes:jpg,jpeg,png,gif,rtf,doc,docx,pdf,txt|max:10000',
  
    ]);

  if(empty($request->session()->get('state'))){
    $state = new StatesSend();
    $state->fill($validatedData);
    $state->session()->put('state', $state);
  }else{
    $state = $request->session()->get('state');
    $state->fill($validatedData);
    $request->session()->put('state', $state);}  
    
  if($request->isMethod('post') && $request->file('files')) {
    $name = $request->file('files')->getClientOriginalName();
    $state->files = substr($request->file('files')->store('/public/folder'),7);
  }  
    $state->user_id = Auth::id();
    //now check
    $state->save();
    return redirect('/states/step9');
  }
      
  public function createStep9(Request $request){
    $state = $request->session()->get('state'); 
    return view('/states/step9', compact('state'));}
   

  public function store(Request $request){
    $state = $request->session()->get('state');
    
    $state->save();
    session()->flash('Успешно!', 'Вы успешно отправили заявку!');
    return redirect(route('welcome'));
    }

    public function changeStatus(Request $request) {
      $state = StatesSend::find($request->state_id);
      $state->status = $request->status;
      $state->save();
      return response()->json(['success' => 'Статус успешно изменен']);
  }


  public function getState(Request $request){
    $states = StatesSend::where('user_id', auth()->id())->get();
    return view('/submited/index', compact('states'));
 }

  public function publication(){
    return view('/publication/index',[
      'states' => StatesSend::orderBy("created_at", "asc")->paginate(10),
      
]);
}

  public function pages(){
    return view('/publication/pages',[
      'states' => StatesSend::auth()->user(),
    ]);
  }
  
  public function show($id){
      $states = StatesSend::findOrFail($id);
      return view('publication.show',[
        'states' => $states,
      ]);
  }

  public function Post(){
    $posts = Post::orderBy('created_at', 'desc');
    return view('posts.index',[
      'posts' => $posts,
    ]);
}
  public function showPost($id){
    $posts = Post::findOrFail($id);
    return view('posts.show',[
      'posts' => $posts,
  ]);
}

  public function approve($id){
    $state = StatesSend::findOrFail($id);
    $state->status = 1; //Approved
    $state->save();
    return redirect()->back(); //Redirect user somewhere
}

  public function decline($id){
    $state = StatesSend::findOrFail($id);
    $state->status = 0; //Declined
    $state->save();
    return redirect()->back(); //Redirect user somewhere
  }
}
?>