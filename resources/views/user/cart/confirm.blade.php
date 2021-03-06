@extends('user.layouts.app')

@section('content')
  @if($products)
    <h3 class="mb-3">お届け先の確認</h3>
    <div class="row mb-2">
      <span class="col-sm-2">お名前</span>
      <p class="col-sm-10 mb-0">{{ $user->name }}</p>
    </div>
    <div class="row mb-2">
      <span class="col-sm-2">郵便番号</span>
      <p class="col-sm-10 mb-0">〒 {{ $user->postal }}</p>
    </div>
    <div class="row mb-5">
      <span class="col-sm-2">住所</span>
      <p class="col-sm-10 mb-0">{{ $user->address }}</p>
    </div>
    <h3 class="mb-3">購入商品の確認</h3>
    @foreach($products as $product)
      <div class="border-bottom mb-3 p-3">
        <form action="/cart/delete" method="post">
          @csrf
          <div class="row align-items-center">
            <input type="hidden" value="{{ $carts_id[$count] }}" name="cart_id">
            <div class="col mb-0">{{ $product->name }}</div>
            <div class="col-auto">
              <span class="mr-3">{{ $amount[$count] }}冊</span>
              <span>{{ $sales_price[$count++] }}円</span>
            </div>
          </div>
        </form>
      </div>
    @endforeach
    <div class="text-right">
      <span>合計</span>
      <span>{{ $total }}円</span>
    </div>
    <div class="text-right">
      <span>ご利用可能ポイント</span>
      <span>{{ $point->point }}pt</span>
    </div>
    <div class="text-right mb-3">
      <span>購入後ポイント</span>
      <span>{{ $remaining_points }}pt</span>
    </div>
    @if($remaining_points >= 0)
      <div class="text-right">
        <a href="/cart" class="mr-3">カートへ戻る</a>

        <!-- Button trigger modal -->
        <a href="" data-target="#exampleModalCenter" data-toggle="modal">最終確認へ</a>

        <!-- Modal -->
        <div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
          <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
              <div class="modal-header border-0 pb-0">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                </button>
              </div>
              <div class="modal-body text-left">
                <p class="m-0">購入ボタンを押すと商品購入が確定されます。</p>
                <p class="text-danger">※返品はできません。ご注意下さい。</p>
              </div>
              <div class="modal-footer border-0">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">キャンセル</button>
                <form action="/finish" method="post">
                  @csrf
                  <button type="submit" class="btn btn-primary">購入</button>
                </form>
              </div>
            </div>
          </div>
        </div>


      </div>
    @else
      <p class="text-danger">
        ※合計金額がご利用可能ポイントより多いため購入できません。<br>
        カートから商品を削除するか、ギフトコードを入力し、ポイントを増やして下さい。
      </p>
      <div class="text-right">
        <a href="/cart" class="mr-3">カートへ戻る</a>
        <a href="/mypage/gift">ギフトコード入力画面へ</a>
      </div>
    @endif
  @else
    <p class="text-danger">※商品がありません。</p>
    <div class="text-right">
      <a href="/cart">カートへ戻る</a>
    </div>
  @endif
@endsection