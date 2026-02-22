import os
import re
import shutil

# Paths
BASE_DIR = "/Applications/MAMP/htdocs/palacegarden"
THEME_DIR = os.path.join(BASE_DIR, "wp-content/themes/hello-biz")
UPLOADS_DIR = os.path.join(BASE_DIR, "wp-content/uploads/2026/01")
EXPORT_DIR = os.path.join(BASE_DIR, "palacegarden_static")
ASSETS_DIR = os.path.join(EXPORT_DIR, "assets")

# Create directories
if os.path.exists(EXPORT_DIR):
    shutil.rmtree(EXPORT_DIR)
os.makedirs(ASSETS_DIR, exist_ok=True)

# Helper to read file
def read_file(path):
    with open(path, 'r') as f:
        return f.read()

# Helper to write file
def write_file(path, content):
    with open(path, 'w') as f:
        f.write(content)

# Helper for common replacements
def apply_replacements(html):
    # 1. SPECIFIC Replacements (Must run before catch-alls)
    
    # Logo (Specific Match for includes/header-palace.php and footer-palace.php)
    # Using logo-v3.png to force cache refresh
    logo_filename = "logo-v3.png"
    logo_path = f"assets/{logo_filename}"
    
    # Track replacements for verification
    count_logo = 0
    
    # Specific Logo Regex
    # We use a pattern that matches the specific string
    pattern_logo = r'<\?php echo home_url\(\'/wp-content/uploads/2026/01/Logo_Final-weiss\.png\'\); \?>'
    if re.search(pattern_logo, html):
        count_logo += len(re.findall(pattern_logo, html))
        html = re.sub(pattern_logo, logo_path, html)

    # Fallback replacements
    html = re.sub(r'src="<\?php echo get_stylesheet_directory_uri\(\); \?>/logo-palacegarden\.png"', f'src="{logo_path}"', html)
    html = re.sub(r'<\?php echo get_stylesheet_directory_uri\(\); \?>/logo-palacegarden\.png', logo_path, html)
    html = re.sub(r'<\?php echo get_stylesheet_directory_uri\(\); \?>/', 'assets/', html)

    if count_logo > 0:
        print(f"DEBUG: Replaced {count_logo} logo instances.")
    
    # Specific Page Links (Convert known paths to .html)
    html = re.sub(r'href="/palacegarden/"', 'href="index.html"', html)
    html = re.sub(r'href="/palacegarden/terrassenueberdachungen/"', 'href="terrassenueberdachungen.html"', html)
    html = re.sub(r'href="/palacegarden/schiebeanlagen/"', 'href="schiebeanlagen.html"', html)
    html = re.sub(r'href="/palacegarden/seitenwaende/"', 'href="seitenwaende.html"', html)
    html = re.sub(r'href="/palacegarden/sonnenschutz/"', 'href="sonnenschutz.html"', html)
    html = re.sub(r'href="/palacegarden/producten/"', 'href="producten.html"', html)
    html = re.sub(r'href="/palacegarden/galerie/"', 'href="galerie.html"', html)
    html = re.sub(r'href="/palacegarden/contact/"', 'href="contact.html"', html)
    html = re.sub(r'href="/palacegarden/kontakt/"', 'href="contact.html"', html)
    
    # 2. General PHP Function Replacements
    # Links matching header-palace.php exactly
    html = re.sub(r"href=\"<\?php echo home_url\('/producten/'\); \?>\"", 'href="producten.html"', html)
    html = re.sub(r"href=\"<\?php echo home_url\('/terrassenueberdachungen/'\); \?>\"", 'href="terrassenueberdachungen.html"', html)
    html = re.sub(r"href=\"<\?php echo home_url\('/sonnenschutz/'\); \?>\"", 'href="sonnenschutz.html"', html)
    html = re.sub(r"href=\"<\?php echo home_url\('/schiebeanlagen/'\); \?>\"", 'href="schiebeanlagen.html"', html)
    html = re.sub(r"href=\"<\?php echo home_url\('/seitenwaende/'\); \?>\"", 'href="seitenwaende.html"', html)
    
    # Generic home_url calls for other potential formats
    html = re.sub(r"<\?php echo home_url\('/producten/'\); \?>", 'producten.html', html)
    html = re.sub(r"<\?php echo home_url\('/terrassenueberdachungen/'\); \?>", 'terrassenueberdachungen.html', html)
    html = re.sub(r"<\?php echo home_url\('/sonnenschutz/'\); \?>", 'sonnenschutz.html', html)
    html = re.sub(r"<\?php echo home_url\('/schiebeanlagen/'\); \?>", 'schiebeanlagen.html', html)
    html = re.sub(r"<\?php echo home_url\('/seitenwaende/'\); \?>", 'seitenwaende.html', html)
    
    # Links
    html = re.sub(r'<\?php echo home_url\(\'/\'\); \?>', 'index.html', html)
    html = re.sub(r'<\?php echo home_url\(\'/schiebeanlagen/\'\); \?>', 'schiebeanlagen.html', html) 
    # Duplicate catch-alls just in case, but specific ones above take precedence if order matches
    
    # Direct hrefs (HTML)
    html = re.sub(r'href="/palacegarden/"', 'href="index.html"', html)
    html = re.sub(r'href="/palacegarden/galerie/"', 'href="galerie.html"', html)
    html = re.sub(r'href="/palacegarden/about/"', 'href="#about"', html)
    html = re.sub(r'href="/palacegarden/contact/"', 'href="contact.html"', html)
    html = re.sub(r'href="/palacegarden/kontakt/"', 'href="contact.html"', html)
    html = re.sub(r'href="/palacegarden/impressum/"', 'href="impressum.html"', html)
    html = re.sub(r'href="/palacegarden/datenschutz/"', 'href="datenschutz.html"', html)
    
    # Catch-all
    html = re.sub(r'<\?php echo home_url\(\'/\'\); \?>\?success=true', 'index.html?success=true', html)
    # Be careful with this catch-all, only use if specific ones fail
    # html = re.sub(r'<\?php echo home_url\([^)]+\); \?>', '#', html) 
    
    # 3. Final Cleanup
    # Clean up other /palacegarden/ sub-links to hashes if page doesn't exist
    html = re.sub(r'href="/palacegarden/([^"]+)"', r'href="#\1"', html)

    # PHP Stripping
    html = re.sub(r'<\?php.*?\?>', '', html, flags=re.DOTALL)
    
    return html

# 1. Prepare Base Header (Head tags)
head_html = """<!doctype html>
<html lang="nl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Palace Garden - Terrasoverkappingen</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&family=Staatliches&family=Open+Sans:wght@400;600&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="style.css">
    <style>
        body { margin: 0; padding: 0; font-family: 'Open Sans', sans-serif; color: #333; }
        * { box-sizing: border-box; }
        a { text-decoration: none; color: inherit; }
        img { max-width: 100%; height: auto; }
        .sr-only { position: absolute; width: 1px; height: 1px; padding: 0; margin: -1px; overflow: hidden; clip: rect(0,0,0,0); border: 0; }
        /* Static Export Fix needed */
        header.palace-header { display: block !important; position: fixed !important; top:0; left:0; right:0; z-index:999; }
    </style>
</head>
<body>
"""

# 2. Prepare Navigation Header (From includes/header-palace.php)
header_palace_raw = read_file(os.path.join(THEME_DIR, "includes", "header-palace.php"))
# Extract style block separately if needed, but apply_replacements should handle it.
# IMPORTANT: header-palace.php has 'display: none !important' at the top in a style block for #site-header etc.
# checking the file content... lines 1-20 are style block hiding original headers.
# We should probably KEEP lines 21+ but remove lines 1-20 to avoid accidental hiding if IDs clash?
# Actually, it hides #site-header. Current header has class .palace-header.
header_palace_html = apply_replacements(header_palace_raw)

# 3. Prepare Footer (From includes/footer-palace.php)
footer_raw = read_file(os.path.join(THEME_DIR, "includes", "footer-palace.php"))
footer_html = apply_replacements(footer_raw)

# 4. Process Content Files
def process_page(content_file, output_filename, is_raw_html=False):
    # If file doesn't exist (e.g. newly referenced), skip or warn
    if not os.path.exists(os.path.join(THEME_DIR, content_file)):
        print(f"File not found: {content_file} - creating empty placeholder.")
        content_html = "<main style='padding:100px;text-align:center;'><h1>In Arbeit</h1></main>"
    else:
        content_raw = read_file(os.path.join(THEME_DIR, content_file))
        content_html = apply_replacements(content_raw)
    
    # Assembly
    full_html = head_html + header_palace_html + content_html + footer_html + "</body></html>"
    
    write_file(os.path.join(EXPORT_DIR, output_filename), full_html)
    print(f"Generated {output_filename}")

# Generate Pages
# Generate Pages
process_page("front-page.php", "index.html")
process_page("page-terrassenueberdachungen.php", "terrassenueberdachungen.html")
process_page("page-produkte.php", "producten.html")
process_page("page-sonnenschutz.php", "sonnenschutz.html")
process_page("page-schiebeanlagen.php", "schiebeanlagen.html")
process_page("page-seitenwaende.php", "seitenwaende.html")
process_page("page-galerie.php", "galerie.html")
process_page("page-contact.php", "contact.html") 

# 5. Copy Assets
# Copy the Found Logo (Prioritize white logo used in header/footer)
logo_src = os.path.join(UPLOADS_DIR, "Logo_Final-weiss.png")
if not os.path.exists(logo_src):
     # Fallback to standard logo if white version missing
    logo_src = os.path.join(UPLOADS_DIR, "Logo_Final.png")

if os.path.exists(logo_src):
    shutil.copy(logo_src, os.path.join(ASSETS_DIR, "logo-v3.png"))
    print(f"Copied {os.path.basename(logo_src)} to assets/logo-v3.png")
else:
    print("Warning: Logo not found (checked Logo_Final-weiss.png and Logo_Final.png)")

# Copy and Process style.css
style_src = os.path.join(THEME_DIR, "style.css")
if os.path.exists(style_src):
    style_content = read_file(style_src)
    
    # Remove the rule that hides the header (header, ... { display: none !important; })
    # We replace it with a commented out version or just remove 'header,' from the selector
    # The rule is likely: header, ... { display: none !important; }
    # We will simply append an override to the end of the file to be safe and sure
    override_css = """
    /* Force Header Visibility for Static Export */
    header.palace-header {
        display: block !important;
        visibility: visible !important;
        opacity: 1 !important;
        position: fixed !important; /* Ensure it stays fixed as intended */
        top: 0 !important;
        z-index: 99999 !important;
    }
    """
    style_content += override_css
    
    write_file(os.path.join(EXPORT_DIR, "style.css"), style_content)
    print("Copied and patched style.css")

print("Static export v3 complete.")
