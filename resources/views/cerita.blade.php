<x-app-layout>
    <x-slot name="header">

    <div class="card bg-white p-5">
        <h4 class="font-semibold text text-gray-800 leading-tight">
            {{ __('Postingan Cerita') }}
        </h4>
         @foreach($postAll as $post)

            @php
            $likeCount = App\Models\suka::where('post_id',$post->id)->count();
            @endphp

          <div class="card mt-10" style="width: 30rem;">
            <div class="card-body">
              <h5 class="card-title"><b>{{$post->user->name}}</b></h5>
              <p class="card-text pb-1">{{$post->content}}</p>
            @if($likeCount === 0)
              <a href="like/{{$post->id}}/{{Auth::user()->id}}">
                <i class="fa fa-thumbs-o-up" aria-hidden="true"></i>
                {{$likeCount}}
              </a>
              @elseif(App\Models\suka::where('post_id',$post->id)->where('user_id',Auth::user()->id)->first())
              <a href="dislike/{{$post->id}}/{{Auth::user()->id}}">
                <i class="fa fa-thumbs-up" aria-hidden="true"></i>{{$likeCount}}
              </a>
              @else
              <a href="like/{{$post->id}}/{{Auth::user()->id}}">
                <i class="fa fa-thumbs-o-up" aria-hidden="true"></i>
                {{$likeCount}}
              </a>
              @endif
            </div>
          </div>
          @endforeach


    </div>
    </x-slot>
</x-app-layout>

