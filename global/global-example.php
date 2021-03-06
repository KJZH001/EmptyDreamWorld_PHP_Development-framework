<?php
/*
感谢您选择 空梦EdwFramework 开源php快速开发框架项目来建设您的网站
此处是声明全局变量和网站信息的地方
请务必遵守 知识共享署名-相同方式共享 4.0 协议 以及其他相关的开源协议
请尊重所有开发者和贡献者的开发成果，在不影响的情况下尽可能的保留这些注释
空梦世界 x 永恒计划 并不是属于一个人的项目，其著作权归全体开源社区贡献者所有

在大多数情况下，您只需要修改gloabl.php文件中的内容，而不是global-example.php

*
* 如果您需要修改只有在此处才有的配置项的话
* 我们强烈建议你将它复制粘贴到global.php中以后进行修改
* 否则可能会对后续使用造成相当大的麻烦！
*

此外如果您是采用Git进行本地克隆构建部署的话，还可以选择Git对global.php忽略本地追踪
因为在框架运行时global-example.php中的内容会被优先载入（尽管这会额外消耗一些资源）
所以您无需担心会因为配置文件缺失而产生Bug

开源协议 MOEWORLD LICENSE
*/


/*
此处声明网站的信息，用于前台展示，这里还请您务必保留我们的版权信息
如需修改特殊设置，所填写的布尔值请一律以小写 true 和 false 为准
Notice：此处的所有布尔值都是字符串！
*/

/*此处声明网站的所有标题*/

//网站的名称
$gb_name="晓空EmptyDream World开发框架实验站";
//网站的标题
$gb_title="晓空EmptyDream World框架";
//网站的副标题
$gb_title_2="EmptyDream World";
//为小屏设备使用的网站标题
$gb_title_mobile="晓空EmptyDream";


/*此处声明网站的版本信息*/

//版本号
/*此版本号仅用于检查更新和版本判断
不会在前台显示，如果没有必要请不要进行更改*/
$gb_version="1.0.0";
//版权及连接
$gb_copyright="Powered by Rcraft TWIE., Inc. 2012-2020 Base on 晓空EmptyDream World开发框架";

/*此处声明网站的基本配置*/

//默认的主页路径
$gb_indexFile="/ExWaifu";

//启用从CDN载入部分静态的大文件
/*
启用此项可以将部分部分文件从cdn载入，以减缓服务器自身压力
在较慢的国外主机上可能会起到较好的效果，不过这也可能会导致在某些时候速度更慢
或者产生载入的文件被拦截的情况，请自行考虑是否开启
请注意，我们不能保证所托管的cdn提供商一定可靠
如果您目前仅在本地调试的情况下运行，请保持关闭状态
这可以让框架直接从本地调用数据从而节省时间
*/
$gb_cdn="false";

/*
此处填写数据库的连接信息，仅支持MYSQL数据库，
如果您不知道您的数据库的连接信息，请与您的服务器提供商取得联系
在EP面板上有概率会发生服数据库拒绝连接的bug，如若出现请删去地址中的端口号
*/

  //数据库连接地址
  $gb_servername = "localhost:3306";
  //数据库的用账户
  $gb_username = "root";
  //数据库的密码
  $gb_password = "root";
  //您要使用的数据库前缀
  $gb_sqlprefix="edw_";
  //您要使用的数据表的前缀
  $gb_formprefix="edw_";



/*
好了，基本的配置就到这里为止，请不要继续编辑下去了
此处为配置网站的特殊设置
感谢您的使用，到这里您已经可以正常的使用本框架了
下面的参数请不要随意更改，除非您很清楚您在做什么
否则可能会带来一些意外的情况发生
*/

/* 被移除的配置选项*/

/*
这些选项在框架的开发中可能出于一些原因被废除了
但是出于向上兼容的原则，他们被保留于此
一般来说您无需修改，除非您需要用到一些较为老旧支持的程序并且需要修改他们
*/

/*
从JsDelivr加载文件（如果可用）
需要和 $gb_cdn 同时启用才会生效
当然，要是只有jsdelivr上放了这玩意那就不会管这项配置了233
*/
$gb_jsdelivr="false";

/* 用于开发的测试性配置选项 */

/*
调试模式
如果开启可能会在正常使用时提示Notice等报错，推荐仅在出现问题或开发调试时开启
*/
//调试模式开关
$gb_debug="false";
/*
友好报错页面
仅在调试模式关闭的情况下才会在致命错误的情况下展现
这项产生设置的是是否展示详细报错
如果开启，会在友好报错页面显示出更为详细的内容
例如产生报错的行数和报错的php文件的地址等
为了方便寻找报错原因，默认为开启
如果您处于安全考虑可以将其设置为关闭
*/
$gb_debugMessageAll="false";



/*关闭网站模式[请小心！]
如果打开此项，除事先登录好的管理员账户外
任何人访问前台都将只会看到站点维护的界面，并且将无法登录(如果开放Api接口的登录除外)
*/
//关闭网站
$gb_closeWeb="false";
//关闭接口
//谨慎使用！这可能会带来无法估计的后果！
$gb_closeApi="false";

/*
单数据库模式
注意：这是一个实验性功能，并不稳定
此模式仅用于不支持创建多数据库的主机使用，而且极易出现bug
如果您并非此情况，请勿启用
此外，第三方支持程序和部分官方程序中的内容可能不会遵循此模式

提示：如果您曾经部署过 [旧版]晓空Api 的相关程序
您可以在此处设置与旧版的相同的数据库名称
这可以让框架中移植但未完全适配的旧版程序直接读取原数据库的数据
*/

$gb_sqlonly="false";

//单个数据库的数据库名称
$gb_sqlname="xksc_api";

/*
启用多站点模式（使用域名定向对应站点）
注意：这是一个实验性功能，并不稳定
开启后可以使用二级域名定向到指定的站点
这对于支持泛解析的主机或者空间来说或许是个不错的选择
但是较为容易出现bug，并不建议使用
此外，您只能在调试模式下看到指向目标，重定向无法生效
*/

$gb_domianRedirect="false";

/*
框架部署的位置，这项通常不用更改，请保持默认
如果您安装在子目录的话，请在此处设置
如 http://233.com/123/index.php/fid_sid 
请填写 /123/index.php/
如果您为您的服务器部署了伪静态的话
通常也可以在此处进行重定向的伪静态设置
*/
$gb_globalFile="/index.php/";

/*
跨域调用模式
这会可能减少一些安全性，不过您在二次开发的过程中可能会用到
启用后会允许所有域名对本框架中的所有内容进行跨域使用
此外，开启后会同时开放Openid的跨站点调用[这是双向的]
默认为开启状态，请按照需求选择开启
*/
$gb_cros="true";


?>