function media (n1, n2, n3) {
    try {

        soma = parseInt(n1) + parseInt(n2) + parseInt(n3);
        result = soma / 3;

        if(result < 3)
        {
            alert('Reprovado, média:');
            alert(result);
        }else if (result >= 3 && result < 6)
        {
            alert('Recuperação, média:');
            alert(result);
        }else {
            alert('Aprovado, média: ');
            alert(result);
        }
        
        
    } catch (error) {

        alert('Insira um valor válido!');
        alert(error);
    }


    
}
  