<x-layout>
    <x-slot:title>Home</x-slot:title>

    <h2>Quick links to major directories:</h2>
    <ul>
        <div class="container">
            @foreach($directories as $directory)
                <div class="row">
                    <div class="col-25"><a href="{{$directory}}">{{$directory}}</a></div>
                    <div class="col-75">Description from DB</div>
                </div>
            @endforeach
        </div>
    </ul>
</x-layout>
