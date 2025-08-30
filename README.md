# php-gtk3-mvc


# notas

- `app.php` is the run file. run with `php app.php`
- `mainWindow.php` is the main default window, but can be changed in `app.php`
- no arquivo `glade`, o ID do Window precisa ter o mesmo nome do arquivo, por exemplo `mainWindow`
- para usar os connects do glade/builder, os metodos precisam ser statics, e isso faz perder a instancia da janela. então li manualmente o XML e fiz os connects. usar somente o nome do metodo, que ja vai estar na classe da Window, por exemplo, só usar `mainWindow_onQuit` como signal, o `$this` é posto sozinho

