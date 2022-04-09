const { default: axios } = require('axios');

require('./bootstrap');

const messages_el = document.getElementById("messages");
const message_input = document.getElementById('message_input');
const message_form = document.getElementById('message_form');
console.log(message_input)
message_form.addEventListener('submit',function(e){
 e.preventDefault();
 let has_errors = false;
 if (message_input.value == ''){
     alert('please enter a message');
     has_errors = true;
 }
 if (has_errors){
     return;
 }
 
 const options = {
     method : 'post',
     url : '/sendmessage',
     data: {
         message : message_input.value
     }
 }


axios(options);


});
window.Echo.channel('chat')
    .listen('.message',(e)=>{
        message_el.innerHTML = '<div> <strong> '+ e.username +'</strong>'+e.message +'</div>' 
        console.log(e) 
    })


