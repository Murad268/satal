const activateFilter = (triggersSelector, filtersSelector) => {
   const triggers = document.querySelectorAll(triggersSelector),
         filters = document.querySelectorAll(filtersSelector)
         triggers.forEach((trigger, i) => {
            trigger.addEventListener("click", () => {
            
               if(filters[i].classList.contains("first__link__active") ) {
                  filters[i].classList.remove("first__link__active");
               } else {
                  filters.forEach(filter => {
                     filter.classList.remove("first__link__active");
                  })
                  filters[i].classList.add("first__link__active");
               }  
            })
         })
}

activateFilter(".catalog__item", ".catalog__links")