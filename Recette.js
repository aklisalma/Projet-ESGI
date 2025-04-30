function startTimer(duration) {
    let timer = duration, minutes, seconds;
    const display = document.getElementById('time');
    const interval = setInterval(() => {
      minutes = String(Math.floor(timer / 60)).padStart(2, '0');
      seconds = String(timer % 60).padStart(2, '0');
      display.textContent = `${minutes}:${seconds}`;
      if (--timer < 0) {
        clearInterval(interval);
        alert("Temps écoulé !");
      }
    }, 1000);
  }
  
  document.addEventListener("DOMContentLoaded", () => {
    const btn = document.querySelector("button[onclick]");
    if (btn) {
      btn.addEventListener("click", () => startTimer(300));
    }
  });
  