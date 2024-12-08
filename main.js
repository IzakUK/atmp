function openNav() {
    document.getElementById("terminusSide").style.width = "20vh";
}
function closeNav() {
    document.getElementById("terminusSide").style.width = "0";
}
function toggleSearch() {
    const searchBar = document.getElementById('search-bar');
    if (searchBar.style.display === 'none') {
        searchBar.style.display = 'flex';
    } else {
        searchBar.style.display = 'none';
    }
}