function RecebeDados($nome, $email, $telefone, $mensagem){
$dados = array($nome, $email, $telefone, $mensagem);

if ($_SERVER["REQUEST_METHOD"] == "GET") {
// retrieve form data
$name = htmlspecialchars($_GET["form_name"]);
$email = htmlspecialchars($_GET["form_email"]);
$phone = htmlspecialchars($_GET["form_phone"]);
$message = htmlspecialchars($_GET["form_text"]);

// validate form data (e.g. check if fields are not empty, if email is valid, etc.)

// if form data is valid, send email or store in database
echo "Enviado" . RecebeDados($nome, $email, $telefone, $mensagem);

exit;

return $dados;
}
}