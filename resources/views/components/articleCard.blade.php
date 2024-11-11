<div class="container d-flex flex-column align-items-center gap-4">
    @foreach ($article as $item)
        <div class="card d-flex flex-row" style="width: 65rem; border-color: transparent; background-color: transparent">
            <img src="{{ asset('image/'.$item->photo) }}" class="card-img-top" alt="..." style="border-radius: 20px; height: 250px; width: 600px">
            <div class="card-body">
                <h5 class="card-title">{{$item->title}}</h5>
                <div class="date">
                    {{$item->created_at->format('d M Y')}} | by: {{strstr($item->author->name, " ", true)}}
                </div>
                <p class="card-text">{{substr($item->desc, 0, 150)}}...</p>
                <a href={{ route('articleDetail.view', $item->id) }} class="btn btn-primary d-flex float-end justify-content-center" style="background-color: rgb(2, 2, 62); border-radius: 100px; width: 150px;">Read more...</a>
            </div>
        </div>
    @endforeach
</div>