@extends('layouts.admin')

@section('title', 'Edit Blog Article - ' . $blog->title)

@section('content')
    <!-- Include Summernote Lite CSS & JS Dependencies -->
    <link href="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote-lite.min.css" rel="stylesheet">
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote-lite.min.js"></script>

    <div class="dc-container">
        <form id="blogForm" action="{{ route('admin.blogs.update', $blog->id) }}" method="POST"
            enctype="multipart/form-data">
            @csrf
            @method('PUT')
            <input type="hidden" name="status" id="blogStatusInput" value="{{ old('status', $blog->status) }}">

            <div class="dc-welcome-banner">
                <div class="dc-welcome-title">
                    <h1>Edit Article & SEO Settings ✍️</h1>
                    <p>Update title, URL slug, content, cover image, status, and SEO metadata for
                        <strong>{{ $blog->title }}</strong>.
                    </p>
                </div>
                <div style="display: flex; gap: 10px; align-items: center;">
                    <a href="{{ route('admin.blogs.index') }}" class="dc-btn dc-btn-outline">
                        <i class="fa-solid fa-arrow-left"></i>
                        <span>Back to Articles</span>
                    </a>
                    <button type="button" id="saveDraftBtn" class="dc-btn dc-btn-outline"
                        style="border-color: var(--dc-blue); color: var(--dc-blue);">
                        <i class="fa-solid fa-file-pen"></i>
                        <span>Save as Draft</span>
                    </button>
                    <button type="button" id="publishBtn" class="dc-btn dc-btn-orange">
                        <i class="fa-solid fa-floppy-disk"></i>
                        <span>Save & Publish</span>
                    </button>
                </div>
            </div>

            <div style="display: flex; flex-direction: column; gap: 24px;">
                <!-- Main Content & Summernote Editor Canvas -->
                <div class="dc-card" style="padding: 28px;">
                    <div style="margin-bottom: 20px;">
                        <label style="display: block; font-weight: 600; font-size: 13px; margin-bottom: 6px;">Article
                            Title</label>
                        <input type="text" id="titleInput" name="title" class="dc-search-input"
                            style="width: 100%; font-family: var(--font-heading); font-size: 18px; font-weight: 700; height: 46px;"
                            value="{{ old('title', $blog->title) }}">
                    </div>

                    <div style="margin-bottom: 20px;">
                        <label style="display: block; font-weight: 600; font-size: 13px; margin-bottom: 6px;">URL Slug
                            (Auto-generated or custom editable)</label>
                        <div
                            style="display: flex; align-items: center; background: var(--dc-bg); border: 1px solid var(--dc-border); border-radius: var(--radius-std); padding: 0 12px; height: 38px;">
                            <span
                                style="font-size: 12px; color: var(--dc-light-gray); font-family: monospace; white-space: nowrap; margin-right: 4px;">/blog/</span>
                            <input type="text" id="slugInput" name="slug"
                                style="width: 100%; border: none; background: transparent; font-family: monospace; font-size: 12.5px; font-weight: 600; color: var(--dc-blue); outline: none;"
                                value="{{ old('slug', $blog->slug) }}">
                        </div>
                    </div>

                    <!-- Publishing Options (Category & Author Name) -->
                    <div
                        style="display: grid; grid-template-columns: 1fr 1fr; gap: 20px; margin-bottom: 20px; background: var(--dc-bg); padding: 16px; border-radius: var(--radius-std); border: 1px solid var(--dc-border);">
                        <div>
                            <label style="display: block; font-weight: 600; font-size: 13px; margin-bottom: 6px;">Category</label>
                            <select name="category" class="dc-select-sm"
                                style="width: 100%; height: 38px; background: var(--dc-white);">
                                @foreach($categories as $cat)
                                    <option value="{{ $cat->name }}" {{ old('category', $blog->category) === $cat->name ? 'selected' : '' }}>
                                        {{ $cat->name }}
                                    </option>
                                @endforeach
                            </select>
                        </div>

                        <div>
                            <label style="display: block; font-weight: 600; font-size: 13px; margin-bottom: 6px;">Author Name</label>
                            <input type="text" name="author" class="dc-search-input"
                                style="width: 100%; background: var(--dc-white);"
                                value="{{ old('author', $blog->author) }}">
                        </div>

                        <div style="grid-column: span 2;">
                            <label style="display: block; font-weight: 600; font-size: 13px; margin-bottom: 6px; color: var(--dc-dark);">Select Tags</label>
                            <div style="display: flex; flex-wrap: wrap; gap: 8px; background: var(--dc-bg); padding: 12px; border-radius: var(--radius-std); border: 1px solid var(--dc-border);">
                                @php $activeTagIds = $blog->tags->pluck('id')->toArray(); @endphp
                                @foreach($tags as $tag)
                                    <label style="display: inline-flex; align-items: center; gap: 6px; font-size: 12px; font-weight: 600; background: var(--dc-card-bg); color: var(--dc-dark); padding: 5px 12px; border-radius: 20px; border: 1px solid var(--dc-border); cursor: pointer; user-select: none;">
                                        <input type="checkbox" name="tags[]" value="{{ $tag->id }}" {{ in_array($tag->id, old('tags', $activeTagIds)) ? 'checked' : '' }} style="accent-color: var(--dc-green); cursor: pointer;">
                                        <span>#{{ $tag->name }}</span>
                                    </label>
                                @endforeach
                            </div>
                        </div>
                    </div>

                    <div style="margin-bottom: 20px;">
                        <label style="display: block; font-weight: 600; font-size: 13px; margin-bottom: 6px;">Main Featured Cover Image</label>
                        
                        <!-- Current / Live Preview Box -->
                        <div id="coverPreviewContainer" style="{{ $blog->featured_image ? 'display: block;' : 'display: none;' }} margin-bottom: 12px; position: relative; width: 240px; height: 135px; border-radius: 10px; overflow: hidden; border: 2px solid var(--dc-green); background: var(--dc-bg); box-shadow: 0 4px 12px rgba(0, 166, 81, 0.15);">
                            <img id="coverPreviewImage" src="{{ $blog->featured_image ? asset($blog->featured_image) : '' }}" alt="Cover Preview" style="width: 100%; height: 100%; object-fit: cover;">
                            <span style="position: absolute; bottom: 6px; right: 6px; background: var(--dc-green); color: white; padding: 2px 8px; border-radius: 4px; font-size: 10px; font-weight: 700; text-transform: uppercase;">
                                <i class="fa-solid fa-eye" style="margin-right: 3px;"></i> Cover Preview
                            </span>
                        </div>

                        <input type="file" name="featured_image" accept="image/*" class="dc-search-input" onchange="previewFeaturedCover(this)">
                        <span style="font-size: 11px; color: var(--dc-light-gray); display: block; margin-top: 4px;">Recommended size: 1200x630px. Selecting a new image will update the live preview above instantly.</span>
                    </div>

                    <div style="margin-bottom: 20px;">
                        <label style="display: block; font-weight: 600; font-size: 13px; margin-bottom: 6px;">Short Summary
                            / Excerpt</label>
                        <textarea name="summary" class="dc-search-input" style="width: 100%; height: 70px; padding: 10px;"
                            placeholder="Brief summary of the article for blog card preview...">{{ old('summary', $blog->summary) }}</textarea>
                    </div>

                    <div style="margin-bottom: 20px;">
                        <label style="display: block; font-weight: 600; font-size: 13px; margin-bottom: 6px;">Article Body
                            (Summernote WYSIWYG Editor)</label>
                        <textarea id="summernoteEditor" name="content">{{ old('content', $blog->content) }}</textarea>
                    </div>
                </div>

                <!-- Article Frequently Asked Questions (FAQs) Card -->
                <div class="dc-card" style="padding: 24px; border-left: 4px solid var(--dc-primary); margin-bottom: 24px;">
                    <div style="display: flex; align-items: center; justify-content: space-between; margin-bottom: 16px; padding-bottom: 12px; border-bottom: 1px solid var(--dc-border);">
                        <div>
                            <h3 style="font-size: 16px; font-weight: 700; color: var(--dc-[#111111]); margin: 0; display: flex; align-items: center; gap: 8px;">
                                <i data-lucide="help-circle" style="width: 18px; height: 18px; color: var(--dc-primary);"></i>
                                <span>Article FAQs (Frequently Asked Questions)</span>
                            </h3>
                            <p style="font-size: 12px; color: var(--dc-light-gray); margin-top: 4px; margin-bottom: 0;">
                                Add Q&A items to be displayed as an interactive accordion on the blog detail page.
                            </p>
                        </div>
                        <button type="button" id="btnAddFaq" class="dc-btn dc-[#00A651] dc-btn-outline" style="padding: 6px 14px; font-size: 12px; border-color: var(--dc-primary); color: var(--dc-primary);">
                            <i data-lucide="plus" style="width: 14px; height: 14px;"></i> Add FAQ Row
                        </button>
                    </div>

                    <div id="faqContainer" style="display: flex; flex-direction: column; gap: 16px;">
                        <!-- FAQ repeater items injected here -->
                    </div>
                </div>

                <!-- Strong SEO Metadata Card -->
                <div class="dc-card" style="padding: 28px; border-left: 4px solid var(--dc-green);">
                    <h3 class="dc-card-title" style="margin-bottom: 16px; display: flex; align-items: center; gap: 8px;">
                        <i class="fa-solid fa-magnifying-glass-chart" style="color: var(--dc-green);"></i>
                        <span>Strong SEO Metadata Settings</span>
                    </h3>

                    <div style="display: grid; grid-template-columns: 1fr 1fr; gap: 16px; margin-bottom: 16px;">
                        <div>
                            <label style="display: block; font-weight: 600; font-size: 13px; margin-bottom: 6px;">SEO Meta
                                Title</label>
                            <input type="text" name="meta_title" class="dc-search-input" style="width: 100%;"
                                value="{{ old('meta_title', $blog->meta_title) }}"
                                placeholder="e.g. Master Full Stack Web Development 2026 | DigiCoders">
                        </div>
                        <div>
                            <label style="display: block; font-weight: 600; font-size: 13px; margin-bottom: 6px;">Canonical
                                URL</label>
                            <input type="url" name="canonical_url" class="dc-search-input" style="width: 100%;"
                                value="{{ old('canonical_url', $blog->canonical_url) }}"
                                placeholder="https://digicoders.in/blog/your-slug">
                        </div>
                    </div>

                    <div style="margin-bottom: 16px;">
                        <label style="display: block; font-weight: 600; font-size: 13px; margin-bottom: 6px;">
                            SEO Meta Keywords 
                            <span style="font-size: 11px; color: var(--dc-light-gray); font-weight: normal; margin-left: 4px;">(Type keyword & press Enter or Comma)</span>
                        </label>
                        <input type="text" id="keywordTagInput" class="dc-search-input" style="width: 100%;" placeholder="e.g. Web Development, Full Stack, Laravel 12 (Press Enter or Comma)">
                        <div id="keywordsChipWrapper" style="display: flex; flex-wrap: wrap; gap: 8px; margin-top: 10px;"></div>
                        <input type="hidden" name="meta_keywords" id="metaKeywordsHidden" value="{{ old('meta_keywords', $blog->meta_keywords) }}">
                    </div>

                    <div>
                        <label style="display: block; font-weight: 600; font-size: 13px; margin-bottom: 6px;">SEO Meta
                            Description</label>
                        <textarea name="meta_description" class="dc-search-input"
                            style="width: 100%; height: 75px; padding: 10px;"
                            placeholder="Compelling 150-160 character description for Google Search snippet...">{{ old('meta_description', $blog->meta_description) }}</textarea>
                    </div>
                </div>
            </div>
        </form>
    </div>

    <!-- Real-time Auto-Slug Generator & Form Submit Handler -->
    <script>
        $(document).ready(function () {
            // Real-time Title to Hyphenated Slug Generator
            $('#titleInput').on('input', function () {
                let title = $(this).val();
                let slug = title.toLowerCase()
                    .trim()
                    .replace(/[^a-z0-9 -]/g, '')
                    .replace(/\s+/g, '-')
                    .replace(/-+/g, '-');
                $('#slugInput').val(slug);
            });

            // Initialize Summernote Editor
            $('#summernoteEditor').summernote({
                placeholder: 'Write rich article body content here... Insert headers, quotes, tables, code snippets, and upload inline images...',
                tabsize: 2,
                height: 380,
                dialogsInBody: true,
                dialogsFade: false,
                toolbar: [
                    ['style', ['style']],
                    ['font', ['bold', 'underline', 'clear']],
                    ['color', ['color']],
                    ['para', ['ul', 'ol', 'paragraph']],
                    ['table', ['table']],
                    ['insert', ['link', 'picture', 'video']],
                    ['view', ['fullscreen', 'codeview', 'help']]
                ],
                callbacks: {
                    onImageUpload: function (files) {
                        uploadSummernoteImage(files[0]);
                    },
                    onFullscreen: function (isFullscreen) {
                        if (isFullscreen) {
                            $('body').addClass('note-fullscreen-active');
                        } else {
                            $('body').removeClass('note-fullscreen-active');
                        }
                    }
                }
            });

            // Toggle body scroll lock on Fullscreen toggle
            $(document).on('click', '.note-btn-fullscreen, button[data-name="fullscreen"]', function () {
                let $editor = $(this).closest('.note-editor');
                setTimeout(function () {
                    if ($editor.hasClass('fullscreen') || $('.note-editor').hasClass('fullscreen')) {
                        $('body').addClass('note-fullscreen-active');
                    } else {
                        $('body').removeClass('note-fullscreen-active');
                    }
                }, 10);
            });

            function uploadSummernoteImage(file) {
                let data = new FormData();
                data.append("image", file);
                data.append("title", $('#titleInput').val() || 'blog-article');
                data.append("_token", "{{ csrf_token() }}");

                $.ajax({
                    url: "{{ route('admin.blogs.uploadEditorImage') }}",
                    cache: false,
                    contentType: false,
                    processData: false,
                    data: data,
                    type: "POST",
                    success: function (response) {
                        if (response.url) {
                            $('#summernoteEditor').summernote('insertImage', response.url);
                        }
                    },
                    error: function (data) {
                        console.error("Summernote image upload failed:", data);
                        alert("Image upload failed. Please try again.");
                    }
                });
            }

            // Save as Draft Click Handler
            $('#saveDraftBtn').on('click', function () {
                $('#blogStatusInput').val('draft');
                $('#blogForm').submit();
            });

            // Publish Article Click Handler
            $('#publishBtn').on('click', function () {
                let title = $('#titleInput').val().trim();
                if (!title) {
                    alert('Please enter an Article Title before publishing live!');
                    $('#titleInput').focus();
                    return;
                }
                $('#blogStatusInput').val('published');
                $('#blogForm').submit();
            });

            // Interactive Tag/Chip System for SEO Meta Keywords
            (function initKeywordChips() {
                let keywords = [];
                let initialVal = $('#metaKeywordsHidden').val();
                if (initialVal) {
                    keywords = initialVal.split(',').map(k => k.trim()).filter(k => k.length > 0);
                    renderChips();
                }

                $('#keywordTagInput').on('keydown', function (e) {
                    let val = $(this).val().trim();
                    if (e.key === 'Enter' || e.key === ',') {
                        e.preventDefault();
                        addKeyword(val);
                    } else if (e.key === 'Backspace' && val === '' && keywords.length > 0) {
                        keywords.pop();
                        renderChips();
                        updateHidden();
                    }
                });

                $('#keywordTagInput').on('paste', function (e) {
                    e.preventDefault();
                    let pasted = (e.originalEvent.clipboardData || window.clipboardData).getData('text');
                    pasted.split(/[\n,]+/).forEach(p => addKeyword(p));
                });

                function addKeyword(text) {
                    text = text.replace(/,/g, '').trim();
                    if (text && !keywords.includes(text)) {
                        keywords.push(text);
                        renderChips();
                        updateHidden();
                        $('#keywordTagInput').val('');
                    }
                }

                function removeKeyword(idx) {
                    keywords.splice(idx, 1);
                    renderChips();
                    updateHidden();
                }

                function renderChips() {
                    $('#keywordsChipWrapper').empty();
                    keywords.forEach((kw, idx) => {
                        let $chip = $(`
                            <span class="dc-keyword-chip">
                                <span>${kw}</span>
                                <button type="button" class="remove-chip-btn" title="Remove keyword">&times;</button>
                            </span>
                        `);

                        $chip.find('.remove-chip-btn').on('click', function (e) {
                            e.preventDefault();
                            e.stopPropagation();
                            removeKeyword(idx);
                        });

                        $('#keywordsChipWrapper').append($chip);
                    });
                }

                function updateHidden() {
                    $('#metaKeywordsHidden').val(keywords.join(', '));
                }
            })();
        });

        function previewFeaturedCover(input) {
            if (input.files && input.files[0]) {
                const reader = new FileReader();
                reader.onload = function(e) {
                    $('#coverPreviewImage').attr('src', e.target.result);
                    $('#coverPreviewContainer').slideDown(200);
                }
                reader.readAsDataURL(input.files[0]);
            }
        }

        // FAQ Repeater Logic
        let faqCounter = 0;

        function addFaqRow(q = '', a = '') {
            faqCounter++;
            let rowId = 'faq-row-' + faqCounter;
            let html = `
                <div id="${rowId}" style="background: #FAFAFA; border: 1px solid var(--dc-border); border-radius: 8px; padding: 16px; position: relative;">
                    <div style="display: flex; align-items: center; justify-content: space-between; margin-bottom: 10px;">
                        <span style="font-size: 12px; font-weight: 700; color: var(--dc-primary);">FAQ #${faqCounter}</span>
                        <button type="button" onclick="removeFaqRow('${rowId}')" class="dc-btn" style="background: #Fee2e2; color: #dc2626; border: none; padding: 4px 10px; font-size: 11px; border-radius: 4px; cursor: pointer; display: flex; align-items: center; gap: 4px;">
                            <i data-lucide="trash-2" style="width: 12px; height: 12px;"></i> Remove
                        </button>
                    </div>
                    <div style="margin-bottom: 10px;">
                        <label style="display: block; font-weight: 600; font-size: 12px; margin-bottom: 4px;">Question</label>
                        <input type="text" name="faqs[${faqCounter}][question]" value="${q.replace(/"/g, '&quot;')}" class="dc-search-input" style="width: 100%; font-size: 13px;" placeholder="e.g. Is this course beginner friendly?">
                    </div>
                    <div>
                        <label style="display: block; font-weight: 600; font-size: 12px; margin-bottom: 4px;">Answer</label>
                        <textarea name="faqs[${faqCounter}][answer]" class="dc-search-input" style="width: 100%; height: 60px; padding: 8px; font-size: 13px;" placeholder="e.g. Yes, no prior programming experience is required...">${a}</textarea>
                    </div>
                </div>
            `;
            $('#faqContainer').append(html);
            if (typeof lucide !== 'undefined') lucide.createIcons();
        }

        function removeFaqRow(rowId) {
            $('#' + rowId).slideUp(150, function() { $(this).remove(); });
        }

        $('#btnAddFaq').on('click', function() {
            addFaqRow();
        });

        // Pre-populate existing FAQs
        const existingFaqs = @json(old('faqs', $blog->faqs ?? []));
        if (Array.isArray(existingFaqs) && existingFaqs.length > 0) {
            existingFaqs.forEach(item => {
                if (item && (item.question || item.answer)) {
                    addFaqRow(item.question || '', item.answer || '');
                }
            });
        }
    </script>
@endsection