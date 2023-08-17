
  const menuItem = document.querySelectorAll('.menuItem'),
        dataItems = document.querySelectorAll('.dataItem');

        console.log('jeelo');

for(let m = 0; m<menuItem.length; m++){
  menuItem[m].addEventListener('click', function(){
    for(let a = 0; a<menuItem.length; a++){
      menuItem[a].classList.remove('activeList')
    }
    this.classList.add('activeList')

    let dataFilter = this.getAttribute('data-filter')
    for(let y = 0; y<dataItems.length; y++){
      dataItems[y].classList.add('hide')
      dataItems[y].classList.remove('live')

      if(dataItems[y].getAttribute('data-item') == dataFilter){
          dataItems[y].classList.remove('hide')
          dataItems[y].classList.add('live')
      }
    }
  })
}        


const dotsIcons = document.querySelector('.dotsIcon');
      updateStatus = document.querySelector('.updateStatus');

      dotsIcons.onclick = function(){
        updateStatus.classList.toggle('active')
      }

// for(let m = 0; m<dotsIcons.length; m++){
//   dotsIcons[m].addEventListener('click', function(){

//     updateStatus.classList.toggle('active')
//     // for(let u = 0; u<updateStatus.length; u++){
//     //     updateStatus[u].classList.toggle('active')
//     // }
//   })
// }

