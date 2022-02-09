<h1>list</h1>
<table border="1">
	<tr>
		<td>title</td>
		<td></td>
		<td></td>
		<td></td>
	</tr>
	@foreach($data as $data)
	<tr>
		<td>{{ $data['title']}}</td>
		<td>{{$data['description']}}</td>
		<td></td>
		<td></td>
	</tr>
	@endforeach

</table>