<?php

namespace App\Http\Controllers;

use App\Model\ArticleModel;
use App\User;
use Illuminate\Database\Eloquent\ModelNotFoundException;
use Illuminate\Database\QueryException;
use Illuminate\Http\Exceptions\HttpResponseException;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Route;
use League\Flysystem\Exception;

class BlogController extends Controller
{

    public function getBlog(){

        $p = Input::get('p');

        if (!isset($p) || $p == 'undefined'){
            $p = '1';
        }
        $article = ArticleModel::select('id','title','updated_at')->orderBy('id','desc')->paginate('20',
            $columns=['id','updated_at','title','type'],$pageName = 'page', $page = $p);

        return $article;

    }

    //add form
    public function postBlog(){
        $data = Input::get();

        $params = [];
        //todo 等用户管理做完
        $params['user_id'] = (int)1;
        $params['title'] = $data['title'];
        $params['type'] = $data['type'];
        $params['content'] = json_encode($data['content']);

        if (empty($data['id'])){
            $ret = ArticleModel::create($params)->id;
        }else{
            $ret = ArticleModel::where('id',$data['id'])->update($params);

        }

        if (0 < $ret){
            return array('ret' => '0','msg' => '添加成功','detail' => $ret);
        }else{
            return array('ret' => '-1','msg' => '添加失败','detail' => '-1');
        }


    }



    public function getBlogDetail($id){
        $detail = ArticleModel::select('title','id','type','content')->where('id',$id)->first();

        return $detail;

    }


    public function aa(){
        $a = ['s','d','a'];
        return json_encode($a);
    }
//    public function index(){
//
//
////        $route = Route::current();
////        $name = Route::currentRouteName();
////        $action = Route::currentRouteAction();
//
////        echo '<pre>';
////        print_r($route);
////        echo '<br/>';
////        print_r($name);
////        echo '<br/>';
////        print_r($action);
////        exit;
////$a = '11212';
//        $article=ArticleModel::orderBy('updated_at','desc')->paginate('10');
//
//
//        return view('blog.blog',compact('article'));
//    }
//
//    public function show($id){
//        $article_id = $id;
////        var_dump(Auth::user());exit;
//        $article=ArticleModel::where('id',$article_id)->first();
//
//        $user_name=User::where('id',$article->user_id)->first()->name;
//
//        return view('blog.single',compact('article','user_name','article_id'));
//    }
//
//    public function create(){
//        $article = [];
//        return view('blog.create',compact('article'));
//    }
//
//    public function store(Request $request){
//
//        $data=$request->input();
//        $data=Input::get();
//        unset($data['_token']);
////        unset($data['images']);
//
//        //数据过滤
//
//        $data['user_id']=Auth::user()->id;
//
//        if (empty($data['id'])){
//            unset($data['id']);
//            $ret=ArticleModel::create($data)->id;
//        }else{
//            $ret=ArticleModel::where('id',$data['id'])->update($data);
//            if ($ret == '1'){
//                $ret = $data['id'];
//            }
//
//        }
//
//        if ($ret === NULL){
//            return array('ret'=>'-1','msg'=>'','detail'=>'-1');
//
//        }else{
//            return array('ret'=>'1','msg'=>'','detail'=>$ret);
//
//        }
//
//    }
//
//    //update
//    public function edit($id){
//        $article = ArticleModel::where('id',$id)->first()->toArray();
//        return view('blog.create',compact('article'));
//
//
//
//    }
}
