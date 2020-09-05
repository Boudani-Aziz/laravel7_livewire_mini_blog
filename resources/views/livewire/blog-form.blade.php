<form wire:submit.prevent="submit">
    <div class="form-group">
        <label for="exampleInputTitle">Title</label>
        <input type="text" class="form-control" id="exampleInputTitle" placeholder="Enter title" wire:model="title">
        @error('title') <span class="text-danger">{{ $message }}</span> @enderror
    </div>
  
    <div class="form-group">
        <label for="exampleInputbody">Body</label>
        <textarea class="form-control" id="exampleInputbody" placeholder="Enter Body" wire:model="body"></textarea>
        @error('body') <span class="text-danger">{{ $message }}</span> @enderror
    </div>
  
    <button type="submit" class="btn btn-primary">Submit</button>
</form>