<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
		
		<title>@yield('title')</title>
		
		<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootswatch/4.1.3/materia/bootstrap.min.css">
    <link rel="stylesheet" href="{{ URL::asset('css/datepicker/bootstrap-datepicker.min.css') }}">

    <style>
      .fade-in {
            -webkit-animation: fadein 2s; /* Safari, Chrome and Opera > 12.1 */
            -moz-animation: fadein 2s; /* Firefox < 16 */
                -ms-animation: fadein 2s; /* Internet Explorer */
                -o-animation: fadein 2s; /* Opera < 12.1 */
                    animation: fadein 2s;
        }

        @keyframes fadein {
            from { opacity: 0; }
            to   { opacity: 1; }
        }

        /* Firefox < 16 */
        @-moz-keyframes fadein {
            from { opacity: 0; }
            to   { opacity: 1; }
        }

        /* Safari, Chrome and Opera > 12.1 */
        @-webkit-keyframes fadein {
            from { opacity: 0; }
            to   { opacity: 1; }
        }

        /* Internet Explorer */
        @-ms-keyframes fadein {
            from { opacity: 0; }
            to   { opacity: 1; }
        }

        /* Opera < 12.1 */
        @-o-keyframes fadein {
            from { opacity: 0; }
            to   { opacity: 1; }
        }
    </style>
  </head>
  <body style="background-color: #d3d3d3;">
    
    

      @include('navbar')

      @yield('content')

    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>
  <script src="{{ URL::asset('js/datepicker/bootstrap-datepicker.js') }}"></script>
    </body>
</html>
<script type="text/javascript">
  $('#sandbox-container input').datepicker({
    format: "yyyy-mm-dd",
    autoclose: true
  });
</script>