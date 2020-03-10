<div class="">
    <div class="">
        <form action="/agent/list/search" method="get">
            @csrf
            <div class="text-center text-3xl text-orange-500 p-6">Find an Agent</div>
            <div class="flex justify-center text-gray-100">
                <div class="p-2">
                    <select name="province" id="province" class="rounded p-2 bg-gray-800" aria-describedby="provinceHelp" placeholder="Province...">
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
                    <small id="provinceHelp" class="block">Province *</small>
                </div>
                <div class="p-2">
                    <div class="text-gray-800 text-2xl"> | </div>
                </div>
                <div class="p-2">
                    <div class="">
                        <input name="city" type="text" class="w-full rounded p-2 bg-gray-800" id="city" value="{{old('city')}}"
                            aria-describedby="cityHelp" placeholder="City...">
                        <small id="cityHelp" class="form-text text-muted">City *</small>
                    </div>
                </div>
                <div class="p-2">
                    <div class="">
                        <input name="address" type="text" class="w-full rounded p-2 bg-gray-800" id="address" value="{{old('address')}}"
                            aria-describedby="addressHelp" placeholder="First Name + Last Name">
                        <small id="addressHelp" class="form-text text-muted">Agent Name</small>
                    </div>
                </div>
                <div class="p-2" align="center">
                    <button type="submit" class="w-full py-2 px-3 bg-gray-600 text-center uppercase rounded text-black font-bold hover:bg-gray-800 hover:text-gray-100">
                        Search
                    </button>
                </div>
            </div>
            <div class="flex justify-center">
                @if($errors->has('province'))
                    <div class="flex-initial p-2 m-2 bg-gray-800 rounded text-base text-semibold text-center text-red-500">Invalid Province</div>
                @endif
                @if($errors->has('city'))
                    <div class="flex-initial p-2 m-2 bg-gray-800 rounded text-base text-semibold text-center text-red-500">Invalid City</div>
                @endif
            </div>
        </form>
    </div>
</div>