@extends('layouts.layout')

@section('content')
    <form class="mb-9" action="{{ route('store-page', isset($page) ? $page->id : '') }}" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="row g-3 flex-between-end mb-5">
            <div class="col-auto">
                <h2 class="mb-2">{{ isset($page) ? 'Edit Page' : 'Add New Page' }}</h2>
            </div>
            <div class="col-auto">
                <button class="btn btn-primary mb-2 mb-sm-0" type="submit">Save</button>
            </div>
        </div>

        <div class="row g-5">
            <div class="col-12 col-xl-8">
                <div class="card mb-6">
                    <div class="card-body">
                        <div class="">
                            <h4 class="mb-3">Page Content</h4>
                            <textarea class="form-control mb-2" rows="5" name="content" id="content" placeholder="Page Content...">{{ old('content', $page->content ?? '') }}</textarea>
                        </div>
                    </div>
                </div>

                <div x-data="galleryManager()" class="card mb-3">
                    <div class="card-body">
                        <div id="galleryContainer">
                            <!-- Gallery Section -->
                            <template x-for="(gallery, galleryIndex) in galleries" :key="galleryIndex">
                                <div class="galleryImagesDiv mb-4">
                                    <div class="d-flex justify-content-between mb-4">
                                        <h5 class="mb-2 text-body-highlight">Gallery Title</h5>
                                        <button type="button" class="btn btn-danger" @click="removeGallery(galleryIndex)">Remove Gallery</button>
                                    </div>
                                    <input class="form-control mb-xl-3" type="text" x-model="gallery.title" :name="'gallery_title[' + galleryIndex + ']'" placeholder="Gallery Title...">
                                    <div class="galleryImageContainer">
                                        <h5 class="mb-3">Gallery Images</h5>
                                        <div class="row">
                                            <template x-for="(image, imageIndex) in gallery.images" :key="imageIndex">
                                                <div class="col-12 col-md-4 mb-4">
                                                    <div class="form-control" style="height: 150px; position: relative; display: flex; flex-direction: column; align-items: center; justify-content: center">
                                                        <button class="btn btn-link p-0" type="button" @click="browseImage(galleryIndex, imageIndex)">Browse from device</button>
                                                        <img x-show="image.src" :src="image.src" class="mt-3" width="100" alt="Image">
                                                        <input type="file" @change="handleImageUpload($event, galleryIndex, imageIndex)" :name="'gallery_images[' + galleryIndex + '][files][]'" accept=".jpg, .png, .jpeg" style="height: 100%; width: 100%; position: absolute; top: 0px; left: 0px; opacity: 0">
                                                        <!-- Hidden input for existing images -->
                                                        <input type="hidden" :name="'gallery_images[' + galleryIndex + '][file_ids][' + imageIndex + ']'" :value="image.id">
                                                    </div>
                                                    <div class="captionContainer mt-2">
                                                        <input class="form-control" type="text" x-model="image.caption" :name="'image_captions[' + galleryIndex + '][' + imageIndex + ']'" placeholder="Image Caption">
                                                    </div>
                                                </div>
                                            </template>
                                        </div>
                                        <button type="button" class="btn btn-primary addMoreImages" @click="addMoreImages(galleryIndex)">Add More Images</button>
                                    </div>
                                </div>
                            </template>
                        </div>
                        <div style="display: flex; justify-content: end" class="mt-4">
                            <button type="button" class="btn btn-primary" @click="addGallery">
                                <i class="fas fa-plus me-2"></i>Add Gallery
                            </button>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-12 col-xl-4">
                <div class="row g-2">
                    <div class="col-12 col-xl-12">
                        <div class="card mb-3">
                            <div class="card-body">
                                <div class="col-auto">
                                    <h4 class="mb-4">Page Details</h4>
                                </div>
                                <div class="row gx-3">
                                    <div class="col-12 col-sm-6 col-xl-12">
                                        <div class="mb-4">
                                            <h5 class="mb-2 text-body-highlight">Page Name</h5>
                                            <input class="form-control mb-xl-3" type="text" name="name" placeholder="Page Name..." value="{{ old('name', $page->name ?? '') }}">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </form>

    @push('scripts')
    <script src="https://cdn.tiny.cloud/1/kx1w8e3jzdc9tkvt7d3xgz8eywqduf8pt454wxkl49wh8xy5/tinymce/6/tinymce.min.js" referrerpolicy="origin"></script> 
    <script> 
        tinymce.init({ 
            selector: '#content', 
            images_upload_url: 'postAcceptor.php', 
            plugins: [ 'advlist', 'autolink', 'link', 'image', 'lists', 'charmap', 'preview', 'anchor', 'pagebreak', 'searchreplace', 'wordcount', 'visualblocks', 'visualchars', 'code', 'fullscreen', 'insertdatetime', 'media', 'table', 'emoticons', 'help' ], 
            toolbar: 'undo redo | styles | bold italic | alignleft aligncenter alignright alignjustify | bullist numlist outdent indent | link image | print preview media | forecolor backcolor emoticons', 
            height: 300 
        }); 
    </script>
    
    <script>
        function galleryManager() {
            return {
                galleries: @json($galleries),

                addGallery() {
                    this.galleries.push({
                        title: '',
                        images: [{ src: '', caption: '' }]
                    });
                },

                removeGallery(index) {
                    this.galleries.splice(index, 1);
                },

                addMoreImages(galleryIndex) {
                    this.galleries[galleryIndex].images.push({ src: '', caption: '' });
                },

                handleImageUpload(event, galleryIndex, imageIndex) {
                    const file = event.target.files[0];
                    if (file) {
                        const reader = new FileReader();
                        reader.onload = (e) => {
                            this.galleries[galleryIndex].images[imageIndex].src = e.target.result;
                        };
                        reader.readAsDataURL(file);
                    }
                }
            };
        }
    </script>
    @endpush
@endsection
