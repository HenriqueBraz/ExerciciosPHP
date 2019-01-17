var myImage = document.querySelector('img');

myImage.onclick = function() {
    var mySrc = myImage.getAttribute('src');
	var myHeading = document.querySelector('h1');
    if(mySrc === 'images/firefox-icon.png') {
      myImage.setAttribute ('src','images/ryu.png');
	  myHeading.innerHTML = 'Ninja Gaiden is cool';
    } else {
      myImage.setAttribute ('src','images/firefox-icon.png');
	  myHeading.innerHTML = 'Fire Fox is cool';
    }
}
