<div class="card">
    <div class="card-body">
        <label class="form-control">
            <div class="label">
                <span class="label-text">{{ __('Title') }}</span>
            </div>
            <input type="text" wire:model="title" placeholder="{{ __('Title') }}" class="input input-bordered" />
        </label>
        <label class="form-control">
            <div class="label">
                <span class="label-text">{{ __('Description') }}</span>
            </div>
            <textarea wire:model="description" class="textarea textarea-bordered h-24" placeholder="{{ __('Description') }}"></textarea>
        </label>
        <button class="btn btn-primary">{{ __('Create') }}</button>
    </div>
</div>
