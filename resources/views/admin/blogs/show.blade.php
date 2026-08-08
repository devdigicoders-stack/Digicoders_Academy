@extends('layouts.admin')

@section('title', $blog->title . ' - Article Details')

@section('content')
<div class="dc-container">
    <!-- Top Action Banner -->
    <div class="dc-welcome-banner" style="display: flex; justify-content: space-between; align-items: center; flex-wrap: wrap; gap: 15px; margin-bottom: 24px;">
        <div class="dc-welcome-title">
            <div style="display: flex; align-items: center; gap: 10px; margin-bottom: 6px;">
                <span class="dc-badge-pill dc-badge-green" style="font-size: 11px;">{{ $blog->category }}</span>
                @if($blog->status === 'published')
                    <span class="dc-badge-pill dc-badge-green" style="font-size: 11px;"><i class="fa-solid fa-circle-check" style="margin-right: 4px;"></i> Published</span>
                @else
                    <span class="dc-badge-pill dc-badge-orange" style="font-size: 11px;"><i class="fa-solid fa-pencil" style="margin-right: 4px;"></i> Draft</span>
                @endif
            </div>
            <h1 style="font-size: 22px; font-weight: 800; color: var(--dc-dark); margin: 0; line-height: 1.3;">
                {{ $blog->title }}
            </h1>
        </div>
        <div style="display: flex; gap: 10px; align-items: center;">
            <a href="{{ route('admin.blogs.index') }}" class="dc-btn dc-btn-outline">
                <i class="fa-solid fa-arrow-left"></i>
                <span>Back to Articles</span>
            </a>
            <a href="{{ route('admin.blogs.edit', $blog->id) }}" class="dc-btn dc-btn-green">
                <i class="fa-solid fa-pen-to-square"></i>
                <span>Edit Article</span>
            </a>
        </div>
    </div>

    <!-- Main Responsive Grid Layout (Left Main Article Body + Right Fixed 300px Sidebar) -->
    <div class="dc-show-grid" style="display: grid; grid-template-columns: minmax(0, 1fr) 300px; gap: 24px;">
        
        <!-- LEFT COLUMN: Article Content & Images -->
        <div style="display: flex; flex-direction: column; gap: 24px; min-width: 0;">
            
            <!-- 1. Main Cover Image & Title Card -->
            <div class="dc-card" style="padding: 24px;">
                @if($blog->featured_image)
                <div style="margin-bottom: 24px; overflow: hidden; border-radius: 12px; border: 1px solid var(--dc-border); height: 320px; max-height: 380px; width: 100%; background: var(--dc-bg);">
                    <img src="{{ asset($blog->featured_image) }}" 
                         alt="{{ $blog->title }}" 
                         style="width: 100%; height: 100%; object-fit: cover; display: block;"
                         onerror="this.parentElement.style.display='none'">
                </div>
                @endif

                <!-- Meta Header Row -->
                <div style="display: flex; align-items: center; justify-content: space-between; flex-wrap: wrap; gap: 12px; padding-bottom: 16px; border-bottom: 1px solid var(--dc-border); margin-bottom: 20px;">
                    <div style="display: flex; align-items: center; gap: 16px; font-size: 13px; color: var(--dc-light-gray);">
                        <span><i class="fa-solid fa-user-pen" style="color: var(--dc-green); margin-right: 6px;"></i> <strong>{{ $blog->author ?? 'Admin' }}</strong></span>
                        <span><i class="fa-regular fa-calendar-check" style="color: var(--dc-orange); margin-right: 6px;"></i> {{ $blog->created_at ? $blog->created_at->format('d M Y, h:i A') : 'N/A' }}</span>
                    </div>
                    <div style="display: flex; align-items: center; gap: 12px; font-size: 13px; color: var(--dc-light-gray);">
                        <span><i class="fa-solid fa-eye" style="color: var(--dc-blue); margin-right: 6px;"></i> <strong>{{ number_format($blog->views_count) }}</strong> Views</span>
                    </div>
                </div>

                @if($blog->summary)
                <!-- Summary Quote Callout -->
                <div style="background: rgba(0, 166, 81, 0.06); border-left: 4px solid var(--dc-green); padding: 14px 18px; border-radius: 0 10px 10px 0; margin-bottom: 24px;">
                    <strong style="font-size: 12px; text-transform: uppercase; color: var(--dc-green); letter-spacing: 0.5px; display: block; margin-bottom: 4px;">Article Summary</strong>
                    <p style="font-size: 14px; color: var(--dc-dark); margin: 0; font-style: italic; line-height: 1.5;">
                        "{{ $blog->summary }}"
                    </p>
                </div>
                @endif

                <!-- Full Rendered Body Content -->
                <div class="dc-blog-body-rendered" style="font-size: 15px; line-height: 1.7; color: var(--dc-dark); word-break: break-word;">
                    @if($blog->content)
                        {!! $blog->content !!}
                    @else
                        <div style="text-align: center; padding: 40px; color: var(--dc-light-gray); font-style: italic;">
                            No detailed body content written for this article yet.
                        </div>
                    @endif
                </div>
            </div>

            <!-- 2. Extracted Summernote Content Images Gallery -->
            @if(!empty($contentImages) && count($contentImages) > 0)
            <div class="dc-card" style="padding: 24px;">
                <h3 style="font-size: 16px; font-weight: 700; color: var(--dc-dark); margin-top: 0; margin-bottom: 16px; display: flex; align-items: center; gap: 8px;">
                    <i class="fa-solid fa-images" style="color: var(--dc-green);"></i>
                    <span>Embedded Content Images Gallery ({{ count($contentImages) }})</span>
                </h3>
                <div style="display: grid; grid-template-columns: repeat(auto-fill, minmax(160px, 1fr)); gap: 16px;">
                    @foreach($contentImages as $idx => $imgSrc)
                    <div style="position: relative; border-radius: 10px; overflow: hidden; border: 1px solid var(--dc-border); background: var(--dc-bg); aspect-ratio: 4/3;">
                        <a href="{{ asset($imgSrc) }}" target="_blank" title="Click to view full image in new tab">
                            <img src="{{ asset($imgSrc) }}" 
                                 alt="Content Image {{ $idx + 1 }}" 
                                 style="width: 100%; height: 100%; object-fit: cover; transition: transform 0.3s ease;"
                                 onmouseover="this.style.transform='scale(1.05)'"
                                 onmouseout="this.style.transform='scale(1)'">
                        </a>
                        <span style="position: absolute; bottom: 6px; right: 6px; background: rgba(0,0,0,0.7); color: white; padding: 2px 6px; border-radius: 4px; font-size: 10px; font-weight: 600;">
                            #{{ $idx + 1 }}
                        </span>
                    </div>
                    @endforeach
                </div>
            </div>
            @endif

        </div>

        <!-- RIGHT COLUMN: Sidebar Metadata & SEO -->
        <div style="display: flex; flex-direction: column; gap: 24px; min-width: 0;">
            
            <!-- Quick Details Card -->
            <div class="dc-card" style="padding: 20px;">
                <h3 style="font-size: 15px; font-weight: 700; color: var(--dc-dark); margin-top: 0; margin-bottom: 16px; border-bottom: 1px solid var(--dc-border); padding-bottom: 10px;">
                    Article Overview
                </h3>
                
                <div style="display: flex; flex-direction: column; gap: 14px; font-size: 13px;">
                    <div>
                        <span style="color: var(--dc-light-gray); font-size: 11px; font-weight: 600; display: block; margin-bottom: 4px;">URL SLUG</span>
                        <code style="background: var(--dc-bg); padding: 6px 10px; border-radius: 6px; color: var(--dc-green); font-size: 12px; display: block; word-break: break-all; border: 1px solid var(--dc-border);">
                            /admin/blogs/{{ $blog->slug }}
                        </code>
                    </div>

                    <div>
                        <span style="color: var(--dc-light-gray); font-size: 11px; font-weight: 600; display: block; margin-bottom: 2px;">CATEGORY</span>
                        <span style="font-weight: 700; color: var(--dc-dark);">{{ $blog->category }}</span>
                    </div>

                    <div>
                        <span style="color: var(--dc-light-gray); font-size: 11px; font-weight: 600; display: block; margin-bottom: 2px;">AUTHOR</span>
                        <span style="font-weight: 700; color: var(--dc-dark);">{{ $blog->author ?? 'Admin' }}</span>
                    </div>

                    <div>
                        <span style="color: var(--dc-light-gray); font-size: 11px; font-weight: 600; display: block; margin-bottom: 2px;">LAST UPDATED</span>
                        <span style="color: var(--dc-dark);">{{ $blog->updated_at ? $blog->updated_at->format('d M Y, h:i A') : 'N/A' }}</span>
                    </div>
                </div>
            </div>

            <!-- SEO Metadata Card -->
            <div class="dc-card" style="padding: 20px;">
                <h3 style="font-size: 15px; font-weight: 700; color: var(--dc-dark); margin-top: 0; margin-bottom: 16px; border-bottom: 1px solid var(--dc-border); padding-bottom: 10px; display: flex; align-items: center; gap: 6px;">
                    <i class="fa-solid fa-magnifying-glass" style="color: var(--dc-green);"></i>
                    <span>SEO Meta Details</span>
                </h3>

                <div style="display: flex; flex-direction: column; gap: 14px; font-size: 12.5px;">
                    <div>
                        <span style="color: var(--dc-light-gray); font-size: 11px; font-weight: 600; display: block; margin-bottom: 2px;">META TITLE</span>
                        <span style="color: var(--dc-dark); font-weight: 600;">{{ $blog->meta_title ?: $blog->title }}</span>
                    </div>

                    <div>
                        <span style="color: var(--dc-light-gray); font-size: 11px; font-weight: 600; display: block; margin-bottom: 2px;">META DESCRIPTION</span>
                        <p style="color: var(--dc-dark-muted); margin: 0; line-height: 1.4;">
                            {{ $blog->meta_description ?: 'No meta description configured.' }}
                        </p>
                    </div>

                    @if($blog->meta_keywords)
                    <div>
                        <span style="color: var(--dc-light-gray); font-size: 11px; font-weight: 600; display: block; margin-bottom: 4px;">META KEYWORDS</span>
                        <div style="display: flex; gap: 4px; flex-wrap: wrap;">
                            @foreach(explode(',', $blog->meta_keywords) as $kw)
                            <span class="dc-badge-pill" style="font-size: 10px; background: var(--dc-bg); color: var(--dc-dark);">{{ trim($kw) }}</span>
                            @endforeach
                        </div>
                    </div>
                    @endif

                    @if($blog->canonical_url)
                    <div>
                        <span style="color: var(--dc-light-gray); font-size: 11px; font-weight: 600; display: block; margin-bottom: 2px;">CANONICAL URL</span>
                        <a href="{{ $blog->canonical_url }}" target="_blank" style="color: var(--dc-blue); text-decoration: underline; font-size: 11px; word-break: break-all;">
                            {{ $blog->canonical_url }}
                        </a>
                    </div>
                    @endif
                </div>
            </div>

        </div>

    </div>
</div>

<style>
    @media (max-width: 992px) {
        .dc-show-grid {
            grid-template-columns: 1fr !important;
        }
    }
</style>
@endsection
