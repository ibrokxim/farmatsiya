@extends('layout.app_send')
@section('title', 'Сообщения')
@include('partials.headertwo')
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
						<a href="/message/sended"><i class="fa fa-inbox"></i> @lang('index.olingan') <span class="label label-danger"></span></a>
					</li>
					<br>
					<li>
						<a href="/message/sended"><i class="fa fa-rocket"></i> @lang('index.yubor')</a>
					</li>
				<br></a>
	</ul>
			</div>	
		</div>
		
			
		
	</div><!--/.col-->
	
	<div class="col-md-9">
		<div class="panel panel-default">
			<div class="panel-body message">
				<h3 class="text-center">@lang('index.xabar')</h3>
				<form action="/message/index" class="form-horizontal" method="POST" role="form">
					@csrf
					<div class="form-group">
				    	<label for="to" class="col-sm-1 control-label">@lang('index.kim'):</label>
				    	<div class="col-sm-11">  
							  <select class="form-control select2-offscreen" id="to" name="recipient" >
										@foreach($admins as $user)
										<option value="{{$user->id}}">{{$user->name}}({{$user->role}})</option>
										@endforeach
           					 </select>
				    	</div>
				  	</div>
					<div class="form-group">
				    	<label for="cc" class="col-sm-1 control-label">@lang('index.mavzu'):</label>
				    	<div class="col-sm-11">
                              <input type="text" class="form-control select2-offscreen" name="subject" id="cc" placeholder="" tabindex="-1">
				    	</div>
				  	</div>
					<div class="col-sm-11 col-sm-offset-1">	<br>		
						<div class="form-group">
							<label for="bcc" class="col-sm-1 control-label">@lang('index.text'):</label>
							<textarea class="form-control" id="message" name="body" rows="12" placeholder=""></textarea>
						</div>
					
					<div class="form-group">	
						<button type="submit" class="btn btn-success" onclick="alert('Ваше сообщение было отправлено')">@lang('index.send')</button>	
					</div>
					</form>
				</div>	
			</div>	
		</div>	
	</div>	
</div>
</div>
<script>
	$(document).ready(function(){
    $("#to, #cc, #bcc").select2({tags:["team@bm.com", "ceo@bm.com", "cto@bm.com"]});
});
</script>
@endsection