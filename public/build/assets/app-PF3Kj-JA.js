import{T as r}from"./bootstrap.esm-D_59DZ1Y.js";const e={Success:0,Warning:1,Error:2};class a{constructor(t,s){this.toastEl=document.getElementById(t),this.messageEl=document.getElementById(s)}display(t,s){switch(this.reset(),this.messageEl.innerText=t,s){case e.Success:this.toastEl.classList.add("text-bg-success");break;case e.Warning:this.toastEl.classList.add("text-bg-warning");break;case e.Error:this.toastEl.classList.add("text-bg-danger");break}r.getOrCreateInstance(this.toastEl).show()}reset(){this.toastEl.classList.remove("text-bg-success","text-bg-warning","text-bg-danger"),this.messageEl.innerText=""}static get(){return new a("noticeToast","noticeMessage")}}export{a as C,e as N};