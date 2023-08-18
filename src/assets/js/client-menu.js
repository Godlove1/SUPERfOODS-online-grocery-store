

const menuBtn=document.querySelector('.fa-bars');
const menuClose=document.querySelector('.fa-close')
const mobicontainer=document.querySelector('#mobiside');

// search bar
const search_bar=document.querySelector('#search_bar');


const openNav=()=>{
mobicontainer.style.height='100%';
}


const closeNav=()=>{
    mobicontainer.style.height='0';
    }

    const openSearch=()=>{
        search_bar.style.height="80px";
    }

    const closeSearch=()=>{
        search_bar.style.height="0";
    }

// Show the spinner when the page starts loading
var spinner = document.getElementById('spinner');
spinner.classList.add('hidden');
function showSpinner() {
  spinner.classList.remove('hidden');
}
function hideSpinner() {
  spinner.classList.add('hidden');
}
// Add event listener to show the spinner when the page starts loading
window.addEventListener('loadstart', showSpinner);
// Add event listener to hide the spinner when the page has finished loading
window.addEventListener('load', hideSpinner);


  // Get all the input groups on the page
var inputGroups = document.querySelectorAll('.input-group');

// Loop through each input group and add event listeners to the plus and minus buttons
inputGroups.forEach(function(group) {
  var input = group.querySelector('.input-number');
  var plusButton = group.querySelector('.increment-button');
  var minusButton = group.querySelector('.decrement-button');
  
  // Add click event listeners to the plus and minus buttons
  plusButton.addEventListener("click", function() {
    input.value = parseInt(input.value) + 1;
    // console.log('minuser')
  });

  minusButton.addEventListener("click", function() {
    if (input.value > 1) {
      input.value = parseInt(input.value) - 1;
    }
    // console.log('minus')
  });
});