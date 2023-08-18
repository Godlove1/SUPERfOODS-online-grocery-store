
// Define the cache name
const CACHE_NAME = 'superFood-app-cache-v1';

// List the files to cache
const urlsToCache = ["assets/images/icons/maskable_icon_x48.png"];

// Install the service worker and cache the files
self.addEventListener('install', event => {
  event.waitUntil(
    caches.open(CACHE_NAME)
      .then(cache => cache.addAll(urlsToCache))
  );
});

// Fetch the cached files or the network if not available
self.addEventListener('fetch', event => {
  event.respondWith(
    caches.match(event.request)
      .then(response => {
        // Return the cached file if available
        if (response) {
          return response;
        }

        // Otherwise, fetch from the network
        return fetch(event.request);
      })
  );
});