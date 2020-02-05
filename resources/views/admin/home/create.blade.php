@extends('layouts.app')

@section('content')

<div class="container" id="status">
    <div class="row justify-content-center">
        <div class="card">
            @if(session('success'))
                <div class="card-header text-success">{{ session('success') }}</div>
            @endif
            @if(session('error'))
                <div class="card-header text-danger">{{ session('error') }}</div>
            @endif
        </div>
    </div>
</div>

<div class="container pt-2">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Add New Home</div>
                <div class="card-body">
                    <form action="/admin" method="post">
                        @csrf

                        <div class="form-group">
                            <label for="province">Province</label>
                            <select name="province" id="province" class="form-control" id="province" aria-describedby="provinceHelp" placeholder="Province...">
                                <option value="choose" selected>Province...</option>
                                <option value="AB" {{ old('province') == 'AB' ? 'selected' : ''}}>Alberta</option>
                                <option value="BC" {{ old('province') == 'BC' ? 'selected' : ''}}>British Columbia</option>
                                <option value="MB" {{ old('province') == 'MB' ? 'selected' : ''}}>Manitoba</option>
                                <option value="NB" {{ old('province') == 'NB' ? 'selected' : ''}} >New Brunswick</option>
                                <option value="NL" {{ old('province') == 'NL' ? 'selected' : ''}}>Newfoundland and Labrador</option>
                                <option value="NS" {{ old('province') == 'NS' ? 'selected' : ''}}>Nova Scotia</option>
                                <option value="ON" {{ old('province') == 'ON' ? 'selected' : ''}}>Ontario</option>
                                <option value="PE" {{ old('province') == 'PE' ? 'selected' : ''}}>Prince Edward Island</option>
                                <option value="QC" {{ old('province') == 'QC' ? 'selected' : ''}}>Quebec</option>
                                <option value="SK" {{ old('province') == 'SK' ? 'selected' : ''}}>Saskatchewan</option>
                                <option value="NT" {{ old('province') == 'NT' ? 'selected' : ''}}>Northwest Territories</option>
                                <option value="NU" {{ old('province') == 'NU' ? 'selected' : ''}}>Nunavut</option>
                                <option value="YT" {{ old('province') == 'YT' ? 'selected' : ''}}>Yukon</option>
                            </select>

                            @error('province')
                            <small class="text-danger">{{ $message }}</small>
                            @enderror
                        </div>

                        <div class="form-group">
                            <label for="city">City</label>
                            <input name="city" type="text" class="form-control" id="city" value="{{old('city')}}"
                                aria-describedby="cityHelp" placeholder="City...">
                            <small id="cityHelp" class="form-text text-muted">Enter the home city</small>
                            @error('city')
                            <small class="text-danger">{{ $message }}</small>
                            @enderror
                        </div>

                        <div class="form-group">
                            <label for="address">Address</label>
                            <input name="address" type="text" class="form-control" id="address" value="{{old('address')}}"
                                aria-describedby="addressHelp" placeholder="Number + Street">
                            <small id="addressHelp" class="form-text text-muted">Enter the home city</small>
                            @error('address')
                            <small class="text-danger">{{ $message }}</small>
                            @enderror
                        </div>

                        <div class="form-group">
                            <label for="postal_code">Zip / Postal code</label>
                            <input name="postal_code" type="text" class="form-control" id="postal_code" value="{{old('postal_code')}}"
                                aria-describedby="postal_codeHelp" placeholder="Zip / Postal code">
                            <small id="postal_codeHelp" class="form-text text-muted">Enter the home city</small>
                            @error('postal_code')
                            <small class="text-danger">{{ $message }}</small>
                            @enderror
                        </div>

                        <div class="form-group">
                            <label for="type">Type of Housing</label>
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="type" id="type_house" value="house" {{ old('type') == 'house' ? 'checked' : ''}}>
                                <label class="form-check-label" for="type_house">
                                    House
                                </label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="type" id="type_duplex" value="duplex" {{ old('type') == 'duplex' ? 'checked' : ''}}>
                                <label class="form-check-label" for="type_duplex">
                                    Duplex
                                </label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="type" id="type_townhouse" value="townhouse" {{ old('type') == 'townhouse' ? 'checked' : ''}}>
                                <label class="form-check-label" for="type_townhouse">
                                    Townhouse
                                </label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="type" id="type_apartment" value="apartment" {{ old('type') == 'apartment' ? 'checked' : ''}}>
                                <label class="form-check-label" for="type_apartment">
                                    Apartment
                                </label>
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="row">
                                <div class="col">
                                    <label for="bedrooms">Bedrooms</label>
                                    <input name="bedrooms" type="number" class="form-control" id="bedrooms" min="1" value="{{old('bedrooms')}}"
                                        aria-describedby="bedroomsHelp" placeholder="# bedrooms">
                                    <small id="bedroomsHelp" class="form-text text-muted">Enter number of bedrooms</small>
                                    @error('bedrooms')
                                    <small class="text-danger">{{ $message }}</small>
                                    @enderror
                                </div>
                                <div class="col">
                                    <label for="bathrooms">Bathrooms</label>
                                    <input name="bathrooms" type="number" class="form-control" id="bathrooms" min="1" value="{{old('bathrooms')}}"
                                        aria-describedby="bathroomsHelp" placeholder="# bathrooms">
                                    <small id="bathroomsHelp" class="form-text text-muted">Enter number of bathrooms</small>
                                    @error('bathrooms')
                                    <small class="text-danger">{{ $message }}</small>
                                    @enderror
                                </div>
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="floor_space">Floor Space (sq ft)</label>
                            <input name="floor_space" type="number" class="form-control" id="floor_space" min="0" value="{{old('floor_space')}}"
                                aria-describedby="floor_spaceHelp" placeholder="Floor Space">
                            <small id="floor_spaceHelp" class="form-text text-muted">Enter Floor Space</small>
                            @error('floor_space')
                            <small class="text-danger">{{ $message }}</small>
                            @enderror
                        </div>

                        <div class="form-group">
                            <label for="price">Price</label>
                            <input name="price" type="number" class="form-control" id="price" min="0" value="{{old('price')}}"
                                aria-describedby="priceHelp" placeholder="Price">
                            <small id="priceHelp" class="form-text text-muted">Enter Estimated Pricing of Home</small>
                            @error('price')
                            <small class="text-danger">{{ $message }}</small>
                            @enderror
                        </div>

                        <button class="btn btn-dark" type="submit">Submit</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection