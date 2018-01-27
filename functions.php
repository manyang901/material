<?php

//Appearance setup
function themeConfig($form)
{
    echo '<p style="font-size:14px;" id="use-intro">
        <span style="display: block;
    margin-bottom: 10px;
    margin-top: 10px;
    font-size: 16px;">不感谢你使用 Material 主题</span>
        <span style="margin-bottom:10px;display:block">请关注 <a href="https://github.com/wskacrs/material" target="_blank" style="color:#3384da;font-weight:bold;text-decoration:underline">Github-Material</a> 以获得<span style="color:#df3827;font-weight:bold;">最新版本支持</span></span>
        </a> &nbsp;
        </p>';

    $switch = new Typecho_Widget_Helper_Form_Element_Checkbox('switch',
        array(
            'SmoothScroll' => _t('平滑滚动效果'),
            'ShowLoadingLine' => _t('顶部 loading 加载进度条效果'),
            'PJAX' => _t('使用 pjax'),
            'atargetblank' => _t('链接以新标签页形式打开'),
            'Pangu' => _t('引用 Pangu.js 实现中英文间自动添加空格'),
        ),

        //Default choose
        array('SmoothScroll','ShowLoadingLine','PJAX','Pangu'), _t('功能开关')
    );
    $form->addInput($switch->multiMode());

    $analysis = new Typecho_Widget_Helper_Form_Element_Textarea('analysis', null, null, _t('网站统计代码 + 自定义字体源'), _t('填入如 Google Analysis 的第三方统计代码或字体源'));
    $form->addInput($analysis);

    $loadingcolor = new Typecho_Widget_Helper_Form_Element_Text('loadingcolor', null, null, _t('loading 加载进度条颜色'), _t('打开 "功能开关" 中的 loading 加载进度条后, 在这里设置进度条的颜色, 默认为蓝色'));
    $form->addInput($loadingcolor);

    $loadingbuffer = new Typecho_Widget_Helper_Form_Element_Text('loadingbuffer', null, _t('800'), _t('loading 加载缓冲时间'), _t('loading 加载进度条的缓冲时间, 单位为毫秒 ms, 默认为 800ms'));
    $form->addInput($loadingbuffer);

    $BGtype = new Typecho_Widget_Helper_Form_Element_Radio('BGtype',
        array(
            '0' => _t('纯色背景 &emsp;'),
            '1' => _t('图片背景 &emsp;'),
            '2' => _t('渐变背景 &emsp;')
        ),

        //Default choose
        '1', _t('背景设置'), _t("选择背景方案, 对应填写下方的 '<b>背景颜色 / 图片</b>' 或选择 '<b>渐变样式</b>', 这里默认使用图片背景.")
    );
    $form->addInput($BGtype);

    $bgcolor = new Typecho_Widget_Helper_Form_Element_Text('bgcolor', null, null, _t('背景颜色 / 图片'), _t('背景设置如果选择纯色背景, 这里就填写颜色代码; <br />背景设置如果选择图片背景, 这里就填写图片地址;<br />
        不填写则默认显示 #F5F5F5 或主题文件夹下的 /img/bg.jpg'));
    $form->addInput($bgcolor);

    $GradientType = new Typecho_Widget_Helper_Form_Element_Radio('GradientType',
        array(
            '0' => _t('Aerinite &emsp;'),
            '1' => _t('Ethereal &emsp;'),
            '2' => _t('Patrichor <br />'),
            '3' => _t('Komorebi &emsp;'),
            '4' => _t('Crepuscular &emsp;'),
            '5' => _t('Autumn <br />'),
            '6' => _t('Shore &emsp;'),
            '7' => _t('Horizon &emsp;'),
            '8' => _t('Green Beach <br />'),
            '9' => _t('Virgin <br />'),
        ),

        '0', _t('渐变样式'), _t("背景设置如果选择渐变背景, 在这里选择想要的渐变样式.")
    );
    $form->addInput($GradientType);

    $ThumbnailOption = new Typecho_Widget_Helper_Form_Element_Radio('ThumbnailOption',
        array(
            '1' => _t('显示文章内第一张图片 (若无图片则显示随机图片)<br />'),
            '2' => _t('只显示纯色 &emsp;'),
            '3' => _t('只显示随机图片'),
        ),

        //Default choose
        '1', _t('缩略图显示效果')
    );
    $form->addInput($ThumbnailOption);

    $TitleColor = new Typecho_Widget_Helper_Form_Element_Text('TitleColor', null, _t('#FFF'), _t('缩略图为纯色时的颜色'), _t('填入颜色代码'));
    $form->addInput($TitleColor);

    $RandomPicAmnt = new Typecho_Widget_Helper_Form_Element_Text('RandomPicAmnt', null, _t('27'), _t('随机缩略图数量'), _t('img/random 图片的数量'));
    $form->addInput($RandomPicAmnt);

    $commentis = new Typecho_Widget_Helper_Form_Element_Radio('commentis',
        array(
            '0' => _t('使用原生评论 &emsp;'),
        ),

        '0', _t('文章评论'), _t("默认使用原生评论,如使用其他评论，请自己添加相应配置项")
    );
    $form->addInput($commentis);

    $CDNURL = new Typecho_Widget_Helper_Form_Element_Text('CDNURL', null, null, _t('CDN 地址'), _t("
        新建一个'MaterialCDN' 文件夹, 把'css, fonts, img, js' 文件夹放进去, 然后把'MaterialCDN' 上传到到你的 CDN 储存空间根目录下<br />
        填入你的 CDN 地址, 如 <b>http://bucket.b0.upaiyun.com</b>"));
    $form->addInput($CDNURL);

    $langis = new Typecho_Widget_Helper_Form_Element_Radio('langis',
        array(
            '0' => _t('English <br />'),
            '1' => _t('简体中文 <br />'),
            '2' => _t('繁体中文 <br />')
        ),

        '0', _t('界面语言设置'), _t("默认使用英文")
    );
    $form->addInput($langis);

    $Status = new Typecho_Widget_Helper_Form_Element_Text('Status', null, null, 'Status Page', 'Status page link , you can generate yours by uptimerobot');
    $form->addInput($Status);

    $sticky_1 = new Typecho_Widget_Helper_Form_Element_Text('sticky_1', null, null, '置顶文章 1 ID', null);
    $form->addInput($sticky_1->addRule('isInteger', '请填入数字'));

    $sticky_2 = new Typecho_Widget_Helper_Form_Element_Text('sticky_2', null, null, '置顶文章 2 ID', '填写对应主题的 id 即可使文章标题在首页置顶显示');
    $form->addInput($sticky_2->addRule('isInteger', '请填入数字'));

    $ThemeColor = new Typecho_Widget_Helper_Form_Element_Text('ThemeColor', null, _t('#039BE5'), _t('主题颜色'), null);
    $form->addInput($ThemeColor);

    $alinkcolor = new Typecho_Widget_Helper_Form_Element_Text('alinkcolor', null, _t('#039BE5'), _t('超链接颜色'), null);
    $form->addInput($alinkcolor);

    $ChromeThemeColor = new Typecho_Widget_Helper_Form_Element_Text('ChromeThemeColor', null, _t('#039BE5'), _t('Android Chrome 地址栏颜色'), null);
    $form->addInput($ChromeThemeColor);

    $avatarURL = new Typecho_Widget_Helper_Form_Element_Text('avatarURL', null, null, '个人头像地址', '填入头像的地址, 如不填写则使用默认头像');
    $form->addInput($avatarURL);

    $favicon = new Typecho_Widget_Helper_Form_Element_Text('favicon', null, null, _t('favicon 地址'), _t('填入博客 favicon 的地址, 默认则不显示'));
    $form->addInput($favicon);

    $MainPic = new Typecho_Widget_Helper_Form_Element_Text('MainPic', null, null, _t('首页顶部左边的图片地址'), _t('填入主页最大的图片地址, 图片显示在首页顶部左边位置'));
    $form->addInput($MainPic);

    $logo = new Typecho_Widget_Helper_Form_Element_Text('logo', null, null, _t('首页顶部右边 LOGO 图片地址'), _t('填入 LOGO 地址, 图片将显示于首页右上角板块'));
    $form->addInput($logo);

    $MainPicLink = new Typecho_Widget_Helper_Form_Element_Text('MainPicLink', null, _t('#'), _t('首页顶部左边图片的点击跳转地址'), _t('点击首页大图后, 想要跳转网页的地址'));
    $form->addInput($MainPicLink);

    $logoLink = new Typecho_Widget_Helper_Form_Element_Text('logoLink', null, null, _t('首页顶部右边 LOGO 的点击跳转地址'), _t('点击 LOGO 后, 想要跳转网页的地址'));
    $form->addInput($logoLink);

    $slogan = new Typecho_Widget_Helper_Form_Element_Text('slogan', null, _t('Nice to meet you'), _t('首页顶部左边的标语'), _t('填入自定义文字, 显示于首页顶部左边的图片上'));
    $form->addInput($slogan);

    $footersns = new Typecho_Widget_Helper_Form_Element_Checkbox('footersns',
        array(
            'ShowTwitter' => _t('显示 Twitter 图标 <br>'),
            'ShowFacebook' => _t('显示 Facebook 图标 <br>'),
            'ShowGithub' => _t('显示 Github 图标 <br>'),
            'ShowTelegram' => _t('显示 Telegram 图标 <br>'),
            'ShowLinkedin' => _t('显示 Linkedin 图标 <br>'),
        ),

        array('ShowTwitter','ShowFacebook','ShowGithub'), _t('页脚 SNS 图标按钮显示设置'), _t('开启后, 按钮显示于博客页脚位置')
    );
    $form->addInput($footersns);

    $TwitterURL = new Typecho_Widget_Helper_Form_Element_Text('TwitterURL', null, _t('NULL'), _t('Twitter 地址'), null);
    $form->addInput($TwitterURL);

    $FacebookURL = new Typecho_Widget_Helper_Form_Element_Text('FacebookURL', null, _t('NULL'), _t('Facebook 地址'), null);
    $form->addInput($FacebookURL);

    $GithubURL = new Typecho_Widget_Helper_Form_Element_Text('GithubURL', null, null, _t('Github 地址'), null);
    $form->addInput($GithubURL);

    $TelegramURL = new Typecho_Widget_Helper_Form_Element_Text('TelegramURL', null, null, _t('Telegram 地址'), null);
    $form->addInput($TelegramURL);

    $LinkedinURL = new Typecho_Widget_Helper_Form_Element_Text('LinkedinURL', null, null, _t('Linkedin 地址'), null);
    $form->addInput($LinkedinURL);

    $CustomFonts = new Typecho_Widget_Helper_Form_Element_Text('CustomFonts', null, _t("Roboto, 'Helvetica Neue', Helvetica, 'PingFang SC', 'Hiragino Sans GB', 'Microsoft YaHei', '微软雅黑', Arial, sans-serif"), _t('自定义字体'), null);
    $form->addInput($CustomFonts);

    $RobotoSource = new Typecho_Widget_Helper_Form_Element_Radio('RobotoSource',
        array(
            '0' => _t('调用 Google fonts (使用 https://lug.ustc.edu.cn 中科大 https 镜像加速)<br />'),
            '1' => _t('调用主题文件夹自带的 Roboto &emsp;'),
            '2' => _t('使用自定义字体源 (在上方"网站统计代码 + 自定义字体源"填入)')
        ),

        '1', _t('Roboto 字体使用来源'), null);
    $form->addInput($RobotoSource);
}

//Homepage thumbnail
function showThumbnail($widget)
{
    //If article no include picture, display random default picture
    $rand = rand(1, $widget->widget('Widget_Options')->RandomPicAmnt); //Random number

    if (!empty($widget->widget('Widget_Options')->CDNURL)) {
        $random = $widget->widget('Widget_Options')->CDNURL. '/MaterialCDN/img/random/material-' . $rand . '.png';
    } else {
        $random = $widget->widget('Widget_Options')->themeUrl . '/img/random/material-' . $rand . '.png';
    }//Random picture path


    // If only one random default picture, delete the following "//"
    //$random = $widget->widget('Widget_Options')->themeUrl . '/img/random.jpg';

    $attach = $widget->attachments(1)->attachment;
    $pattern = '/\<img.*?src\=\"(.*?)\"[^>]*>/i';

    if (preg_match_all($pattern, $widget->content, $thumbUrl)) {
        echo $thumbUrl[1][0];
    } elseif ($attach->isImage) {
        echo $attach->url;
    } else {
        echo $random;
    }
}

//Random thumbnail
function randomThumbnail($widget)
{
    //If article no include picture, display random default picture
    $rand = rand(1, $widget->widget('Widget_Options')->RandomPicAmnt); //Random number

    if (!empty($widget->widget('Widget_Options')->CDNURL)) {
        $random = $widget->widget('Widget_Options')->CDNURL. '/MaterialCDN/img/random/material-' . $rand . '.png';
    } else {
        $random = $widget->widget('Widget_Options')->themeUrl . '/img/random/material-' . $rand . '.png';
    }//Random picture path

    echo $random;
}

function is_pjax()
{
    return array_key_exists('HTTP_X_PJAX', $_SERVER) && $_SERVER['HTTP_X_PJAX'];
}

//Compress the code
//Using <!--<nocompress>--><!--</nocompress>--> for compatiblity
function compressHtml($html_source) {
    $chunks = preg_split('/(<!--<nocompress>-->.*?<!--<\/nocompress>-->|<nocompress>.*?<\/nocompress>|<pre.*?\/pre>|<textarea.*?\/textarea>|<script.*?\/script>)/msi', $html_source, -1, PREG_SPLIT_DELIM_CAPTURE);
    $compress = '';
    foreach ($chunks as $c) {
        if (strtolower(substr($c, 0, 19)) == '<!--<nocompress>-->') {
            $c = substr($c, 19, strlen($c) - 19 - 20);
            $compress .= $c;
            continue;
        } else if (strtolower(substr($c, 0, 12)) == '<nocompress>') {
            $c = substr($c, 12, strlen($c) - 12 - 13);
            $compress .= $c;
            continue;
        } else if (strtolower(substr($c, 0, 4)) == '<pre' || strtolower(substr($c, 0, 9)) == '<textarea') {
            $compress .= $c;
            continue;
        } else if (strtolower(substr($c, 0, 7)) == '<script' && strpos($c, '//') != false && (strpos($c, "\r") !== false || strpos($c, "\n") !== false)) {
            $tmps = preg_split('/(\r|\n)/ms', $c, -1, PREG_SPLIT_NO_EMPTY);
            $c = '';
            foreach ($tmps as $tmp) {
                if (strpos($tmp, '//') !== false) {
                    if (substr(trim($tmp), 0, 2) == '//') {
                        continue;
                    }
                    $chars = preg_split('//', $tmp, -1, PREG_SPLIT_NO_EMPTY);
                    $is_quot = $is_apos = false;
                    foreach ($chars as $key => $char) {
                        if ($char == '"' && $chars[$key + 1] != '\\' && !$is_apos) {
                            $is_quot = !$is_quot;
                        } else if ($char == '\'' && $chars[$key] != '\\' && !$is_quot) {
                            $is_apos = !$is_apos;
                        } else if ($char == '/' && $chars[$key + 1] == '/' && !$is_quot && !$is_apos) {
                            $tmp = substr($tmp, 0, $key);
                            break;
                        }
                    }
                }
                $c .= $tmp;
            }
        }
        $c = preg_replace('/[\\n\\r\\t]+/', ' ', $c);
        $c = preg_replace('/\\s{2,}/', ' ', $c);
        $c = preg_replace('/>\\s</', '> <', $c);
        $c = preg_replace('/\\/\\*.*?\\*\\//i', '', $c);
        $c = preg_replace('/<!--[^!]*-->/', '', $c);
        $compress .= $c;
    }
    return $compress;
}

