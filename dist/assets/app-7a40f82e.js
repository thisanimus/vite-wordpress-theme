const e=o=>{document.querySelector(`[data-trigger-dialog=${o.id}]`).addEventListener("click",()=>{o.showModal()})},t=document.querySelectorAll("dialog.dialog");t.forEach(o=>{e(o)});
