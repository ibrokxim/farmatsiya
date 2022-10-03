@extends('layout.app_send')
@include('partials.headertwo')
@section('title', 'Сообщения')


@section('content')

<style text="style/css">a:hover {
    background-color: #E6E6FA; /* Цвет фона под ссылкой */ 
    transition: 0.7s;
   } </style>
<div class="container">
<div class="row inbox">
	<div class="col-md-3">
		<div class="panel panel-default">
			<div class="panel-body inbox-menu">						
				
				<ul>
					<li>
						<a href="/message/sended"><i class="fa fa-inbox"></i> Принятые <span class="label label-danger"></span></a>
					</li>
					<br>
					<li>
						<a href="/message/sended"><i class="fa fa-rocket"></i> Отправленные</a>
					</li>
				<br>
					<a href="/message/index"  style="background-color:#171E83; border-color:#171E83" class="btn btn-danger btn-block">Отправить</a>
				</ul>
			</div>	
		</div>
		
			
		
	</div><!--/.col-->
	
	<div class="col-md-9">
		<div class="panel panel-default">
			<div class="panel-body message">
				<p class="text-center">Новое сообщение</p>
				<form class="form-horizontal" role="form">
					<div class="form-group">
				    	<label for="to" class="col-sm-1 control-label">Кому:</label>
				    	<div class="col-sm-11">
                             
							  <select class="form-control select2-offscreen" id="to" name="recipient" >
										@foreach($admins as $user)
										<option value="{{$user->id}}">{{$user->name}}({{$user->role}})</option>
										@endforeach
           					 </select>
				    	</div>
				  	</div>
					<div class="form-group">
				    	<label for="cc" class="col-sm-1 control-label">Тема:</label>
				    	<div class="col-sm-11">
                              <input type="text" class="form-control select2-offscreen" id="cc" placeholder="" tabindex="-1">
				    	</div>
				  	</div>
				
				  
				<div class="col-sm-11 col-sm-offset-1">
					
				
					<br>	
					
					<div class="form-group">
						<label for="bcc" class="col-sm-1 control-label">Текст:</label>
						<textarea class="form-control" id="message" name="body" rows="12" placeholder=""></textarea>
					</div>
					
					<div class="form-group">	
						<button type="submit"  style="background-color:#171E83; border-color:#171E83" class="btn btn-success">Отправить</button>
						
					</div>

					</form>
				</div>	
			</div>	
		</div>	
	</div><!--/.col-->		
</div>
</div>
<script>
	$(document).ready(function(){
    $("#to, #cc, #bcc").select2({tags:["team@bm.com", "ceo@bm.com", "cto@bm.com"]});
});
</script>
@endsection