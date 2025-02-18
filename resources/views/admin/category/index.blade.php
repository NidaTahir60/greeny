@extends('admin.layouts.master')

@push('style')
    <link rel="stylesheet" href="//cdn.datatables.net/1.13.7/css/jquery.dataTables.min.css">
@endpush
@section('admin-content')
    <!-- END: Top Bar -->
    <section>
        @if (session()->has('success'))
            <div class="alert alert-success alert-block">
                <button type="button" class="close" data-dismiss="alert">×</button>
                <strong>{{ session()->get('success') }}</strong>
            </div>
        @endif
        <h2 class="intro-y text-lg font-medium mt-10">
            All Categories
        </h2>

        <a title="Create" href="javascript:;" data-tw-toggle="modal" data-tw-target="#create-modal"
            class="btn btn-primary shadow-md mr-2 ">Add New Category</a>

        <div class="grid grid-cols-12 gap-6 mt-5">
            {{-- <div class="intro-y col-span-12 flex flex-wrap sm:flex-nowrap items-center mt-2">
                <button class="btn btn-primary shadow-md mr-2">Add New Product</button>
                <div class="dropdown">
                    <button class="dropdown-toggle btn px-2 box" aria-expanded="false" data-tw-toggle="dropdown">
                        <span class="w-5 h-5 flex items-center justify-center"> <i class="w-4 h-4" data-lucide="plus"></i>
                        </span>
                    </button>
                    <div class="dropdown-menu w-40">
                        <ul class="dropdown-content">
                            <li>
                                <a href="#" class="dropdown-item"> <i data-lucide="printer" class="w-4 h-4 mr-2"></i>
                                    Print </a>
                            </li>
                            <li>
                                <a href="#" class="dropdown-item"> <i data-lucide="file-text"
                                        class="w-4 h-4 mr-2"></i> Export to Excel </a>
                            </li>
                            <li>
                                <a href="#" class="dropdown-item"> <i data-lucide="file-text"
                                        class="w-4 h-4 mr-2"></i> Export to PDF </a>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="hidden md:block mx-auto text-slate-500">Showing 1 to 10 of 150 entries</div>
                <div class="w-full sm:w-auto mt-3 sm:mt-0 sm:ml-auto md:ml-0">
                    <div class="w-56 relative text-slate-500">
                        <input type="text" class="form-control w-56 box pr-10" placeholder="Search...">
                        <i class="w-4 h-4 absolute my-auto inset-y-0 mr-3 right-0" data-lucide="search"></i>
                    </div>
                </div>
            </div> --}}
            <!-- BEGIN: Data List -->
            <div class="intro-y col-span-12 overflow-auto lg:overflow-visible">
                <table id="myTable" class="table table-report -mt-2">
                    <thead>
                        <tr>
                            <th class="whitespace-nowrap">Image</th>
                            <th class="whitespace-nowrap">Category Name</th>
                            <th class="whitespace-nowrap">slug</th>
                            <th class="whitespace-nowrap">Active</th>
                            {{-- <th class="text-center whitespace-nowrap">STATUS</th> --}}
                            <th class="whitespace-nowrap">Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($categories as $category)
                            <tr class="intro-x">
                                <td class="w-40">
                                    <div class="flex">
                                        <div class="w-10 h-10 image-fit zoom-in">
                                            <img alt="Midone - HTML Admin Template" class="tooltip rounded-full"
                                                src=" {{ asset('admin/assets/images/' . $category->image) }}"
                                                title="Uploaded at 28 May 2020">
                                        </div>
                                    </div>
                                </td>
                                <td>
                                    <div class="text-slate-500 whitespace-nowrap mt-0.5">{{ $category->name }}</div>
                                </td>
                                <td>
                                    <div class="text-slate-500 whitespace-nowrap mt-0.5">{{ $category->slug }}</div>
                                </td>

                                <td>
                                    <div class="text-slate-500 whitespace-nowrap mt-0.5">
                                        {{ $category->is_active == 1 ? 'active' : 'inactive' }}</div>
                                </td>
                                <td class="table-report__action w-56">
                                    <div class="flex justify-center items-center">

                                        <a class="flex items-center mr-3" data-tw-toggle="modal"
                                            data-tw-target="#edit-modal" href="{{ route('category.edit', $category->id) }}"
                                            title="Edit"> <i data-lucide="check-square" class="w-4 h-4 mr-1"></i> </a>

                                        <a title="Delete" class="flex items-center text-danger category-delete"
                                            href="javascript:;" data-tw-toggle="modal"
                                            data-category-id="{{ $category->id }}"
                                            data-tw-target="#delete-confirmation-modal"> <i data-lucide="trash-2"
                                                class="w-4 h-4 mr-1"></i> </a>
                                    </div>
                                </td>
                            </tr>
                        @endforeach

                    </tbody>
                </table>
            </div>
            <!-- END: Data List -->
            <!-- BEGIN: Pagination -->
            {{-- <div class="intro-y col-span-12 flex flex-wrap sm:flex-row sm:flex-nowrap items-center">
                <nav class="w-full sm:w-auto sm:mr-auto">
                    <ul class="pagination">
                        <li class="page-item">
                            <a class="page-link" href="#"> <i class="w-4 h-4" data-lucide="chevrons-left"></i>
                            </a>
                        </li>
                        <li class="page-item">
                            <a class="page-link" href="#"> <i class="w-4 h-4" data-lucide="chevron-left"></i> </a>
                        </li>
                        <li class="page-item"> <a class="page-link" href="#">...</a> </li>
                        <li class="page-item"> <a class="page-link" href="#">1</a> </li>
                        <li class="page-item active"> <a class="page-link" href="#">2</a> </li>
                        <li class="page-item"> <a class="page-link" href="#">3</a> </li>
                        <li class="page-item"> <a class="page-link" href="#">...</a> </li>
                        <li class="page-item">
                            <a class="page-link" href="#"> <i class="w-4 h-4" data-lucide="chevron-right"></i>
                            </a>
                        </li>
                        <li class="page-item">
                            <a class="page-link" href="#"> <i class="w-4 h-4" data-lucide="chevrons-right"></i>
                            </a>
                        </li>
                    </ul>
                </nav>
                <select class="w-20 form-select box mt-3 sm:mt-0">
                    <option>10</option>
                    <option>25</option>
                    <option>35</option>
                    <option>50</option>
                </select>
            </div> --}}
            <!-- END: Pagination -->
        </div>
        <!-- BEGIN: Delete Confirmation Modal -->
        <div id="delete-confirmation-modal" class="modal" tabindex="-1" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-body p-0">
                        <div class="p-5 text-center">
                            <i data-lucide="x-circle" class="w-16 h-16 text-danger mx-auto mt-3"></i>
                            <div class="text-3xl mt-5">Are you sure?</div>
                            <div class="text-slate-500 mt-2">
                                Do you really want to delete this record?
                                <br>
                                This process cannot be undone.
                            </div>
                        </div>
                        <div class="px-5 pb-8 text-center">
                            <button type="button" data-tw-dismiss="modal"
                                class="btn btn-outline-secondary w-24 mr-1">Cancel</button>
                            <button type="button" id="confirm-delete" class="btn btn-danger w-24">Delete</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        {{-- Begin Create Model --}}

        <div id="create-modal" class="modal" tabindex="-1" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-body p-0">
                        <form id="create-form" class="intro-y box p-5">
                            @csrf
                            <div>
                                <label for="crud-form-1" class="form-label">Category Name</label>
                                <input id="crud-form-1" name="name" type="text" class="form-control w-full"
                                    placeholder="Please enter category name">
                            </div>
                            <br>
                            <div>
                                <label for="form-image" class="form-label">Category Image</label>
                                <input id="form-image" name="image" type="file" class="form-control w-full">
                            </div>
                            <br>
                            <div class="form-check">
                                <input name="is_active" id="form-checkbox" class="form-check-input" type="checkbox"
                                    value="1" {{ old('is_active') ? 'checked' : '' }}>
                                <label class="form-check-label" for="form-checkbox">
                                    Active</label>

                            </div>
                            <br>
                            <div class="text-right mt-5">
                                <button type="button" data-tw-dismiss="modal"
                                    class="btn btn-outline-secondary w-24 mr-1">Cancel</button>
                                <button type="submit" class="btn btn-primary w-24">Save</button>
                            </div>

                        </form>
                    </div>
                </div>
            </div>
        </div>

        {{-- End create modal here --}}

        {{-- begin edit modal --}}

        {{-- <div id="edit-modal" class="modal" tabindex="-1" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-body p-0">
                        <form id="edit-form" class="intro-y box p-5">
                            @csrf
                            @method('PUT')
                            <div>
                                <label for="edit-category-name" class="form-label">Catagory Name</label>
                                <input id="edit-category-name" name="name" type="text" class="form-control w-full"
                                    value="{{ $category->name }}">
                            </div>
                            <br>
                            <div>
                                <label for="edit-category-image" class="form-label">Catagory Image</label>
                                <input id="edit-category-image" value="$category->image" name="image" type="file"
                                    class="form-control w-full">
                            </div>
                            <br>
                            <div class="form-check"> <input id="horizontal-form-3" name="is_active"
                                    class="form-check-input" type="checkbox" value=""> <label
                                    class="form-check-label" for="horizontal-form-3">Active</label>
                            </div>
                            <br>
                            <div class="text-right mt-5">
                                <button type="button" class="btn btn-outline-secondary w-24 mr-1">Cancel</button>
                                <button type="submit" class="btn btn-primary w-24">Update</button>
                            </div>

                        </form>
                    </div>
                </div>
            </div>
        </div> --}}

        {{-- End edit modal --}}
    </section>
@endsection

@push('script')
    <script src="https://code.jquery.com/jquery-3.7.1.min.js"
        integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo=" crossorigin="anonymous"></script>
    <script src="//cdn.datatables.net/1.13.7/js/jquery.dataTables.min.js"></script>
    <script src="{{ asset('custom/backend/js/category/create.js') }}"></script>
    <script src="{{ asset('custom/backend/js/category/delete.js') }}"></script>

    {{-- <script>
        $(document).ready(function() {
            $('#edit-button').click(function() {
                var cat_id = $(this).data('cat_id');
                // $('#edit-Modal').modal('show');

                // Fetch category data and populate the form fields
                $.ajax({
                    headers: {
                        'X-CSRF-TOKEN': $('meta[name = "csrf-token"]').attr('content')
                    },
                    type: 'Post',
                    url: '/category/edit/' + cat_id,
                    enctype: "multipart/form-data",
                    contentType: false,
                    processData: false,
                    success: function(response) {
                        const category = response.category;
                        $('#edit-category-name').val(category.name);
                        $('#edit-category-image').val(category.image);
                    },
                    error: function(error) {
                        console.log(error.responseJSON);
                        // Handle errors, e.g., display error messages
                    }
                });
            });
        });
    </script> --}}
@endpush
