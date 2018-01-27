# Material 原质

>Tips: 本主题为C.R.S'S Blog自用款, 一切修改只会按我个人喜好来.
>如果你只是在找一个typecho的material主题, 请前往 https://github.com/manyang901/material 或 https://github.com/idawnlight/typecho-theme-material 或 https://github.com/viosey/typecho-theme-material (行吧这串url看着真壮观)

## Contents 目录

- [General 概括](#general-概括)
- [Feature 特性](#feature-特性)
- [Demo 演示](#demo-演示)
- [Setup 设置](#setup-设置)
- [Preview 预览](#preview-预览)
- [Config 自定义功能](#config-自定义功能)
- [Contributing 贡献](#contributing-贡献)
- [License 许可证](#license-许可证)

## General 概括

- Modify 修改: WSKaCrs
- Author 作者：Manyang901
- Original Author 原作者：Viosey
- Version 版本：1.0.0
- Compatibility 兼容：PHP 5.4+, MySQL, Typecho 1.0、1.1（其余数据库未测试）
- [![Gitter](https://img.shields.io/gitter/room/material-theme/typecho.svg?style=flat-square)](https://gitter.im/material-theme/typecho?utm_source=share-link&utm_medium=link&utm_campaign=share-link)

## Feature 特性

在https://github.com/manyang901/material 基础上增删内容.

目前的改动(由于水平有限, 并不会作太大改动):
1. 去除所有第三方评论选项, 只保留原生评论
2. 删除又拍云logo和相关设置
3. 增加reCAPTCHA插件支持
4. sidebar内容精简 & 去除难看的方块/圆形图标
5. 修改主页右侧icon
6. 修改footer信息为"Theme by Materialw"
7. 去除无用图片 / 内容
8. 去除"分享到新浪微博"选项

预计更新:
0. 增加自行配置的404页面
0. 使用原有素材增加更多底部图标选项
0. 还没想好.

## Demo 演示

https://wska.mainstars.net 注意: 实际使用应该会与这个站有差别(主要是图片方面).

## Setup 设置

- [Github ](https://github.com/wskacrs/typecho-materialw/releases)，点击"Download ZIP"下载，解压后将文件夹改名为 "Material"(或其他) 后上传到 `/usr/themes`，并启用主题。
- 下载最新文件 然后覆盖原文件即可更新主题, 部分新增加的功能需要到后台开启才会生效 (建议更新后先切换为其他主题, 再切换回该主题)。否则有可能会导致莫名其妙的 bug...
- 在 "设置外观" 中打造一个属于你自己的博客
- 关于文章缩略图
	- 文章缩略图为文章内第一张图片。
	- 缩略图支持 Markdown 格式, HTML 格式以及附件形式, Markdown 格式为 `![图片描述](图片链接)` 。
	- 如果想要自定义某篇文章的缩略图, 但是不想让该图片在文章中出现, 则可以使用该格式 `<img src="图片链接" width="0px" /> ` 。
- 首页文章概览默认最大输出80个字符, 可手动添加截断符 `<!-- more -->` 控制输出。

## Preview 预览

暂不提供图片预览.

## Config 可选功能

https://github.com/inkedawn/Typecho-Plugin-Uptime 插件- 页脚显示运行时间<br>
https://github.com/D-Bood/reCAPTCHA 插件- 使用reCAPTCHA进行评论验证<br>
https://github.com/manyang901/TeStat/archive/1.0.0.zip 插件- 文章内点赞 首页文章信息与浏览次数统计<br>
https://github.com/viosey/typecho-links-material 插件- 友情链接<br>

## Contributing 贡献

我不知道该写什么好了.

## License 许可证

Open sourced under the GPL v3.0 license.

根据 GPL V3.0 许可证开源。

<!--stackedit_data:
eyJoaXN0b3J5IjpbNDczOTg1OTg5XX0=
-->
