<?php

namespace App\Http\Controllers\Home;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\BlogCategory;

class BlogCategoryController extends Controller
{
    public function AllBlogCategory(){

        $blogcategory = BlogCategory::latest()->get();
        return view('admin.blog_category.blog_category_all',compact('blogcategory'));

    } // End Method


    public function AddBlogCategory(){

        return view('admin.blog_category.blog_category_add');
    } // End Method


    public function StoreBlogCategory(Request $request){
  
         
            BlogCategory::insert([
                'blog_category' => $request->blog_category,               

            ]); 

            $notification = array(
            'message' => 'Blog Category Inserted Successfully', 
            'alert-type' => 'success'
        );

        return redirect()->route('all.blog.category')->with($notification);


    } // End Method


    public function EditBlogCategory($id){

        $blogcategory = BlogCategory::findOrFail($id);
        return view('admin.blog_category.blog_category_edit',compact('blogcategory'));

    } // End Method


    public function UpdateBlogCategory(Request $request,$id){

         BlogCategory::findOrFail($id)->update([
                'blog_category' => $request->blog_category,               

            ]); 

            $notification = array(
            'message' => 'Blog Category Updated Successfully', 
            'alert-type' => 'success'
        );

        return redirect()->route('all.blog.category')->with($notification);

    } // End Method

    public function DeleteBlogCategory($id){

        BlogCategory::findOrFail($id)->delete();

         $notification = array(
            'message' => 'Blog Category Deleted Successfully', 
            'alert-type' => 'success'
        );

        return redirect()->back()->with($notification);       

    } // End Method



}
 