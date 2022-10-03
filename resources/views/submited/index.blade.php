@extends('layout.app_submit')
@extends('partials.headertwo')

@section('title', 'Отправленные статьи')


@section('content')

<main class="flex-grow-1">
  <section>
    <div class="container-fluid">
      <div class="row">
        <div class="col-12">
          <h2 class="fw-bold fs-4">@lang('index.sended')</h2>
        </div>
        <div class="col-12 py-5">
        @forelse($states as $state)
          <table>
            <thead>
              <tr class="w-100">
                <th class="table_title">РефНомер</th>
                <th>Заголовок</th>
                <th> Статус</th>
              </tr>
            </thead>
       
            <tbody>
              <tr>
                <th><div>{{$state->id}}</div></th>
                <th><div>{{$state->short_name}}</div></th>
                <th>@if($state->status == "Проверяется")
                        <div>На проверке</div>
                        @elseif($state->status == "Принят")
                        <div>Принятый</div>
                        @else
                        <div>Отклоненный</div>
                        @endif
                </th>
                <th><a href="/message/send" style="text-decoration: none;  background: none;
                    color: #171E83;
                    padding: 13px 30px;
                    border: 2px solid #171E83;
                    border-radius: 50px;"> Email редактору</a></th>
                <th><a href="/states/step1" style="text-decoration: none;  background: none;
                    color: #171E83;
                    padding: 13px 30px;
                    border: 2px solid #171E83;
                    border-radius: 50px;">Изменить</a></th>
              </tr>
            </tbody>
            @empty
            <h3 class="fw-bold fs-4" style="margin-left: 400px;">@lang('index.poka')</h3>
          </table>
          @endforelse 
        </div>
                 
      </div>
    </div>
  </section>
</main>


@endsection
