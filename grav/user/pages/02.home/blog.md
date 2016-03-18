---
title: Blog
published: true
sitemap:
    changefreq: monthly
external_links:
    process: true
    title: false
    no_follow: true
    target: _blank
    mode: active
process:
    textformatter: false
    markdown: '1'
    twig: '1'
body_classes: 'header-image fullwidth'
child_type: item
routable: true
cache_enable: true
visible: true
content:
    items: '@self.children'
    limit: 5
    order:
        by: date
        dir: desc
    pagination: true
    url_taxonomy_filters: true
blog_url: blog
feed:
    description: 'Sample Blog Description'
    limit: 10
pagination: true
---

# OpenWebsoccer ...
## ... nehme an der neuen Generation des OpenWebsoccer Teil !
### Weitere Anpassungen für einen direkten Einblick aufs Wesenteliche.
