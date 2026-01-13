FROM nginx:alpine

COPY nginx.conf /etc/nginx/conf.d/default.conf

COPY index.html /usr/share/nginx/html/index.html
COPY 404.html /usr/share/nginx/html/404.html
COPY assets /usr/share/nginx/html/assets
COPY faq /usr/share/nginx/html/faq
COPY rules /usr/share/nginx/html/rules
COPY prizes /usr/share/nginx/html/prizes
COPY play /usr/share/nginx/html/play
COPY disclaimer /usr/share/nginx/html/disclaimer
COPY terms-and-conditions /usr/share/nginx/html/terms-and-conditions
COPY privacy-policy /usr/share/nginx/html/privacy-policy
COPY privacy /usr/share/nginx/html/privacy

COPY apple-touch-icon.png /usr/share/nginx/html/apple-touch-icon.png
COPY favicon.ico /usr/share/nginx/html/favicon.ico
COPY favicon-16x16.png /usr/share/nginx/html/favicon-16x16.png
COPY favicon-32x32.png /usr/share/nginx/html/favicon-32x32.png
COPY favicon-96x96.png /usr/share/nginx/html/favicon-96x96.png
COPY android-chrome-192x192.png /usr/share/nginx/html/android-chrome-192x192.png
COPY android-chrome-512x512.png /usr/share/nginx/html/android-chrome-512x512.png
