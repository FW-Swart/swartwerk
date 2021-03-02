
@extends ('layouts.main')

@section('content')

@include('main.partials.home-heading')

<div class="container bg-green-500 mx-auto px-2 py-24 font-sans">

    <section class="py-4 object-fill">
        <div class="object-center p-2 mx-2 my-8 rounded-3xl bg-gray-400">
            <div class="overflow-hidden">
                <img src="https://picsum.photos/800/600?random=0" alt="Image 0" class="object-cover object-center mx-auto p-2 m-2 rounded-3xl" title="Lorem ipsum image 0">
                <h2 class="mx-auto py-2 pb-4 pt-1 text-center">
                    Imagew 1 heading ding
                </h2>
            </div>
        </div>
            <div class="overflow-hidden">
              <img src="https://picsum.photos/800/600?random=1" alt="Image 1" class="object-cover object-center mx-auto p-2 m-2 rounded-3xl" title="Lorem ipsum image 1">
            </div>
            <div class="overflow-hidden">
              <img src="https://picsum.photos/800/600?random=2" alt="Image 2" class="object-cover object-center mx-auto p-2 m-2 rounded-3xl" title="Lorem ipsum image 2">
            </div>
            <div class="overflow-hidden">
              <img src="https://picsum.photos/800/600?random=3" alt="Image 3" class="object-cover object-center mx-auto p-2 m-2 rounded-3xl" title="Lorem ipsum image 3">
            </div>
            <div class="overflow-hidden">
              <img src="https://picsum.photos/800/600?random=4" alt="Image 4" class="object-cover object-center mx-auto p-2 m-2 rounded-3xl" title="Lorem ipsum image 4">
            </div>
    </section>

</div>

@endsection
