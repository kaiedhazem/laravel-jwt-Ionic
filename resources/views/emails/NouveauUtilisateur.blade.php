@component('mail::message')
<b>Equipe NDI</b>

Bonjour, <br>
Vous venez d'etre integré a la liste de NDI. <br>
Votre accés a l'application : <br>
<p> Votre Email  est : {{ $data['login'] }}</p>
<p> Votre Mot de passe est : {{ $data['password'] }}</p>
Vous pouvez vous rendre sur l'application via : <br>
https://drive.google.com/drive/folders/1MB4PVFw9-wXGkGcxXiFBbE0l355D8ipF?usp=sharing <br>
pour toute question veuillez vous addresser a : <br>
ndi.visite.technque@gmail.com <br>


                                                Merci a vous

77610 LA HOUSSAYE EN BRIE <br>

fixe : 09 66 83 09 66  -  fax : 01 64 07 09 66<br>
<!--img src="$message->embed(public_path().'/img/ndi.jpg') }}"-->

{{ config('app.name') }}



 

 

---

Les donnees et renseignements contenus dans ce message sont personnels, confidentiels et secrets. Toute publication, utilisation ou diffusion, meme partielle, doit etre autorisee. Si vous n'etes pas le bon destinataire, nous vous demandons de ne pas lire, copier, utiliser ou divulguer cette communication. Nous vous prions de notifier cette erreur a l'expediteur et d'effacer immediatement cette communication de votre systeme. <br>

 

Any data and information contained in this electronic mail is personal, confidential and secret. Any total or partial publication, use or distribution must be authorized. If you are not the right addressee, we ask you not to read, copy, use or disclose this communication. Please notify this error to the sender and erase at once this communication from your system.



@endcomponent