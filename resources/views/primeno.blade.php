<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>Preservation Place</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <link rel="stylesheet" href="{{ URL::asset('assets/css/main.css?ver=1.6') }}">
    
    <link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
    <link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/timepicker/1.3.5/jquery.timepicker.min.css">
    <!-- <link href="http://demo.expertphp.in/css/jquery.ui.autocomplete.css" rel="stylesheet"> -->

    <link rel="stylesheet" href="{{ URL::asset('assets/css/jquery.ui.autocomplete.css') }}">

    <script type="text/javascript" src="https://code.jquery.com/jquery-2.2.3.min.js"></script>
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.17.0/jquery.validate.min.js"></script>
    <script type="text/javascript" src="{{ URL::asset('assets/js/additional-methods.min.js') }}"></script>
</head>
<body >

@php
for ($i = 1; $i < 12; $i++) {
  for ($j = 1; $j < 12; $j++) {
     if ($j == 1) {
       echo str_pad($i*$j, 2, " ", STR_PAD_LEFT);
     } else {
       echo str_pad($i*$j, 4, " ", STR_PAD_LEFT);
     }
  }
  echo "\n";
}
@endphp

</body>
</html>