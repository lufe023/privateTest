
    const formulario = document.querySelector("#calculadora")

    formulario.addEventListener("submit", calculadora)


const sumar =(num1, num2) =>{
        return num1 + num2;
    }

    const restar = (num1, num2) => {
        return num1 - num2;
    }

    const dividir= (num1, num2) => {
        return num1 / num2;
    }

    const multiplicar = (num1, num2) => {
        return num1 * num2;
    }

    function calculadora (e) {

        e.preventDefault(); 

        const valor1 = parseInt(document.querySelector("#numero1").value)
        const valor2 = parseInt(document.querySelector("#numero2").value)
        const operacion = document.querySelector("#operacion").value

        if(valor1 && valor2 && operacion)
        {
            if(operacion == 'sumar'){
                document.getElementById("resultado").innerHTML = sumar(valor1, valor2)
                }
            else if(operacion == 'restar') {
                document.getElementById("resultado").innerHTML =  restar(valor1, valor2)
                }
            else if(operacion == 'dividir') {
                document.getElementById("resultado").innerHTML = dividir(valor1, valor2)
                }
            else if(operacion == 'multiplicar') {
                document.getElementById("resultado").innerHTML = multiplicar(valor1, valor2)
                }       
                else{
                    document.getElementById("resultado").innerHTML = "Debe elegir una operacion valida"
                } 
        }else{
            document.getElementById("resultado").innerHTML = "Debe llenar todas las opciones"
        }
    }
