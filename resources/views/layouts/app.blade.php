
<html>
    <head>
        <title>App Name - @yield('title')</title>
    </head>
    <body>
        <header>
            <a href="/writer/add">Add Writer</a>
            <a href="/portret/add">Add Portret</a>
        </header>
        @if(session()->has('message'))
            <div class="alert alert-success">
                {{ session()->get('message') }}
            </div>
        @endif
        <div class="container">
            @yield('content')
        </div>
    </body>