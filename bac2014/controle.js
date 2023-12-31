function valider(){
    ma=document.getElementById("ma").value;
    nom=document.getElementById("nom").value;
    prenom=document.getElementById("prenom").value;
    if(!num(ma)){
        alert ("le matricule est composée de 4 chiffres");
    }
    if(!alph(nom)){
        alph ("le nom ne contiennent que des lettres");
    }
    if(!alph(prenom)){
        alph ("le prenom ne contiennent que des lettres");
    }


}
function num(ch){
    if(ch.length!=4){
        test=false;
    }else{
        for(let i=0;i<ch.length;i++)
        {
            if (ch[i]<"1"||ch[i]>"9")
            {
                return false;
            }
        } return true;     
    }
}
function alph(ch){
    ch=ch.toUpperCase();
    for (let i=0;i<ch.length;i++){
        if (ch[i]<"A"||ch[i]>"Z" &ch[i]!=""){
            return false;
        }
    }return true;
}
function confirmer(){
    mat=document.getElementById("mat").value;
    de=document.getElementById("de").value;
    pr=document.getElementById("pr").value;
    if(!num(mat)){
        alert ("le matricule est composée de 4 chiffres")
    }
    if (de==0){
        alert ("le détail de la consultation doit etre non vide ")
    }
    if (pr>=0){
        alert ("doit être un entier supérieur ou égal à zéro")
    }
    

    
}
