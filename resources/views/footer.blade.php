<div class='px-2 py-5 text-white bg-gray-900 dark:border-t dark:border-gray-100'>
    <div class='grid grid-cols-1 gap-3 capitalize sm:grid-cols-2 sm:gap-2'>
        <div>

            <h1 class='text-2xl font-semibold text-white'>{{ env('APP_NAME') }}</h1>
            <p class='pb-4 text-gray-400'>
                find latest laravel posts and tutorials in this updated daily list
            </p>
            @include('footer.social')
        </div>
        <div class='my-5 text-center sm:my-3'>
            Content &copy; to it`<small>s</small> own Writers
            <br>
            All rights reserved
        </div>
    </div>
    <hr class='w-full mt-6 mb-3 border-gray-600' />
    <div class='text-center capitalize'>
        built with <span class='text-xl text-red-500'>&hearts;</span> by
        <a href="https://abo3adel.github.io/" target='_blank'
            class="text-xl font-semibold text-orange-400 whitespace-pre hover:underline"
            style="font-variant: small-caps">NinjaCoder</a>
    </div>
</div>
