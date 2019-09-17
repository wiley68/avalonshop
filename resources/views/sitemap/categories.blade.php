<?php echo '<?xml version="1.0" encoding="UTF-8"?>'; ?>
<urlset xmlns="http://www.sitemaps.org/schemas/sitemap/0.9">
    @foreach ($categories as $category)
        @php
        $category_ids = [];
        $category_ids[] = $category->id;
        @endphp
        <url>
            <loc>{{ route('products', ['category_id' => $category_ids]) }}</loc>
            <lastmod>{{ $last_update->tz('UTC')->toAtomString() }}</lastmod>
            <changefreq>weekly</changefreq>
            <priority>0.6</priority>
        </url>
    @endforeach
</urlset>