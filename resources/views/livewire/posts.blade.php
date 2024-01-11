<div>
  
    @if (session()->has('message'))
        <div class="alert alert-success">
            {{ session('message') }}
        </div>
    @endif
  
    @if($updateMode)
        @include('livewire.update')
    @else
        @include('livewire.create')
    @endif
  
    <table class="table table-bordered mt-5">
        <thead>
            <tr>
                <th class="text-center">Title</th>
                <th class="text-center">Description</th>
                <th class="text-center" width="150px">Action</th>
            </tr>
        </thead>
        <tbody>
            @foreach($posts as $post)
            <tr>
                <td class="text-center">{{ $post->title }}</td>
                <td class="text-center">{{ $post->description }}</td>
                <td class="text-center">
                <button wire:click="edit({{ $post->id }})" class="btn btn-primary btn-sm">Edit</button>
                <button wire:click="delete({{ $post->id }})" class="btn btn-danger btn-sm">Delete</button>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>