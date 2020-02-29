<div class="container">
    <div class="row justify-content-center p-2">
        <form action="/home/list/search" method="get">
            @csrf
            <div class="row justify-content-center">
                <div class="form-group h1" style="color: grey">Start Your Home Search</div>
            </div>
            <div class="row">
                <div class="col">
                    <div class="form-group">
                        <select name="province" id="province" class="form-control" aria-describedby="provinceHelp" placeholder="Province...">
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
                        <small id="provinceHelp" class="form-text text-muted">Province</small>
                        @error('province')
                            <small class="text-danger">{{ $message }}</small>
                        @enderror
                    </div>
                </div>
                <div>
                    <div class="form-group">
                        <h2 class="text-muted"> | </h2>
                    </div>
                </div>
                <div class="col">
                    <div class="form-group">
                        <input name="city" type="text" class="form-control" id="city" value="{{old('city')}}"
                            aria-describedby="cityHelp" placeholder="City...">
                        <small id="cityHelp" class="form-text text-muted">City</small>
                        
                    </div>
                </div>
                <div class="col">
                    <div class="form-group">
                        <input name="address" type="text" class="form-control" id="address" value="{{old('address')}}"
                            aria-describedby="addressHelp" placeholder="Number + Street">
                        <small id="addressHelp" class="form-text text-muted">Address</small>
                        
                    </div>
                </div>
                <div class="col">
                    <div class="form-group">
                        <input name="postal_code" type="text" class="form-control" id="postal_code" value="{{old('postal_code')}}"
                            aria-describedby="postal_codeHelp" placeholder="Zip / Postal code">
                        <small id="postal_codeHelp" class="form-text text-muted">Postal/Zip Code</small>
                    </div>
                </div>
                <div class="col" align="center">
                    <button type="submit" class="btn btn-secondary btn-lg">Search</button>
                    <p><a href="#" onclick="showAdvancedOptions();">Advanced Options</a></p>
                </div>
            </div>
            <div class="row border-top pt-2 d-none" id="advanced_options">
                <div class="col">
                    <select name="type" id="id" class="form-control" aria-describedby="typeHelp" placeholder="Type...">
                        <option value="house" selected>House</option>
                        <option value="duplex" selected>Duplex</option>
                        <option value="townhouse" selected>Townhouse</option>
                        <option value="apartment" selected>Apartment</option>
                    </select>
                    <small id="typeHelp" class="form-text text-muted">Type of Housing</small>
                </div>
                <div class="col">
                    <input name="bedrooms" type="number" class="form-control" id="bedrooms" min="1" value="{{old('bedrooms')}}"
                                        aria-describedby="bedroomsHelp" placeholder="# bedrooms">
                    <small id="bedroomsHelp" class="form-text text-muted">Enter number of bedrooms</small>
                </div>
                <div class="col">
                    <input name="bathrooms" type="number" class="form-control" id="bathrooms" min="1" value="{{old('bathrooms')}}"
                                        aria-describedby="bathroomsHelp" placeholder="# bathrooms">
                    <small id="bathroomsHelp" class="form-text text-muted">Enter number of bathrooms</small>
                </div>
                <div class="col">
                    <input name="floor_space" type="number" class="form-control" id="floor_space" min="0" value="{{old('floor_space')}}"
                                aria-describedby="floor_spaceHelp" placeholder="Floor Space">
                    <small id="floor_spaceHelp" class="form-text text-muted">Enter Floor Space (sq ft)</small>
                </div>
            </div>
            <div class="row justify-content-center">
                <div class="card">
                    @if($errors->has('city') || $errors->has('address') || $errors->has('postal_code'))
                        <div class="card-header text-danger">At least one field input is required</div>
                    @endif
                </div>
            </div>
        </form>
    </div>
</div>