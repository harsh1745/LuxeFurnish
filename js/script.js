// loading 
window.onload = function () {
    setTimeout(function () {
        document.getElementById('loading').style.display = 'none';
        document.body.classList.add('fade-in');
    }, 500); 
  };
  
// Search Box Open
function openSearch() {
    document.getElementById("myOverlay").style.display = "block";
  }
  
function closeSearch() {
	document.getElementById("myOverlay").style.display = "none";
}

// Nav Bar Open
function openNav() {
	document.getElementById("mySidenav").style.width = "250px";
}

function closeNav() {
	document.getElementById("mySidenav").style.width = "0";
}

// Sidebar Click Open Menu
function SidebarDrop() {
	document.getElementById("myDropdown1").classList.toggle("show");
}

// Close the dropdown if the user clicks outside of it
window.onclick =  function(event) {
	if (!event.target.matches('.dropbtn1')) {
    	var dropdowns = document.getElementsByClassName("dropdown-content1");
    	var i;
    	for (i = 0; i < dropdowns.length; i++) {
      		var openDropdown = dropdowns[i];
      		if (openDropdown.classList.contains('show')) {
        		openDropdown.classList.remove('show');
      		}
    	}
  	}
}

// input box entered keyword to open file location 
function searchKeyword() {
	const keyword = document.getElementById('input-box').value.toLowerCase();
  	switch (keyword) {
    	case 'sofas':
        	window.location.href = '/LuxeFurnish/client/sofas.php';
          	break;
      	case 'tables':
        	window.location.href = '/LuxeFurnish/client/tables.php';
          	break;
      	case 'chairs':
          	window.location.href = '/LuxeFurnish/client/chair.php';
          	break;
      	case 'beds':
          	window.location.href = '/LuxeFurnish/client/beds.php';
          	break;
      	case 'lamps':
          	window.location.href = '/LuxeFurnish/client/lamps.php';
          	break;
      	case 'bookcase':
        	window.location.href = '/LuxeFurnish/client/bookcase.php';
        	break;
      	case 'wardrobes':
        	window.location.href = '/LuxeFurnish/client/wardrobes.php';
        	break;
      	case 'garden tables':
          	window.location.href = '/LuxeFurnish/client/gardentable.php';
          	break;
      	case 'shoe racks':
        	window.location.href = '/LuxeFurnish/client/shoeracks.php';
        	break;
      	case 'all products':
        	window.location.href = '/LuxeFurnish/client/all-product.php';
        	break;
      	default:
        	window.location.href = '/LuxeFurnish/client/404.php';
  	}
}

// Search Box Suggestion
let availableKeywords=[
	'Sofas',
	'Chairs',
	'Tables',
	'Lamps',
	'Beds',
	'Bookcase',
	'Wardrobes',
	'Garden Tables',
	'Shoe Racks',
	'All products',
];
const resultsBox=document.querySelector(".result-box");
const inputBox=document.getElementById("input-box");
inputBox.onkeyup=function () {
	let result=[];
  	let input=inputBox.value;
  	if (input.length) {
    	result=availableKeywords.filter((keyword)=>{
      	return keyword.toLowerCase().includes(input.toLowerCase());
    	});
    	console.log(result);
  	}
  	display(result);
  	if (!result.length) {
    	resultsBox.innerHTML='';
  	}
}

function display(result) {
	const content=result.map((list)=>{
    	return "<li onclick=selectInput(this)>" + list + "</li>";
  	});
  	resultsBox.innerHTML="<ul>" + content.join('') + "</ul>";
}

function selectInput(list) {
	inputBox.value=list.innerHTML;
  	resultsBox.innerHTML='';
}
/* Code by CodingTuting.Com */
// function footerToggle(footerBtn) {
//   $(footerBtn).toggleClass("btnActive");
//   $(footerBtn).next().toggleClass("active");
// }

let userBox = document.querySelector('.user-box');
document.querySelector('#user-btn').onclick = () => {
   userBox.classList.toggle('user-name-active');
}