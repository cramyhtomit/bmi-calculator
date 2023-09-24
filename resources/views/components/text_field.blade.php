@props(['for'])

<div class="input-container bg-lime-200">
    <input type="text" class="input-box" placeholder="0" id="input-box" />
    <label for="input-box" class="label-cm">{{ $for }}</label>
</div>
