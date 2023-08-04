<div class="flex items-center">
    <input
        type="text"
        {!! $attributes !!}
    />
    <div class="relative inline-flex ml-1">
        <i class="fas fa-info-circle cursor-pointer"></i>
        <div class="absolute left-0 ml-4 mt-1 bg-white border border-gray-300 p-2 rounded shadow-md text-sm z-10 hidden group-hover:block">
            Please enter a valid name with a maximum of 255 characters.
        </div>
    </div>
</div>