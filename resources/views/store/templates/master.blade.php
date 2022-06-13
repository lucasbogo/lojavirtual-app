<html>
    <head>
        <meta charset="utf8">

        <title>NewModern</title>
        
        <!--Bootstrap CSS-->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
       
        <!--ícones-->
        <script src="https://kit.fontawesome.com/ed493577c4.js" crossorigin="anonymous"></script>

        <!--Favicon-->
        <link rel="icon" type="image/png" href="{{url('assets/images/favicon.ico')}}">

        <!--Fonts-->
        <link href="https://fonts.googleapis.com/css?family=Open+Sans" rel="stylesheet">
        
        <!--CSS Person-->
        <link rel="stylesheet" href="{{url('assets/css/newmodern.css')}}">

         <!--CSS Reset-->
         <link rel="stylesheet" href="{{url('assets/css/reset.css')}}">

    </head>

    <body>

        @include('store.templates.header')

        <div class="container">
            @yield('content')
        </div>
        


       <!--jQuery-->
       <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>        
      
       <!--Bootstrap-->
       <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>       
       
        <!--JS dinâmicos-->
        @stack('scripts')

    </body>

</html>