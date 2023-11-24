// dynamically change the title of the tab according to which webpage is being displayed.
// Get the current URL path
function dynamicTitle(){
    var currentPath = window.location.pathname;

    // Extract the filename from the path
    var filename = currentPath.split('/').pop();

    // Define a mapping of filenames to page titles
    var pageTitleMap = {
        'Index.php': 'Home Page',
        'Calendar.php': 'Calendar',
        'ContactUs.php': 'Contact Us',
        'Feedback.php': 'Feedback',
        'Video.php': 'Tutorial Video',
        'Gallery.php': 'Pictures Galley',
        'Resume.php': 'Resume'
        // Add more entries as needed
    };

    // Set the page title based on the filename
    var pageTitle = pageTitleMap[filename];
    if (pageTitle) {
        document.getElementById('pageTitle').textContent = pageTitle;
    }
}

dynamicTitleD();
