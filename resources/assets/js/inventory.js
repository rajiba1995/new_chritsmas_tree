document.addEventListener("DOMContentLoaded", function () {
  const scrollableDivs = document.querySelectorAll('.scrollable');
  const accordionHeaders = document.querySelectorAll('.accordion-header');
  
  const scrollLeftBtn = document.getElementById('scrollLeft');
  const scrollRightBtn = document.getElementById('scrollRight');
  
  const syncScroll = (source) => {
      scrollableDivs.forEach(div => {
        if (div !== source) {
          div.scrollLeft = source.scrollLeft;
        }
      });
  };

  // const updateButtonsVisibility = () => {
  //     const allDivs = Array.from(scrollableDivs);
  //     const isScrolledToStart = allDivs.every(div => div.scrollLeft === 0);
  //     const isScrolledToEnd = allDivs.every(div => div.scrollLeft + div.clientWidth === div.scrollWidth);
      
  //     scrollLeftBtn.style.display = isScrolledToStart ? 'none' : 'block';
  //     scrollRightBtn.style.display = isScrolledToEnd ? 'none' : 'block';
  // };

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
  
  scrollLeftBtn.addEventListener('click', () => {
      smoothScroll(-50);
  });
  
  scrollRightBtn.addEventListener('click', () => {
      smoothScroll(50); 
  });
  
  // updateButtonsVisibility();

accordionHeaders.forEach(header => {
  header.addEventListener('click', function () {
    document.querySelectorAll('.accordion-header').forEach(header => header.classList.remove('active'));  
    document.querySelectorAll('.accordion-body').forEach(body => body.classList.remove('active'));
    const body = this.nextElementSibling;
    this.classList.add('active');
    body.classList.add('active');
  });
});

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