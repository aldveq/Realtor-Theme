import { feedback } from "../../utilities/tools";

const SearchPostsInput = () => {
    const doc = document;
    if(doc.getElementById('searchPostInput') && doc.getElementById('searchPostBtn')) {
        doc.getElementById('searchPostBtn').addEventListener('click', searchPosts);
        doc.getElementById('searchPostInput').addEventListener('blur', validateSearchTermInput);
    }
}

const searchPosts = () => {
    const site_url = main.siteurl;
    const doc = document;

    if ( doc.getElementById('searchPostInput').value !== '') {
        window.location = `${site_url}/?s=${doc.getElementById('searchPostInput').value}`;
    } else {
        feedback('error', 'Please, provide a search term!');
        doc.getElementById('searchPostInput').classList.add('error');
        doc.getElementById('searchPostInput').focus();
    }
}

const validateSearchTermInput = () => {
    const doc = document;
    if(doc.getElementById('searchPostInput').value !== '') {
        doc.getElementById('searchPostInput').classList.remove('error');
    }
}

export default SearchPostsInput;