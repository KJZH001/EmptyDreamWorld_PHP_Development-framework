# 晓空EmptyDream World 空梦世界 PHP快速开发框架

一个可以辅助你PHP进行快速开发的PHP框架

## 简单的介绍

一个基于php的快速开发框架

由于前端强制未使用其他的框架，所以无需担心兼容性问题

全局伪静态，自带解析模块，让不让自定义目录的虚拟主机都见鬼去吧2333



来自作者的问候:这个可以算是我用php写的第一个大项目吧，也许写的很烂，希望大家不要喷QAQ

## 本框架的特点

1.全局伪静态，自带解析模块

2.CMS化+模块化设计，具有良好的扩展性

3.预先内置了插件接口，方便后期开发

4.预制数据库模块和登录注册，开放式接口，易于调用

5.内置MDUi官方主题（内置MDUI框架），内置基本站点内容，即开即用

6.内置可视化的后台管理（尚未完工），图形化的后台才是真谛！

7.还没想好

## 部署步骤

下载本框架最新的完整发行版本，上传至您的服务器任意目录中

完成服务器的解析（虽然本框架在一开始就考虑到了子目录的情况，但是还请尽量使用根目录），然后导入提供的数据库的数据

修改 global/global.php 中的配置内容（其他下属的程序可能也需要修改global.php才能正常运行）

到了此时您不出意外应当可以顺利的让框架正常的运行了

## 在生产环境中使用

完成了部署步骤以后，您应当进行权限方面的配置

以确保前端无法直接访问到后端的/website/和/system/目录来保证程序的安全

最后，目前这个框架还是处在于开发阶段，我们无法保证在运行时不会出现任何的意外

## 使用的开源/参考项目

MDUI前端框架

其他的更多来自于CSDN和博客园等地的代码地址会在贡献者名单中放出

但是出于时间限制和其他的方面上的原因，这里的名单可能并不完整，如果你发现在代码中使用到了您的代码片段，请联系我将您的名字加入

## 授权协议/许可

框架本体 MIT协议

依托于本框架的官方网站程序 GPL v3协议

### 追加开源协议要求

遵循本系列程序的开源协议，您可以随意的进行打包以及二次发布或者您也可以删除页面展现的元素中的所有和本程序有关的字符或图片等内容，

但是作为附加的许可要求，您必须在代码中至少保留本框架以及其他依托于本框架网站程序的作者署名（包括HTML中的注释内容），以及CONSOLE控制台输出的署名等内容

### 附加的许可

本项目遵循 反996许可证 1.0版 获取许可

除非遵守此许可证，否则您不得使用本项目，您可以在下面找到这个许可的副本

https://github.com/996icu/996.ICU/blob/master/LICENSE_CN

## 最后

因为这个框架中使用了大量的开源项目和其他的大佬的代码，我也从中学习到了很多，换句话也就是说这个框架是由大量的开源社区贡献者共同维护的（也许其中就有你），在这里感谢这些提供了开源代码的开发者们
