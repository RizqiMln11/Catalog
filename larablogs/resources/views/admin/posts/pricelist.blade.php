@extends('layouts.app') @section('content')
<div class="card">

    <div class="card-header">
        Daftar Harga
    </div>

    <div class="card-body">
        <table class="table table-hover">
            <thead>
                <th>
                    Nama Barang
                </th>
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
                @if($posts->count() > 0)
                @foreach($posts::all() as $post)
                @php 
                    try {
                        $postPriceList = $postPrices::where('posts_id', $post->id)->first();
                        $getPricePost = $prices::where('id', $postPriceList->prices_id)->first();
                    } catch (\Throwable $th) {
                        $getPricePost['harga_normal'] = "-";
                        $getPricePost['harga_diskon'] = "-";
                        $getPricePost['id'] = "null";
                    }
                @endphp
                <tr>
                    <td>
                        {{ $post->title }}
                    </td>
                    <td>
                        {{ "Rp " . number_format((float)$getPricePost['harga_normal'],2,',','.')}}
                    </td>
                    <td>
                        {{ "Rp " . number_format((float)$getPricePost['harga_diskon'],2,',','.')}}
                    </td>
                    @if($getPricePost['id'] != null)
                    <td>
                        <a href="{{ route('price.edit', ['id'=>$getPricePost['id'] ]) }}" class="btn btn-xs btn-info">
                            <span class="glyphicon glyphicon-pencil">
	 							Edt
	 						</span>
                        </a>
                    </td>
                    <td>
                        <a href="{{ route('price.delete', ['id'=>$getPricePost['id'] ]) }}" class=" btn btn-xs btn-danger ">
                            <span class="glyphicon glyphicon-trash ">
	 							Del
	 						</span>
                        </a>
                    </td>
                    @else
                    <td colspan="2">
                        <a href="{{ route('price.create') }}" class=" btn btn-xs btn-primary ">
                            <span class="glyphicon glyphicon-trash ">
	 							Create New Price
	 						</span>
                        </a>
                    </td>
                    @endif
                </tr>
                @endforeach
                @else
                <tr>
                    <th colspan="5 " class="text-center "> No Prices yet </th>
                </tr>
                @endif
                
            </tbody>
        </table>
    </div>
</div>



@stop