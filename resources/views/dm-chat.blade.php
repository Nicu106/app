@extends('layout.base')

@section('content')
<style>
        body {
            background-color: #f4f4f9;
        }

        .chat-container {
            max-width: 600px;
            margin: 50px auto;
            background: #ffffff;
            border-radius: 10px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
            padding: 20px;
        }

        .chat-box {
            height: 400px;
            overflow-y: auto;
            border: 1px solid #ddd;
            padding: 15px;
            margin-bottom: 15px;
            border-radius: 5px;
        }

        .message {
            margin-bottom: 10px;
        }

        .message.user {
            text-align: right;
        }

        .message.bot {
            text-align: left;
        }

        .message p {
            display: inline-block;
            padding: 10px 15px;
            border-radius: 15px;
        }

        .message.user p {
            background-color: #007bff;
            color: white;
        }

        .message.bot p {
            background-color: #f1f1f1;
        }

        .input-group {
            border-radius: 5px;
            overflow: hidden;
        }
    </style>
<div class="chat-container">
    <h3 class="text-center">Hay, cum te ajut de data asta ?</h3>
    <div class="chat-box" id="chat-box">
        <!-- Mesajele vor fi adăugate aici -->
    </div>
    <div class="input-group">
        <input type="text" id="user-input" class="form-control" placeholder="Scrie un mesaj...">
        <button id="send-btn" class="btn btn-primary">Trimite</button>
    </div>
</div>

<script>
    const chatBox = document.getElementById('chat-box');
    const userInput = document.getElementById('user-input');
    const sendBtn = document.getElementById('send-btn');

    // Funție pentru a adăuga mesaje în chat
    function addMessage(sender, text) {
        const messageDiv = document.createElement('div');
        messageDiv.classList.add('message', sender);

        const messageText = document.createElement('p');
        messageText.textContent = text;

        messageDiv.appendChild(messageText);
        chatBox.appendChild(messageDiv);

        chatBox.scrollTop = chatBox.scrollHeight; // Derulează automat în jos
    }

    // Funție pentru a trimite mesaje către API
    async function sendMessage() {
        const message = userInput.value.trim();
        if (!message) return;

        // Afișează mesajul utilizatorului
        addMessage('user', message);
        userInput.value = '';

        // Construim URL-ul cu promptul
        const baseUrl = 'https://hercai.onrender.com/turbo/hercai';
        const param = "";
        const fullUrl = `${baseUrl}/?question=${encodeURIComponent(message + param)}`;

        // Trimite cererea către API
        try {
            const response = await fetch(fullUrl, {
                method: 'GET',
                headers: { 'Content-Type': 'application/json' }
            });

            if (response.ok) {
                const data = await response.json();
                const botReply = data.reply || 'Nu am reușit să înțeleg. Încearcă din nou!';
                addMessage('bot', botReply);
            } else {
                addMessage('bot', 'Eroare: Nu pot răspunde acum.');
            }
        } catch (error) {
            addMessage('bot', 'Eroare de rețea. Te rog să verifici conexiunea.');
        }
    }

    // Evenimente pentru buton și Enter
    sendBtn.addEventListener('click', sendMessage);
    userInput.addEventListener('keypress', (e) => {
        if (e.key === 'Enter') sendMessage();
    });
</script>

@endsection
