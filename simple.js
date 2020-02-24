 var i=0,j=0,k=0;

/*DashBoard Sidebar */


  function toggleSidebar()
  {
 if(!i) 
    {  
document.getElementById("navig").style.display="inline";
document.getElementById("dots").style.left="22%";
document.getElementById("dots").style.transition= "all 400ms linear";
document.getElementById("navig").style.transition= "all 400ms linear";
  i=1; 
    }
else
       {
document.getElementById("navig").style.display="none";
document.getElementById("dots").style.left="5px";
   i=0;
       }
  }



/*Drop Buttons Menus............ */



function see1()
  {
    if(!j) {
   document.getElementById("l1").style.display="inline";
   j=1;
    }
    else{
     document.getElementById("l1").style.display="none";
      j=0;
        }

  }



function see2()
  {
    if(!k) {
   document.getElementById("l2").style.display="inline";
   k=1;
    }
    else{
     document.getElementById("l2").style.display="none";
      k=0;
        }

  }
