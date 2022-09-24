function copyToClipBoard() {

    var content = document.getElementById('btn-copy');
    
    content.select();
    Document.execCommand('copy')

    alert("IP copiado en el portapapeles!");
}