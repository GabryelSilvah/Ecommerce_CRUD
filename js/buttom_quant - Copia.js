let btn_l = document.getElementById('btn_l')
let btn_d = document.getElementById('btn_d')

contador = 1

function aumentar() {
    contador++
    document.getElementById('par_quant').innerHTML = contador
}


function diminuir() {
    if (contador > 1) {
        contador--
        document.getElementById('par_quant').innerHTML = contador
    }

}

let btn_l2 = document.querySelector('.btn_l_mini')
let btn_d2 = document.querySelector('.btn_d_mini')

contador2 = 2
document.querySelector('#img1').setAttribute("class", "selecionado")
function direita() {

    if (contador2 == 2) {
        document.querySelector('#img1').removeAttribute("class", "selecionado")
        document.querySelector('#img2').setAttribute("class", "selecionado")
        document.querySelector('#img_principal')
        contador2 = 3
    }
    else if (contador2 == 3) {
        document.querySelector('#img2').removeAttribute("class", "selecionado")
        document.querySelector('#img3').setAttribute("class", "selecionado")
        document.querySelector('#img_principal').setAttribute("src", "imagem/Captura de Tela (192).png")
        contador2 = 3
    }

}

function esquerda() {
    if (contador2 == 3) {
        document.querySelector('#img3').removeAttribute("class", "selecionado")
        document.querySelector('#img2').setAttribute("class", "selecionado")
        document.querySelector('#img_principal').setAttribute("src", "imagem/Captura de Tela (192).png")
        contador2 = 2
    }

    else if (contador2 == 2) {
        document.querySelector('#img2').removeAttribute("class", "selecionado")
        document.querySelector('#img1').setAttribute("class", "selecionado")
        document.querySelector('#img_principal').setAttribute("src", "imagem/Captura de Tela (192).png")
    }


}
