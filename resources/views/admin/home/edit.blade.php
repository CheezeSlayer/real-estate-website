@extends('layouts.app')

@section('content')

<div class="flex justify-center" id="status">
    @if(session('success'))
        <div class="flex-initial p-2 m-2 bg-gray-800 rounded text-base text-semibold text-center text-green-500">{{ session('success') }}</div>
    @endif
    @if(session('error'))
        <div class="flex-initial p-2 m-2 bg-gray-800 rounded text-base text-semibold text-center text-red-500">{{ session('error') }}</div>
    @endif
</div>

<div class="flex justify-center bg-gray-700">
    <div class="w-1/2 bg-gray-800 rounded-lg shadow-xl p-6">
        <div class="">
            <div class="">
                <div class="text-semibold text-3xl text-center text-orange-500 pb-8">Edit Home</div>
                <div class="bg-gray-700 rounded text-lg text-gray-100 p-6">
                    <form action="/admin/home/{{ $home->id }}/update" method="post">
                        @csrf
                        <div class="p-2">
                            <label class="block" for="province">Province</label>
                            <select name="province" id="province" class="w-full rounded p-2 bg-gray-800" id="province" aria-describedby="provinceHelp" placeholder="Province...">
                                <option value="choose" selected>Province...</option>
                                <option value="AB" {{ old('province', $home->province) == 'AB' ? 'selected' : ''}}>Alberta</option>
                                <option value="BC" {{ old('province', $home->province) == 'BC' ? 'selected' : ''}}>British Columbia</option>
                                <option value="MB" {{ old('province', $home->province) == 'MB' ? 'selected' : ''}}>Manitoba</option>
                                <option value="NB" {{ old('province', $home->province) == 'NB' ? 'selected' : ''}} >New Brunswick</option>
                                <option value="NL" {{ old('province', $home->province) == 'NL' ? 'selected' : ''}}>Newfoundland and Labrador</option>
                                <option value="NS" {{ old('province', $home->province) == 'NS' ? 'selected' : ''}}>Nova Scotia</option>
                                <option value="ON" {{ old('province', $home->province) == 'ON' ? 'selected' : ''}}>Ontario</option>
                                <option value="PE" {{ old('province', $home->province) == 'PE' ? 'selected' : ''}}>Prince Edward Island</option>
                                <option value="QC" {{ old('province', $home->province) == 'QC' ? 'selected' : ''}}>Quebec</option>
                                <option value="SK" {{ old('province', $home->province) == 'SK' ? 'selected' : ''}}>Saskatchewan</option>
                                <option value="NT" {{ old('province', $home->province) == 'NT' ? 'selected' : ''}}>Northwest Territories</option>
                                <option value="NU" {{ old('province', $home->province) == 'NU' ? 'selected' : ''}}>Nunavut</option>
                                <option value="YT" {{ old('province', $home->province) == 'YT' ? 'selected' : ''}}>Yukon</option>
                            </select>

                            @error('province')
                            <small class="text-red-400">{{ $message }}</small>
                            @enderror
                        </div>

                        <div class="p-2">
                            <label class="block" for="city">City</label>
                            <input name="city" type="text" class="w-full rounded p-2 bg-gray-800" id="city" value="{{old('city') ? old('city') : $home->city}}"
                                aria-describedby="cityHelp" placeholder="City...">
                            <small id="cityHelp" class="block">Enter the home city</small>
                            @error('city')
                            <small class="text-red-400">{{ $message }}</small>
                            @enderror
                        </div>

                        <div class="p-2">
                            <label class="block" for="address">Address</label>
                            <input name="address" type="text" class="w-full rounded p-2 bg-gray-800" id="address" value="{{old('address') ? old('address') : $home->address}}"
                                aria-describedby="addressHelp" placeholder="Number + Street">
                            <small id="addressHelp" class="block">Enter the home city</small>
                            @error('address')
                            <small class="text-red-400">{{ $message }}</small>
                            @enderror
                        </div>

                        <div class="p-2">
                            <label class="block" for="postal_code">Zip / Postal code</label>
                            <input name="postal_code" type="text" class="w-full rounded p-2 bg-gray-800" id="postal_code" value="{{old('postal_code') ? old('postal_code') : $home->postal_code}}"
                                aria-describedby="postal_codeHelp" placeholder="Zip / Postal code">
                            <small id="postal_codeHelp" class="block">Enter the home city</small>
                            @error('postal_code')
                            <small class="text-red-400">{{ $message }}</small>
                            @enderror
                        </div>

                        <div class="p-2">
                            <label class="block pb-2" for="type">Type of Housing</label>
                            <div class="rounded p-2">    
                                <div>
                                    <input type="radio" name="type" id="type_house" value="house" {{ old('type') == 'house' ? 'checked' : ($home->type == 'house' ? 'checked' : '') }}>
                                    <label for="type_house">
                                        House
                                    </label>
                                </div>
                                <div>
                                    <input type="radio" name="type" id="type_duplex" value="duplex" {{ old('type') == 'duplex' ? 'checked' : ($home->type == 'duplex' ? 'checked' : '')}}>
                                    <label for="type_duplex">
                                        Duplex
                                    </label>
                                </div>
                                <div>
                                    <input class="form-check-input" type="radio" name="type" id="type_townhouse" value="townhouse" {{ old('type') == 'townhouse' ? 'checked' : ($home->type == 'townhouse' ? 'checked' : '')}}>
                                    <label class="form-check-label" for="type_townhouse">
                                        Townhouse
                                    </label>
                                </div>
                                <div>
                                    <input class="form-check-input" type="radio" name="type" id="type_apartment" value="apartment" {{ old('type') == 'apartment' ? 'checked' : ($home->type == 'apartment' ? 'checked' : '')}}>
                                    <label class="form-check-label" for="type_apartment">
                                        Apartment
                                    </label>
                                </div>
                            </div>
                        </div>

                        <div class="p-2">
                            <div class="flex">
                                <div class="w-full">
                                    <label class="block" for="bedrooms">Bedrooms</label>
                                    <input name="bedrooms" type="number" class="w-2/3 rounded p-2 bg-gray-800" id="bedrooms" min="1" value="{{old('bedrooms') ? old('bedrooms') : $home->bedrooms}}"
                                        aria-describedby="bedroomsHelp" placeholder="# bedrooms">
                                    <small id="bedroomsHelp" class="block">Enter number of bedrooms</small>
                                    @error('bedrooms')
                                    <small class="text-red-400">{{ $message }}</small>
                                    @enderror
                                </div>
                                <div class="w-full">
                                    <label class="block" for="bathrooms">Bathrooms</label>
                                    <input name="bathrooms" type="number" class="w-2/3 rounded p-2 bg-gray-800" id="bathrooms" min="1" value="{{old('bathrooms') ? old('bathrooms') : $home->bathrooms}}"
                                        aria-describedby="bathroomsHelp" placeholder="# bathrooms">
                                    <small id="bathroomsHelp" class="block">Enter number of bathrooms</small>
                                    @error('bathrooms')
                                    <small class="text-red-400">{{ $message }}</small>
                                    @enderror
                                </div>
                            </div>
                        </div>

                        <div class="p-2">
                            <label class="block" for="floor_space">Floor Space (sq ft)</label>
                            <input name="floor_space" type="number" class="w-full rounded p-2 bg-gray-800" id="floor_space" min="0" value="{{old('floor_space') ? old('floor_space') : $home->floor_space}}"
                                aria-describedby="floor_spaceHelp" placeholder="Floor Space">
                            <small id="floor_spaceHelp" class="block">Enter Floor Space</small>
                            @error('floor_space')
                            <small class="text-red-400">{{ $message }}</small>
                            @enderror
                        </div>

                        <div class="p-2">
                            <label class="block" for="price">Price</label>
                            <input name="price" type="number" class="w-full rounded p-2 bg-gray-800" id="price" min="0" value="{{old('price') ? old('price') : $home->price}}"
                                aria-describedby="priceHelp" placeholder="Price">
                            <small id="priceHelp" class="block">Enter Estimated Pricing of Home</small>
                            @error('price')
                            <small class="text-red-400">{{ $message }}</small>
                            @enderror
                        </div>

                        <div class="p-2">
                            <label class="block" for="description">Description</label>
                            <div class="">
                                <textarea rows="5" name="description" type="text" class="w-full rounded p-2 bg-gray-800" id="description" 
                                aria-describedby="descriptionHelp" placeholder="Description">{{old('description') ? old('description') : $home->description}}</textarea>
                            </div>
                            <small id="descriptionHelp" class="block">Add a Short Description of Home</small>
                            @error('description')
                            <small class="text-red-400">{{ $message }}</small>
                            @enderror
                        </div>

                        <button class="w-full bg-orange-600 py-2 px-3 text-center uppercase rounded text-black font-bold hover:bg-orange-500" type="submit">Save</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection