<?php

use Illuminate\Support\Facades\Route;



/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

// Client Area Start
// index page
Route::get('/','IndexController@index')->name('index');
// Index Page end
// Contact Page Start
Route::get('contact-us','ContactController@contact')->name('contact');
Route::post('query-store','ContactController@store_rec')->name('store.contact');

// Contact Page End
// Route::get('facebook','FacebookConrtoller@index')->name('facebook.index');

// Blog'
Route::get('blog','BlogController@blog')->name('blog');
Route::get('blog-detail{id}','BlogController@detail_blog')->name('read.blog');
// Blog End

// About
// Route::get('About','AboutController@about')->name('about');
Route::get('About','AboutController@get_team')->name('about');
// About End

// privacy policy
Route::get('our-polices','PoliciesController@policy')->name('policy');
// privacy policy end

// FAQs Start
Route::get('faq','FaqController@faq_c')->name('faq');
// FAQs End

// Gallery Starts
Route::get('Gallery','GalleryController@gallery')->name('gallery');
// Gallery Ends

// products start 
Route::get('products','ProductController@products')->name('products');
Route::get('catproduct{id}','ProductDetailController@detail_viewcategorys')->name('view.cproducts');
Route::get('detail{id}','ProductDetailController@detailpro')->name('detail.pro');
// products end
// Client Area End


// Admin Area
Route::group(['middleware'=>'auth'],function (){
Route::get('/admin','AdminController@admin')->name('admin');

// admin About Start
Route::get('/admin/aboutus','AdminAboutController@aboutus')->name('aboutus');
Route::get('/admin/aboutus/edit/{id}','AdminAboutController@edit_about')->name('edit.about');
Route::post('/admin/update/aboutus','AdminAboutController@update_about')->name('update.about');
// admin About end

// Admin Contact Start
Route::get('admin/contact','AdminContactController@admin_contact')->name('admin.contact');
Route::get('admin/contact/edit/{id}','AdminContactController@edit_contact')->name('edit.contact');
Route::post('/admin/contact/update/{id}','AdminContactController@update_contact')->name('update.contact');

// Admin Contact End

// Admin Category start
Route::get('admin/category','AdminCategoryController@adminCategory')->name('admin.category');
Route::get('admin/add/category','AdminCategoryController@add_category')->name('admin.Addcategory');
Route::post('admin/store/category','AdminCategoryController@store_categorys')->name('store.categoryss');
Route::get('/admin/category/edit/{id}','AdminCategoryController@edit_category')->name('edit.category');
Route::post('/admin/update/category','AdminCategoryController@update_category')->name('update.category');
Route::get('/admin/delete/category/{id}','AdminCategoryController@delete_category')->name('delete.category');
// Admin Category End

// Admin Logo Start
Route::get('admin/logo','AdminLogoController@admin_logo')->name('admin.logo');
Route::get('/admin/logo/edit/{id}','AdminLogoController@edit_logo')->name('edit.logo');
Route::post('/admin/update/logo','AdminLogoController@update_logo')->name('update.logo');
// Admin Logo End

// Admin Map Start
Route::get('admin/map','AdminMapController@admin_map')->name('admin.map');
Route::get('/admin/map/edit/{id}','AdminMapController@edit_map')->name('edit.map');
Route::post('/admin/update/map','AdminMapController@update_map')->name('update.map');
// Admin Map End

// Admin Team
Route::get('admin/team','AdminTeamController@admin_team')->name('admin.teams');
Route::get('admin/add/team-member','AdminTeamController@add_team')->name('admin.add.member');
Route::post('admin/team-member/add','AdminTeamController@store_member')->name('store.member');
Route::get('member/edit/{id}','AdminTeamController@edit_member')->name('edit.member');
Route::post('/admin/update/member','AdminTeamController@update_teams')->name('update.member');
Route::get('/admin/delete/member/{id}','AdminTeamController@delete_member')->name('delete.member');
// Admin Team


// Admin Products
Route::get('admin/products','AdminProductsController@admin_products')->name('admin.products');
Route::get('admin/add/products','AdminProductsController@add_products')->name('admin.addproducts');
Route::post('admin/products/stores','AdminProductsController@store_products')->name('store.products');
Route::get('/admin/products/edit/{id}','AdminProductsController@edit_products')->name('edit.products');
Route::post('/admin/update/product','AdminProductsController@update_products')->name('update.products');
Route::get('/admin/delete/product/{id}','AdminProductsController@delete_products')->name('delete.products');
// Admin Products End

// Social Media
Route::get('admin/social','AdminSocialController@admin_social')->name('admin.social');
Route::get('/admin/Social/edit/{id}','AdminSocialController@edit_social')->name('edit.social');
Route::post('/admin/update/$id','AdminSocialController@update_social')->name('update.social');
// Social Media Ends

//Admin slider Start
Route::get('admin/slider','AdminSliderController@slider')->name('admin.slider');
Route::get('/admin/add/admin-slider','AdminSliderController@add_slider')->name('admin.addslider');
Route::post('/admin/store/slider','AdminSliderController@store_slider')->name('store.slider');
Route::get('/admin/edit/slider','AdminSliderController@edit_slider')->name('edit.slider');
Route::post('/admin/update/slider{id}','AdminSliderController@update_slider')->name('update.slider');
Route::get('/admin/delete/slider{id}','AdminSliderController@delete_slider')->name('delete.slider');
// Admin Slider End

// Admin Blog start
Route::get('/admin/blog','AdminBlogController@blog')->name('admin.blog');
Route::get('admin/new-blog','AdminBlogController@add_blog')->name('admin.addblog');
Route::post('/admin/store/blog','AdminBlogController@store_blog')->name('store.blog');
Route::get('/admin/edit/blogs/{id}','AdminBlogController@edit_blog')->name('edit.blogs');
Route::post('/admin/update/admin/blog','AdminBlogController@update_blog')->name('update.blog');
Route::get('/admin/delete/blog/{id}','AdminBlogController@delete_blog')->name('delete.blog');
// Admin Blog End

// Admin Faq Start 
Route::get('/admin/faq','AdminFaqController@admin_faq')->name('admin.faq');
Route::get('admin/add/faq','AdminFaqController@add_faq')->name('admin.addfaq');
Route::post('/admin/store/faq','AdminFaqController@store_faq')->name('store.faq');
Route::get('/admin/edit/faq/{id}','AdminFaqController@edit_faq')->name('edit.faq');
Route::post('/admin/update/admin/faq','AdminFaqController@update_faq')->name('reset.faq');
Route::get('/admin/delete/faq/{id}','AdminFaqController@delete_faq')->name('delete.faq');
// Admin Faq End

// Amdin Gallery Start
Route::get('Admin/Gallery','AdminGalleryController@gallery')->name('admin.gallery');
Route::get('Add/Admin/Galley/image','AdminGalleryController@add_new')->name('add.gallery');
Route::post('Admin/Store/Image','AdminGalleryController@store_image')->name('store.image');
Route::get('/Admin/edit/Image/{id}','AdminGalleryController@edit_image')->name('edit.gallery');
Route::post('Admin/update/Gallery','AdminGalleryController@update_image')->name('update.gallery');
Route::get('Admin/Gallery/Delete/{id}','AdminGalleryController@delete_image')->name('delete.gallery');
// Admin Gallery End
// Admin Client Query
Route::get('/admin/client-query','AdminClientQueryController@client_query')->name('admin.client');
// Admin Client Query End

// Admin Filter Gallery
Route::get('/admin/filter-gallery','AdminFilterGalleryController@index')->name('admin.fgallery');
Route::get('/Admin/Add-Filter-Gallery','AdminFilterGalleryController@add_f_gallery')->name('admin.addfgallery');
// Admin Filter Gallery

Route::get('/home', 'HomeController@index')->name('home');

// Change The Admin Password
Route::get('/admin/password/','AdminUserController@changepwd')->name('admin.changepwd');
Route::post('/admin/update/password','AdminUserController@update_pass')->name('update.pass');
// Change The Admin Password End
});
 Auth::routes();


