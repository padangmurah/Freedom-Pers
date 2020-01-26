@extends('admin.layouts.master')

@section('content')

<div class="col-md-8 col-md-offset-2">
	<div class="box">
		<div class="box-body">
			
			<form role="form" enctype="multipart/form-data" action="{{ url('admin/iklan') }}" method="POST">
				{{ csrf_field() }}
				<div class="box-body">
					<div class="form-group">
						<label for="exampleInputEmail1">Url</label>
						<input type="text" name="url" class="form-control" id="exampleInputEmail1" placeholder="Url">
					</div>
					<div class="form-group">
						<label for="exampleInputFile">File input</label>
						<input type="file" name="image" id="exampleInputFile">

						<p class="help-block">Example block-level help text here.</p>
					</div>
				</div>
				<!-- /.box-body -->

				<div class="box-footer">
					<button type="submit" class="btn btn-primary">Submit</button>
				</div>
			</form>

		</div>
	</div>
</div>

@endsection