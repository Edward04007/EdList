const MSGhora=document.querySelector(".hora"),data=new Date,hora=data.getHours();MSGhora.innerHTML=hora>=0&&hora<12?"Bom dia!":hora>=12&&hora<=18?"Boa tarde!":"Boa noite!";