let productList = [
    {
        'id': 1,
        'type': 'mouse',
        'imageList': [
            'https://resource.logitechg.com/w_386,ar_1.0,c_limit,f_auto,q_auto,dpr_2.0/d_transparent.gif/content/dam/gaming/en/products/g502x-plus/gallery/g502x-plus-gallery-1-black.png?v=1',
            'https://resource.logitechg.com/w_692,c_limit,q_auto,f_auto,dpr_1.0/d_transparent.gif/content/dam/gaming/en/products/g502x-plus/gallery/g502x-plus-gallery-2-black.png?v=1',
            'https://resource.logitechg.com/w_692,c_limit,q_auto,f_auto,dpr_1.0/d_transparent.gif/content/dam/gaming/en/products/g502x-plus/gallery/g502x-plus-gallery-3-black.png?v=1',
            'https://resource.logitechg.com/w_692,c_limit,q_auto,f_auto,dpr_1.0/d_transparent.gif/content/dam/gaming/en/products/g502x-plus/gallery/g502x-plus-gallery-4-black.png?v=1',
        ],
        'name': 'Chuột chơi game G502 Plus',
        'price': 3899000,
        'description': 'G502 X PLUS là sự bổ sung mới nhất cho dòng G502 huyền thoại. Được chế tạo lại với các phím switch lai LIGHTFORCE đầu tiên của chúng tôi, LIGHTSPEED không dây cấp độ chuyên nghiệp, LIGHTSYNC RGB, cảm biến HERO 25K v.v.',
    },
    {
        'id': 2,
        'type': 'mouse',
        'imageList': [
            'https://resource.logitechg.com/w_386,ar_1.0,c_limit,f_auto,q_auto,dpr_2.0/d_transparent.gif/content/dam/gaming/en/products/g502x-corded/gallery/g502x-corded-gallery-1-black.png?v=1',
            '',
            '',
            '',
        ],
        'name': 'Chuột chơi game G502 X',
        'price': 1899000,
        'description': '',
    },
    {
        'id': 3,
        'type': 'mouse',
        'imageList': [
            'https://resource.logitechg.com/w_386,ar_1.0,c_limit,f_auto,q_auto,dpr_2.0/d_transparent.gif/content/dam/gaming/en/products/g502x-lightspeed/gallery/g502x-lightspeed-gallery-1-black.png?v=1',
            '',
            '',
            '',
        ],
        'name': 'Chuột chơi game không dây LIGHTSPEED G502 X',
        'price': 3299000,
        'description': '',
    },
    {
        'id': 4,
        'type': 'mouse',
        'imageList': [
            'https://resource.logitechg.com/w_386,ar_1.0,c_limit,f_auto,q_auto,dpr_2.0/d_transparent.gif/content/dam/gaming/en/products/mouse/g705-wireless-mouse/gallery/g705-gallery-1.png?v=1',
            '',
            '',
            '',
        ],
        'name': 'G705',
        'price': 2499000,
        'description': '',
    },
    {
        'id': 5,
        'type': 'mouse',
        'imageList': [
            'https://resource.logitechg.com/w_386,ar_1.0,c_limit,f_auto,q_auto,dpr_2.0/d_transparent.gif/content/dam/gaming/en/products/lol-pro-wireless-mouse/gallery/league-of-legends-pro-wireless-gaming-mouse-gallery-1.png?v=1',
            '',
            '',
            '',
        ],
        'name': 'Chuột không dây Pro',
        'price': 2799000,
        'description': '',
    },
    {
        'id': 6,
        'type': 'keyboard',
        'imageList': [
            'https://resource.logitechg.com/w_386,ar_1.0,c_limit,f_auto,q_auto,dpr_2.0/d_transparent.gif/content/dam/gaming/en/products/keyboards/g715-wireless-keyboard/gallery/g715-gallery-1.png?v=1',
            '',
            '',
            '',
        ],
        'name': 'G715',
        'price': 4699000,
        'description': '',
    },
    {
        'id': 7,
        'type': 'keyboard',
        'imageList': [
            'https://resource.logitechg.com/w_386,ar_1.0,c_limit,f_auto,q_auto,dpr_2.0/d_transparent.gif/content/dam/gaming/en/products/g413-se/g413-se-gallery-1-new.png?v=1',
            '',
            '',
            '',
        ],
        'name': 'Bàn phím chơi game cơ học G413 SE',
        'price': 1899000,
        'description': '',
    },
    {
        'id': 8,
        'type': 'keyboard',
        'imageList': [
            'https://resource.logitechg.com/w_386,ar_1.0,c_limit,f_auto,q_auto,dpr_2.0/d_transparent.gif/content/dam/gaming/en/products/g413-se-tkl/g413-se-tkl-gallery-1-new.png?v=1',
            '',
            '',
            '',
        ],
        'name': 'Bàn phím chơi game cơ học G413 TLK SE',
        'price': 1599000,
        'description': '',
    },
    {
        'id': 9,
        'type': 'keyboard',
        'imageList': [
            'https://resource.logitechg.com/w_386,ar_1.0,c_limit,f_auto,q_auto,dpr_2.0/d_transparent.gif/content/dam/gaming/en/products/lol-pro-x-keyboard/gallery/league-of-legends-pro-x-gaming-keyboard-gallery-1.png?v=1',
            '',
            '',
            '',
        ],
        'name': 'Bàn phím Pro',
        'price': 2990000,
        'description': '',
    },
    {
        'id': 10,
        'type': 'keyboard',
        'imageList': [
            'https://resource.logitechg.com/w_386,ar_1.0,c_limit,f_auto,q_auto,dpr_2.0/d_transparent.gif/content/dam/gaming/en/products/g915-tkl/g915-tkl-gallery-1-carbon.png?v=1',
            '',
            '',
            '',
        ],
        'name': 'G913 TLK',
        'price': 4790000,
        'description': '',
    },
    {
        'id': 11,
        'type': 'audio',
        'imageList': [
            'https://resource.logitechg.com/w_386,ar_1.0,c_limit,f_auto,q_auto,dpr_2.0/d_transparent.gif/content/dam/gaming/en/products/g535-wireless/g535-wireless-gallery-1.png?v=1',
            '',
            '',
            '',
        ],
        'name': 'Tai nghe chơi game không dây LIGHTSPEED G535',
        'price': 3299000,
        'description': '',
    },
    {
        'id': 12,
        'type': 'audio',
        'imageList': [
            'https://resource.logitechg.com/w_386,ar_1.0,c_limit,f_auto,q_auto,dpr_2.0/d_transparent.gif/content/dam/gaming/en/products/fits/gallery/gallery-1-black.png?v=1',
            '',
            '',
            '',
        ],
        'name': 'FITS',
        'price': 4099000,
        'description': '',
    },
    {
        'id': 13,
        'type': 'audio',
        'imageList': [
            'https://resource.logitechg.com/w_386,ar_1.0,c_limit,f_auto,q_auto,dpr_2.0/d_transparent.gif/content/dam/gaming/en/products/audio/g735-wireless-headset/gallery/g735-gallery-1.png?v=1',
            '',
            '',
            '',
        ],
        'name': 'G735',
        'price': 5299000,
        'description': '',
    },
    {
        'id': 14,
        'type': 'audio',
        'imageList': [
            'https://resource.logitechg.com/w_386,ar_1.0,c_limit,f_auto,q_auto,dpr_2.0/d_transparent.gif/content/dam/gaming/en/products/lol-pro-x-headset/gallery/league-of-legends-pro-x-gaming-headset-gallery-1.png?v=1',
            '',
            '',
            '',
        ],
        'name': 'Tai nghe chơi game Pro X',
        'price': 3490000,
        'description': '',
    },
    {
        'id': 15,
        'type': 'audio',
        'imageList': [
            'https://resource.logitechg.com/w_386,ar_1.0,c_limit,f_auto,q_auto,dpr_2.0/d_transparent.gif/content/dam/gaming/en/products/g435/swatches/g435-gaming-headset-gallery-2-1-white.png?v=1',
            '',
            '',
            '',
        ],
        'name': 'G435',
        'price': 1799000,
        'description': '',
    },
];

let g_product = productList[0];

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
    let itemList = getItemListFromDB(type);
    // show data
    let itemListUl = document.createElement('ul');
    for (let item of itemList) {
        let itemLi = document.createElement('li');
        // set image
        let image = document.createElement('div');
        image.className = "image";
        let imageLink = document.createElement('img');
        imageLink.src = item.imageList[0];
        image.appendChild(imageLink);
        itemLi.appendChild(image);

        let description = document.createElement('div');
        description.className = "description";
        // set name
        let name = document.createElement('a');
        name.href = './gaming-item.html';
        name.className = "uppercase name";
        name.innerHTML = item.name;
        name.value = item.id;
        name.addEventListener('click', selectItem);
        description.appendChild(name);
        // set price
        let price = document.createElement('div');
        price.innerHTML = showNumber(item.price) + "&nbsp;₫";
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

function getItemListFromDB(type) {
    let res = [];
    for (let item of productList) {
        if (item.type === type) {
            res.push(item);
        }
    }
    return res;
}

function selectItem(event) {
    let id = event.currentTarget.value;
    console.log(id);
    for (let item of productList) {
        if (item.id == id) {
            g_product = item;
            break;
        }
    }
}

function showGamingItem() {
    let mainImg = document.createElement('img');
    mainImg.src = g_product.imageList[0];
    document.getElementById('product').getElementsByClassName('image')[0].getElementsByClassName('main')[0].appendChild(mainImg);
    for (let i = 0; i < g_product.imageList.length; i++) {
        let button = document.createElement('button');
        button.type = 'button';
        button.value = i;
        let imgElem = document.createElement('img');
        imgElem.src = g_product.imageList[i];
        button.appendChild(imgElem);
        button.addEventListener('click', showGamingItemImage, false);
        button.onclick = "showGamingItemImage(" + i + ")";
        document.getElementById('product').getElementsByClassName('image')[0].getElementsByClassName('other')[0].appendChild(button);
    }
    document.getElementById('product').getElementsByClassName('detail')[0].getElementsByClassName('title')[0].innerHTML = g_product.name;
    document.getElementById('product').getElementsByClassName('detail')[0].getElementsByClassName('price')[0].innerHTML = g_product.price + "&nbsp;₫";
    document.getElementById('product').getElementsByClassName('detail')[0].getElementsByClassName('description')[0].innerHTML = g_product.description;
}

function showGamingItemImage(event) {
    let idx = event.currentTarget.value;
    document.getElementById('product').getElementsByClassName('image')[0].getElementsByClassName('main')[0].getElementsByTagName('img')[0].src = g_product.imageList[idx];
}