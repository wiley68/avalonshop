<?php echo '<?xml version="1.0" encoding="UTF-8"?>'; ?>
<urlset xmlns="http://www.sitemaps.org/schemas/sitemap/0.9">
    <url>
        <loc>{{ route('support.posts', ['id' => 'gamings']) }}</loc>
        <lastmod>{{ $last_update->tz('UTC')->toAtomString() }}</lastmod>
        <changefreq>weekly</changefreq>
        <priority>0.6</priority>
    </url>
    <url>
        <loc>{{ route('support.posts', ['id' => 'printers']) }}</loc>
        <lastmod>{{ $last_update->tz('UTC')->toAtomString() }}</lastmod>
        <changefreq>weekly</changefreq>
        <priority>0.6</priority>
    </url>
    <url>
        <loc>{{ route('support.posts', ['id' => 'instalations']) }}</loc>
        <lastmod>{{ $last_update->tz('UTC')->toAtomString() }}</lastmod>
        <changefreq>weekly</changefreq>
        <priority>0.6</priority>
    </url>
    <url>
        <loc>{{ route('support.posts', ['id' => 'networks']) }}</loc>
        <lastmod>{{ $last_update->tz('UTC')->toAtomString() }}</lastmod>
        <changefreq>weekly</changefreq>
        <priority>0.6</priority>
    </url>
    <url>
        <loc>{{ route('support.posts', ['id' => 'cameras']) }}</loc>
        <lastmod>{{ $last_update->tz('UTC')->toAtomString() }}</lastmod>
        <changefreq>weekly</changefreq>
        <priority>0.6</priority>
    </url>
    <url>
        <loc>{{ route('support.posts', ['id' => 'softwares']) }}</loc>
        <lastmod>{{ $last_update->tz('UTC')->toAtomString() }}</lastmod>
        <changefreq>weekly</changefreq>
        <priority>0.6</priority>
    </url>
    <url>
        <loc>{{ route('support.posts', ['id' => 'all']) }}</loc>
        <lastmod>{{ $last_update->tz('UTC')->toAtomString() }}</lastmod>
        <changefreq>weekly</changefreq>
        <priority>0.6</priority>
    </url>
    @foreach ($supports as $support)
        <url>
            <loc>{{ route('support.software', ['id' => $support->id]) }}</loc>
            <lastmod>{{ $support->updated_at->tz('UTC')->toAtomString() }}</lastmod>
            <changefreq>weekly</changefreq>
            <priority>0.6</priority>
        </url>
    @endforeach
</urlset>