let bannCarousel = document.getElementById("banner-carousel")
let nextBtn = document.getElementById("next-btn")
let prevBtn = document.getElementById("prev-btn")
let bullContainer = document.getElementById("bullet-container")
let items = bannCarousel.childElementCount
let bullArr = []
let bullCounter = 0

bannCarousel.scrollLeft = 0

for (let i = 0; i < items; i++) {
    let bullet = document.createElement("div")
    bullet.classList.add("bullet")

    if (i == 0) {
        bullet.classList.add("active-bullet")
    }

    bullContainer.appendChild(bullet)
    bullArr.push(bullet)
}

function deactivateBullet(bullet) {
    bullet.classList.remove("active-bullet")
}

function activateBullet(bullet) {
    bullet.classList.add("active-bullet")
}

function setBanner(bullIdx) {
    let itemWidth = bannCarousel.firstElementChild.width

    if (bullIdx >= items) {
        deactivateBullet(bullArr[bullCounter])
        bannCarousel.scrollLeft = 0
        bullCounter = 0
        activateBullet(bullArr[bullCounter])
    } else if (bullIdx < 0) {
        deactivateBullet(bullArr[bullCounter])
        bannCarousel.scrollLeft = (items - 1) * itemWidth
        bullCounter = items - 1
        activateBullet(bullArr[bullCounter])
    } else {
        deactivateBullet(bullArr[bullCounter])
        bannCarousel.scrollLeft = bullIdx * itemWidth
        bullCounter = bullIdx
        activateBullet(bullArr[bullCounter])
    }
}

nextBtn.addEventListener("click", (e)=>setBanner(bullCounter+1))
prevBtn.addEventListener("click", (e)=>setBanner(bullCounter-1))

bullArr.forEach(bull => {
    bull.addEventListener("click", (e)=>setBanner(bullArr.indexOf(bull)))
});

setBanner(0)

// Function to start the timer
function startTimer() {
    timerId = setInterval(() => {
      setBanner(bullCounter + 1); // Change to next slide every 3 seconds
    }, 7000); // Time interval in milliseconds
  }
  
  // Function to stop the timer (optional)
  function stopTimer() {
    if (timerId !== null) {
      clearInterval(timerId);
      timerId = null;
    }
  }
  
  // Start the timer on page load
  startTimer();
  
  // You can also add logic to stop/restart the timer on hover or other events