@extends('layouts.layout')

@section('content')
    <table class="table table-hover">
        <h3 id="adminChar">회원관리 페이지</h3>
        <thead>
            <tr>
                <form method="POST" action="/client">
                    {{ csrf_field() }}
                    <th></th>
                    <th></th>
                    <th><input class="form-control" type="text" value="이메일" name="email"></th>
                    <th><input class="form-control" type="text" value="이름" name="name"></th>
                    <th>
                        <select name="kind" id="" class="custom-select">
                            <option selected disabled>선택</option>
                            <option value="관리자">관리자</option>
                            <option value="vip고객">vip고객</option>
                            <option value="고객">고객</option>
                        </select>
                    </th>
                    <th></th>
                    <th><button type="submit" class="btn btn-success">등록</button></th>
                </form>
            </tr>
            <tr>
                <th></th>
                <th>id</th>
                <th>회원 이메일</th>
                <th>이름</th>
                <th>회원종류</th>
                <th>등록날짜</th>
                <th></th>
            </tr>         
        </thead>
        <tbody>
            @foreach ($clients as $client)
            <tr>
                <td><input type="checkbox"></td>
                
                <td>{{$client->id}}</td>
                <td>{{$client->email}}</td>
                <td>{{$client->name}}</td>
                <td>{{$client->kind}}</td>
                <td>{{$client->created_at}}</td>
                <td><a href="/client/{{$client->id}}" class="btn btn-primary">수정</a></td>
            </tr>
            @endforeach
        </tbody>
    </table>
    <div class="text-center">
        {{$clients->links()}}

        <form method="GET" action="/clients/">
            <button type="submit" id="searchBtn" name="" class="btn btn-info">검색</button>
            <input type="text" class="form-control" id="searchbar" name="searchbar">
            <select name="kind" id="searchBarSelect" class="custom-select">
                <option value="전체">전체</option>
                <option value="이름">이름</option>
                <option value="회원종류">회원종류</option>
            </select>
        </form>     
    </div>

@endsection