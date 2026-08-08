@extends('layouts.admin')

@section('title', 'Blog Categories Management')

@section('content')
<div class="dc-container">
    <div class="dc-welcome-banner">
        <div class="dc-welcome-title">
            <h1>Blog Categories Management 📁</h1>
            <p>Create, edit, and organize categories for academy blogs and tutorials.</p>
        </div>
        <div class="dc-quick-action-group">
            <button onclick="openCategoryModal()" class="dc-btn dc-btn-orange">
                <i class="fa-solid fa-folder-plus"></i>
                <span>Add New Category</span>
            </button>
        </div>
    </div>

    @if(session('success'))
        <div style="background: rgba(0, 166, 81, 0.1); border: 1px solid var(--dc-green); color: var(--dc-green); padding: 12px 16px; border-radius: var(--radius-std); font-size: 13px; font-weight: 600; margin-bottom: 20px; display: flex; align-items: center; justify-content: space-between;">
            <span><i class="fa-solid fa-circle-check"></i> {{ session('success') }}</span>
            <button onclick="this.parentElement.remove()" style="background: none; border: none; color: currentColor; cursor: pointer;"><i class="fa-solid fa-xmark"></i></button>
        </div>
    @endif

    <!-- Categories List Table -->
    <div class="dc-card">
        <div class="dc-card-title-wrap">
            <h2 class="dc-card-title">All Blog Categories</h2>
        </div>

        <div class="dc-table-responsive">
            <table class="dc-table">
                <thead>
                    <tr>
                        <th style="width: 60px;">#</th>
                        <th>Category Name</th>
                        <th>URL Slug</th>
                        <th>Description</th>
                        <th style="text-align: center;">Total Blogs</th>
                        <th style="text-align: right; width: 140px;">Actions</th>
                    </tr>
                </thead>
                <tbody>
                    @forelse($categories as $index => $cat)
                    <tr>
                        <td><strong>{{ $index + 1 }}</strong></td>
                        <td>
                            <strong style="font-size: 14px; color: var(--dc-dark);">{{ $cat->name }}</strong>
                        </td>
                        <td>
                            <code style="background: var(--dc-bg); padding: 3px 8px; border-radius: 4px; font-size: 12px; border: 1px solid var(--dc-border);">{{ $cat->slug }}</code>
                        </td>
                        <td style="font-size: 12px; color: var(--dc-light-gray); max-w-[300px];">
                            {{ $cat->description ?: 'N/A' }}
                        </td>
                        <td style="text-align: center;">
                            <span class="dc-badge-pill dc-badge-green" style="font-weight: 700;">{{ $cat->blogs_count }} Articles</span>
                        </td>
                        <td style="text-align: right; padding: 10px;">
                            <div class="dc-action-group" style="justify-content: flex-end;">
                                <button type="button" class="dc-action-btn dc-action-edit" title="Edit Category"
                                    onclick="editCategory({{ json_encode($cat) }})">
                                    <i class="fa-solid fa-pen-to-square"></i>
                                </button>

                                <form action="{{ route('admin.blog-categories.destroy', $cat->id) }}" method="POST" class="delete-form" style="display: inline;" onsubmit="return confirm('Are you sure you want to delete this category?');">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="dc-action-btn dc-action-delete" title="Delete Category">
                                        <i class="fa-solid fa-trash-can"></i>
                                    </button>
                                </form>
                            </div>
                        </td>
                    </tr>
                    @empty
                    <tr>
                        <td colspan="6" style="text-align: center; color: var(--dc-light-gray); padding: 30px;">No categories created yet. Click "Add New Category" above to create one.</td>
                    </tr>
                    @endforelse
                </tbody>
            </table>
        </div>
    </div>
</div>

<!-- Modal for Create / Edit Category -->
<div id="categoryModal" style="display: none; position: fixed; inset: 0; z-index: 9999; background: rgba(0,0,0,0.6); align-items: center; justify-content: center; backdrop-filter: blur(3px);">
    <div style="background: var(--dc-card-bg); color: var(--dc-dark); border-radius: var(--radius-std); width: 100%; max-width: 500px; padding: 24px; box-shadow: var(--shadow-modal); margin: 16px; border: 1px solid var(--dc-border);">
        <div style="display: flex; justify-content: space-between; align-items: center; margin-bottom: 20px; border-b: 1px solid var(--dc-border); padding-bottom: 12px;">
            <h3 id="modalTitle" style="font-size: 16px; font-weight: 700; color: var(--dc-dark);">Add New Category</h3>
            <button onclick="closeCategoryModal()" style="background: none; border: none; font-size: 18px; color: var(--dc-light-gray); cursor: pointer;"><i class="fa-solid fa-xmark"></i></button>
        </div>

        <form id="categoryForm" action="{{ route('admin.blog-categories.store') }}" method="POST">
            @csrf
            <div id="methodContainer"></div>

            <div style="margin-bottom: 16px;">
                <label style="display: block; font-size: 13px; font-weight: 600; margin-bottom: 6px; color: var(--dc-dark);">Category Name <span style="color: red;">*</span></label>
                <input type="text" name="name" id="catNameInput" class="dc-search-input" style="width: 100%;" required placeholder="e.g. Web Development">
            </div>

            <div style="margin-bottom: 20px;">
                <label style="display: block; font-size: 13px; font-weight: 600; margin-bottom: 6px; color: var(--dc-dark);">Description (Optional)</label>
                <textarea name="description" id="catDescInput" class="dc-search-input" style="width: 100%; height: 80px; padding: 8px;" placeholder="Brief description about topics in this category..."></textarea>
            </div>

            <div style="display: flex; justify-content: flex-end; gap: 10px;">
                <button type="button" onclick="closeCategoryModal()" class="dc-btn dc-btn-outline">Cancel</button>
                <button type="submit" class="dc-btn dc-btn-orange">Save Category</button>
            </div>
        </form>
    </div>
</div>

<script>
    function openCategoryModal() {
        document.getElementById('modalTitle').innerText = 'Add New Category';
        document.getElementById('categoryForm').action = "{{ route('admin.blog-categories.store') }}";
        document.getElementById('methodContainer').innerHTML = '';
        document.getElementById('catNameInput').value = '';
        document.getElementById('catDescInput').value = '';
        document.getElementById('categoryModal').style.display = 'flex';
    }

    function editCategory(cat) {
        document.getElementById('modalTitle').innerText = 'Edit Category: ' + cat.name;
        document.getElementById('categoryForm').action = "/admin/blog-categories/" + cat.id;
        document.getElementById('methodContainer').innerHTML = '@method("PUT")';
        document.getElementById('catNameInput').value = cat.name;
        document.getElementById('catDescInput').value = cat.description || '';
        document.getElementById('categoryModal').style.display = 'flex';
    }

    function closeCategoryModal() {
        document.getElementById('categoryModal').style.display = 'none';
    }
</script>
@endsection
