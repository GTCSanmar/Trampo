function showEmailPopup() {
    document.getElementById("emailPopup").style.display = "block";
}

function sendEmail() {
    // Lógica para enviar o e-mail
    document.getElementById("emailPopup").style.display = "none";
    document.getElementById("emailSentPopup").style.display = "block";
}