@extends('admin.layouts.app')
@section('content')
<h1>商品追加</h1>


<form >
    <div class="form-group">
        <label class="col-sm-4" for="exampleInputsyohin">商品名</label>
        <div class="col-sm-11">
        <input type="text" class="form-control" id="exampleInputsyohin" aria-describedby="syohinHelp" placeholder="">
        </div>
    </div>

    <div class="form-group">
        <label class="col-sm-4" for="exampleInput">著者</label>
        <div class="col-sm-11">
        <input type="text" class="form-control" id="exampleInputsyuppan" placeholder="">
    </div>
    </div>
    <div class="form-group">
        <label class="col-sm-4" for="exampleInput">仕入単価</label>
        <div class="col-sm-11">
        <input type="text" class="form-control" id="exampleInputsyuppan" placeholder="">
    </div>
    </div>
    <div class="form-group">
        <label class="col-sm-4" for="exampleInput">販売単価</label>
        <div class="col-sm-11">
        <input type="text" class="form-control" id="exampleInputsyuppan" placeholder="">
    </div>
    </div>
    <div class="form-group">
        <label class="col-sm-4" for="exampleInput">ジャンル</label>
        <div class="col-sm-11">
            <input type="text" class="form-control" id="exampleInputsyuppan" placeholder="">
        </div>
    </div>
    <div class="form-group">
        <label class="col-sm-4" for="exampleInput">入庫先名</label>
        <div class="col-sm-11">
        <input type="text" class="form-control" id="exampleInputsyuppan" placeholder="">
    </div>
    </div>

    <div class="text-right mr-4">
        <button type="reset" class="btn btn-primary">リセット</button>
        <button type="submit" class="btn btn-primary " >追加</button>
    </div>
</form>
    @endsection