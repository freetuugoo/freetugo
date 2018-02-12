// javascript tags input
[].forEach.call(document.getElementsByClassName('tags-input'), function(el) {


    let hiddenInput = document.createElement('input'),
        mainInput = document.createElement('input'),
        tags = [];

    hiddenInput.setAttribute('type', 'hidden');
    hiddenInput.setAttribute('name', el.getAttribute('data-name'));

    mainInput.setAttribute('type', 'text');
    mainInput.setAttribute('style', 'width:79%; border-radius:30px;')
    mainInput.setAttribute('name', 'destination');
    mainInput.setAttribute('id', 'location-input');
    mainInput.classList.add('main-input');
    mainInput.addEventListener('input', function () {
        selectTag();
    }) 

    el.appendChild(mainInput);
    el.appendChild(hiddenInput);

    function addTag (text) {
        let tag = {
            text: text,
            element: document.createElement('span'),
        };

        tag.element.classList.add('tag');
        tag.element.textContent = tag.text;

        let closeBtn = document.createElement('span');
        closeBtn.classList.add('close');
        closeBtn.addEventListener('click', function () {
            removeTag(tags.indexOf(tag));
        })
        tag.element.appendChild(closeBtn);

        tags.push(tag);

        el.insertBefore(tag.element, mainInput);

        refreshTag();
    }

    function selectTag() {
        var functionIsRunning = false;
        if(!functionIsRunning) {
            functionIsRunning = true;
            addTag(document.getElementsByClassName('selectedTags').innerHTML);
            functionIsRunning = false;
        }
    }

    function removeTag (index) {
        let tag = tags[index];
        tags.splice(index, 1);
        el.removeChild(tag.element);
        refreshTag();
    }

    function refreshTag () {
        let tagsList = [];
        tags.forEach(function (t) {
            tagsList.push(t.text);
        });
    }

    function filterTag () {
        return tag.replace(/[^\w -]/g, '').trim().replace(/\w+/g, '-');
    }
});