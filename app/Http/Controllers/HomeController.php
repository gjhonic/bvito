<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\MyUser;
use App\Models\Ad;
use App\Models\UserIdentity;

class HomeController extends Controller{


  //Главная страница
  public function index(){
    $ads = Ad::getFamouse();
    return view('homepages/index', ['ads' => $ads]);
  }

  //Страница о нас
  public function about(){
    return view('homepages/about');
  }

  //Страница контакты
  public function contact(){
    return view('homepages/contact');
  }

  //Личный кабинет
  public function me(Request $request){
    $user = UserIdentity::nowUser($request);
    if($user != null){
      return view('homepages/me', ['user' => $user]);
    }else{
      return redirect('/signin');
    }

  }

  //Форма Регистрация
  public function signup(){
    return view('homepages/signup');
  }

  //Форма Аутентфикации
  public function signin(){
    return view('homepages/signin');
  }

  //Метод разлогирования
  public function signout(Request $request){
    UserIdentity::removeUser($request);
    return redirect('/index');
  }

  //Метод сохранения нового пользователя
  public function signup_proc(Request $request){
    $user = new MyUser();
    $user->name = $request->name;
    $user->username = $request->username;
    $user->password = $request->password;

    if($user->user_save()){
      UserIdentity::setUserIdentity($request, $user);
      return redirect('/me');
    }else{
      return redirect('/signup');
    }
  }

  //Метод аутентификации
  public function signin_proc(Request $request){

    if($request->username != null || $request->password != null){
      $user = MyUser::where('username', $request->username)->first();
      if($user->password == $request->password){
        UserIdentity::setUserIdentity($request, $user);
        return redirect('/me');
      }
    }

    return redirect('/signin');
  }

}
