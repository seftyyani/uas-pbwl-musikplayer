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

<h3>Tambah Data Artist</h3>
<a href="{{ url('artist') }}">Data Artist</a>
<form action="{{ url('/artist') }}" method="POST">
@csrf
<table class="table table-bordered">
	<tr class="bg-secondary">
		<td>NAMA</td>
		<td><input type="text" name="artist_name"></td>
	</tr>
	<tr class="bg-secondary">
		<td></td>
		<td><input type="submit" value="SIMPAN"></td>
	</tr>
</table>
</form>
</div>

@endsection