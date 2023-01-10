<x-app-layout>
    
    @include('partials._workflow')

    <section class="mt-28 m-12 mx-auto p-6 max-w-3xl border border-gray-200">
        <table class="w-full text-left">
            <tr>
                <th class="w-1/2 bg-gray-50 py-1 border border-gray-200">File Number</th>
                <th class="w-1/2 bg-gray-50 py-1 border border-gray-200">Bill of Laden Number</th>
            </tr>
            <tr>
                <td class="pt-1 pb-5 border border-gray-200 font-light">{{$freight->file_number}}</td>
                <td class="pt-1 pb-5 border border-gray-200 font-light">{{$freight->bl_number}}</td>
            </tr>
        </table>

        <table class="w-full text-left">
            <tr>
                <th class="w-1/2 bg-gray-50 py-1 border border-gray-200">Name of Customer</th>
                <th class="w-1/2 bg-gray-50 py-1 border border-gray-200">Type of Freight</th>
            </tr>
            <tr>
                <td class="pt-1 pb-5 border border-gray-200 font-light">{{$freight->customer_name}}</td>
                <td class="pt-1 pb-5 border border-gray-200 font-light">{{$freight->type_of_freight}}</td>
            </tr>
        </table>

        <table class="w-full text-left">
            <tr>
                <th class="w-1/2 bg-gray-50 py-1 border border-gray-200">Vessel</th>
                <th class="w-1/2 bg-gray-50 py-1 border border-gray-200">Port of Discharge</th>
            </tr>
            <tr>
                <td class="pt-1 pb-5 border border-gray-200 font-light">MSC Wisdom</td>
                <td class="pt-1 pb-5 border border-gray-200 font-light">Tema Port</td>
            </tr>
        </table>

        <table class="w-full text-left">
            <tr>
                <th class="w-1/2 bg-gray-50 py-1 border border-gray-200">Shipper</th>
                <th class="w-1/2 bg-gray-50 py-1 border border-gray-200">Port of Loading</th>
            </tr>
            <tr>
                <td class="pt-1 pb-5 border border-gray-200 font-light">Maersk Shipping</td>
                <td class="pt-1 pb-5 border border-gray-200 font-light">Port of London</td>
            </tr>
        </table>

        <table class="w-full text-left">
            <tr>
                <th class="w-1/2 bg-gray-50 py-1 border border-gray-200">Freight To Be Paid at</th>
                <th class="w-1/2 bg-gray-50 py-1 border border-gray-200">Number of Original Bills of Laden</th>
            </tr>
            <tr>
                <td class="pt-1 pb-5 border border-gray-200 font-light">Tema Port</td>
                <td class="pt-1 pb-5 border border-gray-200 font-light">Three (3)</td>
            </tr>
        </table>


        <table class="w-full text-left mt-10">
            <tr>
                <th class="w-1/5 bg-gray-50 py-1 border border-gray-200">Container and Seals</th>
                <th class="w-1/5 bg-gray-50 py-1 border border-gray-200">No. of Packages</th>
                <th class="w-1/5 bg-gray-50 py-1 border border-gray-200">Description of Packages and Goods</th>
                <th class="w-1/5 bg-gray-50 py-1 border border-gray-200">Gross Weight Cargo</th>
                <th class="w-1/5 bg-gray-50 py-1 border border-gray-200">Measurement</th>
            </tr>
            <tr>
                <td class="pt-1 pb-5 border border-gray-200 font-light">TRH0323534Q4, SEAL G38W032, PMS 02</td>
                <td class="pt-1 pb-5 border border-gray-200 font-light">1 x 20ST, 1 x 10ST</td>
                <td class="pt-1 pb-5 border border-gray-200 font-light">PP Woven Ground Cover, PP Woven Sulzer Fabric</td>
                <td class="pt-1 pb-5 border border-gray-200 font-light">KGS 8,210.00</td>
                <td class="pt-1 pb-5 border border-gray-200 font-light">CBM 25.000</td>
            </tr>
        </table>

        <table class="w-full text-left mt-10">
            <tr>
                <th class="w-1/5 bg-gray-50 py-1 border border-gray-200">Container and Seals</th>
                <th class="w-1/5 bg-gray-50 py-1 border border-gray-200">No. of Packages</th>
                <th class="w-1/5 bg-gray-50 py-1 border border-gray-200">Description of Packages and Goods</th>
                <th class="w-1/5 bg-gray-50 py-1 border border-gray-200">Gross Weight Cargo</th>
                <th class="w-1/5 bg-gray-50 py-1 border border-gray-200">Measurement</th>
            </tr>
            <tr>
                <td class="pt-1 pb-5 border border-gray-200 font-light">TRH0323534Q4, SEAL G38W032, PMS 02</td>
                <td class="pt-1 pb-5 border border-gray-200 font-light">1 x 20ST, 1 x 10ST</td>
                <td class="pt-1 pb-5 border border-gray-200 font-light">PP Woven Ground Cover, PP Woven Sulzer Fabric</td>
                <td class="pt-1 pb-5 border border-gray-200 font-light">KGS 8,210.00</td>
                <td class="pt-1 pb-5 border border-gray-200 font-light">CBM 25.000</td>
            </tr>
        </table>
    </section>
    
</x-app-layout>
