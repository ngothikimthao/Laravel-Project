@include('Page.header')
<br><br><br><hr>
<nav>
  <div class="nav nav-tabs" id="nav-tab" role="tablist">
    @foreach($loai_sp as $loai)
    @if($loai->id == 1)
    <a class="nav-item nav-link active"  data-toggle="tab" href="#nav-{{$loai->id}}" role="tab" aria-selected="true">{{$loai->name}}</a>
    @else
    <a class="nav-item nav-link" data-toggle="tab" href="#nav-{{$loai->id}}" role="tab" aria-selected="false">{{$loai->name}}</a>
    @endif	
    @endforeach
  </div>

<div class="tab-content" id="nav-tabContent">
	@foreach($loai_sp as $loai)
	@if($loai->id == 1)
  <div class="tab-pane fade show active" id="nav-{{$loai->id}}" role="tabpanel" >{{$loai->name}}
  	<br>
  	<div class="row">
		<div class="col-2">
		  Danh mục sản phẩm
		  <hr>
		  <div id="mainnavq"">
  <ul>
    <li class="thefirst"><a href="#">Chuyen muc</a>
      <ul class="sub-menu">
        <li><a href="#">Video huong dan</a></li>
        <li><a href="#">Wordpress</a>
          <ul class="sub-menu2">
            <li><a href="#">item 1</a></li>
            <li><a href="#">item 2</a></li>
            <li><a href="#">item 3</a></li>
          </ul>
        </li>
        <li><a href="#">Hosting-Domain</a></li>
        <li><a href="#">SEO</a></li>
        <li><a href="#">Tai nguyen</a></li>
        <li><a href="#">Ma nguon mo</a></li>
        <li><a href="#">Web development</a></li>
        <li><a href="#">Cong cu</a>
        <ul class="sub-menu2">
            <li><a href="#"> item 1</a></li>
            <li><a href="#"> item 2</a>
              <ul class="sub-menu3">
                <li><a href="#">item 1.a</a></li>
                <li><a href="#">item 2.a</a></li>
                <li><a href="#">item 3.a</a></li>
              </ul>
            </li>
            <li><a href="#">item 3</a></li>
          </ul>
        </li>
      </ul>
    </li>
    <li><a href="#">Tai nguyen</a></li>
    <li><a href="#">Danh gia</a></li>
    <li><a href="#">Ma giam gia</a></li>
    <li><a href="#">Hoi dap</a></li>
    <li><a href="#">Bat dau</a></li>
  </ul>
</div>
		</div>
		<div class="col-10" style="background-color: #eff3f7;" >
		 <img style="width: 200px; height: 200px; float: left; margin: 30px;" src="img/products/img1.jpg" class="rounded float-left" alt="...">
		 <img style="width: 200px; height: 200px; float: left; margin: 30px;" src="img/products/img1.jpg" class="rounded float-left" alt="...">
		 <img style="width: 200px; height: 200px; float: left; margin: 30px;" src="img/products/img1.jpg" class="rounded float-left" alt="...">
		  <img style="width: 200px; height: 200px; float: left; margin: 30px;" src="img/products/img1.jpg" class="rounded float-left" alt="...">

		 <img style="width: 200px; height: 200px; float: left; margin: 30px;" src="img/products/img1.jpg" class="rounded float-left" alt="...">
		 <img style="width: 200px; height: 200px; float: left; margin: 30px;" src="img/products/img1.jpg" class="rounded float-left" alt="...">
		 <img style="width: 200px; height: 200px; float: left; margin: 30px;" src="img/products/img1.jpg" class="rounded float-left" alt="...">
		  <img style="width: 200px; height: 200px; float: left; margin: 30px;" src="img/products/img1.jpg" class="rounded float-left" alt="...">
		
		</div>
  </div>
  </div>
   @else
    <div class="tab-pane --fade" id="nav-{{$loai->id}}" role="tabpanel">{{$loai->name}}
    	<br>
  		<div class="row">
		<div class="col-2">
		  Danh mục sản phẩm
		  <hr>
		  <div id="mainnavq"">
  <ul>
    <li class="thefirst"><a href="#">Chuyen muc</a>
      <ul class="sub-menu">
        <li><a href="#">Video huong dan</a></li>
        <li><a href="#">Wordpress</a>
          <ul class="sub-menu2">
            <li><a href="#">item 1</a></li>
            <li><a href="#">item 2</a></li>
            <li><a href="#">item 3</a></li>
          </ul>
        </li>
        <li><a href="#">Hosting-Domain</a></li>
        <li><a href="#">SEO</a></li>
        <li><a href="#">Tai nguyen</a></li>
        <li><a href="#">Ma nguon mo</a></li>
        <li><a href="#">Web development</a></li>
        <li><a href="#">Cong cu</a>
        <ul class="sub-menu2">
            <li><a href="#"> item 1</a></li>
            <li><a href="#"> item 2</a>
              <ul class="sub-menu3">
                <li><a href="#">item 1.a</a></li>
                <li><a href="#">item 2.a</a></li>
                <li><a href="#">item 3.a</a></li>
              </ul>
            </li>
            <li><a href="#">item 3</a></li>
          </ul>
        </li>
      </ul>
    </li>
    <li><a href="#">Tai nguyen</a></li>
    <li><a href="#">Danh gia</a></li>
    <li><a href="#">Ma giam gia</a></li>
    <li><a href="#">Hoi dap</a></li>
    <li><a href="#">Bat dau</a></li>
  </ul>
</div>
		</div>
		<div class="col-10" style="background-color: #eff3f7;" >
		 <img style="width: 200px; height: 200px; float: left; margin: 30px;" src="img/products/img1.jpg" class="rounded float-left" alt="...">
		 <img style="width: 200px; height: 200px; float: left; margin: 30px;" src="img/products/img1.jpg" class="rounded float-left" alt="...">
		 <img style="width: 200px; height: 200px; float: left; margin: 30px;" src="img/products/img1.jpg" class="rounded float-left" alt="...">
		  <img style="width: 200px; height: 200px; float: left; margin: 30px;" src="img/products/img1.jpg" class="rounded float-left" alt="...">

		 <img style="width: 200px; height: 200px; float: left; margin: 30px;" src="img/products/img1.jpg" class="rounded float-left" alt="...">
		 <img style="width: 200px; height: 200px; float: left; margin: 30px;" src="img/products/img1.jpg" class="rounded float-left" alt="...">
		 <img style="width: 200px; height: 200px; float: left; margin: 30px;" src="img/products/img1.jpg" class="rounded float-left" alt="...">
		  <img style="width: 200px; height: 200px; float: left; margin: 30px;" src="img/products/img1.jpg" class="rounded float-left" alt="...">
		
		</div>
  </div>
    </div>
    @endif	
  @endforeach
</div> 


</div> 



@include('Page.footer')
@include('Page.script')