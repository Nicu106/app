@extends('layout.base')

@section('content')
    <div class="container my-4">
        <h3 class="mb-4">Chat Bot</h3>
        <div class="chat-box border rounded p-3" id="chatBox" style="height: 400px; overflow-y: auto; background-color: #f8f9fa;">
            <!-- Mesajele vor apărea aici -->
        </div>
        <div class="input-group mt-3">
            <input type="text" id="userInput" class="form-control" placeholder="Scrie un mesaj..." aria-label="Scrie un mesaj">
            <button id="sendButton" class="btn btn-primary" type="button">Trimite</button>
        </div>
    </div>

    <style>
        .chat-box {
            max-height: 500px;
            overflow-y: auto;
            padding: 10px;
            border: 1px solid #ced4da;
            border-radius: 5px;
            background-color: #ffffff;
        }

        .message {
            margin-bottom: 10px;
            display: flex;
        }

        .user-message {
            justify-content: flex-end;
        }

        .user-message .bubble {
            background-color: #007bff;
            color: white;
            border-radius: 15px 15px 0 15px;
            padding: 10px;
            max-width: 70%;
            word-wrap: break-word;
            text-align: left;
        }

        .bot-message {
            justify-content: flex-start;
        }

        .bot-message .bubble {
            background-color: #f1f1f1;
            color: #333;
            border-radius: 15px 15px 15px 0;
            padding: 10px;
            max-width: 70%;
            word-wrap: break-word;
            text-align: left;
        }
    </style>

    <script>
        document.getElementById('sendButton').addEventListener('click', sendMessage);

        function sendMessage() {
            const userInput = document.getElementById('userInput').value.trim();

            if (userInput === '') {
                alert("Te rog să introduci un mesaj!");
                return;
            }

            // Adaugă mesajul utilizatorului în chat
            displayMessage(userInput, 'user');

            // Trimite mesajul la backend
            fetch('/chat-bot', {
                method: 'POST',
                headers: {
                    'Content-Type': 'application/json',
                    'X-CSRF-TOKEN': '{{ csrf_token() }}'
                },
                body: JSON.stringify({ message: userInput })
            })
                .then(response => response.json())
                .then(data => {
                    if (data.reply) {
                        // Afișează răspunsul botului
                        displayMessage(data.reply, 'bot');
                    } else if (data.error) {
                        // Afișează eroarea
                        displayMessage(data.error, 'bot');
                    }
                })
                .catch(error => {
                    console.error("Eroare:", error);
                    displayMessage("Eroare de rețea. Te rog să verifici conexiunea.", 'bot');
                });

            // Șterge câmpul de input
            document.getElementById('userInput').value = '';
        }
        document.addEventListener("keydown", function(event) {
            if (event.key === "Enter") {
                sendMessage();
            }
        });
        function displayMessage(message, sender) {
            const chatBox = document.getElementById('chatBox');
            const messageElement = document.createElement('div');
            messageElement.classList.add('message', sender === 'user' ? 'user-message' : 'bot-message');

            const bubble = document.createElement('div');
            bubble.classList.add('bubble');
            bubble.textContent = message;

            messageElement.appendChild(bubble);
            chatBox.appendChild(messageElement);
            chatBox.scrollTop = chatBox.scrollHeight; // Scroll automat la ultimul mesaj
        }
    </script>
@endsection
