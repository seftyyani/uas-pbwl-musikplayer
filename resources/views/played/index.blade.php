@extends('layouts.app')

@section('content')

<style>
            html, body {
                background-color: #BDB76B;
                color: #fff;
                font-family: 'Nunito', sans-serif;
                font-weight: 200;
                height: 100vh;
                margin: 0;
            }

            .full-height {
                height: 100vh;
            }

            .flex-center {
                align-items: center;
                display: flex;
                justify-content: center;
            }

            .position-ref {
                position: relative;
            }

            .top-right {
                position: absolute;
                right: 10px;
                top: 18px;
            }

            .content {
                text-align: center;
            }

            .title {
                font-size: 84px;
            }

            .links > a {
                color: #636b6f;
                padding: 0 25px;
                font-size: 13px;
                font-weight: 600;
                letter-spacing: .1rem;
                text-decoration: none;
                text-transform: uppercase;
            }

            .m-b-md {
                margin-bottom: 30px;
            }
        </style>
<div class="container">

	<h3>Daftar Played</h3>
	<a href="{{ url('played/create') }}">Tambah Data Played</a>
	<table class="table table-bordered">
	<tr class="bg-secondary">
			<td> ARTIS ID </td>
			<td> ALBUM ID </td>
			<td> TRACK ID </td>
			<td> PLAYED </td>
			<td> EDIT </td>
			<td> HAPUS </td>
		</tr>

		@foreach($rows as $row);

		<tr>
			<td class="bg-light"> {{ $row->artist_id }} </td>
			<td class="bg-light"> {{ $row->album_id }} </td>
			<td class="bg-light"> {{ $row->track_id }} </td>
			<td class="bg-light"> {{ $row->played }} </td>
			<td class="bg-light"><a href="{{url('played/'.$row->played_id.'/edit')}}"> EDIT </a></td>
			<td class="bg-light">
				<form action="{{url('played/'.$row->played_id)}}" method="POST">
					<input name="_method" type="hidden" value="DELETE">
					@csrf
					<button> HAPUS </button>
				</form>
			</td>
		</tr>
		@endforeach
	</table>
</div>

@endsection