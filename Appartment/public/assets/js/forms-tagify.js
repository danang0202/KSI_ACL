/**
 * Tagify
 */

'use strict';

(function () {
  // Basic
  //------------------------------------------------------
  const tagifyBasicEl = document.querySelector('#TagifyBasic');
  const TagifyBasic = new Tagify(tagifyBasicEl);

  // Read only
  //------------------------------------------------------
  const tagifyReadonlyEl = document.querySelector('#TagifyReadonly');
  const TagifyReadonly = new Tagify(tagifyReadonlyEl);

  // Custom list & inline suggestion
  //------------------------------------------------------
  const TagifyCustomInlineSuggestionEl = document.querySelector('#TagifyCustomInlineSuggestion');
  const TagifyCustomListSuggestionEl = document.querySelector('#TagifyCustomListSuggestion');

  const whitelist = [
    'A# .NET',
    'A# (Axiom)',
    'A-0 System',
    'A+',
    'A++',
    'ABAP',
    'ABC',
    'ABC ALGOL',
    'ABSET',
    'ABSYS',
    'ACC',
    'Accent',
    'Ace DASL',
    'ACL2',
    'Avicsoft',
    'ACT-III',
    'Action!',
    'ActionScript',
    'Ada',
    'Adenine',
    'Agda',
    'Agilent VEE',
    'Agora',
    'AIMMS',
    'Alef',
    'ALF',
    'ALGOL 58',
    'ALGOL 60',
    'ALGOL 68',
    'ALGOL W',
    'Alice',
    'Alma-0',
    'AmbientTalk',
    'Amiga E',
    'AMOS',
    'AMPL',
    'Apex (Salesforce.com)',
    'APL',
    'AppleScript',
    'Arc',
    'ARexx',
    'Argus',
    'AspectJ',
    'Assembly language',
    'ATS',
    'Ateji PX',
    'AutoHotkey',
    'Autocoder',
    'AutoIt',
    'AutoLISP / Visual LISP',
    'Averest',
    'AWK',
    'Axum',
    'Active Server Pages',
    'ASP.NET'
  ];
  // Inline
  let TagifyCustomInlineSuggestion = new Tagify(TagifyCustomInlineSuggestionEl, {
    whitelist: whitelist,
    maxTags: 10,
    dropdown: {
      maxItems: 20,
      classname: 'tags-inline',
      enabled: 0,
      closeOnSelect: false
    }
  });
  // List
  let TagifyCustomListSuggestion = new Tagify(TagifyCustomListSuggestionEl, {
    whitelist: whitelist,
    maxTags: 10,
    dropdown: {
      maxItems: 20,
      classname: '',
      enabled: 0,
      closeOnSelect: false
    }
  });

  // Users List suggestion
  //------------------------------------------------------
  const TagifyUserListEl = document.querySelector('#TagifyUserList');

  const usersList = [
    {
      value: 1,
      name: 'Aditya Widiyanto',
      divisi: 'Videografi',
      totalProject: 5
    },
    {
      value: 2,
      name: 'Akma Batrisyia Jazima',
      divisi: 'Fotografi',
      totalProject: 1
    },
    {
      value: 3,
      name: 'I Made Yoga Andika Putra',
      divisi: 'Design Grafis',
      totalProject: 3
    },
    {
      value: 4,
      name: 'Irsyad Fadhil Asyraf',
      divisi: 'Reportase dan Kepenulisan',
      totalProject: 2
    },
    {
      value: 5,
      name: 'Jihan Maisaroh ',
      divisi: 'Videografi',
      totalProject: 4
    },
    {
      value: 6,
      name: 'Luthfiani Nur Aisyah',
      divisi: 'Fotografi',
      totalProject: 1
    },
    {
      value: 7,
      name: 'Samuel Maruba Manik',
      divisi: 'Videografi',
      totalProject: 5
    },
    {
      value: 8,
      name: 'Yoga Pratama',
      divisi: 'Design Grafis',
      totalProject: 2
    }
  ];

  function getInitials(name) {
    const nameParts = name.split(' ');
    if (nameParts.length > 1) {
        return nameParts[0][0] + nameParts[1][0];
    } else {
        return nameParts[0].substring(0, 2);
    }
  }

  function getColorClass(divisi) {
    switch (divisi) {
        case 'Videografi':
            return 'bg-label-success';
        case 'Fotografi':
            return 'bg-label-primary';
        case 'Reportase dan Kepenulisan':
            return 'bg-label-warning';
        case 'Design Grafis':
            return 'bg-label-danger';
        default:
            return 'bg-label-primary';  // default color class
    }
}

function tagTemplate(tagData) {
  return `
  <tag title="${tagData.title || tagData.divisi}"
    contenteditable='false'
    spellcheck='false'
    tabIndex="-1"
    class="${this.settings.classNames.tag} ${tagData.class ? tagData.class : ''}"
    ${this.getAttributes(tagData)}
  >
    <x title='' class='tagify__tag__removeBtn' role='button' aria-label='remove tag'></x>
    <div style='display: flex; align-items: center;'>
      <div class='tagify__tag__avatar-wrap avatar'>
        <span class="avatar-initial rounded-circle ${getColorClass(tagData.divisi)}">${getInitials(tagData.name)}</span>
      </div>
      <div style='margin-left: 10px;'>
        <span class='tagify__tag-text'>${tagData.name}</span>
      </div>
    </div>
  </tag>
  `;
}

function suggestionItemTemplate(tagData) {
  return `
  <div ${this.getAttributes(tagData)}
    class='tagify__dropdown__item align-items-center ${tagData.class ? tagData.class : ''}'
    tabindex="0"
    role="option"
    style='display: flex; align-items: center;'
  >
    ${
      tagData.class !== 'addAll'
        ? `
          <div class='avatar'>
            <span class="avatar-initial rounded-circle ${getColorClass(tagData.divisi)}">${getInitials(tagData.name)}</span>
          </div>
          <div style='margin-left: 10px;'>
            <strong>${tagData.name}</strong><br>
            <span style='font-size: 0.8em;'>${tagData.divisi}  |  ${tagData.totalProject} Projects in Total</span>
          </div>
        `
        : `
          <div style='margin-left: 10px;'>
            <strong>${tagData.name}</strong><br>
            <span style='font-size: 0.8em;'>${tagData.divisi}</span>
          </div>
        `
    }
  </div>
  `;
}


  // initialize Tagify on the above input node reference
  usersList.sort((a, b) => a.totalProject - b.totalProject);
  let TagifyUserList = new Tagify(TagifyUserListEl, {
    tagTextProp: 'name', // very important since a custom template is used with this property as text. allows typing a "value" or a "name" to match input with whitelist
    enforceWhitelist: true,
    skipInvalid: true, // do not remporarily add invalid tags
    dropdown: {
      closeOnSelect: false,
      enabled: 0,
      classname: 'users-list',
      searchKeys: ['name', 'divisi','totalProject'] // very important to set by which keys to search for suggesttions when typing
    },
    templates: {
      tag: tagTemplate,
      dropdownItem: suggestionItemTemplate
    },
    whitelist: usersList
  });

  TagifyUserList.on('dropdown:show dropdown:updated', onDropdownShow);
  TagifyUserList.on('dropdown:select', onSelectSuggestion);

  let addAllSuggestionsEl;

  function onDropdownShow(e) {
    let dropdownContentEl = e.detail.tagify.DOM.dropdown.content;

    if (TagifyUserList.suggestedListItems.length > 1) {
      addAllSuggestionsEl = getAddAllSuggestionsEl();

      // insert "addAllSuggestionsEl" as the first element in the suggestions list
      dropdownContentEl.insertBefore(addAllSuggestionsEl, dropdownContentEl.firstChild);
    }
  }

  function onSelectSuggestion(e) {
    if (e.detail.elm == addAllSuggestionsEl) TagifyUserList.dropdown.selectAll.call(TagifyUserList);
  }

  // create an "add all" custom suggestion element every time the dropdown changes
  function getAddAllSuggestionsEl() {
    // suggestions items should be based on "dropdownItem" template
    return TagifyUserList.parseTemplate('dropdownItem', [
      {
        class: 'addAll',
        name: 'Add all',
        divisi:
          TagifyUserList.settings.whitelist.reduce(function (remainingSuggestions, item) {
            return TagifyUserList.isTagDuplicate(item.value) ? remainingSuggestions : remainingSuggestions + 1;
          }, 0) + ' Members'
      }
    ]);
  }

  // Email List suggestion
  //------------------------------------------------------
  // generate random whitelist items (for the demo)
  let randomStringsArr = Array.apply(null, Array(100)).map(function () {
    return (
      Array.apply(null, Array(~~(Math.random() * 10 + 3)))
        .map(function () {
          return String.fromCharCode(Math.random() * (123 - 97) + 97);
        })
        .join('') + '@gmail.com'
    );
  });

  const TagifyEmailListEl = document.querySelector('#TagifyEmailList'),
    TagifyEmailList = new Tagify(TagifyEmailListEl, {
      // email address validation (https://stackoverflow.com/a/46181/104380)
      pattern:
        /^(([^<>()\[\]\\.,;:\s@"]+(\.[^<>()\[\]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/,
      whitelist: randomStringsArr,
      callbacks: {
        invalid: onInvalidTag
      },
      dropdown: {
        position: 'text',
        enabled: 1 // show suggestions dropdown after 1 typed character
      }
    }),
    button = TagifyEmailListEl.nextElementSibling; // "add new tag" action-button

  button.addEventListener('click', onAddButtonClick);

  function onAddButtonClick() {
    TagifyEmailList.addEmptyTag();
  }

  function onInvalidTag(e) {
    console.log('invalid', e.detail);
  }
})();
