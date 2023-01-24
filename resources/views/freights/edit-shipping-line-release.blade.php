<x-app-layout>

    <x-slot name="header">
        <h2 class="font-bold text-xl text-sky-900 leading-tight">
            {{ __('Shipping Line Release Stage') }}
        </h2>
    </x-slot>

    @include('partials._workflow')

    <x-card class="mt-20 mx-10">
        <form method="POST" action="/shipping-line-release" enctype="multipart/form-data">
            @csrf

            <div class="flex space-x-10 mb-6">
                <x-custom-input inputName="voyage" inputLabel="Voyage" inputValue="{{$shippingLineRelease->voyage}}"/>
    
                <x-custom-input inputName="etd" inputLabel="Estimated Time of Depature" inputValue="{{$shippingLineRelease->etd}}"/>
                
                <x-custom-input inputName="eta" inputLabel="Estimated Time of Arrival" inputValue="{{$shippingLineRelease->eta}}"/>
            </div>
    
            <div class="flex space-x-10 mb-6">
                <x-custom-input inputName="port_of_loading" inputLabel="Port of Loading" inputValue="{{$shippingLineRelease->port_of_loading}}"/>

                <x-custom-input inputName="port_of_discharge" inputLabel="Port of Discharge" inputValue="{{$shippingLineRelease->port_of_discharge}}"/>
    
                <x-custom-input inputName="total_volume" inputLabel="Total Volume" inputValue="{{$shippingLineRelease->total_volume}}"/>
            </div>
    
            <div class="flex space-x-10 mb-6">
                <x-custom-input inputName="cargo_closing_time" inputLabel="Cargo Closing Time" inputValue="{{$shippingLineRelease->cargo_closing_time}}"/>
    
                <x-custom-input inputName="commodity" inputLabel="commodity" inputValue="{{$shippingLineRelease->commodity}}"/>
    
                <x-custom-input inputName="ecdl" inputLabel="Empty Container Depot Location" inputValue="{{$shippingLineRelease->ecdl}}"/>
            </div>
    
            <div class="flex space-x-10 mb-6">
                <x-custom-input inputName="hauler" inputLabel="Hauler" inputValue="{{$shippingLineRelease->hauler}}"/>
    
                <div>
                    <label for="carrier_remarks">Carrier Remarks</label>
                    <textarea class="border border-gray-200 rounded p-2 w-full" name="carrier_remarks" rows="5">{{$shippingLineRelease->carrier_remarks}}</textarea>
                    
                    @error('carrier_remarks')
                    <p class="text-red-500 text-xs mt-1">{{$message}}</p>
                    @enderror
                </div>

                <div>
                    <label for="comments">Comments</label>
                    <textarea class="border border-gray-200 rounded p-2 w-full" name="comments" rows="5">{{$freight->comments}}</textarea>
                    
                    @error('comments')
                    <p class="text-red-500 text-xs mt-1">{{$message}}</p>
                    @enderror
                </div>
            </div>
    
            <div class="flex space-x-10 mb-6">
                <div>
                    <label for="attachment1">Attachment</label>
                    <input type="file" class="border border-gray-200 rounded p-2 w-full" name="attachment1" />
    
                    @error('attachment1')
                    <p class="text-red-500 text-xs mt-1">{{$message}}</p>
                    @enderror
                </div>
    
                <div>
                    <label for="attachment2">Attachment</label>
                    <input type="file" class="border border-gray-200 rounded p-2 w-full" name="attachment2" />
    
                    @error('attachment2')
                    <p class="text-red-500 text-xs mt-1">{{$message}}</p>
                    @enderror
                </div>
            </div>
            
            <div class="flex justify-end space-x-6">
                <button type="submit" class="bg-cyan-700  text-white rounded py-2 px-6">
                    Submit
                </button>
    
            </div>
        </form>
    </x-card>
</x-app-layout>