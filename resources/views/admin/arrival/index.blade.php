@extends('admin.layouts.app')
@section('content')
<h1>入庫一覧</h1>

<div>▼詳細検索</div>
<table class="table">
    <thead>

    <tr>
        <th scope="col">No.(入庫番号)</th>
        <th scope="col">入庫日</th>
        <th scope="col">状態</th>
        <th scope="col"> </th>
    </tr>

    </thead>
    <tbody>
    @foreach($arrivals as $arrival)
    <tr>
        <th scope="row">{{$arrival->id}}</th>
        <td>{{$arrival->created_at}}</td>
        <td>{{$arrival->status}}</td>

        <th><button class="btn btn-primary" data-toggle="modal" data-target="#modal-sample{{ $arrival->id }}">
                詳細
            </button>

            <!-- 2.モーダルの配置 -->
            <div class="modal" id="modal-sample{{ $arrival->id }}" tabindex="-1">
                <div class="modal-dialog">

                    <!-- 3.モーダルのコンテンツ -->
                    <div class="modal-content">
                        <!-- 4.モーダルのヘッダ -->
                        <div class="modal-header">
                            <h2 class="modal-title" id="modal-label">{{$arrival->id}}の詳細</h2>
                            <button type="button" class="close" data-dismiss="modal">
                                <span aria-hidden="true">&times;</span>
                            </button>

                        </div>
                        <!-- 5.モーダルのボディ -->
                        <div class="modal-body">
                            <div class="form-group">
                                <h3>  <label class="col-sm-4" for="exampleInput" >入庫先名</label></h3>
                                <div class="col-sm-10">
                                    {{$suppliers[$count]->name}}
                                   </div>
                               </div>
                            <div class="form-group">
                                <h3>  <label class="col-sm-4" for="exampleInput" >商品名</label></h3>
                                <div class="col-sm-10">
                                    {{$products[$count++]->name}}
                                </div>
                            </div>
                            <div class="form-group">
                                <h3>  <label class="col-sm-4" for="exampleInput" >個数</label></h3>
                                <div class="col-sm-10">
                                    {{$arrival->amount}}
                                </div>
                            </div>

                        </div>
                        <!-- 6.モーダルのフッタ -->
                        <div class="modal-footer">
                            <button type="button" class="btn btn-default" data-dismiss="modal">閉じる</button>
                        </div>
                    </div>
                </div>
            </div>
            </th>
    </tr>
    @endforeach
    </tbody>

</table>
@endsection


