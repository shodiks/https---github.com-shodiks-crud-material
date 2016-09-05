@extends('layouts.index')
@section ('content')
<div class="section">
	<div class="card-panel blue darken-4 white-text">
		coba edit
	</div>
	<div class="section">
		<form action="{{url('update', $tampiledit->id)}}" method="POST" >
			{!! csrf_field() !!}
			<div class="row">
				<div class="input-field col s12">
					<input type="text" name="jud" class="validate" value="{{$tampiledit->judul}}">
					<label for="title">Judul</label>
				</div>
			</div>	
				<div class="row">
					<div class="input-field col s12">
						<textarea name="isi" class="materialize-textarea" id="textarea1">{{$tampiledit->isi}}</textarea>
						<label for="textarea1">isi</label>
					</div>
				</div>
			<button type="submit" class="btn waves-effect waves-light"><i class="material-icons right">send</i>kirim</button>	
			
		</form>
	</div>
</div>
@endsection