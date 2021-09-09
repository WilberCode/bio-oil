let  menuMobile = ()=>{
    // Shorthand 
    const Id = document.getElementById.bind(document)   
    let mobileNav = Id('nav')   
    let navToggle = Id('nav-toggle')   
    navToggle.addEventListener('click', () => {
        navToggle.classList.toggle('nav-toggle-active')
        mobileNav.classList.toggle('nav-active') 
    }) 
 /*    $('#mobile-menu li').on('click',()=>{ 
        navToggle.classList.toggle('nav-toggle-active')
        mobileNav.classList.toggle('nav-active')  
    }) */
}

export default menuMobile
 