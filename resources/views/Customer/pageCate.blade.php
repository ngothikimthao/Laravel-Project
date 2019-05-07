@include('Page.header')
<div class="container-fluid">
	<nav>
  <div class="nav nav-tabs" id="nav-tab" role="tablist">
    @foreach($loai_sp as $loai)
    <a class="nav-item nav-link active" id="nav-home-tab" data-toggle="tab" href="{{ route('danhmuc',$loai->id)}}" role="tab" aria-controls="nav-home" aria-selected="true">{{$loai->name}}</a>
    @endforeach
  </div>
</nav>
<div class="tab-content" id="nav-tabContent">
  <div class="tab-pane fade show active" id="nav-home" role="tabpanel" aria-labelledby="nav-home-tab">...</div>
  <div class="tab-pane fade" id="nav-profile" role="tabpanel" aria-labelledby="nav-profile-tab">...</div>
  <div class="tab-pane fade" id="nav-contact" role="tabpanel" aria-labelledby="nav-contact-tab">...</div>
</div>


</div>

@include('Page.footer')
@include('Page.script')