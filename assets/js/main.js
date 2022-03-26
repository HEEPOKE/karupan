function Ordering(id) {
  document.getElementById("title-modal").innerHTML = "ยืมวัสดุ : " + id;
  document.getElementById("hidden-namepackage").value = id;
}
function deletePackage(deletePackage) {
  document.getElementById("title-modal-delete").innerHTML =
    "ลบวัสดุ : " + deletePackage;
  document.getElementById("hidden-namepackage-delete").value = deletePackage;
}
