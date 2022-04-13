mode= document.getElementById("switch-dark");
mode.addEventListener("change",function(){
   main_body =  document.getElementById("main_body");
   if (main_body.className == "bg-slate-800"){
   main_body.className == "";
   }
   else{
      main_body.className="bg-slate-700";
   }
   
})