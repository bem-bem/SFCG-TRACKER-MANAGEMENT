  // checkbox
  function cbChange(obj) {
    var cbs = document.getElementsByClassName("cb");
    for (var i = 0; i < cbs.length; i++) {
        cbs[i].checked = false;
    }
    obj.checked = true;
}

// img preveiw
function showPreview1(event){
  if(event.target.files.length > 0){
      let src = URL.createObjectURL(event.target.files[0]);
      let preview = document.getElementById("file-ip-1-preview");
      preview.src = src;
      preview.style.display = "block";
      }
  }

  function showPreview2(event){
    if(event.target.files.length > 0){
        let src = URL.createObjectURL(event.target.files[0]);
        let preview = document.getElementById("file-ip-2-preview");
        preview.src = src;
        preview.style.display = "block";
        }
    }