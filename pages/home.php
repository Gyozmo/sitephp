<h1>
	Dans le home</h1>
<p>1. **Forkez** ce *repo* puis **clônez le** sur votre macine
</p>
<p>2. Créez le contenu des pages `header.php`, `footer.php`, `menu.php` et `home.php` - `header.php` doit lier le fichier `style.css`
	et inclure le fichier `menu.php` qui contient le menu du site - `footer.php` doit lier le fichier `app.js`</p>
<p>3. Dans `lib/functions.php` complétez la fonction `getContent` pour pouvoir afficher les pages `pages/bio.php` et `pages/contact.php`
</p>
<p>4. créez une fonction getUserData récupérez le contenu du fichier `data/user.json` grâce à la fonction standard 'file_get_contents'
	et transformez le json en un tableau PHP avec la fonction standard `json_decode` puis affichez ces informations
</p>
<p>5. créez un formulaire de contact dans `pages/contact.php`, ce formulaire doit pointer vers le fichier `save.php` du dossier
	`public`, qui permet de récupérer les données et de les enregistrer dans le fichier `data/last_message.json` graĉe aux fonctions
	standard `json_encode` et file_put_contents`
</p>
<p>6. affichez le dernier message dans la page `public/admin.php`</p>

