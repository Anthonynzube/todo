<div>
    <div class="flex justify-center py-2">
        <h1 class="text-lg">Add Step(s) if required</h1>
        <span wire:click="increment" class="fas fa-plus text-blue-600 py-2 px-2 cursor-pointer"/>
    </div>

    @foreach($steps as $step)
        <div class="py-2">
            <input type="text" name="step[]" class="py-2 px-2 border" wire:key="{{$step}}" placeholder="{{'Describe Step '.($step+1)}}"/>
            <span class="fas fa-times text-red-600 px-2 cursor-pointer" wire:click="remove({{$loop->index}})"/>
        </div>
    @endforeach
</div>
