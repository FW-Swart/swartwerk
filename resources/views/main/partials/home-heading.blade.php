<div class="h-10 sticky top-0 bg-gray-600 m-0">
    <h1 class="">
        home heading
    </h1>

    <nav x-data="{show:false}" class="flex items-center justify-between flex-wrap bg-pink-500 p-6 m-0">
        <div class="flex items-center flex-shrink-0 text-white mr-6">
            <svg class="fill-current h-8 w-8 mr-2" width="54" height="54" viewBox="0 0 54 54" xmlns="#"><path d="#"/></svg>
            <span class="font-semibold text-xl tracking-tight uppercase">Swartwerk</span>
        </div>
        <div class="block md:hidden">
            <button @click="show=!show" class="flex items-center px-3 py-2 border rounded text-gray-100 border-gray-200 hover:text-green hover:border-white">
            <svg class="fill-current h-3 w-3" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><title>Menu</title><path d="M0 3h20v2H0V3zm0 6h20v2H0V9zm0 6h20v2H0v-2z"/></svg>
            </button>
        </div>
        <div @click.away="show = false" :class="{ 'block': show, 'hidden': !show }" class="w-full block flex-grow md:flex md:justify-end md:w-auto">
            <div>
            <a href="home" class="block md:inline-block text-sm px-4 py-2 leading-none rounded border-white hover:border-transparent hover:bg-white hover:text-green mt-4 md:mt-0">Home</a>
                <a href="projects" class="block md:inline-block text-sm px-4 py-2 leading-none rounded border-white hover:border-transparent hover:bg-white hover:text-green mt-4 md:mt-0">Projects</a>
                <a href="gallery" class="block md:inline-block text-sm px-4 py-2 leading-none rounded border-white hover:border-transparent hover:bg-white hover:text-green mt-4 md:mt-0">Gallery</a>
            </div>
        </div>
        </nav>

</div>
