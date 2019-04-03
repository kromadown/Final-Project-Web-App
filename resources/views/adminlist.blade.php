<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Jelajah</title>

    </head>
    <body>
			<table border="1">
				<tr>
					<th>Admin ID</th>
					<th>Name</th>
				</tr>
        				@foreach ($admin as $key => $admins)
				<tr>
					<td>
					{{ $admins->admin_id }}
					</td>
					<td>
					{{ $admins->name }}
					</td>
				</tr>
				@endforeach
			</table>
    </body>
</html>
