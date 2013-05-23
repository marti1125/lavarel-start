 <!doctype html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
	<title>Mi sitio web</title>
	<meta name="viewport" content="width=device-width">
</head>
<body>
	{{ $greeting . " " . $thing }}
	{{ 'hi there' }}

	@foreach($items as $item)
		The item is {{ $item }}
	@endforeach

	@if(count($items))
		This is a items
	@endif

	@forelse($items as $item)
		The item is {{ $item }}
	@empty
		There are no items
	@endforelse
</body>
</html>
