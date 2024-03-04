<div>
<div class="row picture1"style="background-color:black;">
    <div class="col-sm-8 mx-auto">
        <form wire:submit.prevent="menu_add" class="form-control text-center mt-5" style="background-color:black;">
            <div class="mt-5">
                <label for="dish"style="color:gold;">add dish name</label>
                <input type="text"wire:model="dish">
            </div>
            <div class="mt-5"style="color:gold;">
                <label for="price">create price</label>
                <input type="float"wire:model="price">
            </div>
            <!-- image upload -->
            <div class="mt-5">
                    @if ($image)
                      Photo Preview:
                      <img src="{{ $image->temporaryUrl() }}" class="w-25">
                    @endif                  
            </div>
            <div>
                    <label for="image"style="color:gold;">dish image</label>
                    <input type="file" wire:model="image">
                    <div wire:loading wire:target="image">Uploading...</div>
            </div>
            <div class="mt-5">
                <center> <input type="submit" value="Submit Details"></center>
                <center>{{$message}}</center>
               
            </div>
        </form>
    </div>
</div>
</div>

