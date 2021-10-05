@extends('layouts.layout')

@section('content')

<div>
    <h3>회원 정보 수정</h3>
    <hr>
    <br>
    <form method="POST" action="/client/{{$clientInfo->id}}">
        {{ csrf_field() }}
        {{ method_field('PUT') }}
        <div class="form-group">
            <label for="email">이메일:</label>
            <input class="form-control" name="email" type="text" value="{{$clientInfo->email}}">
        </div>
        <div class="form-group">
            <label for="name">이름:</label>
            <input class="form-control" name="name" type="text" value="{{$clientInfo->name}}">
        </div>
        <div class="form-group">
            <label for="kind">회원 구분:</label>
            <select name="kind" id="" class="custom-select">
                <option selected disabled>선택</option>
                <option value="관리자">관리자</option>
                <option value="vip고객">vip고객</option>
                <option value="고객">고객</option>
            </select>
        </div>
        <hr>
        <button type="submit" class="btn btn-warning">수정</button>
    </form>
    <form method="POST" action="/client/{{$clientInfo->id}}">
        {{ csrf_field() }}
        {{ method_field('DELETE') }}
        <button id="deleteBtn" type="submit" class="btn btn-danger">삭제</button>
    </form>

</div>
    
@endsection