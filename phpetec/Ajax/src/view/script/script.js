let urlSiteContoller = "http://localhost:3400/src/controller/APPcontroller.php";
const reqSiteController = new Request(urlSiteContoller);

function processarResposta(resp){
    resp.text().then(function(txt){
        console.log(document.getElementById("resposta").innerHTML = txt);
    });
}
console.log("Aguarde....");
fetch(reqSiteController).then(processarResposta);
console.log("Aguarde....");
fetch(reqSiteController).then(processarResposta);
console.log("Aguarde....");
fetch(reqSiteController).then(processarResposta);
console.log("Aguarde....");
fetch(reqSiteController).then(processarResposta);

console.log("Fim do JS");