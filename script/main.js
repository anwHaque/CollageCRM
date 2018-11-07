
////////////////////////    SEARCHING OPERATION FUNCTION    ////////////////////////////////////////

//Searching Data
function searchButton()
{
	$.ajax({
		url:"src/search/searchForm.php",
		type:'POST',
		success:function(data, status){
			$('#mainArea').html(data);
		},
	});
	return false;
}


////////////////////////////////////////////////////////////////////////////////
function readData(type)
{
	
		$.ajax({
		url:"src/readData.php",
		type:'POST',
		data:{type: type},
		success:function(data, status){
			$('#mainArea').html(data);
		},
	});

return false;	
}

function registration(type)
{
	
	$.ajax({
		url:"src/registrationForm.php",
		type:'POST',
		data:{type: type},
		success:function(data, status){
			$('#mainArea').html(data);
		},
	});

return false;		
}

function saveRegistration()
{
	var formData = new FormData($("#registrationForm")[0]);
	$.ajax({
		url:"src/registration.php",
		type:'POST',
		data : formData,
		processData: false,
		contentType: false,
		success:function(data, status){
			$('#registrationMessage').html(data);
		 },
	});
	return false;
}


function operationOnData(id,type)
{
	swal({
		title: 'Are you sure?',
		text: "You won't be able to revert this!",
		type: 'warning',
		showCancelButton: true,
		confirmButtonColor: '#3085d6',
		cancelButtonColor: '#d33',
		confirmButtonText: 'Yes, delete it!'
	}).then((result) => {
		if (result.value) {
		  

			$.ajax({
				url:"src/deleteData.php",
				type:'POST',
				data:{
					id: id,
					type: type
				},
				success:function(data, status){
					$('#mainArea').html(data);
				},
			});

		}
	})
	  
return false;		
}


function getEditForm(id,type)
{
	$.ajax({
		url:"src/updateForm.php",
		type:'POST',
		data:{
			id: id,
			type: type
		},
		success:function(data, status){
			$('#mainArea').html(data);
		},
	});

	return false;
}

function saveUpdatedData()
{
	var formData = new FormData($("#registrationForm")[0]);
	$.ajax({
		url:"src/updateSave.php",
		type:'POST',
		data : formData,
		processData: false,
		contentType: false,
		success:function(data, status){
			$('#registrationMessage').html(data);
		 },
	});
	
	return false;

}

/////////////////////////////    INQUERY   //////////////////////////////////////////
