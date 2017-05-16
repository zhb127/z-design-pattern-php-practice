<?php

namespace Iterator;

include dirname(__DIR__) . '/autoload.php';

$channels = array(
    '中央卫视',
    '浙江卫视',
    '山东卫视',
    '湖南卫视',
    '电影频道',
    '体育频道',
);

$ci = new ChannelIterator($channels);

echo '电视频道正向：', PHP_EOL;
while ($ci->valid()) {
    echo $ci->current(), PHP_EOL;
    $ci->next();
}

$cri = new ChannelReverseIterator($channels);
echo '电视频道反向：', PHP_EOL;
while ($cri->valid()) {
    echo $cri->current(), PHP_EOL;
    $cri->next();
}
