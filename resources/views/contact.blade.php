<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Listagem de contatos</h1>
    @foreach ( $contacts as $contact )
    <div>
        
        <p>{{ $contact->email }}</p>
        <p>{{ $contact->telefone }}</p>
        <p>{{ $contact->data_nascimento }}</p>
    </div>
    @endforeach
    <h2>Salvar contato</h2>
    <form action="{{ route('contact.salvar') }}" method="POST">
        @csrf
        <input type="text" name="name" placeholder="Nome" required>
        <input type="email" name="email" placeholder="Email" required>
        <input type="text" name="phone" placeholder="Telefone" required>
        <input type="date" name="data_nascimento" placeholder="Data de Nascimento" required>
        <button type="submit">Salvar</button>
    </form>
</body>
</html>