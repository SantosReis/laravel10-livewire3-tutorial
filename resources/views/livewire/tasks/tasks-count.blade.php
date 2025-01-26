<div class="flex justify-between mt-4 mx-6">
    <div class="w-full p-4 flex justify-between rounded-md bg-slate-200 dark:border-gray-700 dark:bg-gray-800 dark:hover:bg-gray-700 dark:text-white shadow-md">
        @foreach ($tasksByStatus as $status)
            <div class="flex flex-col justify-center items-center">
                <span @class([
                    'w-16 h-16 flex justify-center items-center rounded-full text-lg text-black dark:text-white border-2',
                    $status->status->color() => $status->status,
                ])>
                    {{ $status->count }}
                </span>
                <span>{{ Str::of($status->status->value)->headline() }}</span>
            </div>
        @endforeach
    </div>
</div>
