const menuIcon = document.getElementById("menu-icon");
const slideoutMenu = document.getElementById("slideout-menu");
const searchIcon = document.getElementById("search-icon");
const searchBox = document.getElementById("searchbox");
const searchBtn = document.getElementById("search-btn");
const searchBar = document.getElementById("searchbar");
const searchForm = document.getElementById("search-form");

    searchIcon.addEventListener('click', function(){
        if(searchBox.style.top == '72px'){
            searchBox.style.top = '24px';
            searchBox.style.pointerEvents = 'none';
        }else{
            searchBox.style.top = '72px';
            searchBox.style.pointerEvents = 'auto';
        }
    });
    
    menuIcon.addEventListener('click', function(){
        if(slideoutMenu.style.opacity == "1"){
            slideoutMenu.style.opacity = '0';
            slideoutMenu.style.pointerEvents = 'none';
        }else{
            slideoutMenu.style.opacity = '1';
            slideoutMenu.style.pointerEvents = 'auto';
        }
    });
   
    searchBtn.addEventListener('click',function(event){
        event.preventDefault();
        searchQuery = searchBar.value;
        if(searchQuery){
            searchForm.submit();
        }
    });
    
