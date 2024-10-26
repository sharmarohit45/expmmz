<x-guest-layout>
    <div class="pt-4 bg-dark-100">
        <div class="min-h-screen flex flex-col items-center pt-6 sm:pt-0">
            <div>
               <img src="/img/logo.png" alt="logo" srcset=""  style="height: 200px;width:240px">
            </div>

            <div class="w-full sm:max-w-2xl mt-6 p-6 bg-white shadow-md overflow-hidden sm:rounded-lg prose">
                {!! $terms !!}
            </div>
        </div>
    </div>
</x-guest-layout>
