
// // Store the install prompt event
// let deferredPrompt;
// console.log("Super Food app is running")
// // Listen for the beforeinstallprompt event for laptops
// window.addEventListener('beforeinstallprompt', event => {
//   // Prevent the default install prompt
//   event.preventDefault();
//   // Store the event for later use
//   deferredPrompt = event;

//   // Show your custom install prompt
//   const installButton = document.getElementById('install-button');
//   installButton.style.display = 'block';
//   installButton.addEventListener('click', () => {
//     installButton.style.display = 'none';
//     deferredPrompt.prompt();
//     deferredPrompt.userChoice
//       .then(choiceResult => {
//         if (choiceResult.outcome === 'accepted') {
//           console.log('You have installed SuperFood App');
//         } else {
//           console.log('User declined to install SuperFood App');
//         }
//         // Clear the deferredPrompt variable
//         deferredPrompt = null;
//       });
//   });
// });


// // Hide the install button if the PWA is already installed
// window.addEventListener('appinstalled', event => {
//   const installButton = document.getElementById('install-button');
//   installButton.style.display = 'none';
// });



// Store the install prompt event
let deferredPrompt;
console.log("Super Food app is running")

// Listen for the beforeinstallprompt event for laptops
window.addEventListener('beforeinstallprompt', event => {
  // Store the event for later use
  deferredPrompt = event;
});

// Hide the install button if the PWA is already installed
window.addEventListener('appinstalled', event => {
  const installButton = document.getElementById('install-button');
  installButton.style.display = 'none';
});