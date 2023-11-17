/**
 *Author: Israel C A Silva
 *git: https://github.com/israelsilva1310
 *HomePage: https://israelcasilva.com.br
 **/

function contadorNumerico(elemento, valorFinal, duracao) {
    let valorAtual = 0;
    const incremento = Math.ceil(valorFinal / duracao);
    let intervaloVelocidade = 10;
    if (valorFinal < 20) {
        intervaloVelocidade = 100;
    }
    if (valorFinal < 50) {
        intervaloVelocidade = 50;
    }
    const intervalo = setInterval(() => {
        valorAtual += incremento;
        elemento.innerHTML = valorAtual;
        if (valorAtual >= valorFinal) {
            clearInterval(intervalo);
            elemento.innerHTML = valorFinal;
        }
    }, intervaloVelocidade);
}

// Chamar a função de contador para cada elemento
const contadorCurriculos = document.getElementById('contadorCurriculos');
const contadorEmpresas = document.getElementById('contadorEmpresas');
const contadorVagas = document.getElementById('contadorVagas');
const contadorContratos = document.getElementById('contadorContratos');

contadorNumerico(contadorCurriculos, 183, 2000);
contadorNumerico(contadorEmpresas, 38, 2000);
contadorNumerico(contadorVagas, 16, 2000);
contadorNumerico(contadorContratos, 3, 2000);
