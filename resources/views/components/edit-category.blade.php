<div>
    <form class="w-full" method="POST" action="{{ route('category.update', $category->id) }}"  enctype="multipart/form-data">
        @csrf
        @method('PUT')
        <div class="flex flex-wrap -mx-3 mb-6">
            <div class="w-full md:w-1/2 px-3">
                <label clascategorys="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="grid-last-name">
                    {{ __('Category Name')}}
                </label>
                <input class="appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 leading-tight focus:outline-none focus:bg-white focus:border-gray-500"
                name="name" id="grid-last-name" type="text" value="{{ $category->name }}" placeholder="{{ __('Name') }}" required>
            </div>

            
            <div class="flex w-full items-center justify-center bg-grey-lighter">
                <label class="w-64 flex flex-col items-center px-4 py-6 bg-white text-blue rounded-lg shadow-lg tracking-wide uppercase border border-blue cursor-pointer hover:bg-blue hover:text-green-700">
                    <svg class="w-8 h-8" fill="currentColor" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20">
                        <path d="M16.88 9.1A4 4 0 0 1 16 17H5a5 5 0 0 1-1-9.9V7a3 3 0 0 1 4.52-2.59A4.98 4.98 0 0 1 17 8c0 .38-.04.74-.12 1.1zM11 11h3l-4-4-4 4h3v3h2v-3z" />
                    </svg>
                <span class="mt-2 text-base leading-normal"> {{ __('Select a file') }} </span>
                    <input name="photo" type='file' class="hidden"/>
                </label>
            </div>
            
    
            <div class="md:flex md:items-center mt-6">
                <div class="md:w-1/3"></div>
                <div class="md:w-2/3">
                    <button class="shadow bg-purple-500 hover:bg-purple-400 focus:shadow-outline focus:outline-none text-white font-bold py-2 px-4 rounded" type="submit">
                    {{ __('Edit') }}
                    </button>
                </div>
            </div> 
        </div>
    </form>
</div>