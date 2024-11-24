<!DOCTYPE html>  
<html lang="en">  
<head>  
    <meta charset="UTF-8">  
    <meta name="viewport" content="width=device-width, initial-scale=1.0">  
    <title>Contact Us</title>  
    <link rel="stylesheet" href="{{ asset('css/app.css') }}"> 
</head>  
<body>  
    <div class="container">  
        <h1>Contact Us</h1>  

        @if (session('success'))
        <div class="alert alert-success">
            {{ session('success') }}
        </div>
    @endif


        <p>Jika Anda memiliki pertanyaan, silakan isi formulir di bawah ini melalui informasi kontak yang disediakan.</p>  
        
        <form action="{{ route('contact.send') }}" method="post">
            @csrf
            <div>
                <label for="name">Name:</label>
                <input type="text" id="name" name="name" required>
            </div>
            <div>
                <label for="email">Email:</label>
                <input type="email" id="email" name="email" required>
            </div>
            <div>
                <label for="message">Message:</label>
                <textarea id="message" name="message" required></textarea>
            </div>
            <button type="submit">Send Message</button>
        </form>    
    </div>  
</body>  
</html>