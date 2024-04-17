require 'sinatra'
require 'sendgrid-ruby'

# Configuração do SendGrid
include SendGrid

client = SendGrid::Client.new(api_key: 'SEU_API_KEY')

# Rota GET para exibir o formulário
get '/' do
  erb :form
end

# Rota POST para lidar com os dados do formulário e enviar e-mail
post '/enviar' do
  nome = params[:nome]
  email = params[:email]
  mensagem = params[:mensagem]

  # Criação do e-mail
  mail = SendGrid::Mail.new do |m|
    m.from = SendGrid::Email.new(email: email)
    m.subject = 'Nova mensagem do formulário'
    m.personalizations = SendGrid::Personalization.new
    m.personalizations.add_to(SendGrid::Email.new(email: 'destinatario@example.com'))
    m.add_content(SendGrid::Content.new(type: 'text/plain', value: "Nome: #{nome}\nEmail: #{email}\nMensagem: #{mensagem}"))
  end

  # Envio do e-mail
  response = client.mail._('send').post(request_body: mail.to_json)

  # Verificação do status de resposta
  if response.status_code == 202
    redirect '/enviado'
  else
    "Erro ao enviar o e-mail: #{response.body}"
  end
end

# Rota para exibir uma página indicando que o e-mail foi enviado
get '/enviado' do
  erb :enviado
end

__END__

@@ form
<!DOCTYPE html>
<html>
<head>
  <title>Formulário de Contato</title>
</head>
<body>
  <h1>Formulário de Contato</h1>
  <form action="/enviar" method="post">
    <label for="nome">Nome:</label><br>
    <input type="text" id="nome" name="nome"><br>
    <label for="email">E-mail:</label><br>
    <input type="email" id="email" name="email"><br>
    <label for="mensagem">Mensagem:</label><br>
    <textarea id="mensagem" name="mensagem"></textarea><br>
    <input type="submit" value="Enviar">
  </form>
</body>
</html>

@@ enviado
<!DOCTYPE html>
<html>
<head>
  <title>E-mail Enviado</title>
</head>
<body>
  <h1>E-mail enviado com sucesso!</h1>
  <p>Obrigado por entrar em contato.</p>
</body>
</html>
