@extends('layout.app_send')
@include('partials.headertwo')
@section('title', 'Сообщения')


@section('content')


<div class="container">
<div class="row inbox">
	<div class="col-md-3">
		<div class="panel panel-default">
			<div class="panel-body inbox-menu">						
				
				<ul>
					<li>
						<a href="#page-inbox.html"><i class="fa fa-inbox"></i> Принятые <span class="label label-danger"></span></a>
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
			
				<form class="form-horizontal" role="form">
					
					<div class="form-group">
				  
				    	<div class="col-sm-11">
                            @forelse($messages as $msg)
                        <a href="{{route('messages.show', $mes->id)}}" style="text-decoration:none;"><div class="card" z-default="10" z-hover="30" z-click="5" border-radius="10">
                            <font style="color: #000000">Тема: {{$msg->category}}</font>
                                <br>
                         <font style="color: #171E83">Аннотация:</font><font style="color:#000000">{{$msg->annotation}}</font>
                            <br>
                            <font style="color: #171E83" "&nbsp;">Автор:</font><font style="color:#000000">{{$msg->fio}}</font>                                    <font style="color: #171E83"> Дата отправки: </font><font style="color:#000000">{{$msg->created_at}}</font>
                            @empty
                            <h2>У вас пока нету отправленных сообщений</h2>
    <br>                    @endforelse
                    </div>
                    </a>                      
                  </div>                      
                   </div>
		  
				<div class="col-sm-11 col-sm-offset-1">
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