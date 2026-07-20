# Download real images from Unsplash
$base = "E:\design\repair-service\images"

$images = @{
    # Hero
    "hero-img.png" = "https://images.unsplash.com/photo-1621905252507-b35492cc74b4?w=800&h=600&fit=crop&auto=format"
    
    # Services
    "services\ac-repair.jpg" = "https://images.unsplash.com/photo-1621905252507-b35492cc74b4?w=600&h=400&fit=crop&auto=format"
    "services\ac-servicing.jpg" = "https://images.unsplash.com/photo-1585771724684-38269d6639fd?w=600&h=400&fit=crop&auto=format"
    "services\ac-installation.jpg" = "https://images.unsplash.com/photo-1621905251189-08b45d6a269e?w=600&h=400&fit=crop&auto=format"
    "services\ac-gas-refill.jpg" = "https://images.unsplash.com/photo-1558618666-fcd25c85f82e?w=600&h=400&fit=crop&auto=format"
    "services\washing-machine.jpg" = "https://images.unsplash.com/photo-1582735689369-4fe89db7114c?w=600&h=400&fit=crop&auto=format"
    "services\refrigerator.jpg" = "https://images.unsplash.com/photo-1571175443880-49e1d25b2bc5?w=600&h=400&fit=crop&auto=format"
    "services\microwave.jpg" = "https://images.unsplash.com/photo-1574269909862-7e1d70bb8078?w=600&h=400&fit=crop&auto=format"
    "services\dishwasher.jpg" = "https://images.unsplash.com/photo-1584622650111-993a426fbf0a?w=600&h=400&fit=crop&auto=format"
    "services\geyser.jpg" = "https://images.unsplash.com/photo-1585771724684-38269d6639fd?w=600&h=400&fit=crop&auto=format"
    "services\installation.jpg" = "https://images.unsplash.com/photo-1581092918056-0c4c3acd3789?w=600&h=400&fit=crop&auto=format"
    
    # Gallery
    "gallery\gallery-1.jpg" = "https://images.unsplash.com/photo-1621905252507-b35492cc74b4?w=400&h=300&fit=crop&auto=format"
    "gallery\gallery-2.jpg" = "https://images.unsplash.com/photo-1585771724684-38269d6639fd?w=400&h=300&fit=crop&auto=format"
    "gallery\gallery-3.jpg" = "https://images.unsplash.com/photo-1621905251189-08b45d6a269e?w=400&h=300&fit=crop&auto=format"
    "gallery\gallery-4.jpg" = "https://images.unsplash.com/photo-1582735689369-4fe89db7114c?w=400&h=300&fit=crop&auto=format"
    "gallery\gallery-5.jpg" = "https://images.unsplash.com/photo-1571175443880-49e1d25b2bc5?w=400&h=300&fit=crop&auto=format"
    "gallery\gallery-6.jpg" = "https://images.unsplash.com/photo-1574269909862-7e1d70bb8078?w=400&h=300&fit=crop&auto=format"
    "gallery\gallery-7.jpg" = "https://images.unsplash.com/photo-1558618666-fcd25c85f82e?w=400&h=300&fit=crop&auto=format"
    "gallery\gallery-8.jpg" = "https://images.unsplash.com/photo-1584622650111-993a426fbf0a?w=400&h=300&fit=crop&auto=format"
    
    # Blog
    "blog\blog-1.jpg" = "https://images.unsplash.com/photo-1585771724684-38269d6639fd?w=500&h=300&fit=crop&auto=format"
    "blog\blog-2.jpg" = "https://images.unsplash.com/photo-1582735689369-4fe89db7114c?w=500&h=300&fit=crop&auto=format"
    "blog\blog-3.jpg" = "https://images.unsplash.com/photo-1571175443880-49e1d25b2bc5?w=500&h=300&fit=crop&auto=format"
    
    # OG Image
    "og-image.jpg" = "https://images.unsplash.com/photo-1621905252507-b35492cc74b4?w=1200&h=630&fit=crop&auto=format"
}

$success = 0
$fail = 0

foreach ($item in $images.GetEnumerator()) {
    $path = Join-Path $base $item.Key
    $url = $item.Value
    
    try {
        $wc = New-Object System.Net.WebClient
        $wc.Headers.Add("User-Agent", "Mozilla/5.0")
        $wc.DownloadFile($url, $path)
        $size = (Get-Item $path).Length
        Write-Host "OK: $($item.Key) ($size bytes)"
        $success++
    } catch {
        Write-Host "FAIL: $($item.Key) - $($_.Exception.Message)"
        $fail++
    }
}

Write-Host "`nDone: $success downloaded, $fail failed"