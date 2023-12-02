<form class="p-5  rounded-5 bg-white" wire:submit.prevent="update">
    @csrf

    @if (session()->has('articleUpdated'))
        <div id="message" class="text-center alert alert-success">
            {{ session('articleUpdated') }}
        </div>
    @endif
    <div id="form">
        <div class="mb-3 ">
            <label for="title" class="form-label ">Title</label>
            <input type="text" class="form-control bg-transparent" id="title" wire:model.live="title">
            @error('title')
                <div id="error" class="textD fst-italic">{{ $message }}</div>
            @enderror

        </div>
        <div class="mb-3">
            <label for="subtitle" class="form-label">Subtitle</label>
            <input type="text" class="form-control bg-transparent" id="subtitle" wire:model.live="subtitle">
            @error('subtitle')
                <div class="textD fst-italic">{{ $message }}</div>
            @enderror
        </div>
        <div class="mb-3">
            <label for="body" class="form-label">Body</label>
            <textarea wire:model.live="body" class="form-control bg-transparent" id="body" cols="30" rows="5"></textarea>
            @error('body')
                <div class="textD fst-italic">{{ $message }}</div>
            @enderror
        </div>
        <button type="submit" class="btn  rounded-5">Submit</button>
    </div>

</form>
