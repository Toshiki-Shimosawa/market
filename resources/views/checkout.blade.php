@extends('layouts.app')

@section('title', '配送情報')
    
@section('content')
    
    {{Form::open(['url'=>'http://127.0.0.1:8000/confirm'])}}
        <div class="info">
            <dl>
                <dt>2.お届け先情報</dt>
                <dd class="section">
                    {{ Form::label('addressnum','郵便番号',['class' => 'addressnum']) }}
                    {{ Form::text('addressnum')}}
                    {{ Form::label('day','お届け日') }}
                    {{ Form::text('day') }}
                    {{ Form::label('time','お届け時間帯') }}
                    {{ Form::select('time',['指定なし','午前中','13-15','15-18','18-21'],0) }}
                </dd>
            </dl>

           {{ Form::submit('申し込む') }}
            

        </div>
    {{ Form::close() }}
    <script src="https://code.jquery.com/jquery-3.3.1.js"></script>
    <script>

$(function() {
$(document).on('click', function() {
var url = "/confirm";
var zip = $('input[name="addressnum"]').val();

data = {
    "plan_id": 10,
    "zip": zip,
};

$.ajax({
        type: "POST",
        url: url,
        headers: {"X-CSRF-TOKEN": $("input[name='_token']").val()},
        dataType: "json",
        data: data,
        scriptCharset: "utf-8",
    }).done(function($res) {
        if($res == 1){
            alert($res);
            $('.addressnum').html('<p>※こちらのエリアは時間帯指定での配送はできません</p>');
        }

        });

})
})
</script>
@endsection

    

    