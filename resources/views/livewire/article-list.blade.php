<div>
  @if (session()->has('message'))
    <div id="message" class="text-center alert alert-success">
        {{ session('message') }}
    </div>
    @endif
<table class="my-3  ">
    <thead class="">
      <tr class="">
        <th scope="col">ID</th> 
        <th scope="col">Title</th>
        <th scope="col">Created at</th>
        <th scope="col">Action</th>
      </tr>
    </thead>
    <tbody>
        @foreach ($articles as $article)
        <tr>
          <th scope="row">{{ $article->id }}</th>
          <td>{{ $article->title }}</td>
          <td>{{ $article->created_at->format('d/m/y') }}</td>
          <td class="d-flex justify-content-center">
            <a href="{{route('article.edit', $article)}}" class="btn  rounded-5 mx-2" >Edit</a>
            <a wire:click="destroy({{ $article }})" class="btn btnD rounded-5" >Delete</a>
          </td>
        </tr>
        @endforeach
    </tbody>
</table>
</div>