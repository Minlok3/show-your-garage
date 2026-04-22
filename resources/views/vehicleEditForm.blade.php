<x-guest-layout>
    <!-- Session Status -->
    <x-auth-session-status class="mb-4" :status="session('status')" />

    <form role="form"  action="{{ route('update', $vehicle) }}" id="comment-form" 
                   method="post" enctype="multipart/form-data" >
        @csrf
        <input name="_method" type="hidden" value="PUT">
        <div>
            <x-input-label for="brand" :value="__('Marka')" />
            <x-text-input id="brand" class="block mt-1 w-full" name="brand" required autofocus autocomplete="brand" value="{{$vehicle->brand}}"/>
            <x-input-error :messages="$errors->get('brand')" class="mt-2" />
        </div>

        <div>
            <x-input-label for="model" :value="__('Model')" />
            <x-text-input id="model" class="block mt-1 w-full" name="model" required autocomplete="model" value="{{$vehicle->model}}"/>
            <x-input-error :messages="$errors->get('model')" class="mt-2" />
        </div>

        <div>
            <x-input-label for="year_of_prod" :value="__('Rok produkcji')" />
            <x-text-input id="year_of_prod" class="block mt-1 w-full" name="year_of_prod" required autocomplete="year_of_prod" value="{{$vehicle->year_of_prod}}"/>
            <x-input-error :messages="$errors->get('year_of_prod')" class="mt-2" />
        </div>

        <div>
            <x-input-label for="engine_capacity" :value="__('Pojemność silnika [cm3]')" />
            <x-text-input id="engine_capacity" class="block mt-1 w-full" name="engine_capacity" required autocomplete="engine_capacity" value="{{$vehicle->engine_capacity}}"/>
            <x-input-error :messages="$errors->get('engine_capacity')" class="mt-2" />
        </div>

        <div>
            <x-input-label for="power" :value="__('Moc [KM]')" />
            <x-text-input id="power" class="block mt-1 w-full" name="power" required autocomplete="power" value="{{$vehicle->power}}"/>
            <x-input-error :messages="$errors->get('power')" class="mt-2" />
        </div>

        <div>
            <x-input-label for="description" :value="__('Opis (opcjonalnie)')" />
            <textarea style="border-radius: 0.375rem; resize:none; border-color: lightgray;"
                id="description" class="block mt-1 w-full" name="description">{{$vehicle->description}}</textarea>
            <x-input-error :messages="$errors->get('description')" class="mt-2" />
        </div>

        <div class="flex items-center justify-end mt-4">
            <x-primary-button class="ms-3">
                {{ __('Zapisz') }}
            </x-primary-button>
        </div>
    </form>
</x-guest-layout>
