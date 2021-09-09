<?php   

  $homeurl = 'index.php';                               
  $homepage = "/";
  $currentpage = $_SERVER['REQUEST_URI'];

  $isHome = !($currentpage == $homepage or $currentpage == 'index.php');                             

?> 
<header class=" header bg-body ">
    <div class=" header-wrap container flex justify-between items-center  ">
      <!--   <img src="build/svg/menu.svg " class="w-[20.11px] h-[17.24px]" alt="Menu"> -->
        <div class="nav-toggle-wrap block   ">
          <button  id="nav-toggle" class="nav-toggle focus:outline-none border-none">  
              <span ></span> 
              <span ></span> 
              <span ></span> 
              <span ></span> 
              <span ></span> 
              <span ></span>  
          </button>
      </div>   
       <nav class="  flex  md:mr-auto pl-10 " >
            <ul class="menu">
              <li><a class="  <?php  if( !$isHome ){ echo 'active'; } ?>" href="/">¿DÓNDE COMPRO?</a></li>  
            </ul>
        </nav>
        <nav class="nav" id="nav">
            <ul class="menu">
              <?php  //if( $isHome ) { echo '<li><a href="/">HOME</a></li>'; } ?> 
             
              <li><a href="<?=theDomainUrl();?>/tu-piel">ESPECIALISTAS EN PIEL</a></li>
              <li><a href="#">BELLEZA</a></li>
              <li><a href="<?=theDomainUrl();?>/tu-ritual-de-belleza">ALIMENTACIÓN</a></li>
            </ul>
        </nav>

    </div>
  </header>