@include('Page.header')
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
  <div class="tab-pane fade show active" id="nav-{{$loai->id}}" role="tabpanel" >{{$loai->name}}</div>
   @else
    <div class="tab-pane fade" id="nav-{{$loai->id}}" role="tabpanel">{{$loai->name}}</div>
    @endif	
  @endforeach
</div> 


</div> 



@include('Page.footer')
@include('Page.script')