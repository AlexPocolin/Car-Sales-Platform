const navBar = document.getElementById('navBar')
const toggleIcon = document.getElementById('toggleBtn')
const nav = document.querySelectorAll('.navLink')
const closeNavbar = document.getElementById('closeNavbar')

toggleIcon.addEventListener('click', ()=>{
    navBar.classList.add('show')
})
closeNavbar.addEventListener('click', ()=>{
    navBar.classList.remove('show')
})
nav.forEach(nav =>{
    nav.addEventListener('click', function(){
        navBar.classList.remove('show')
    })
})


const singleFilters = document.querySelectorAll('.singleFilter')
const carWrappper = document.querySelectorAll('.singleCompany')

for(let i=0; i<singleFilters.length; i++){
    singleFilters[i].addEventListener('click', function(){
        for(let a=0; a<singleFilters.length; a++){
            singleFilters[a].classList.remove('active')
        }
        this.classList.add('active')

        let itemFilter = this.getAttribute('data-filter')
        for(let f=0; f<carWrappper.length; f++){
         carWrappper[f].classList.add('hide')
         carWrappper[f].classList.remove('live')
         if(carWrappper[f].getAttribute('data-target') == itemFilter){
             carWrappper[f].classList.remove('hide')
             carWrappper[f].classList.add('live')
         }
        }
    })
}


