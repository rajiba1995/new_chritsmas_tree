
window.addEventListener('append_addOn_price', function(event) { 
  const room_id = event.detail[0].room_id;
  const item = event.detail[0].item;
  const price = event.detail[0].price;

  // Construct the input field selector
  const inputFields = document.querySelectorAll(`.addon-plan-item-price-${room_id}-${item}`);
  // Set the value if the field is found
  if (inputFields) {
      inputFields.forEach(inputField=>{
          inputField.value = price;
      });
  }

});
window.addEventListener('resetCheckboxes', () => {
   document.querySelectorAll('input[name="selected_room_id[]"]').forEach((checkbox) => {
        checkbox.checked = false;
    });
});


// Listen for the 'inventory-scroller' event
function scrollable(direction) {
  // Grab the scrollable divs and buttons
  const scrollableDivs = document.querySelectorAll('.scrollable');
  const scrollLeftBtn = document.getElementById('scrollLeft');
  const scrollRightBtn = document.getElementById('scrollRight');

  const syncScroll = (source) => {
      scrollableDivs.forEach(div => {
          if (div !== source) {
          div.scrollLeft = source.scrollLeft;
          }
      });
  };


  scrollableDivs.forEach(div => {
      div.addEventListener('scroll', function () {
          syncScroll(div);
      //   updateButtonsVisibility();
      });
  });

  const smoothScroll = (direction) => {
      scrollableDivs.forEach(div => {
          const targetScrollLeft = div.scrollLeft + direction;
          const startScrollLeft = div.scrollLeft;
          const distance = targetScrollLeft - startScrollLeft;
          const duration = 300;
          const startTime = performance.now();
          const animateScroll = (currentTime) => {
              const timeElapsed = currentTime - startTime;
              const progress = Math.min(timeElapsed / duration, 1);
              const newScrollLeft = startScrollLeft + distance * progress;
      
              div.scrollLeft = newScrollLeft;
      
              if (progress < 1) {
                  requestAnimationFrame(animateScroll);
              }
          };
      
          requestAnimationFrame(animateScroll); 
      });

      // updateButtonsVisibility();
  };

  if (scrollLeftBtn && scrollRightBtn) {
      scrollLeftBtn.addEventListener('click', () => {
          smoothScroll(-50);
      });

      scrollRightBtn.addEventListener('click', () => {
          if (scrollRightBtn.id) {
              smoothScroll(50);
          }
      });
  } else {
      console.log('Scroll buttons not found.');
  }

}

function ShowSecondStep() {
  // Get the elements
  const step1 = document.getElementById('step1');
  const step2 = document.getElementById('step2');
  const go_to_step2 = document.getElementById('go_to_step2');
  const back_to_step1 = document.getElementById('back_to_step1');

  // Remove 'active' class from step 1 and add 'hidden'
  step1.classList.remove('active');
  step1.classList.add('hidden');

  go_to_step2.classList.add('hidden');
  go_to_step2.classList.remove('active');

  // Remove 'hidden' class from back_to_step1 and add 'active'
  back_to_step1.classList.add('active');
  back_to_step1.classList.remove('hidden');

  // Add 'active' class to step 2 and remove 'hidden'
  step2.classList.remove('hidden');
  step2.classList.add('active');
}
function ShowFirstStep() {
  // Get the elements
  const step1 = document.getElementById('step1');
  const step2 = document.getElementById('step2');
  const go_to_step2 = document.getElementById('go_to_step2');
  const back_to_step1 = document.getElementById('back_to_step1');

  // Remove 'active' class from step 1 and add 'hidden'
  step1.classList.add('active');
  step1.classList.remove('hidden');

  go_to_step2.classList.remove('hidden');
  go_to_step2.classList.add('active');

  // Remove 'hidden' class from back_to_step1 and add 'active'
  back_to_step1.classList.remove('active');
  back_to_step1.classList.add('hidden');

  // Add 'active' class to step 2 and remove 'hidden'
  step2.classList.add('hidden');
  step2.classList.remove('active');
}
function BlockRequestItem(value) {
  const yellow = document.getElementById('bulk_block_request');
  const green = document.getElementById('fresh_block_request');
  
  if (value === "green") {
      green.classList.toggle('active');  // Toggle 'active' class
      green.classList.toggle('hide');   // Toggle 'hide' class
  } else {
      yellow.classList.toggle('active');  // Toggle 'active' class
      yellow.classList.toggle('hide');   // Toggle 'hide' class
  }
}

const customDatePicker = document.querySelectorAll('.customDatePicker');

customDatePicker.forEach(datePicker => {
    datePicker.addEventListener('click', function() {
      const inputElement = datePicker.querySelector('input[type="date"]');
      const spanElement = datePicker.querySelector('span');
      
      datePicker.addEventListener('click', function(event) {
          event.preventDefault(); 
          inputElement.focus();   
          setTimeout(() => {
              inputElement.showPicker?.(); 
          }, 0); 
      }); 
      
      inputElement.addEventListener('change', function() {
          const selectedDate = new Date(inputElement.value);
          const formattedDate = formatDate(selectedDate);
          spanElement.textContent = formattedDate;
      });
        
    });
});

function formatDate(date) {
  const day = String(date.getDate()).padStart(2, '0');
  const monthNames = ['Jan', 'Feb', 'Mar', 'Apr', 'May', 'Jun', 'Jul', 'Aug', 'Sep', 'Oct', 'Nov', 'Dec'];
  const month = monthNames[date.getMonth()];
  const year = date.getFullYear();

  const weekdayNames = ['Sun', 'Mon', 'Tue', 'Wed', 'Thu', 'Fri', 'Sat'];
  const weekday = weekdayNames[date.getDay()];

  return `${day} ${month} ${year}, ${weekday}`;
}