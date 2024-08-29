function toggledisplay($toggleId){
    $toggleElement=document.getElementById($toggleId);
    if($toggleElement.style.display=="none")$toggleElement.style.display="block";
    else if($toggleElement.style.display=="block")$toggleElement.style.display="none";
    else $toggleElement.style.display="block";
}