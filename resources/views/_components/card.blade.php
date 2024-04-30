<div class="w-72 h-96 rounded-2xl relative overflow-hidden hover:scale-105 duration-300">
    <img
        class="w-full h-full object-cover object-center rounded-2xl"
        src="{{ $image }}"
        alt="Card"
    />
    <div class="flex gap-3 ps-3 pb-3 absolute bottom-0 h-fit text-white">
        <div class="w-0.5 rounded-full bg-white h-16"></div>
        <div class="flex flex-col">
            <h2 class="flex flex-col text-xl font-extralight">
                {{ $title }}
                <span class="font-bold">{{ $description }}</span>
            </h2>
        </div>
    </div>
    <div
        class="w-full h-20 bg-gradient-to-t from-red-400/50 absolute bottom-0"
    ></div>
</div>
