@if (session()->has('success'))
<div class="bg-green-600 bottom-3 fixed px-4 py-2 right-3 rounded-xl text-white" x-data="{ show: true}"
    x-init="setTimeout(()=>show = false,4000)" x-show="show">
    <p>
        {{session('success')}}
    </p>
</div>
@endif