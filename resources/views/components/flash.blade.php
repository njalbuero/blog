@if (session()->has('success'))
<div 
    x-data = "{show:true}"
    x-init = "setTimeout(() => show = false, 2000)"
    x-show = "show"
    class="bottom-5 right-5 py-2 px-4 bg-blue-500 text-white text-sm fixed rounded-full">
    <p> {{ session('success') }} </p>
</div>
@endif