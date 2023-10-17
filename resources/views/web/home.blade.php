@extends('web.layout')
@section('title','كنوز الطبيعة')
@section('description','كنوزالطبيعة للعلاج بي الأعشاب والضعف الجنسي ')
@section('keywords','الضعف الجنسي , العلاج بالاعشاب , زيوت الشعر')
@section('ogtitle','الضعف الجنسي , العلاج بالاعشاب , زيوت الشعر')
@section('ogimg',asset('web/img/logo.png'))
@section('ogdes', 'كنوزالطبيعة للعلاج بي الأعشاب والضعف الجنسي ')
@section('twitile', 'الضعف الجنسي , العلاج بالاعشاب , زيوت الشعر')
@section('twimg',asset('web/img/logo.png'))
@section('twdes', 'كنوزالطبيعة للعلاج بي الأعشاب والضعف الجنسي ')


@section('content')


<style>
  .carousel .carousel-indicators button {
   width: 15px;
   height: 15px;
   border-radius: 100%;
   background:#c0c0c0;
   border:0;
 }
 
 .carousel-indicators > button.active {
  width: 15px;
  height: 15px;
   border-radius: 10px;
  background:#000;
transition: width 1s;
   opacity: 1;
 }
</style>


<section style="margin-top:30px;">
<div class="container-fluid d-none d-sm-block d-sm-none  d-md-block" style="margin: 0 auto;">
 
<div class="row"> 
<div class="col-lg-1"> </div>
  <div style="" class="col-lg-10" style="margin: 0 auto;">
<div id="carouselExampleIndicators"  class="carousel slide" data-ride="carousel">
  <ol class="carousel-indicators">
  <button type="button" data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></button>
  <button type="button" data-target="#carouselExampleIndicators" data-slide-to="1"></button>
   </ol>
  <div class="carousel-inner" style="background:#000; border-radius:10px;">
    <div class="carousel-item active text-center"  style=" overflow: hidden; height:500px; " >
      <img class="d-block" src="{{asset('web/img/2.jpg')}}" style="margin: 0 auto;">
    </div>
    <div class="carousel-item" style=" overflow: hidden; height:500px;" >
      <img class="d-block" src="{{asset('web/img/1.jpg')}}"  style="margin: 0 auto;">
    </div>
  </div>
  </div>
 
</div>
</diV>
</diV>


 

<section>








<section class="py-5">
            <div class="container px-4 px-lg-5 mt-5">
               
            <div class="row gx-4 gx-lg-5 row-cols-2 row-cols-md-3 row-cols-xl-4 justify-content-center">
          
            @foreach($products as $product)
                    <div class="col mb-5">
                        <div class="card h-100">
                            <!-- Product image-->
                            <a href="{{route('single.product',[$product->id,$product->titleAR])}}">
           <img class="card-img-top" src="{{asset('image/'.$product->image)}}" alt="..." /> 
            </a>
                            <!-- Product details-->
                <div class="card-body p-4">
                    <div class="text-center">
                        <!-- Product name-->
                        <a href="{{route('single.product',[$product->id,$product->titleAR])}}">
                         <h5 class="fw-bolder" style="font-family: 'cairo3';">{{$product->titleAR}}</h5>
                        </a>
                        <!-- Product price-->
                        <div class="text-center">
                        <a href="{{route('single.product',[$product->id,$product->titleAR])}}">
                         <table style="width:100%;"> 
                             <tr>
                             <td style="font-family: 'cairo3'; font-size:17px; text-align:right; color:#803160;">   ج . م </td>
                            <td  style="font-family: 'cairo3'; font-size:17px; text-align:left; color:#803160;">  {{$product->price}}  </td>
                         
                            </tr>
                            </table>
                                </a>
                        </div>
                          
                    </div>
                </div>
                            <!-- Product actions-->
    <div class="card-footer p-4 pt-0 border-top-0 bg-transparent">
        <div class="text-center">
            <a   href="{{route('single.product',[$product->id,$product->titleAR])}}"
            style="background:#fff; color:#803160; font-size:16px; font-family: 'cairo3';  
            border:1px solid #803160; border-radius:7px; padding-left:30px;  padding-right:30px; padding-top:3px; padding-bottom:3px;"
            > 
            أطلب الأن
            </a>
            </div>
    </div>
                        </div>
                    </div>
            @endforeach
 
                </div>
            </div>
        </section>








<main>
    <section class="my-lg-14 my-8" style="direction: rtl;  font-family: 'cairo1';">
      <div class="container">
        <div class="row gx-4 gx-lg-5 row-cols-2 row-cols-md-3 row-cols-xl-4">
          <div class="col-md-6 col-lg-3  text-center">
            <div class="mb-8 mb-xl-0">
              <div class="mb-6"><img src="{{asset('web/img/clock.svg')}}" alt=""></div>
              <h3 class="h5 mb-3">
              التواصل مع العملاء
              </h3>
            </div>
          </div>
          <div class="col-md-6  col-lg-3 text-center">
            <div class="mb-8 mb-xl-0">
              <div class="mb-6"><img src="{{asset('web/img/gift.svg')}}" alt=""></div>
              <h3 class="h5 mb-3">ارضاء العملاء</h3>
            </div>
          </div>
          <div class="col-md-6 col-lg-3 text-center">
            <div class="mb-8 mb-xl-0">
              <div class="mb-6"><img src="{{asset('web/img/package.svg')}}" alt=""></div>
              <h3 class="h5 mb-3"> متابعة الطلبات</h3>
            </div>
          </div>
          <div class="col-md-6 col-lg-3 text-center">
            <div class="mb-8 mb-xl-0">
              <div class="mb-6"><img src="{{asset('web/img/refresh-cw.svg')}}" alt=""></div>
              <h3 class="h5 mb-3">الشحن لاي مكان</h3>
             </div>
          </div>
        </div>
      </div>
    </section>
  </main>
  



@endsection