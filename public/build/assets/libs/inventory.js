
// document.addEventListener("DOMContentLoaded", function () {
    const accordionHeaders = document.querySelectorAll('.accordion-header');
    

const btnDropdowns = document.querySelectorAll('.btn-drop');

btnDropdowns.forEach(drop => {
    drop.addEventListener('click', function() {
    //   document.querySelectorAll('.dropbox').forEach(drop => drop.classList.remove('active'));
        const dropBox = this.nextElementSibling;
        
        if(dropBox && dropBox.classList.contains('active')) {
            dropBox.classList.remove('active');
        } else {
            dropBox.classList.add('active');
        }
    });
});

const customDatePickers = document.querySelectorAll('.customDatePicker');

customDatePickers.forEach(datePicker => {
    const inputElement = datePicker.querySelector('input[type="date"]');
    const spanElement = datePicker.querySelector('span');

    datePicker.addEventListener('click', function(event) {
        event.preventDefault(); // Prevent default behavior
        inputElement.focus();   // Bring focus to the input
        setTimeout(() => {
            inputElement.showPicker?.(); // Show the date picker if supported
        }, 0);
    });

    inputElement.addEventListener('change', function() {
        const selectedDate = new Date(inputElement.value);
        if (!isNaN(selectedDate)) { // Ensure it's a valid date
            const formattedDate = formatDate(selectedDate);
            spanElement.textContent = formattedDate;
        } else {
            spanElement.textContent = "Invalid Date"; // Handle invalid input
        }
    });
});

// Utility function to format dates
function formatDate(date) {
    const options = { year: 'numeric', month: 'long', day: 'numeric' };
    return date.toLocaleDateString(undefined, options);
}
function formatDate(date) {
const day = String(date.getDate()).padStart(2, '0');
const monthNames = ['Jan', 'Feb', 'Mar', 'Apr', 'May', 'Jun', 'Jul', 'Aug', 'Sep', 'Oct', 'Nov', 'Dec'];
const month = monthNames[date.getMonth()];
const year = date.getFullYear();

const weekdayNames = ['Sun', 'Mon', 'Tue', 'Wed', 'Thu', 'Fri', 'Sat'];
const weekday = weekdayNames[date.getDay()];

return `${day} ${month} ${year}, ${weekday}`;
}

// });