//Numero 1; troca caractere numa string
function troca(){
    var myStr = document.getElementById("texto").value;
    var newStr = 
    myStr.replace(/a/g, "@").replace(/B/g, "8").replace(/e/g,"E").replace(/i/g,"1")
    .replace(/o/g,"0").replace(/t/g,"7"); // troca a por @

    // Mostra a tal string
    document.getElementById("p").innerHTML = newStr;
}

//Numero 2 da Ficha media ponderada e valores entre 0 e 20

function getNotas(){
    let nota1= document.getElementById("nota1").value;
    let nota2= document.getElementById("nota2").value;
    let nota3= document.getElementById("nota3").value;
      
    //isNan - is not a number - retorna booleano
    if ((isNaN(nota1) || nota1 <0 || nota1 >20) || (isNaN(nota2) || nota2 <0 || nota2 >20) || (isNaN(nota3) || nota3 <0 || nota3 >20) ) {
        document.getElementById("nota").innerHTML="Algum valor invalido"
    } else {
        media(nota1,nota2,nota3);
    }    
}

function media(nota1,nota2,nota3){
    var media= nota1*0.30+nota2*0.30+nota3*0.40;
    document.getElementById("nota").innerHTML="Media: "+media;
}

//Numero 3 

function insert(num){
    document.form.textview.value = document.form.textview.value + num;
}
function equal(){
    exp = document.form.textview.value;
    if(exp){
       document.form.textview.value = eval(exp);
}
}
function c(){
    document.form.textview.value = "";
}
function back(){
    var exp = document.form.textview.value;
    document.form.textview.value = exp.substring(0, exp.length-1);
}

//Numero 4

var notas = [];


function mediaArit(){
    var quant = document.getElementById("quant").value;
    var alunoNota = document.getElementById('alunoNota').value; 
    
    notas.push(alunoNota);     
    document.getElementById("not").innerHTML="Foram Reg. : "+notas.length; 
    document.getElementById("nota").innerHTML="Media: "+mediaA()/notas.length; 
}

function mediaA() {
    let soma = 0
    for(let i in notas) {
        soma += parseFloat(notas[i]);
    }
    return soma
}