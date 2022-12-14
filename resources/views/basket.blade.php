@extends('layouts.master')

@section('title', 'корзина')

@section('content')

    <h1>Корзина</h1>
    <p>Оформление заказа</p>
    <div class="panel">
        <table class="table table-striped">
            <thead>
                <tr>
                    <th>Название</th>
                    <th>Кол-во</th>
                    <th>Цена</th>
                    <th>Стоимость</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($order->products as $item)
                    <tr>
                        <td>
                            <a href="{{ route('product', [$item->category->code, $item->code]) }}">
                                <img height="56px" src="">
                                {{ $item->name }}
                            </a>
                        </td>
                        <td><span class="badge">
                                {{ $item->pivot->count }}
                            </span>
                            <div class="btn-group form-inline">
                                <form action="{{ route('basket-add', $item) }}" method="POST">
                                    <button type="submit" class="btn btn-success" href=""><span
                                            class="glyphicon glyphicon-plus" aria-hidden="true"></span></button>
                                    @csrf
                                </form>
                                <form action="{{ route('basket-remove', $item) }}" method="POST">
                                    <button type="submit" class="btn btn-danger" href=""><span
                                            class="glyphicon glyphicon-minus" aria-hidden="true"></span></button>
                                    @csrf
                                </form>
                            </div>
                        </td>
                        <td>{{ $item->price }} руб.</td>
                        <td>{{ $item->getPriceForCount() }} руб.</td>
                    </tr>
                @endforeach
                <tr>
                    <td colspan="3">Общая стоимость:</td>
                    <td>{{ $order->getFullPrice() }} руб.</td>
                </tr>
            </tbody>
        </table>
        <br>
        <div class="btn-group pull-right" role="group">
            <a type="button" class="btn btn-success" href="{{ route('basket-place') }}">Оформить
                заказ</a>
        </div>
    </div>

@endsection
