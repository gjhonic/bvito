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
  public function index(Request $request){
    $ads = Ad::getFamouse();
    if(UserIdentity::isAuth($request)){
      return view('back/cont/index', ['ads' => $ads]);
    }else{
      return view('front/cont/index', ['ads' => $ads]);
    }
  }

  //Страница о нас
  public function about(Request $request){
    return view('cont/about');
  }

  //Страница контакты
  public function contact(Request $request){
    return view('homepages/contact');
  }

  //Личный кабинет
  public function me(Request $request){
    $user = UserIdentity::nowUser($request);
    if($user != null){
      return view('back/cont/me', ['user' => $user]);
    }else{
      return redirect('/signin');
    }
  }

  //Форма Регистрация
  public function signup(){
    return view('front/cont/signup');
  }

  //Форма Аутентфикации
  public function signin(){
    return view('front/cont/signin');
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
