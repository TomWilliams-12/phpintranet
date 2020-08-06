function showNorth(){
    const north = document.getElementById('north');
    const midlands = document.getElementById('midlands');
	const northbtn = document.getElementById('northbtn');
    const midlandsbtn = document.getElementById('midlandsbtn');
    north.className = "active";
    midlands.className = "hidden";
	northbtn.className = "activebtn";
	midlandsbtn.className = "";
    midlands.before(north);
}

function showMidlands(){
    const north = document.getElementById('north');
    const midlands = document.getElementById('midlands');
	const northbtn = document.getElementById('northbtn');
    const midlandsbtn = document.getElementById('midlandsbtn');
    north.className = "hidden";
    midlands.className = "active";
	northbtn.className = "";
	midlandsbtn.className = "activebtn";
    north.before(midlands);
}
