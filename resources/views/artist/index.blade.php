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

	<h3>Daftar Artist</h3>
	<a href="{{ url('artist/create') }}">Tambah Data Artist</a>
	<table class="table table-bordered">
	<tr class="bg-secondary">
			<td> NAMA </td>
			<td> EDIT </td>
			<td> HAPUS </td>
		</tr>

		@foreach($rows as $row);

		<tr>
			<td class="bg-light"> {{ $row->artist_name }} </td>
			<td class="bg-light"><a href="{{url('artist/'.$row->artist_id.'/edit')}}"> Edit </a></td>
			<td class="bg-light">
				<form action="{{url('artist/'.$row->artist_id)}}" method="POST">
					<input name="_method" type="hidden" value="DELETE">
					@csrf
					<button> Hapus </button>
				</form>
			</td>
		</tr>

		@endforeach
	</table>
</div>

@endsection