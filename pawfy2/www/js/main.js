// ---------------------------
// STICKY HEADER MANAGEMENT :.

// Get the header
let o_h = document.getElementById("hdr");

// Get the offset position of the navbar
let sticky = o_h.offsetTop;


function f_stickyHeader()
{
	// When the user scrolls the page, execute myFunction

// Add the sticky class to the header when you reach its scroll position. Remove "sticky" when you leave the scroll position

  if (window.pageYOffset > sticky) 
	{
    o_h.classList.add("sticky");
  } 
	else 
	{
    o_h.classList.remove("sticky");
  }


}

window.onscroll = function() 
{
	f_stickyHeader()
};

// STICKY HEADER MANAGEMENT .:
// ---------------------------