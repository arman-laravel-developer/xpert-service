# SVG Placeholder Generator for Xpert Service BD
# Replace these with real images later

$images = @(
    @{Path="images\logo.png";      Color="#0a2540"; Text="Xpert`nService BD";    TextSize="24"},
    @{Path="images\favicon.png";   Color="#ff6b00"; Text="XS";                    TextSize="20"},
    @{Path="images\hero-img.png";  Color="#1a3a5c"; Text="AC Service`nMirpur";    TextSize="28"},
    @{Path="images\og-image.jpg";  Color="#0a2540"; Text="Xpert Service BD";       TextSize="32"},
    @{Path="images\services\ac-repair.jpg";     Color="#0066cc"; Text="AC Repair";          TextSize="22"},
    @{Path="images\services\ac-servicing.jpg";  Color="#0099ff"; Text="AC Servicing";       TextSize="22"},
    @{Path="images\services\ac-installation.jpg"; Color="#0088ee"; Text="AC Installation";   TextSize="22"},
    @{Path="images\services\ac-gas-refill.jpg"; Color="#00aaff"; Text="AC Gas Refill";      TextSize="22"},
    @{Path="images\services\washing-machine.jpg"; Color="#555588"; Text="Washing Machine";  TextSize="20"},
    @{Path="images\services\refrigerator.jpg";  Color="#4488aa"; Text="Refrigerator";       TextSize="20"},
    @{Path="images\services\microwave.jpg";     Color="#886644"; Text="Microwave";          TextSize="22"},
    @{Path="images\services\dishwasher.jpg";    Color="#668899"; Text="Dishwasher";         TextSize="20"},
    @{Path="images\services\geyser.jpg";        Color="#cc6633"; Text="Geyser";             TextSize="22"},
    @{Path="images\services\installation.jpg";  Color="#5577aa"; Text="Installation";       TextSize="20"},
    @{Path="images\gallery\gallery-1.jpg";      Color="#2d5a8e"; Text="Before & After`nAC Repair"; TextSize="18"},
    @{Path="images\gallery\gallery-2.jpg";      Color="#1e6b4e"; Text="Before & After`nAC Service"; TextSize="18"},
    @{Path="images\gallery\gallery-3.jpg";      Color="#8b5e3c"; Text="AC Installation";    TextSize="18"},
    @{Path="images\gallery\gallery-4.jpg";      Color="#5a6b7c"; Text="Washing Machine";    TextSize="18"},
    @{Path="images\gallery\gallery-5.jpg";      Color="#3a6b8c"; Text="Refrigerator";       TextSize="18"},
    @{Path="images\gallery\gallery-6.jpg";      Color="#7a5a4a"; Text="Microwave Repair";   TextSize="18"},
    @{Path="images\gallery\gallery-7.jpg";      Color="#2a7a5a"; Text="AC Deep Clean";      TextSize="18"},
    @{Path="images\gallery\gallery-8.jpg";      Color="#4a6a8a"; Text="Dishwasher Install"; TextSize="18"},
    @{Path="images\blog\blog-1.jpg";            Color="#3a5a7a"; Text="AC Servicing Tips";  TextSize="20"},
    @{Path="images\blog\blog-2.jpg";            Color="#5a7a5a"; Text="Washing Machine";    TextSize="20"},
    @{Path="images\blog\blog-3.jpg";            Color="#7a6a3a"; Text="Fridge Care";        TextSize="20"},
    @{Path="images\brands\samsung.png";         Color="#1428a0"; Text="Samsung";            TextSize="16"},
    @{Path="images\brands\lg.png";              Color="#a50034"; Text="LG";                 TextSize="18"},
    @{Path="images\brands\gree.png";            Color="#0066b3"; Text="Gree";               TextSize="18"},
    @{Path="images\brands\general.png";         Color="#003366"; Text="General";            TextSize="16"},
    @{Path="images\brands\toshiba.png";         Color="#cc0000"; Text="Toshiba";            TextSize="16"},
    @{Path="images\brands\panasonic.png";       Color="#0055aa"; Text="Panasonic";          TextSize="14"},
    @{Path="images\brands\mitsubishi.png";      Color="#e3002b"; Text="Mitsubishi";         TextSize="13"},
    @{Path="images\brands\whirlpool.png";       Color="#0077be"; Text="Whirlpool";          TextSize="14"},
    @{Path="images\brands\midea.png";           Color="#0072ce"; Text="Midea";              TextSize="16"},
    @{Path="images\brands\haier.png";           Color="#ff6a00"; Text="Haier";              TextSize="16"},
    @{Path="images\brands\walton.png";          Color="#003da5"; Text="Walton";             TextSize="16"},
    @{Path="images\brands\singer.png";          Color="#002b5c"; Text="Singer";             TextSize="16"}
)

function New-PlaceholderSVG {
    param($Path, $Color, $Text, $TextSize)

    $w = if ($Path -match 'logo|favicon|hero|og-image') { 400 } else { 400 }
    $h = if ($Path -match 'logo') { 100 } elseif ($Path -match 'favicon') { 64 } elseif ($Path -match 'hero') { 400 } elseif ($Path -match 'brand') { 80 } else { 300 }

    # Font color based on bg brightness
    $r = [Convert]::ToInt32($Color.Substring(1,2), 16)
    $g = [Convert]::ToInt32($Color.Substring(3,2), 16)
    $b = [Convert]::ToInt32($Color.Substring(5,2), 16)
    $fontColor = if (($r*299 + $g*587 + $b*114)/1000 -gt 128) { '#333' } else { '#fff' }

    $svg = @"
<svg xmlns="http://www.w3.org/2000/svg" width="$w" height="$h" viewBox="0 0 $w $h">
  <rect width="100%" height="100%" fill="$Color"/>
  <rect width="100%" height="100%" fill="url(#g)"/>
  <defs>
    <linearGradient id="g" x1="0%" y1="0%" x2="100%" y2="100%">
      <stop offset="0%" style="stop-color:rgba(255,255,255,0.1)"/>
      <stop offset="100%" style="stop-color:rgba(0,0,0,0.2)"/>
    </linearGradient>
  </defs>
  <text x="50%" y="50%" dominant-baseline="middle" text-anchor="middle"
        font-family="Arial,sans-serif" font-size="${TextSize}px"
        font-weight="bold" fill="$fontColor">$Text</text>
</svg>
"@

    $fullPath = Join-Path "E:\design\repair-service" $Path
    Set-Content -Path $fullPath -Value $svg -Encoding UTF8
    Write-Host "Created: $Path"
}

foreach ($img in $images) {
    New-PlaceholderSVG -Path $img.Path -Color $img.Color -Text $img.Text -TextSize $img.TextSize
}
