// const time zodat javascript weet welke id hij moet aanpassen.
const time = document.getElementById('time');
setInterval(() => {
    // msg is de tekst die je wilt laten zien.
    msg = "Het is nu: "+new Date().toLocaleTimeString();
    // Hier wordt de AM en PM weggehaald omdat dat in het voorbeeld er ook niet stond.
    msg = msg.replace(/(AM|PM)/, '');
    // Hier wordt de tijd in de php pagina gezet.
     time.textContent = msg;
    // Wacht 1000ms of 1 seconde.
     }, 1000);
