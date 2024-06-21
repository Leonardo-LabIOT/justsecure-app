<!DOCTYPE html>
<html>
<head>
    <title>@yield('title')</title>
    <style>

        .__list{
            display: flex;
            flex-direction: row;
            justify-content: space-between;
            align-items: center;
        }
        .__list span{
            padding: 10px;
        }
    </style>
</head>
<body>
    <header>
            <div class="__list">
                <h1>Justsecure Questions</h1>
                <div>
                    <span><a href="{{ route('home') }}">Home</a></span>
                    <span><a href="{{ route('questionOne') }}">Question One</a></span>
                    <span><a href="{{ route('questionTwo') }}">Question Two</a></span>
                    <span><a href="{{ route('questionThree') }}">Question Three</a></span>
                    <span><a href="{{ route('questionFour') }}">Question Four</a></span>
                    <span><a href="{{ route('questionFive') }}">Question Five</a></span>
                    <span><a href="{{ route('questionSix') }}">Question Six</a></span>
                </div>
            </div>
    </header>
    <main>
        @yield('content')
    </main>
    <footer>
    </footer>
</body>
</html>

