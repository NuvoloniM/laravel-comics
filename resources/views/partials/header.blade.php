<header>
    <div class="row">
        <div class="head-menu">
            <div> dcpower<span>&#8480;</span>visa&reg;</div>
            <div> additional dc sites &#9660;</div>
        </div>
    </div>
    <div class="navbar">
        <div class="row">
            <div class="logo">
                <a href=" {{ url('/') }} ">
                    <img src="{{ asset('images/dc-logo.png') }}" alt="logo">
                </a>
            </div>
            <div class="nav">
                <ul>
                    <li>
                        <a href="#"> characters</a>
                    </li>
                    <li class="current">
                        <a href="{{ route('comics') }}" > comics</a>
                    </li>
                    <li>
                        <a href="#"> movies</a>
                    </li>
                    <li>
                        <a href="#"> tv</a>
                    </li>
                    <li>
                        <a href="#"> games</a>
                    </li>
                    <li>
                        <a href="#"> collectibles</a>
                    </li>
                    <li>
                        <a href="#"> videos</a>
                    </li>
                    <li>
                        <a href="#"> fans</a>
                    </li>
                    <li>
                        <a href="#"> news</a>
                    </li>
                    <li>
                        <a href="#"> shop <span>&#9660;</span></a>
                    </li>
                </ul>
            </div>
            <div class="search">
                <input type="text" placeholder="Search">
            </div>
        </div>
    </div>
</header>