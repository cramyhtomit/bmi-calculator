<x-layout>
    <div class="calculator-container">
        Enter your details below
        <input type="radio" name="unit" id="metric" value="metric">
        <label for="metric">
            Metric
        </label>
        <input type="radio" name="unit" id="imperial" value="imperial"><label for="imperial">
            Imperial
        </label>


        <div class="inputs-wrapper flex flex-col gap-3">
            <span>Height</span>
            <div class="height-input-container">
                <x-text_field :for="'ft'" />
                <x-text_field :for="'in'" />
            </div>
            <span>Weight</span>
            <div class="weight-input-container">
                <x-text_field :for="'st'" />
                <x-text_field :for="'lbs'" />
            </div>
        </div>

    </div>
</x-layout>
