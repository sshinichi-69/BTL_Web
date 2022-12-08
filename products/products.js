function getMouseList() {
    getItemList('mouse');
}

function getKeyboardList() {
    getItemList('keyboard');
}

function getAudioList() {
    getItemList('audio');
}

function getItemList(type) {
    // get data
    let itemList = [];
    switch (type) {
        case 'mouse':
            itemList = getMouseListFromDB();
            break;
        case 'keyboard':
            itemList = getKeyboardListFromDB();
            break;
        case 'audio':
            itemList = getAudioListFromDB();
            break;
    }
    // show data
    let itemListUl = document.createElement('ul');
    for (let item of itemList) {
        let itemLi = document.createElement('li');
        // set image
        let image = document.createElement('div');
        image.className = "image";
        let imageLink = document.createElement('img');
        imageLink.src = item.image;
        image.appendChild(imageLink);
        itemLi.appendChild(image);

        let description = document.createElement('div');
        description.className = "description";
        // set name
        let name = document.createElement('a');
        name.href = '#';
        name.className = "uppercase name";
        name.innerHTML = item.name;
        description.appendChild(name);
        // set price
        let price = document.createElement('div');
        price.innerHTML = showNumber(item.price) + "đ";
        price.className = "price";
        description.appendChild(price);

        itemLi.appendChild(description);
        
        itemListUl.appendChild(itemLi);
    }
    document.getElementById("product").appendChild(itemListUl);
}

function showNumber(n) {
    if (n === 0) {
        return n;
    }
    let res = '';
    let digit = 0;
    while (n > 0) {
        if (digit === 3) {
            res = '.' + res;
            digit = 0;
        }
        res = n % 10 + res;
        n = Math.floor(n / 10);
        digit++;
    }
    return res;
}

function getMouseListFromDB() {
    return [
        {
            'image': 'https://resource.logitechg.com/w_386,ar_1.0,c_limit,f_auto,q_auto,dpr_2.0/d_transparent.gif/content/dam/gaming/en/products/g502x-plus/gallery/g502x-plus-gallery-1-black.png?v=1',
            'name': 'Chuột chơi game G502 Plus',
            'price': 3899000
        },
        {
            'image': 'https://resource.logitechg.com/w_386,ar_1.0,c_limit,f_auto,q_auto,dpr_2.0/d_transparent.gif/content/dam/gaming/en/products/g502x-corded/gallery/g502x-corded-gallery-1-black.png?v=1',
            'name': 'Chuột chơi game G502 X',
            'price': 1899000
        },
        {
            'image': 'https://resource.logitechg.com/w_386,ar_1.0,c_limit,f_auto,q_auto,dpr_2.0/d_transparent.gif/content/dam/gaming/en/products/g502x-lightspeed/gallery/g502x-lightspeed-gallery-1-black.png?v=1',
            'name': 'Chuột chơi game không dây LIGHTSPEED G502 X',
            'price': 3299000
        },
        {
            'image': 'https://resource.logitechg.com/w_386,ar_1.0,c_limit,f_auto,q_auto,dpr_2.0/d_transparent.gif/content/dam/gaming/en/products/mouse/g705-wireless-mouse/gallery/g705-gallery-1.png?v=1',
            'name': 'G705',
            'price': 2499000
        },
        {
            'image': 'https://resource.logitechg.com/w_386,ar_1.0,c_limit,f_auto,q_auto,dpr_2.0/d_transparent.gif/content/dam/gaming/en/products/lol-pro-wireless-mouse/gallery/league-of-legends-pro-wireless-gaming-mouse-gallery-1.png?v=1',
            'name': 'Chuột không dây Pro',
            'price': 2799000
        },
    ];
}

function getKeyboardListFromDB() {
    return [
        {
            'image': 'https://resource.logitechg.com/w_386,ar_1.0,c_limit,f_auto,q_auto,dpr_2.0/d_transparent.gif/content/dam/gaming/en/products/keyboards/g715-wireless-keyboard/gallery/g715-gallery-1.png?v=1',
            'name': 'G715',
            'price': 4699000
        },
        {
            'image': 'https://resource.logitechg.com/w_386,ar_1.0,c_limit,f_auto,q_auto,dpr_2.0/d_transparent.gif/content/dam/gaming/en/products/g413-se/g413-se-gallery-1-new.png?v=1',
            'name': 'Bàn phím chơi game cơ học G413 SE',
            'price': 1899000
        },
        {
            'image': 'https://resource.logitechg.com/w_386,ar_1.0,c_limit,f_auto,q_auto,dpr_2.0/d_transparent.gif/content/dam/gaming/en/products/g413-se-tkl/g413-se-tkl-gallery-1-new.png?v=1',
            'name': 'Bàn phím chơi game cơ học G413 TLK SE',
            'price': 1599000
        },
        {
            'image': 'https://resource.logitechg.com/w_386,ar_1.0,c_limit,f_auto,q_auto,dpr_2.0/d_transparent.gif/content/dam/gaming/en/products/lol-pro-x-keyboard/gallery/league-of-legends-pro-x-gaming-keyboard-gallery-1.png?v=1',
            'name': 'Bàn phím Pro',
            'price': 2990000
        },
        {
            'image': 'https://resource.logitechg.com/w_386,ar_1.0,c_limit,f_auto,q_auto,dpr_2.0/d_transparent.gif/content/dam/gaming/en/products/g915-tkl/g915-tkl-gallery-1-carbon.png?v=1',
            'name': 'G913 TLK',
            'price': 4790000
        },
    ];
}

function getAudioListFromDB() {
    return [
        {
            'image': 'https://resource.logitechg.com/w_386,ar_1.0,c_limit,f_auto,q_auto,dpr_2.0/d_transparent.gif/content/dam/gaming/en/products/g535-wireless/g535-wireless-gallery-1.png?v=1',
            'name': 'Tai nghe chơi game không dây LIGHTSPEED G535',
            'price': 3299000
        },
        {
            'image': 'https://resource.logitechg.com/w_386,ar_1.0,c_limit,f_auto,q_auto,dpr_2.0/d_transparent.gif/content/dam/gaming/en/products/fits/gallery/gallery-1-black.png?v=1',
            'name': 'FITS',
            'price': 4099000
        },
        {
            'image': 'https://resource.logitechg.com/w_386,ar_1.0,c_limit,f_auto,q_auto,dpr_2.0/d_transparent.gif/content/dam/gaming/en/products/audio/g735-wireless-headset/gallery/g735-gallery-1.png?v=1',
            'name': 'G735',
            'price': 5299000
        },
        {
            'image': 'https://resource.logitechg.com/w_386,ar_1.0,c_limit,f_auto,q_auto,dpr_2.0/d_transparent.gif/content/dam/gaming/en/products/lol-pro-x-headset/gallery/league-of-legends-pro-x-gaming-headset-gallery-1.png?v=1',
            'name': 'Tai nghe chơi game Pro X',
            'price': 3490000
        },
        {
            'image': 'https://resource.logitechg.com/w_386,ar_1.0,c_limit,f_auto,q_auto,dpr_2.0/d_transparent.gif/content/dam/gaming/en/products/g435/swatches/g435-gaming-headset-gallery-2-1-white.png?v=1',
            'name': 'G435',
            'price': 1799000
        },
    ];
}