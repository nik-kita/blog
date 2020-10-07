<div style="display: inline-block">
    <ul>
        <li>
            <button>
                <a href="{{ route('home.index') }}">Home</a>
            </button>
        </li>
        <li>
            <button>
                <a href="{{ route('show') }}">All posts</a>
            </button>
        </li>
        <li>
            <button>
                <a href="{{ route('create') }}">Create post</a>
            </button>
        </li>
        <li>
            <button>
                <a href="{{ route('random') }}">Random post</a>
            </button>
        </li>
    </ul>
    <div>
        <form method="get" action="{{ route('search') }}">
            <input name="search" type="search"/>
            <br>
            <label class="text-small" for="onlyTitle" checked>Only in title</label>
            <input id="onlyTitle" type="radio" name="searchBy" value="title">
            <br>
            <label class="text-small" for="searchAll">Anywhere</label>
            <input id="searchAll" type="radio" name="searchBy" value="all">
            <br>
            <button type="submit">Search</button>
        </form>


    </div>
</div>
