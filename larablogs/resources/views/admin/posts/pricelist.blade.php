@extends('layouts.app') @section('content')
<div class="card">

    <div class="card-header">
        Daftar Harga
    </div>

    <div class="card-body">
        <table class="table table-hover">
            <thead>
                <th>
                    Harga Normal
                </th>
                <th>
                    Harga Diskon
                </th>
                <th>
                    Editing
                </th>
                <th>
                    Deleting
                </th>
            </thead>

            <tbody>
                @if($prices->count() > 0) @foreach($prices as $price)
                <tr>
                    <td>
                        {{ $price->harga_normal }}
                    </td>
                    <td>
                        {{ $price->harga_diskon }}
                    </td>
                    <td>
                        <a href="{{ route('price.edit', ['id'=>$price->id ]) }}" class="btn btn-xs btn-info">
                            <span class="glyphicon glyphicon-pencil">
	 							Edt
	 						</span>
                        </a>
                    </td>
                    <td>
                        <a href="{{ route('price.edit', ['id'=>$price->id ]) }}" class=" btn btn-xs btn-danger ">
                            <span class="glyphicon glyphicon-trash ">
	 							Del
	 						</span>
                        </a>
                    </td>
                </tr>
                @endforeach @else
                <tr>
                    <th colspan="5 " class="text-center "> No Prices yet </th>
                </tr>
                @endif
            </tbody>
        </table>
    </div>
</div>



@stop