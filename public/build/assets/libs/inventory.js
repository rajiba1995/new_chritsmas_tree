
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
  window.addEventListener('resetItemCheckboxes', () => {
        // Reset checkboxes with name starting with "selected_room_item_checked"
        document.querySelectorAll('input[name^="selected_room_item_checked"]').forEach((checkbox) => {
            checkbox.checked = false;
        });
    });
    window.addEventListener('ResetItemPrice', (event) => {
        const room_id = event.detail[0].room_id;
        const index = event.detail[0].index;
        const price = event.detail[0].price; // Access the data passed with the event
        const input = document.querySelector(`input[name="selected_room_item[${room_id}][${index}]"]`);
        
        if (input) {
            input.value = price;  // Set the value of the input field to the new price
        }
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
    const update = document.getElementById('update_block_request');
    
    if (value === "green") {
        green.classList.toggle('active');  // Toggle 'active' class
        green.classList.toggle('hide');   // Toggle 'hide' class
    } else if(value==="update"){
        update.classList.toggle('active');  // Toggle 'active' class
        update.classList.toggle('hide');   // Toggle 'hide' class
    }else {
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

//   function ShowExtraDays(){
//     const extra_drop = document.getElementById('extra_drop');
//     extra_drop.classList.toggle('active');  // Toggle 'active' class
//     extra_drop.classList.toggle('hide');
//   }
function validateItems(input) {
    // Remove any characters that are not digits or a single decimal point
    input.value = input.value.replace(/[^0-9.]/g, '');

    // Ensure only one decimal point is allowed
    const parts = input.value.split('.');
    if (parts.length > 2) {
        input.value = parts[0] + '.' + parts[1];
    }


    // Update the value attribute of the input
    input.setAttribute('value', input.value);
    // Trigger input event so Livewire knows the value has changed
    input.dispatchEvent(new Event('input'));
}
window.addEventListener('ResetSelectedValue', (event) => {
    console.log(event);
    const value = event.detail[0].value;
    const input = document.getElementById('single_appended_value');
    if (input) {
        input.value = value;
        // Trigger the input event to notify other listeners (e.g., Livewire)
        input.dispatchEvent(new Event('input'));
    }
})
function validateSingleItems(input) {
    if (!input.value.trim()) {
        input.value = '0';
    } else {
        // Remove any characters that are not digits or a single decimal point
        input.value = input.value.replace(/[^0-9.]/g, '');

        // Ensure only one decimal point is allowed
        const parts = input.value.split('.');
        if (parts.length > 2) {
            input.value = parts[0] + '.' + parts[1];
        }

         // Remove leading zeros, except for "0" itself
         if (!isNaN(input.value)) {
            input.value = parseFloat(input.value).toString();
        }
        // Get the room ID and date values from their respective elements
        var room = document.getElementById('single_appended_room_id').value;
        var date = document.getElementById('single_appended_date').textContent;

        // Get the button element that triggers wire:click
        var button = document.getElementById('single_request_submit');

        // Update the wire:click attribute of the button with dynamic values
        button.setAttribute('wire:click', `DateWiseInventoryUpdate(${room}, '${date}', ${input.value})`);

        // Update the value attribute of the input to match the updated value
        input.value = input.value; // No need to call setAttribute for value, as it's already bound

        // Trigger the input event so Livewire knows the value has changed
        input.dispatchEvent(new Event('input'));
    }
}

function openModal(modalId) {
    document.getElementById(modalId).classList.remove('hidden');
}

function closeModal(modalId) {
    document.getElementById(modalId).classList.add('hidden');
}

