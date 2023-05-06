const getButton=document.getElementById("menuView");
const elementToHide=document.getElementById("vertiNav");
elementToHide.classList.toggle('hidden');

getButton.addEventListener("click",function showMenu(){
// console.log("I will show you the menu in two secs");
elementToHide.classList.toggle('hidden');
getButton.classList.toggle('hid');
// event.preventDefault();
const getPages=document.getElementById("Home");
getPages.style.display="block";
});

function hideNav(){
    elementToHide.classList.toggle('hidden');
    getButton.classList.toggle('hid');
}
function openPage(PageName){
    const getPages=document.getElementsByClassName("page");
    for(let i=0;i<getPages.length;i++){
        getPages[i].style.display="none";
    }

    document.getElementById(PageName).style.display="block";
    // elementToHide.classList.toggle("hidden");
    // hideNav();
}
document.getElementById("defaultpage").click();


const searchTex = document.getElementById("searchText");

searchTex.addEventListener("input", function searchThrough() {
  const pages = document.querySelectorAll(".pages");
  const searchTerm = searchTex.value.toLowerCase();
  

  for(let i=0;i<pages.length;i++){
    const pagesN=pages[i].textContent.toLowerCase();
    if(pagesN.includes(searchTerm)){
        pages[i].style.display="block";
    }
    else{
        pages[i].style.display="none";
    }
   
  }
});



