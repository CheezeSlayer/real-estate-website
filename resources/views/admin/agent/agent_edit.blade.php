@extends('layouts.app')

@section('content')

<div class="flex justify-center bg-gray-700">
    <div class="w-1/2 bg-gray-800 rounded-lg shadow-xl p-6">
        <div class="text-semibold text-3xl text-center text-orange-500 pb-4">Edit Agent</div>
    <div class="flex justify-center">
        <div class="bg-gray-700 rounded text-lg text-gray-100 p-6 m-4 w-2/3">
            <form action="/admin/agent/{{ $agent->id }}/update" method="post">
                @csrf
                <div class="p-2">
                    <label class="block" for="province">Province</label>
                    <select name="province" id="province" class="w-full rounded p-2 bg-gray-800" id="province" aria-describedby="provinceHelp" placeholder="Province...">
                        <option value="choose" selected>Province...</option>
                        <option value="AB" {{ old('province', $agent->province) == 'AB' ? 'selected' : ''}}>Alberta</option>
                        <option value="BC" {{ old('province', $agent->province) == 'BC' ? 'selected' : ''}}>British Columbia</option>
                        <option value="MB" {{ old('province', $agent->province) == 'MB' ? 'selected' : ''}}>Manitoba</option>
                        <option value="NB" {{ old('province', $agent->province) == 'NB' ? 'selected' : ''}} >New Brunswick</option>
                        <option value="NL" {{ old('province', $agent->province) == 'NL' ? 'selected' : ''}}>Newfoundland and Labrador</option>
                        <option value="NS" {{ old('province', $agent->province) == 'NS' ? 'selected' : ''}}>Nova Scotia</option>
                        <option value="ON" {{ old('province', $agent->province) == 'ON' ? 'selected' : ''}}>Ontario</option>
                        <option value="PE" {{ old('province', $agent->province) == 'PE' ? 'selected' : ''}}>Prince Edward Island</option>
                        <option value="QC" {{ old('province', $agent->province) == 'QC' ? 'selected' : ''}}>Quebec</option>
                        <option value="SK" {{ old('province', $agent->province) == 'SK' ? 'selected' : ''}}>Saskatchewan</option>
                        <option value="NT" {{ old('province', $agent->province) == 'NT' ? 'selected' : ''}}>Northwest Territories</option>
                        <option value="NU" {{ old('province', $agent->province) == 'NU' ? 'selected' : ''}}>Nunavut</option>
                        <option value="YT" {{ old('province', $agent->province) == 'YT' ? 'selected' : ''}}>Yukon</option>
                    </select>

                    @error('province')
                    <small class="text-red-500">{{ $message }}</small>
                    @enderror
                </div>

                <div class="p-2">
                    <label class="block" for="city">City</label>
                    <input name="city" type="text" class="w-full rounded p-2 bg-gray-800" id="city" value="{{old('city') ? old('city') : $agent->city}}"
                        aria-describedby="cityHelp" placeholder="City...">
                    @error('city')
                    <small class="text-red-500">{{ $message }}</small>
                    @enderror
                </div>

                <div class="p-2">
                    <label class="block" for="first_name">First Name</label>
                    <input name="first_name" type="text" class="w-full rounded p-2 bg-gray-800" id="first_name" value="{{old('first_name') ? old('first_name') : $agent->first_name}}"
                        aria-describedby="first_nameHelp" placeholder="First Name">
                    @error('first_name')
                    <small class="text-red-500">{{ $message }}</small>
                    @enderror
                </div>

                <div class="p-2">
                    <label class="block" for="last_name">Last Name</label>
                    <input name="last_name" type="text" class="w-full rounded p-2 bg-gray-800" id="last_name" value="{{old('last_name') ? old('last_name') : $agent->last_name}}"
                        aria-describedby="last_nameHelp" placeholder="Last Name">
                    @error('last_name')
                    <small class="text-red-500">{{ $message }}</small>
                    @enderror
                </div>

                <div class="p-2">
                    <label class="block" for="email">Email</label>
                    <input name="email" type="text" class="w-full rounded p-2 bg-gray-800" id="email" value="{{old('email') ? old('email') : $agent->email}}"
                        aria-describedby="emailHelp" placeholder="agent@laravelrealtor.com">
                    @error('email')
                    <small class="text-red-500">{{ $message }}</small>
                    @enderror
                </div>

                <div class="p-2">
                    <label class="block" for="phone_number">Phone Number</label>
                    <input name="phone_number" type="text" class="w-full rounded p-2 bg-gray-800" id="email" value="{{old('phone_number') ? old('phone_number') : $agent->phone_number}}"
                        aria-describedby="phone_numberHelp" placeholder="">
                    @error('phone_number')
                    <small class="text-red-500">{{ $message }}</small>
                    @enderror
                </div>

                <button class="w-full bg-orange-600 py-2 px-3 text-center uppercase rounded text-black font-bold hover:bg-orange-500" type="submit">Submit</button>
            </form>
        </div>
    </div>
    </div>
</div>

@endsection