@extends('layouts.master')

@section('title','詳細資料')

@section('content')

	<div class="page-header">
			<h1>詳細資料</h1>
		</div>
	<div class="row">
		<p>
			學號：{{$student_no}}
		</p>
		<p>
			姓名：{{$name}}
		</p>
		<p>
			電話：{{$tel}}
		</p>
		@if ( is_null($subject) || $subject=='chinese' )
			<p>
				國文：60
			</p>
		@endif
		@if ( is_null($subject) || $subject=='english' )
			<p>
				英文：60
			</p>
		@endif
		@if ( is_null($subject) || $subject=='math' )
			<p>
				數學：60
			</p>
		@endif
	</div>
@stop



