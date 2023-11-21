function soma(n1, n2) {
    try {

        // if (!is_numeric(n1) && !is_numeric(n2)) {

        soma = parseInt(n1) + parseInt(n2);
        alert('Soma:');
        alert(soma);

        // }
        // else {
        //     alert('Insira um número!!');
        // }






    } catch (error) {

        alert(error);
    }

}