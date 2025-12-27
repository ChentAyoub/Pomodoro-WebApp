document.addEventListener('DOMContentLoaded', () => {
    const mode25Btn = document.getElementById('mode25');
    const mode50Btn = document.getElementById('mode50');
    const minutesDisplay = document.getElementById('minutes');
    const secondsDisplay = document.getElementById('seconds');
    const startBtn = document.querySelector('.timerbutton:nth-of-type(1)'); 
    const resetBtn = document.querySelector('.timerbutton:nth-of-type(2)');
    const timerStatus = document.getElementById('timerStatus');

    let countdown;
    let isPaused = true;
    function updateDisplay(mins, secs) {
        minutesDisplay.textContent = mins < 10 ? '0' + mins : mins;
        secondsDisplay.textContent = secs < 10 ? '0' + secs : secs;
    }

    function startTimer() {
        if (!isPaused) return;
        isPaused = false;
        timerStatus.textContent = "Focusing...";

        countdown = setInterval(() => {
            let mins = parseInt(minutesDisplay.textContent);
            let secs = parseInt(secondsDisplay.textContent);

            if (secs === 0) {
                if (mins === 0) {
                    clearInterval(countdown);
                    isPaused = true;
                    timerStatus.textContent = "Time's Up!";
                    return;
                }
                mins--;
                secs = 59;
            } else {
                secs--;
            }

            updateDisplay(mins, secs);
        }, 1000);
    }

    function resetTimer() {
        clearInterval(countdown);
        isPaused = true;
        timerStatus.textContent = "Ready";
        if (mode25Btn.classList.contains('active')) {
            updateDisplay(25, 0);
        } else {
            updateDisplay(50, 0);
        }
    }

    
    mode25Btn.addEventListener('click', () => {
        mode25Btn.classList.add('active');
        mode50Btn.classList.remove('active');
        resetTimer();
        updateDisplay(25, 0);
    });

    mode50Btn.addEventListener('click', () => {
        mode50Btn.classList.add('active');
        mode25Btn.classList.remove('active');
        resetTimer();
        updateDisplay(50, 0);
    });

    startBtn.addEventListener('click', startTimer);
    resetBtn.addEventListener('click', resetTimer);
});