$(document).ready(function(){var t=$("#home-intro cufon").filter(function(t){return 0==$(this).position().left});if(t.each(function(t){var i=$(this).find("cufontext").html().charAt(0);"A"==i||"V"==i||"W"==i||"X"==i||"Y"==i?$(this).css("margin-left","-3px"):("T"==i||"v"==i||"w"==i)&&$(this).css("margin-left","-2px")}),$.browser.msie&&$.browser.version<7){var i=!0;$(".text-box").css({width:150,height:0}),$(".grid-box").css({width:150,height:480})}jQuery.easing.def="easeOutCubic";var d=800,a=d/2,r=300,s=470,e=235;$("<div id='mask'></div>").prependTo("#home-grid").css({position:"absolute",left:0,top:0,width:r,height:s,background:"#fff",opacity:0,"z-index":1e3}),$("#home-grid").mouseenter(function(){$("#mask").stop(!0).animate({opacity:.65},d-10)}).mouseleave(function(){$("#mask").stop(!0).animate({opacity:0},d-10)}),$(".grid-link:lt(4)").each(function(t,g){var o,n,h,c,f,m,p,x,l,u,v,E,S,b,w,T,L,R,B,z=$("#grid-"+t),k=$("#grid-"+t+" img"),y=$("#text-"+t);w=4>t?0:12>t?1:2,T=(t+1)%1,z.hasClass("portrait")?(L="portrait",R=2,B=3):(L="landscape",R=3,B=2),"portrait"==L?(h=0,c=0,f=2*e,m=3*e,S=0,b=2*e,l=0,u=3*e,2==T||T>=4?(o=(T-R+1)*e,n=r-(T+1)*e):(o=T*e,n=r-(T+R)*e),T>=3?(v=o-3*e,E=r-o):(v=r-n,E=n-3*e),2==T||T>=4?(p=v,x=E+3*e):(p=v+3*e,x=E,y.find("div").css({left:"auto",right:"24px"}))):(f=3*e,m=2*e,w>0?(h=(w-B+1)*e,c=s-(w+1)*e):(h=w*e,c=s-(w+B)*e),2==w?(S=h-e,b=s-h):(S=s-c,b=c-e),w>0?(l=S,u=b+e):(l=S+e,u=b,y.find("div").css({top:"auto",bottom:"0px"})),5==T?(o=(T-R+1)*e,n=r-(T+1)*e,y.find("div").css({left:"auto",right:"24px"})):0==T?(o=T*e,n=r-(T+R)*e):(o=T*e-e,n=r-(T+2)*e,y.find("div").css({left:"40%","margin-left":"-150px"})),v=o,E=n,p=T*e,x=r-p-e),y.css({left:p,right:x,top:l,bottom:u}),$(g).data("grid",{grid:z,img:k,imgL:k.css("left"),imgT:k.css("top"),orientation:L,gridRow:w,gridCol:T,gridStartL:z.css("left"),gridStartR:z.css("right"),gridStartT:z.css("top"),gridStartB:z.css("bottom"),gridEndL:o,gridEndR:n,gridEndT:h,gridEndB:c,gridW:f,gridH:m,text:y,textEndL:v,textEndR:E,textEndT:S,textEndB:b,textStartL:p,textStartR:x,textStartT:l,textStartB:u}).hover(function(){var t={left:$(this).data("grid").gridEndL,right:$(this).data("grid").gridEndR,top:$(this).data("grid").gridEndT,bottom:$(this).data("grid").gridEndB},a={left:$(this).data("grid").textEndL,right:$(this).data("grid").textEndR,top:$(this).data("grid").textEndT,bottom:$(this).data("grid").textEndB};i&&(t.width=f,t.height=m,a.width=3*e,a.height=e),$(this).data("grid").grid.stop(!0).css("z-index",1e3).animate(t,d),$(this).data("grid").img.stop(!0).animate({left:0,top:0},d),$(this).data("grid").text.stop(!0).css("z-index",1e3).show().animate(a,d)},function(){var t={left:$(this).data("grid").gridStartL,right:$(this).data("grid").gridStartR,top:$(this).data("grid").gridStartT,bottom:$(this).data("grid").gridStartB},d={left:$(this).data("grid").textStartL,right:$(this).data("grid").textStartR,top:$(this).data("grid").textStartT,bottom:$(this).data("grid").textStartB};i&&(t.width=e,t.height=e,d.width=e,d.height=0),$(this).data("grid").grid.stop(!0).css("z-index",1e3).animate(t,a,function(){$(this).css("z-index",100)}),$(this).data("grid").img.stop(!0).animate({left:$(this).data("grid").imgL,top:$(this).data("grid").imgT},a),$(this).data("grid").text.stop(!0).css("z-index",1e3).animate(d,a,function(){$(this).hide()})})})});