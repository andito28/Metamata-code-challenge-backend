<x-app-layout>
    <x-slot name="header">

    <div class="card bg-white p-5">
        <h4 class="font-semibold text text-gray-800 leading-tight">
            {{ __('Posting Cerita') }}
        </h4>

        <form action="{{route('post.store')}}" method="post">
            @csrf
            <div class="form-group mb-2">
              <textarea class="form-control" id="exampleFormControlTextarea1" name="content" rows="3" placeholder="ketik disini. . . . ."></textarea>
            </div>
            <div class="class-form">
                <button type="submit" class="btn btn-primary btn-sm">Posting</button>
            </div>
         </form>
    </div>
    </x-slot>
</x-app-layout>

