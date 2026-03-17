const CACHE_NAME = "spsm_monthly_meeting-v1";
const ASSETS_TO_CACHE = [
  // "/",
  // "main.php",
  // "css/style.php",
  // "css/main.php",
  "https://code.jquery.com/jquery-3.7.1.min.js",
];

// ติดตั้ง Service Worker และเก็บไฟล์ลง Cache
self.addEventListener("install", (event) => {
  event.waitUntil(
    caches.open(CACHE_NAME).then((cache) => {
      return cache.addAll(ASSETS_TO_CACHE);
    }),
  );
});

// จัดการการดึงข้อมูล (Fetch)
self.addEventListener("fetch", (event) => {
  event.respondWith(
    caches.match(event.request).then((response) => {
      return (
        response ||
        fetch(event.request).catch(() => {
          return caches.match("/");
        })
      );
    }),
  );
});
