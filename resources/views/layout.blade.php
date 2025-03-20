<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="{{ asset('vendor/bladewind/css/animate.min.css') }}" rel="stylesheet" />
    <link href="{{ asset('vendor/bladewind/css/bladewind-ui.min.css') }}" rel="stylesheet" />


    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <!-----------------------------------------------------------
-- animate.min.css by Daniel Eden (https://animate.style)
-- is required for the animation of notifications and slide out panels
-- you can ignore this step if you already have this file in your project
--------------------------------------------------------------------------->

</head>

<body>

    <livewire:counter />
    <x-bladewind::button>Tambah</x-bladewind::button>


    <x-bladewind::accordion>
        <x-bladewind::accordion.item title="What is BladewindUI?">
            <p>
                BladewindUI is a collection...
            </p>
        </x-bladewind::accordion.item>
        <x-bladewind::accordion.item title="How can I install the latest version of the library?">
            <div>
                At the root of your Laravel...
            </div>
        </x-bladewind::accordion.item>
        <x-bladewind::accordion.item title="How can I customize the library for my theme?">
            <div>
                BladewindUI has been designed ...
            </div>
        </x-bladewind::accordion.item>
    </x-bladewind::accordion>

    <x-bladewind::card reduce_padding="true">
        <!-- the delete button -->
        <div class="office-supplies-actions p-3 bg-gray-100/50 rounded-lg hidden">
            <x-bladewind::button size="tiny"
                type="secondary" outline="true"
                icon="trash" color="red"
                onclick="deleteRows()">
                Delete
            </x-bladewind::button>
        </div>

        <x-bladewind::table selectable="true" divider="thin"
            checkable="true"
            name="office_supplies">
            <x-slot:header>
                <th>Item</th>
                <th class="!text-center">Quantity</th>
                <th class="!text-right">Unit Price (GHS)</th>
            </x-slot:header>
            <tr data-id="12">
                <td>Office furniture</td>
                <td class="text-center">2</td>
                <td class="text-right">4,300.00</td>
            </tr>
            <tr data-id="13">
                <td>Stationery</td>
                <td class="text-center">5</td>
                <td class="text-right">1,500.00</td>
            </tr>
        </x-bladewind::table>
    </x-bladewind::card>

    <script src="{{ asset('vendor/bladewind/js/helpers.js') }}"></script>
</body>

</html>