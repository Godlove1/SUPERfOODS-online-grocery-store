  // Get a reference to all the image elements
  var images = document.querySelectorAll(".myImage");

  // Create an IntersectionObserver to observe when images enter the viewport
  var observer = new IntersectionObserver(function(entries) {
      // Loop through the entries
      for (var i = 0; i < entries.length; i++) {
          // Check if the entry is intersecting (in the viewport)
          if (entries[i].isIntersecting) {
              // Get a reference to the image element
              var image = entries[i].target;

              // Change the src attribute to the URL of the actual image
              image.src = image.getAttribute("data-src");

              // Unobserve the image element
              observer.unobserve(image);
          }
      }
  });

  // Loop through the image elements
  for (var i = 0; i < images.length; i++) {
      // Observe each image element
      observer.observe(images[i]);
  }