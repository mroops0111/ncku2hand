UPDATE items SET item_category = NULL;
UPDATE items SET item_category = IFNULL(CONCAT(item_category, ',cloth'), 'cloth')
    WHERE item_message LIKE '%衫%'
    OR item_message LIKE '%外套%'
    OR item_message LIKE '%shirt%'
    OR item_message LIKE '%衣%'
    OR item_message LIKE '%背心%'
    OR item_message LIKE '%小可愛%'
    OR item_message LIKE '%帽T%'
    OR item_message LIKE '%套裝%'
    OR item_message LIKE '%洋裝%'
    OR item_message LIKE '%西裝%';
UPDATE items SET item_category = IFNULL(CONCAT(item_category, ',comestic'), 'comestic')
    WHERE item_message LIKE '%霜%'
    OR item_message LIKE '%CC%'
    OR item_message LIKE '%BB%'
    OR item_message LIKE '%SPF%'
    OR item_message LIKE '%精華筆%'
    OR item_message LIKE '%保濕%'
    OR item_message LIKE '%美白%'
    OR item_message LIKE '%面膜%'
    OR item_message LIKE '%凍膜%'
    OR item_message LIKE '%指甲油%'
    OR item_message LIKE '%洗顏%'
    OR item_message LIKE '%噴霧%';
UPDATE items SET item_category = IFNULL(CONCAT(item_category, ',elec'), 'elec')
    WHERE item_message LIKE '華碩'
    OR item_message LIKE 'PS'
    OR item_message LIKE '宏基'
    OR item_message LIKE '小米'
    OR item_message LIKE 'Asus'
    OR item_message LIKE 'ASUS'
    OR item_message LIKE 'GIGABYTE'
    OR item_message LIKE 'Sony'
    OR item_message LIKE 'NOKIA'
    OR item_message LIKE 'Sansmung'
    OR item_message LIKE '相機'
    OR item_message LIKE '手機'
    OR item_message LIKE '筆電'
    OR item_message LIKE 'iphone'
    OR item_message LIKE '4s'
    OR item_message LIKE '5s'
    OR item_message LIKE 'wifi'
    OR item_message LIKE 'mp3'
    OR item_message LIKE 'Iphone';
UPDATE items SET item_category = IFNULL(CONCAT(item_category, ',pant'), 'pant')
    WHERE item_message LIKE '褲'
    OR item_message LIKE '裙';
UPDATE items SET item_category = IFNULL(CONCAT(item_category, ',ticket'), 'ticket')
    WHERE item_message LIKE '券'
    OR item_message LIKE '票'
    OR item_message LIKE '點數'
    OR item_message LIKE '卷';
UPDATE items SET item_category = IFNULL(CONCAT(item_category, ',shoes'), 'shoes')
    WHERE item_message LIKE '靴'
    OR item_message LIKE '鞋'
    OR item_message LIKE '夾腳拖';
UPDATE items SET item_category = IFNULL(CONCAT(item_category, ',bag'), 'bag')
    WHERE item_message LIKE '包'
    OR item_message LIKE '肩背'
    OR item_message LIKE '後背'
    OR item_message LIKE '袋';
UPDATE items SET item_category = IFNULL(CONCAT(item_category, ',book'), 'book')
    WHERE item_message LIKE '書'
    OR item_message LIKE '課本'
    OR item_message LIKE '小說'
    OR item_message LIKE '多益'
    OR item_message LIKE '學';
UPDATE items SET item_category = IFNULL(CONCAT(item_category, ',life'), 'life')
    WHERE item_message LIKE '櫃'
    OR item_message LIKE '寢'
    OR item_message LIKE '瓶'
    OR item_message LIKE '乳'
    OR item_message LIKE '潤絲'
    OR item_message LIKE '家電'
    OR item_message LIKE '杯'
    OR item_message LIKE '打洞機'
    OR item_message LIKE '鏡子'
    OR item_message LIKE '眼鏡'
    OR item_message LIKE '桌'
    OR item_message LIKE '椅';