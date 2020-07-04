<form wire:submit.prevent="save">
	<div>
		<div>
			<div class="mt-6 grid grid-cols-1 row-gap-6 col-gap-4 sm:grid-cols-6">
				<div class="sm:col-span-3">
					<label for="first_name" class="block text-sm font-medium leading-5 text-gray-700">
						Prénom
					</label>
					<div class="mt-1 rounded-md shadow-sm">
						<input id="first_name" class="form-input block w-full transition duration-150 ease-in-out sm:text-sm sm:leading-5 @error('first_name') border-red-300 text-red-900 placeholder-red-300 focus:border-red-300 focus:shadow-outline-red @enderror" wire:model="first_name" />
					</div>
					@error('first_name')<p class="mt-1 text-sm text-red-600">{{ $message }}</p>@enderror
				</div>

				<div class="sm:col-span-3">
					<label for="last_name" class="block text-sm font-medium leading-5 text-gray-700">
						Nom
					</label>
					<div class="mt-1 rounded-md shadow-sm">
						<input id="last_name" class="form-input block w-full transition duration-150 ease-in-out sm:text-sm sm:leading-5 @error('last_name') border-red-300 text-red-900 placeholder-red-300 focus:border-red-300 focus:shadow-outline-red @enderror" wire:model="last_name" />
					</div>
					@error('last_name')<p class="mt-1 text-sm text-red-600">{{ $message }}</p>@enderror
				</div>

				<div class="sm:col-span-4">
					<label for="email" class="block text-sm font-medium leading-5 text-gray-700">
						Email
					</label>
					<div class="mt-1 rounded-md shadow-sm">
						<input id="email" type="email" class="form-input block w-full transition duration-150 ease-in-out sm:text-sm sm:leading-5 @error('email') border-red-300 text-red-900 placeholder-red-300 focus:border-red-300 focus:shadow-outline-red @enderror " wire:model="email" />
					</div>
					@error('email')<p class="mt-1 text-sm text-red-600">{{ $message }}</p>@enderror
				</div>

				<div class="sm:col-span-6">
					<label for="street_address" class="block text-sm font-medium leading-5 text-gray-700">
						Adresse
					</label>
					<div class="mt-1 rounded-md shadow-sm">
						<input id="street_address" class="form-input block w-full transition duration-150 ease-in-out sm:text-sm sm:leading-5 @error('street_address') border-red-300 text-red-900 placeholder-red-300 focus:border-red-300 focus:shadow-outline-red @enderror" wire:model="street_address" />
					</div>
					@error('street_address')<p class="mt-1 text-sm text-red-600">{{ $message }}</p>@enderror
				</div>

				<div class="sm:col-span-2">
					<label for="country" class="block text-sm font-medium leading-5 text-gray-700">
						Pays
					</label>
					<div class="mt-1 rounded-md shadow-sm">
						<select id="country" class="form-select block w-full transition duration-150 ease-in-out sm:text-sm sm:leading-5 @error('country') border-red-300 text-red-900 placeholder-red-300 focus:border-red-300 focus:shadow-outline-red @enderror" wire:model="country">
							<option>France</option>
							<option>Sénégal</option>
							<option>Côte d'Ivoire</option>
						</select>
					</div>
					@error('country')<p class="mt-1 text-sm text-red-600">{{ $message }}</p>@enderror
				</div>

				<div class="sm:col-span-2">
					<label for="city" class="block text-sm font-medium leading-5 text-gray-700">
						Ville
					</label>
					<div class="mt-1 rounded-md shadow-sm">
						<input id="city" class="form-input block w-full transition duration-150 ease-in-out sm:text-sm sm:leading-5 @error('city') border-red-300 text-red-900 placeholder-red-300 focus:border-red-300 focus:shadow-outline-red @enderror" wire:model="city" />
					</div>
					@error('city')<p class="mt-1 text-sm text-red-600">{{ $message }}</p>@enderror
				</div>

				<div class="sm:col-span-2">
					<label for="zip" class="block text-sm font-medium leading-5 text-gray-700">
						Code postal
					</label>
					<div class="mt-1 rounded-md shadow-sm">
						<input id="zip" class="form-input block w-full transition duration-150 ease-in-out sm:text-sm sm:leading-5 @error('zip') border-red-300 text-red-900 placeholder-red-300 focus:border-red-300 focus:shadow-outline-red @enderror" wire:model="zip" />
					</div>
					@error('zip')<p class="mt-1 text-sm text-red-600">{{ $message }}</p>@enderror
				</div>

				<div class="sm:col-span-6">
					<label for="photo" class="block text-sm leading-5 font-medium text-gray-700">
						Photo
					</label>
					<div class="mt-2 flex items-center">
						<span class="h-16 w-16 rounded-full overflow-hidden bg-gray-100">
							@if($avatar)
							<img src="{{ $avatar->temporaryUrl() }}" alt="Nouvelle photo de profile" class="h-16 w-16 object-cover">
							@else
							<img src="{{ auth()->user()->avatarUrl() }}" alt="Photo de profil" class="h-16 w-16 object-cover">
							@endif
						</span>
						<div x-data="{ focused : false }">
							<span class="ml-5">
								<input type="file" id="file" class="sr-only" wire:model="avatar" @focus="focused=true" @blur="focused=false">
								<label for="file" class="cursor-pointer py-2 px-3 border border-gray-300 rounded-md text-sm leading-4 font-medium text-gray-700 hover:text-gray-500 focus:outline-none active:bg-gray-50 active:text-gray-800 transition duration-150 ease-in-out" :class=" { 'focus:outline-none focus:border-blue-300 focus:shadow-outline-blue' : focused } ">
									Change
								</label>
							</span>
						</div>
					</div>
						@error('avatar')<p class="mt-1 text-sm text-red-600">{{ $message }}</p>@enderror
				</div>
			</div>
		</div>

	</div>
	<div class="mt-8 border-t border-gray-200 pt-5">
		<div class="space-x-3 flex justify-end items-center">
			<span>
				@if(session()->has('notify-saved'))
			<div class="bg-gray-100">
				<div class="fixed inset-0 flex items-end justify-center px-4 py-6 pointer-events-none sm:p-6 sm:items-start sm:justify-end">
					<div x-data="{ show: true }" x-show="show" x-init="setTimeout(() => { show = false },2500)" x-description="Notification panel, show/hide based on alert state." x-transition:enter="transform ease-out duration-300 transition" x-transition:enter-start="translate-y-2 opacity-0 sm:translate-y-0 sm:translate-x-2" x-transition:enter-end="translate-y-0 opacity-100 sm:translate-x-0" x-transition:leave="transition ease-in duration-100" x-transition:leave-start="opacity-100" x-transition:leave-end="opacity-0" class="max-w-sm w-full bg-white shadow-lg rounded-lg pointer-events-auto">
						<div class="rounded-lg shadow-xs overflow-hidden">
							<div class="p-4">
								<div class="flex items-start">
									<div class="flex-shrink-0">
										<svg class="h-6 w-6 text-green-400" fill="none" viewBox="0 0 24 24" stroke="currentColor">
											<path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"></path>
										</svg>
									</div>
									<div class="ml-3 w-0 flex-1 pt-0.5">
										<p class="text-sm leading-5 font-medium text-gray-900">
											Votre profil à bien été mis à jour.
										</p>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
			@endif
		</span>
		<span class="inline-flex rounded-md shadow-sm">
			<button type="button" class="py-2 px-4 border border-gray-300 rounded-md text-sm leading-5 font-medium text-gray-700 hover:text-gray-500 focus:outline-none focus:border-blue-300 focus:shadow-outline-blue active:bg-gray-50 active:text-gray-800 transition duration-150 ease-in-out">
				Cancel
			</button>
		</span>
		<span class="inline-flex rounded-md shadow-sm">
			<button type="submit" class="inline-flex justify-center py-2 px-4 border border-transparent text-sm leading-5 font-medium rounded-md text-white bg-indigo-600 hover:bg-indigo-500 focus:outline-none focus:border-indigo-700 focus:shadow-outline-indigo active:bg-indigo-700 transition duration-150 ease-in-out">
				Save
			</button>
		</span>
	</div>
</div>
</form>
