//before implementing this you need to create an account on cloudinary ,to get unlimited access to their cloud server you need to get the paid version.
//after you create the account you will get the cloudinary website and private and public key ,use this in your code.


var CLOUDINARY_URL = '	your_url'
var CLOUDINARY_UPLOAD_PRESET = 'val_you_get_from_their_website';

var imgPreview = document.getElementById('img-preview');
var fileUpload = document.getElementById('file-upload');

fileUpload.addEventListener('change', function(event){
	var file = event.target.files[0];
	
	var formData = new FormData();
	formData.append('file',file);
	formData.append('upload_preset', CLOUDINARY_UPLOAD_PRESET);
	axios({
		 url: CLOUDINARY_URL,
		 method:'POST',
		 headers: {
		 	'Content-Type': 'application/x-www-form-urlencoded'
		 },
		 data: formData
		}).then(function(res){
		console.log(res);
		imgPreview.src = res.data.secure_url;
		}).catch(function(err){
		console.error(err);
	});
});
