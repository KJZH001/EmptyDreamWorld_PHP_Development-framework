# 欢迎

感谢您选择空梦框架

本文档接下来将会带领您进行安装和部署，这可能会需要一些时间

# 环境要求

- PHP版本 >= 5.6 (需要file和mysqli组件的扩展，切无禁用函数)

- Mysql >= 5.2

- 推荐使用 Apache

- 框架目录授予 777 权限且框架运行在root权限下（非必须）

- 浏览器支持HTML5标准

准备好了吗？

# 安装

## 获取程序

您可以从下列方式中任选其一获取源代码

- 从Github仓库中克隆或者打包[推荐]

- 从Release中获取最新的构建版本[推荐]

- 从官方Q群的群文件中下载

- 从分流网盘中获取

- 使用Git工具从本仓库拉取更新[推荐]

## 构建底层运行环境

这一步请参考您的集成环境中关于新建网站的教程

如果有创建数据库选项，建议您不要选勾，稍后我们会手动进行数据库的创建

我们建议您在这一步一起安装PhpMyAdmin数据库管理软件，在稍后关于数据库的部分我们会用到

```
如果您选择使用使用 Git工具从本仓库拉取更新 的方式进行获取安装的的话
您可以切换到网站目录下使用以下命令

git init
git remote add github https://github.com/KJZH001/EdwFramework.git
git pull github master
```
