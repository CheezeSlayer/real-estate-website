<div class="container">
    <div class="row justify-content-center p-2 border-bottom">
        <form action="/home/list/search" method="get">
            @csrf
            <div class="row justify-content-center">
                <div class="form-group h1" style="color: grey">Start Your Home Search</div>
            </div>
            <div class="row">
                <div class="col">
                    <div class="form-group">
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
                <div class="col">
                    <button type="submit" class="btn btn-secondary btn-lg">Search</button>
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