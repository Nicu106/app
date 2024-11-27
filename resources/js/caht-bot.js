// document.addEventListener('DOMContentLoaded', () => {
//     const userInput = document.getElementById('userInput');
//     const sendButton = document.getElementById('sendButton');
//     const chatBox = document.getElementById('chatBox');
//
//     // Function to send the message
//     function sendMessage() {
//         const message = userInput.value.trim();
//
//         if (message === '') return; // Nu trimite mesaje goale
//
//         // Adaugă mesajul utilizatorului în chat
//         const userMessage = document.createElement('div');
//         userMessage.classList.add('message', 'user-message');
//         userMessage.innerText = message;
//         chatBox.appendChild(userMessage);
//
//         // Șterge textul din input
//         userInput.value = '';
//
//         // Trimite mesajul la server
//         fetch('/chat-bot', {
//             method: 'POST',
//             headers: {
//                 'Content-Type': 'application/json',
//                 'X-CSRF-TOKEN': document.querySelector('meta[name="csrf-token"]').getAttribute('content')
//             },
//             body: JSON.stringify({ message })
//         })
//             .then(response => response.json())
//             .then(data => {
//                 if (data.reply) {
//                     const botMessage = document.createElement('div');
//                     botMessage.classList.add('message', 'bot-message');
//                     botMessage.innerText = data.reply;
//                     chatBox.appendChild(botMessage);
//
//                     // Scroll la finalul chatului
//                     chatBox.scrollTop = chatBox.scrollHeight;
//                 } else if (data.error) {
//                     alert(data.error);
//                 }
//             })
//             .catch(error => {
//                 console.error('Eroare:', error);
//             });
//     }
//
//     // Event listener pentru click pe buton
//     sendButton.addEventListener('click', sendMessage);
//
//     // Event listener pentru apăsarea tastei Enter
//     userInput.addEventListener('keypress', (event) => {
//         if (event.key === 'Enter') {
//             event.preventDefault(); // Previne comportamentul implicit
//             sendMessage();
//         }
//     });
// });
