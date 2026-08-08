@extends('layouts.admin')

@section('title', 'Blog Tags Management')

@section('content')
<div class="dc-container">
    <div class="dc-welcome-banner">
        <div class="dc-welcome-title">
            <h1>Blog Tags Management 🏷️</h1>
            <p>Create, edit, and manage tags to filter and group articles.</p>
        </div>
        <div class="dc-quick-action-group">
            <button onclick="openTagModal()" class="dc-btn dc-btn-orange">
                <i class="fa-solid fa-tag"></i>
                <span>Add New Tag</span>
            </button>
        </div>
    </div>

    @if(session('success'))
        <div style="background: rgba(0, 166, 81, 0.1); border: 1px solid var(--dc-green); color: var(--dc-green); padding: 12px 16px; border-radius: var(--radius-std); font-size: 13px; font-weight: 600; margin-bottom: 20px; display: flex; align-items: center; justify-content: space-between;">
            <span><i class="fa-solid fa-circle-check"></i> {{ session('success') }}</span>
            <button onclick="this.parentElement.remove()" style="background: none; border: none; color: currentColor; cursor: pointer;"><i class="fa-solid fa-xmark"></i></button>
        </div>
    @endif

    <!-- Tags List Table -->
    <div class="dc-card">
        <div class="dc-card-title-wrap">
            <h2 class="dc-card-title">All Blog Tags</h2>
        </div>

        <div class="dc-table-responsive">
            <table class="dc-table">
                <thead>
                    <tr>
                        <th style="width: 60px;">#</th>
                        <th>Tag Badge</th>
                        <th>URL Slug</th>
                        <th style="text-align: center;">Associated Blogs</th>
                        <th style="text-align: right; width: 140px;">Actions</th>
                    </tr>
                </thead>
                <tbody>
                    @forelse($tags as $index => $tag)
                    <tr>
                        <td><strong>{{ $index + 1 }}</strong></td>
                        <td>
                            <span class="dc-badge-pill dc-badge-blue" style="font-size: 13px; font-weight: 700; padding: 4px 10px;">
                                #{{ $tag->name }}
                            </span>
                        </td>
                        <td>
                            <code style="background: var(--dc-bg); padding: 3px 8px; border-radius: 4px; font-size: 12px; border: 1px solid var(--dc-border);">{{ $tag->slug }}</code>
                        </td>
                        <td style="text-align: center;">
                            <span class="dc-badge-pill dc-badge-green" style="font-weight: 700;">{{ $tag->blogs_count }} Articles</span>
                        </td>
                        <td style="text-align: right; padding: 10px;">
                            <div class="dc-action-group" style="justify-content: flex-end;">
                                <button type="button" class="dc-action-btn dc-action-edit" title="Edit Tag"
                                    onclick="editTag({{ json_encode($tag) }})">
                                    <i class="fa-solid fa-pen-to-square"></i>
                                </button>

                                <form action="{{ route('admin.blog-tags.destroy', $tag->id) }}" method="POST" class="delete-form" style="display: inline;" onsubmit="return confirm('Are you sure you want to delete this tag?');">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="dc-action-btn dc-action-delete" title="Delete Tag">
                                        <i class="fa-solid fa-trash-can"></i>
                                    </button>
                                </form>
                            </div>
                        </td>
                    </tr>
                    @empty
                    <tr>
                        <td colspan="5" style="text-align: center; color: var(--dc-light-gray); padding: 30px;">No tags created yet. Click "Add New Tag" above to create one.</td>
                    </tr>
                    @endforelse
                </tbody>
            </table>
        </div>
    </div>
</div>

<!-- Modal for Create / Edit Tag -->
<div id="tagModal" style="display: none; position: fixed; inset: 0; z-index: 9999; background: rgba(0,0,0,0.6); align-items: center; justify-content: center; backdrop-filter: blur(3px);">
    <div style="background: var(--dc-card-bg); color: var(--dc-dark); border-radius: var(--radius-std); width: 100%; max-width: 450px; padding: 24px; box-shadow: var(--shadow-modal); margin: 16px; border: 1px solid var(--dc-border);">
        <div style="display: flex; justify-content: space-between; align-items: center; margin-bottom: 20px; border-b: 1px solid var(--dc-border); padding-bottom: 12px;">
            <h3 id="tagModalTitle" style="font-size: 16px; font-weight: 700; color: var(--dc-dark);">Add New Tag</h3>
            <button onclick="closeTagModal()" style="background: none; border: none; font-size: 18px; color: var(--dc-light-gray); cursor: pointer;"><i class="fa-solid fa-xmark"></i></button>
        </div>

        <form id="tagForm" action="{{ route('admin.blog-tags.store') }}" method="POST">
            @csrf
            <div id="tagMethodContainer"></div>

            <div style="margin-bottom: 20px;">
                <label style="display: block; font-size: 13px; font-weight: 600; margin-bottom: 6px; color: var(--dc-dark);">Tag Name <span style="color: red;">*</span></label>
                <div style="display: flex; align-items: center; background: var(--dc-bg); border: 1px solid var(--dc-border); border-radius: var(--radius-std); padding: 0 10px;">
                    <span style="font-[#555] font-bold text-sm">#</span>
                    <input type="text" name="name" id="tagNameInput" class="dc-search-input" style="width: 100%; border: none; background: transparent;" required placeholder="e.g. WebDev or Laravel">
                </div>
            </div>

            <div style="display: flex; justify-content: flex-end; gap: 10px;">
                <button type="button" onclick="closeTagModal()" class="dc-btn dc-btn-outline">Cancel</button>
                <button type="submit" class="dc-btn dc-btn-orange">Save Tag</button>
            </div>
        </form>
    </div>
</div>

<script>
    function openTagModal() {
        document.getElementById('tagModalTitle').innerText = 'Add New Tag';
        document.getElementById('tagForm').action = "{{ route('admin.blog-tags.store') }}";
        document.getElementById('tagMethodContainer').innerHTML = '';
        document.getElementById('tagNameInput').value = '';
        document.getElementById('tagModal').style.display = 'flex';
    }

    function editTag(tag) {
        document.getElementById('tagModalTitle').innerText = 'Edit Tag: #' + tag.name;
        document.getElementById('tagForm').action = "/admin/blog-tags/" + tag.id;
        document.getElementById('tagMethodContainer').innerHTML = '@method("PUT")';
        document.getElementById('tagNameInput').value = tag.name;
        document.getElementById('tagModal').style.display = 'flex';
    }

    function closeTagModal() {
        document.getElementById('tagModal').style.display = 'none';
    }
</script>
@endsection
