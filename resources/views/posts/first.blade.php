@extends('layout.app')
@extends('partials.headertwo')
@section('title', 'Статьи')

@section('content')
@forelse($posts as $post)
<a href="{{route('posts.show', $post->id)}}" style="text-decoration:none;"><div class="card" z-default="10" z-hover="30" z-click="5" border-radius="10">
<font style="color: #000000">Автор: {{$post->title}}</font>
        <br>
        <font style="color: #171E83">Аннотация:</font><font style="color:#000000">{{$post->annotation}}</font>
        <br>
        <font style="color: #171E83" "&nbsp;">Страница:</font><font style="color:#000000">{{$post->preview}}</font>                                    <font style="color: #171E83"> Дата отправки: </font><font style="color:#000000">{{$post->created_at}}</font>

    <br>
</div>
</a>   
@empty
<h3 class="fw-bold fs-4" style="margin-left: 600px;">Опубликованных статей пока нет</h3>
@endforelse

<script>
function shadow(int) {
  return "0px "+int/5+"px "+int/3+"px #171E83"; //shadow equation. accurate to the material design standards (approximately)
}

function update() {
	var items = [
  	document.getElementsByClassName("card"),
    document.getElementsByTagName("card"),
  ];

  for(var list of items){
    var len = list.length;
    for (var el of list) {
      el.style.display = "block";
      if (!el.hasAttribute("no-margin")) //set default styles if no contradicting attributes exist
        el.style.margin = "25px";
      if (!el.hasAttribute("no-height"))
        el.style.height = "100px";
      if (!el.hasAttribute("no-transition"))
        el.style.transition = ".15s box-shadow";
      if (!el.hasAttribute("no-padding"))
        el.style.padding = "10px";
      if (!el.hasAttribute("no-border-radius"))
        el.style.borderRadius = "3px";
      doDepth(el); //looping through all of the elements
      doRadius(el);
    }
  }
}

function setDepth(int, obj, type) {
  if (int == null)
    return
  obj.style.boxShadow = shadow(int); //using shadow equation to set css style
  if (type === "hover")
    obj.setAttribute("z", obj.getAttribute("z-hover")); //for when click and hover interfere with eachother
}

function setRadius(int, obj) {
  if (int == null)
    return
  obj.style.borderRadius = int + "px";
}

function doDepth(i) {
  var ga = (x) => {
    return i.getAttribute(x);
  } //easier to call method alias

  //getting attributes
  var zh = ga("z-default") || 10;
  var zhc = ga("z-click") || 10;
  var zhh = ga("z-hover") || 10;
  setDepth(zh, i);
  //events of release (mouse leave, mouse up, etc)
  i.onmouseup = function() {
    setDepth(ga("z"), i)
  };
  i.onmouseout = function() {
    setDepth(zh, i)
  };

  //events of activate (mouse enter, mouse down, etc)
  i.onmousedown = function() {
    setDepth(zhc, i)
  };
  i.onmouseover = function() {
    setDepth(zhh, i, "hover")
  };
}

function doRadius(i) {
  var ga = (x) => {
    return i.getAttribute(x);
  } //easier to call method alias

  //getting attributes
  var zh = ga("border-radius") || 3;
  setRadius(zh, i);
}

window.addEventListener("load", update); //initial update //initial update
    </script>
@endsection
