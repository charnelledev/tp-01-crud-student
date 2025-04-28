<body class="bg-green-100">
<div class="container mx-auto p-4 text-center">
<h1 class="text-3xl font-bold text-green-900 mb-4">Créer un nouveau
Étudiant</h1>
<?= $message ?>
<form action="" method="post" enctype="multipart/form-data" class="bg-white
p-6 rounded shadow max-w-md mx-auto">
<!-- Nom -->
<div class="mb-4">
<label for="nom" class="block text-gray-700">Nom :</label>
<input type="text" id="nom" name="nom" placeholder="Nom" required
class="w-full border border-green-300 p-2 rounded focus:outline-none
focus:border-green-500">
</div>
<!-- Prénom -->
<div class="mb-4">
<label for="prenom" class="block text-gray-700">Prénom :</label>
<input type="text" id="prenom" name="prenom" placeholder="Prénom"
required
class="w-full border border-green-300 p-2 rounded focus:outline-none
focus:border-green-500">

</div>
<!-- Email -->
<div class="mb-4">
<label for="mail" class="block text-gray-700">Email :</label>
<input type="email" id="mail" name="mail" placeholder="Email" required
class="w-full border border-green-300 p-2 rounded focus:outline-none
focus:border-green-500">
</div>
<!-- Adresse -->
<div class="mb-4">
<label for="adresse" class="block text-gray-700">Adresse :</label>
<input type="text" id="adresse" name="adresse" placeholder="Adresse"
class="w-full border border-green-300 p-2 rounded focus:outline-none
focus:border-green-500">
</div>
<!-- Téléphone -->
<div class="mb-4">
<label for="telephone" class="block text-gray-700">Téléphone :</label>
<input type="tel" id="telephone" name="telephone" placeholder="Téléphone"
required
class="w-full border border-green-300 p-2 rounded focus:outline-none
focus:border-green-500">
</div>
<!-- Date de naissance -->
<div class="mb-4">

<label for="date_naissance" class="block text-gray-700">Date de naissance
:</label>
<input type="date" id="date_naissance" name="date_naissance" required
class="w-full border border-green-300 p-2 rounded focus:outline-none
focus:border-green-500">
</div>
<!-- Genre -->
<div class="mb-4">
<label class="block text-gray-700">Genre :</label>
<label class="inline-flex items-center">
<input type="radio" name="genre" value="masculin" class="mr-2">
Masculin
</label>
<label class="inline-flex items-center ml-4">
<input type="radio" name="genre" value="feminin" class="mr-2"> Féminin
</label>
</div>
<!-- Langues parlées -->
<div class="mb-4">
<label class="block text-gray-700">Langues parlées :</label>
<label class="inline-flex items-center">
<input type="checkbox" name="langues[]" value="francais" class="mr-2">
Français
</label>
<label class="inline-flex items-center ml-4">
<input type="checkbox" name="langues[]" value="anglais" class="mr-2">
Anglais
</label>

<label class="inline-flex items-center ml-4">
<input type="checkbox" name="langues[]" value="espagnol" class="mr-2">
Espagnol
</label>
</div>
<!-- Niveau d'étude -->
<div class="mb-4">
<label for="niveau_etude" class="block text-gray-700">Niveau d'étude
:</label>
<select id="niveau_etude" name="niveau_etude" required
class="w-full border border-green-300 p-2 rounded focus:outline-none
focus:border-green-500">
<option value="">Sélectionnez votre niveau d'étude</option>
<option value="lycee">Lycée</option>
<option value="universite">Université</option>
<option value="master">Master</option>
<option value="doctorat">Doctorat</option>
</select>
</div>
<!-- Intérêts -->
<div class="mb-4">
<label for="interets" class="block text-gray-700">Vos intérêts :</label>
<textarea id="interets" name="interets" placeholder="Vos intérêts"
rows="3"
class="w-full border border-green-300 p-2 rounded focus:outline-none
focus:border-green-500"></textarea>
</div>

<!-- Upload Photo -->
<div class="mb-4">
<label for="photo" class="block text-gray-700">Photo :</label>
<input type="file" id="photo" name="photo" accept="image/*"
class="w-full border border-green-300 p-2 rounded focus:outline-none
focus:border-green-500">
</div>
<!-- Upload Document -->
<div class="mb-4">
<label for="document" class="block text-gray-700">Document :</label>
<input type="file" id="document" name="document" accept=".pdf,.doc,.docx"
class="w-full border border-green-300 p-2 rounded focus:outline-none
focus:border-green-500">
</div>
<!-- Bouton de soumission -->
<div class="text-center">
<input type="submit" name="create" value="Créer"
class="inline-block px-4 py-2 bg-green-600 text-white rounded hover:bggreen-700 cursor-pointer">
</div>
</form>
<div class="mt-4 text-center">
<a class=" my-5 px-4 py-2 mr-5 bg-green-600 text-white rounded hover:bggreen-700"
href="http://localhost/cours-cfpc-php-2025/tp-crud-student_2/index.php">Liste
des étudiants 2
</a>

</div>
</div>
</body>
</html>