window.addEventListener("load", ()=>{
    const input= document.getElementById("upload");
    const filewrapper = document.getElementById("filewrapper");

    input.addEventListener("change", (e)=>{
        let fileName= e.target.files[0].name;
        let filetype= e.target.value.split(".").pop();
        console.log(filetype);
        fileshow(fileName, filetype);
    })

    const fileshow=(fileName, filetype)=>{
        const showfileboxElem= document.createElement("div");
        showfileboxElem.classList.add("showfilebox");
        const leftElem = document.createElement("div");
        leftElem.classList.add("left");
        const filetypeElem = document.createElement("span");
        filetypeElem.classList.add("filetype");
        filetypeElem.innerHTML=filetype; /*rajoute la ligne de l'extention du fichier */
        leftElem.append(filetypeElem);
        const filetitleElem = document.createElement("h3");
        filetitleElem.innerHTML=fileName;
        leftElem.append(filetitleElem);
        showfileboxElem.append(leftElem);
        const rightElem = document.createElement("div");
        rightElem.classList.add("right");
        showfileboxElem.append(rightElem);
        const crossElem =document.createElement("span");
        crossElem.innerHTML="&#215;";//croix blanche
        rightElem.append(crossElem);
        filewrapper.append(showfileboxElem);

        crossElem.addEventListener("click", ()=>{
            filewrapper.removeChild(showfileboxElem);
        })
    }
})
/*Barre de recherche */
const icon = document.querySelector(".icon");
const search = document.querySelector(".search")
icon.onclick = function(){
    search.classList.toggle('active');
}
