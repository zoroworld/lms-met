if (document.querySelector('#courseCategory')) {
    
const choices = new Choices('#courseCategory', {
    removeItemButton: true,
    placeholder: true,
    placeholderValue: 'Select subjects',
    searchPlaceholderValue: 'Search subjects',
});
}

if (document.querySelector('#studentCourseCategory')) {
    const choices = new Choices('#studentCourseCategory', {
        removeItemButton: true,
        placeholder: true,
        placeholderValue: 'Select Courses',
        searchPlaceholderValue: 'Search Courses',
    });
}

