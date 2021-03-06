function init()
{
	if (sessionStorage.authenticated)
	{
		if (sessionStorage.driver == 1)
		{
			window.location = 'account/driver/spots.php';
		}
		else
		{
			window.location = 'account/passenger/spots.php';
		}
	}
	else
	{

	}
}

function login()
{
	console.log('Getting token...');
	var x = new XMLHttpRequest();
	x.open('GET', 'http://localhost:8080/sharemycar/webapp/apis/login.php', true);
	var email = document.getElementById('textMail').value;
	var pass = document.getElementById('textPassword').value;
	x.setRequestHeader('email', email);
	x.setRequestHeader('password', pass);
	x.send();
	x.onreadystatechange = function() {
		if (x.readyState == 4 && x.status == 200) {
			var JSONdata = JSON.parse(x.responseText); console.log(JSONdata);

				if (JSONdata.status == 0)
				{
					sessionStorage.authenticated = true;
					sessionStorage.driver = 0;

					sessionStorage.userId = JSONdata.user.user.id;
					sessionStorage.userName = JSONdata.user.user.name;
					sessionStorage.userLastName = JSONdata.user.user.surname;
					sessionStorage.userSecondLastName = JSONdata.user.user.secondSurname;
					sessionStorage.userEmail = JSONdata.user.user.email;
					sessionStorage.userCellPhone = JSONdata.user.user.cellPhone;
					sessionStorage.userControlNumber = JSONdata.user.user.controlNumber;
					sessionStorage.userLatitude = JSONdata.user.user.latitude;
					sessionStorage.userLongitude = JSONdata.user.user.longitude;
					sessionStorage.userPhoto = JSONdata.user.user.photo;
					sessionStorage.userRaiting = JSONdata.user.user.raiting;

					sessionStorage.userUniversityLat = JSONdata.user.user.university.latitude;
					sessionStorage.userUniversityLon = JSONdata.user.user.university.longitude;
					sessionStorage.userUniversity = JSONdata.user.user.university.name;

					sessionStorage.userCityId = JSONdata.user.user.city.code;
					sessionStorage.userCityName = JSONdata.user.user.city.name;

					sessionStorage.userStateId = JSONdata.user.user.city.state.id;
					sessionStorage.userStateName = JSONdata.user.user.city.state.name;

					if (JSONdata.user.user.status == 2)
					{
						alert("You haven't validated your email, please validate it first please");
					}
					else
					{
						if (JSONdata.user.user.status == 3)
						{
							alert("Firstly you'll pick your role in the aplication");
							window.location = 'registeras.php';
						}
						else
						{
							//window.location = 'registeras.php';
						}
					}

				}
				else
					if (JSONdata.status == 1)
					{
						sessionStorage.authenticated = true;
						sessionStorage.driver = 1;

						sessionStorage.userId = JSONdata.user.user.id;
						sessionStorage.userName = JSONdata.user.user.name;
						sessionStorage.userLastName = JSONdata.user.user.surname;
						sessionStorage.userSecondLastName = JSONdata.user.user.secondSurname;
						sessionStorage.userEmail = JSONdata.user.user.email;
						sessionStorage.userCellPhone = JSONdata.user.user.cellPhone;
						sessionStorage.userControlNumber = JSONdata.user.user.controlNumber;
						sessionStorage.userLatitude = JSONdata.user.user.latitude;
						sessionStorage.userLongitude = JSONdata.user.user.longitude;
						sessionStorage.userPhoto = JSONdata.user.user.photo;
						sessionStorage.userRaiting = JSONdata.user.user.raiting;

						sessionStorage.userUniversityLat = JSONdata.user.user.university.latitude;
						sessionStorage.userUniversityLon = JSONdata.user.user.university.longitude;
						sessionStorage.userUniversity = JSONdata.user.user.university.name;

						sessionStorage.userCityId = JSONdata.user.user.city.code;
						sessionStorage.userCityName = JSONdata.user.user.city.name;

						sessionStorage.userStateId = JSONdata.user.user.city.state.id;
						sessionStorage.userStateName = JSONdata.user.user.city.state.name;

						sessionStorage.BrandName = JSONdata.user.car.model.brand.name;

						sessionStorage.ModelName = JSONdata.user.car.model.name;

						sessionStorage.licensePlate = JSONdata.user.car.licensePlate;
						sessionStorage.driverLicense = JSONdata.user.car.driverLicense;
						sessionStorage.color = JSONdata.user.car.color;
						sessionStorage.insurance = JSONdata.user.car.insurance;
						sessionStorage.spaceCar = JSONdata.user.car.spaceCar;
						sessionStorage.owner = JSONdata.user.car.owner;

						if (JSONdata.user.user.status == 2)
						{
							alert("You haven't validated your email, please validate it first please");
						}
						else
						{
							window.location = 'account/driver/spots.php';
						}
					}
					else
						alert(JSONdata.errorMessage);
		}
	}
}
